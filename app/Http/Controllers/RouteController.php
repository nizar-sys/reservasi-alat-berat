<?php

namespace App\Http\Controllers;

use App\Models\HeavyEquipment;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('frontend.equipment_list');
    }

    public function equipmentDetail($id)
    {
        $equipment = HeavyEquipment::find($id);

        return view('frontend.equipment_detail', compact('equipment'));
    }
}
