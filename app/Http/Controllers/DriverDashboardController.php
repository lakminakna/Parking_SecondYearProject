<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DriverDashboardController extends Controller
{
     public function index()
    {
        $parkingslots = DB::table('parking_spaces')->get();
        $vehicle = DB::table('drivervehicles')->get();
        return view('users.driver.dashboard',['parkingslots' => $parkingslots,'vehicle' => $vehicle]);
    }

    public function searchbylocation(Request $request)
    {
        $location = $request->input('location');
        $parkingslots = DB::table('parking_spaces')->where('address', $location)->get();
        $vehicle = DB::table('drivervehicles')->get();

        return view('users.driver.dashboard',['parkingslots'=> $parkingslots,'vehicle' => $vehicle]);
    }

    public function searchbyType(Request $request)
    {
        $type = $request->input('type');
        $parkingslots = DB::table('parking_spaces')->where('type', $type)->get();
        $vehicle = DB::table('drivervehicles')->get();

        return view('users.driver.dashboard',['parkingslots'=> $parkingslots,'vehicle' => $vehicle]);
    }
}
