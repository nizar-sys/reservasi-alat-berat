<?php

namespace App\Http\Controllers;

use App\Models\HeavyEquipment;
use App\Http\Requests\RequestStoreOrUpdateHeavyEquipment;

class HeavyEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heavyEquipments = HeavyEquipment::orderByDesc('id')->get();

        return view('dashboard.heavy_equipments.index', compact('heavyEquipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.heavy_equipments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateHeavyEquipment $request)
    {
        $validated = $request->validated() + [
            'created_at' => now(),
        ];

        if($request->hasFile('image')){
            $fileName = time() . '.' . $request->image->extension();
            $validated['image'] = $fileName;

            // move file
            $request->image->move(public_path('uploads/images'), $fileName);
        }

        HeavyEquipment::create($validated);

        return redirect(route('heavy-equipments.index'))->with('success', 'Data alat berat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return HeavyEquipment::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $heavyEquipment = HeavyEquipment::findOrFail($id);

        return view('dashboard.heavy_equipments.edit', compact('heavyEquipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateHeavyEquipment $request, $id)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];

        $heavyEquipment = HeavyEquipment::findOrFail($id);

        $validated['image'] = $heavyEquipment->image;

        if($request->hasFile('image')){
            $fileName = time() . '.' . $request->image->extension();
            $validated['image'] = $fileName;

            // move file
            $request->image->move(public_path('uploads/images'), $fileName);

            // delete old file
            $oldPath = public_path('/uploads/images/'.$heavyEquipment->image);
            if(file_exists($oldPath) && $heavyEquipment->image != 'image.png'){
                unlink($oldPath);
            }
        }

        $heavyEquipment->update($validated);

        return redirect(route('heavy-equipments.index'))->with('success', 'Data alat berat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $heavyEquipment = HeavyEquipment::findOrFail($id);
        // delete old file
        $oldPath = public_path('/uploads/images/'.$heavyEquipment->image);
        if(file_exists($oldPath) && $heavyEquipment->image != 'image.png'){
            unlink($oldPath);
        }
        $heavyEquipment->delete();

        return redirect(route('heavy-equipments.index'))->with('success', 'Data alat berat berhasil dihapus.');
    }
}
