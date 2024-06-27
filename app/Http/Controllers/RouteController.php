<?php

namespace App\Http\Controllers;

use App\Models\HeavyEquipment;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function dashboard()
    {
        $data = [
            'count_user' => User::count(),
            'count_equipment' => HeavyEquipment::count(),
            'count_transaction' => Rental::count(),
        ];

        return view('dashboard.index', compact('data'));
    }

    public function home()
    {
        return view('frontend.index');
    }

    public function equipmentList()
    {
        $heavyEquipments = HeavyEquipment::query();
        $heavyEquipments = $heavyEquipments->paginate(9);

        return view('frontend.equipment_list', compact('heavyEquipments'));
    }

    public function equipmentDetail($id)
    {
        if(!Auth::check()) return redirect()->back()->with('error', 'Anda harus login terlebih dahulu');

        $equipment = HeavyEquipment::find($id);
        $user = Auth::user();

        return view('frontend.equipment_detail', compact('equipment', 'user'));
    }

    public function transactionList()
    {
        if(!Auth::check()) return redirect()->back()->with('error', 'Anda harus login terlebih dahulu');

        $user = Auth::user();
        $rentals = Rental::where('customer_id', $user->id)->get();

        return view('frontend.transaction_list', compact('rentals'));
    }
}
