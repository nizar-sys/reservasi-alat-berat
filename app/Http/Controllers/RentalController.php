<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Http\Requests\RequestStoreOrUpdateRental;
use App\Models\HeavyEquipment;
use App\Models\User;
use Carbon\Carbon;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = Rental::orderByDesc('id')->get();

        return view('dashboard.rentals.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $heavyEquipments = HeavyEquipment::orderByDesc('id')->get(['id', 'name']);
        $customers = User::customer()->orderByDesc('id')->get(['id', 'name']);

        return view('dashboard.rentals.create', compact('heavyEquipments', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateRental $request)
    {
        $validated = $request->validated() + [
            'created_at' => now(),
        ];

        if($request->hasFile('proof_of_payment')){
            $fileName = time() . '.' . $request->proof_of_payment->extension();
            $validated['proof_of_payment'] = $fileName;

            // move file
            $request->proof_of_payment->move(public_path('uploads/images'), $fileName);
        }

        Rental::create($validated);

        if($request->filled('role')){
            return redirect()->back()->with('success', 'Berhasil reservasi. Silahkan melakukan pembayaran.');
        }

        return redirect(route('rentals.index'))->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Rental::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        $heavyEquipments = HeavyEquipment::orderByDesc('id')->get(['id', 'name']);
        $customers = User::customer()->orderByDesc('id')->get(['id', 'name']);

        return view('dashboard.rentals.edit', compact('rental', 'heavyEquipments', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateRental $request, $id)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];

        $rental = Rental::findOrFail($id);

        $validated['proof_of_payment'] = $rental->proof_of_payment;

        if($request->hasFile('proof_of_payment')){
            $fileName = time() . '.' . $request->proof_of_payment->extension();
            $validated['proof_of_payment'] = $fileName;

            // move file
            $request->proof_of_payment->move(public_path('uploads/images'), $fileName);

            // delete old file
            $oldPath = public_path('/uploads/images/'.$rental->proof_of_payment);
            if($rental->proof_of_payment && file_exists($oldPath) && $rental->proof_of_payment != 'proof_of_payment.png'){
                unlink($oldPath);
            }
        }

        if($request->has('status')){
            $validated['status'] = $request->status;
        }

        $rental->update($validated);

        if($request->filled('role')){
            return redirect()->back()->with('success', 'Pembayaran berhasil. Silahkan tunggu konfirmasi dari admin.');
        }

        return redirect(route('rentals.index'))->with('success', 'Data transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        // delete old file
        $oldPath = public_path('/uploads/images/'.$rental->proof_of_payment);
        if($rental->proof_of_payment && file_exists($oldPath) && $rental->proof_of_payment != 'proof_of_payment.png'){
            unlink($oldPath);
        }
        $rental->delete();

        return redirect(route('rentals.index'))->with('success', 'Data transaksi berhasil dihapus.');
    }
}
