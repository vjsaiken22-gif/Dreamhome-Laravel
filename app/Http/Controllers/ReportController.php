<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    public function index()
    {

        return view('reports.reports', [
            'role' => session('role')
        ]);

    }

    public function lease()
    {

        $leases = DB::table('lease')
            ->orderBy('lease_no', 'ASC')
            ->get();

        return view('reports.lease-report', [

            'leases' => $leases,
            'role' => session('role')

        ]);

    }

    public function payment()
    {

        $payments = DB::table('payment')
            ->orderBy('payment_id', 'DESC')
            ->get();

        $totalRevenue = DB::table('payment')
            ->sum('amount');

        return view('reports.payment-report', [

            'payments' => $payments,
            'totalRevenue' => $totalRevenue,
            'role' => session('role')

        ]);

    }

    public function property()
    {

        $properties = DB::table('property')
            ->orderBy('property_no', 'ASC')
            ->get();

        return view('reports.property-report', [

            'properties' => $properties,
            'role' => session('role')

        ]);

    }

    public function renter()
    {

        $renters = DB::table('renter')
            ->orderBy('renter_no', 'ASC')
            ->get();

        return view('reports.renter-report', [

            'renters' => $renters,
            'role' => session('role')

        ]);

    }

    public function staff()
    {

        $staffs = DB::table('staff')
            ->orderBy('staff_no', 'ASC')
            ->get();

        return view('reports.staff-report', [

            'staffs' => $staffs,
            'role' => session('role')

        ]);

    }

}
