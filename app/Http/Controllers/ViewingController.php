<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class ViewingController extends Controller
{

    public function index()
    {

        $viewings = DB::table('viewing')
            ->orderBy('view_date', 'DESC')
            ->get();

        return view('viewings.index', [
            'viewings' => $viewings,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        $properties = DB::table('property')->get();

        $renters = DB::table('renter')->get();

        return view('viewings.create', [
            'properties' => $properties,
            'renters' => $renters,
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        try {

            $exists = DB::table('viewing')
                ->where('property_no', $request->property_no)
                ->where('renter_no', $request->renter_no)
                ->where('view_date', $request->view_date)
                ->exists();

            if ($exists) {

                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Duplicate Viewing Record detected.');

            }

            DB::table('viewing')->insert([

                'property_no' => $request->property_no,
                'renter_no' => $request->renter_no,
                'view_date' => $request->view_date,
                'comments' => $request->comments

            ]);

            return redirect('/viewings')
                ->with('success', 'Viewing added successfully.');

        } catch (QueryException $e) {

            throw $e;

        }

    }

    public function details($id)
    {

        $viewing = DB::table('viewing')
            ->where('viewing_id', $id)
            ->first();

        return view('viewings.details', [
            'viewing' => $viewing,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $viewing = DB::table('viewing')
            ->where('viewing_id', $id)
            ->first();

        $properties = DB::table('property')->get();

        $renters = DB::table('renter')->get();

        return view('viewings.edit', [
            'viewing' => $viewing,
            'properties' => $properties,
            'renters' => $renters,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('viewing')
            ->where('viewing_id', $id)
            ->update([

                'property_no' => $request->property_no,
                'renter_no' => $request->renter_no,
                'view_date' => $request->view_date,
                'comments' => $request->comments

            ]);

        return redirect('/viewings')
            ->with('success', 'Viewing updated successfully.');

    }

    public function delete($id)
    {

        DB::table('viewing')
            ->where('viewing_id', $id)
            ->delete();

        return redirect('/viewings')
            ->with('success', 'Viewing deleted successfully.');

    }

}
