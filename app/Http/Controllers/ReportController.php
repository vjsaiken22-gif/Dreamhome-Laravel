<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    public function lease()
    {

        $leases = DB::table('lease')
            ->orderBy('lease_no', 'ASC')
            ->get();

        $totalLeases = DB::table('lease')
            ->count();

        $totalRent = DB::table('lease')
            ->sum('rent');

        return view('reports.lease-report', [

            'leases' => $leases,
            'totalLeases' => $totalLeases,
            'totalRent' => $totalRent,
            'role' => session('role')

        ]);

    }

    public function payment()
    {

        $payments = DB::table('payment')
            ->orderBy('payment_id', 'DESC')
            ->get();

        $totalPayments = DB::table('payment')
            ->count();

        $totalRevenue = DB::table('payment')
            ->sum('amount');

        return view('reports.payment-report', [

            'payments' => $payments,
            'totalPayments' => $totalPayments,
            'totalRevenue' => $totalRevenue,
            'role' => session('role')

        ]);

    }

    public function property()
    {

        $properties = DB::table('property')->get();

        $totalProperties = DB::table('property')
            ->count();

        $averageRent = DB::table('property')
            ->avg('rent');

        return view('reports.property-report', [

            'properties' => $properties,
            'totalProperties' => $totalProperties,
            'averageRent' => $averageRent,
            'role' => session('role')

        ]);

    }

    public function renter()
    {

        $renters = DB::table('renter')
            ->orderBy('renter_no', 'ASC')
            ->get();

        $totalRenters = DB::table('renter')
            ->count();

        $avgRent = DB::table('renter')
            ->avg('max_rent');

        return view('reports.renter-report', [

            'renters' => $renters,
            'totalRenters' => $totalRenters,
            'avgRent' => $avgRent,
            'role' => session('role')

        ]);

    }

    public function staff()
    {

        $staffs = DB::table('staff')
            ->orderBy('staff_no', 'ASC')
            ->get();

        $totalStaff = DB::table('staff')
            ->count();

        $avgSalary = DB::table('staff')
            ->avg('salary');

        return view('reports.staff-report', [

            'staffs' => $staffs,
            'totalStaff' => $totalStaff,
            'avgSalary' => $avgSalary,
            'role' => session('role')

        ]);

    }

}
