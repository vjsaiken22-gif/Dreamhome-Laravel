<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class RenterController extends Controller
{

    public function index()
    {

        $renters = DB::table('renter')
            ->orderBy('renter_no', 'DESC')
            ->get();

        return view('renters.index', [
            'renters' => $renters,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        return view('renters.create', [
            'role' => session('role')
        ]);

    }

    public function details($id)
    {

        $renter = DB::table('renter')
            ->where('renter_no', $id)
            ->first();

        return view('renters.details', [
            'renter' => $renter,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $renter = DB::table('renter')
            ->where('renter_no', $id)
            ->first();

        return view('renters.edit', [
            'renter' => $renter,
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        try {

            DB::table('renter')->insert([

                'renter_no' => $request->renter_no,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'preferred_type' => $request->preferred_type,
                'max_rent' => $request->max_rent

            ]);

            return redirect('/renters')
                ->with('success', 'Renter added successfully.');

        } catch (QueryException $e) {

            if ($e->errorInfo[1] == 1062) {

                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Duplicate Renter Number detected.');

            }

            throw $e;

        }

    }

    public function update(Request $request, $id)
    {

        DB::table('renter')
            ->where('renter_no', $id)
            ->update([

                'fname' => $request->fname,
                'lname' => $request->lname,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'preferred_type' => $request->preferred_type,
                'max_rent' => $request->max_rent

            ]);

        return redirect('/renters')
            ->with('success', 'Renter updated successfully.');

    }

    public function delete($id)
    {

        DB::table('renter')
            ->where('renter_no', $id)
            ->delete();

        return redirect('/renters')
            ->with('success', 'Renter deleted successfully.');

    }

}
