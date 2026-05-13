<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaseController extends Controller
{

    public function index()
    {

        $leases = DB::table('lease')
            ->orderBy('lease_no', 'DESC')
            ->get();

        return view('leases.index', [
            'leases' => $leases,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        $renters = DB::table('renter')->get();

        $properties = DB::table('property')->get();

        return view('leases.create', [
            'renters' => $renters,
            'properties' => $properties,
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        DB::table('lease')->insert([

            'lease_no' => $request->lease_no,
            'property_no' => $request->property_no,
            'renter_no' => $request->renter_no,
            'staff_no' => $request->staff_no,
            'rent' => $request->rent,
            'deposit' => $request->deposit,
            'payment_method' => $request->payment_method,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date

        ]);

        return redirect('/leases');

    }

    public function details($id)
    {

        $lease = DB::table('lease')
            ->where('lease_no', $id)
            ->first();

        return view('leases.details', [
            'lease' => $lease,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $lease = DB::table('lease')
            ->where('lease_no', $id)
            ->first();

        $renters = DB::table('renter')->get();

        $properties = DB::table('property')->get();

        return view('leases.edit', [
            'lease' => $lease,
            'renters' => $renters,
            'properties' => $properties,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('lease')
            ->where('lease_no', $id)
            ->update([

                'property_no' => $request->property_no,
                'renter_no' => $request->renter_no,
                'staff_no' => $request->staff_no,
                'rent' => $request->rent,
                'deposit' => $request->deposit,
                'payment_method' => $request->payment_method,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date

            ]);

        return redirect('/leases');

    }

    public function delete($id)
    {

        DB::table('lease')
            ->where('lease_no', $id)
            ->delete();

        return redirect('/leases');

    }

}
