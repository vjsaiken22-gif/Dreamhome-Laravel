<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InspectionController extends Controller
{

    public function index()
    {

        $inspections = DB::table('inspection')
            ->orderBy('inspection_date', 'DESC')
            ->get();

        return view('inspections.index', [
            'inspections' => $inspections,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        $properties = DB::table('property')->get();

        $staffs = DB::table('staff')->get();

        return view('inspections.create', [
            'properties' => $properties,
            'staffs' => $staffs,
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        DB::table('inspection')->insert([

            'property_no' => $request->property_no,
            'staff_no' => $request->staff_no,
            'inspection_date' => $request->inspection_date,
            'comments' => $request->comments

        ]);

        return redirect('/inspections');

    }

    public function details($id)
    {

        $inspection = DB::table('inspection')
            ->where('inspection_id', $id)
            ->first();

        return view('inspections.details', [
            'inspection' => $inspection,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $inspection = DB::table('inspection')
            ->where('inspection_id', $id)
            ->first();

        $properties = DB::table('property')->get();

        $staffs = DB::table('staff')->get();

        return view('inspections.edit', [
            'inspection' => $inspection,
            'properties' => $properties,
            'staffs' => $staffs,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('inspection')
            ->where('inspection_id', $id)
            ->update([

                'property_no' => $request->property_no,
                'staff_no' => $request->staff_no,
                'inspection_date' => $request->inspection_date,
                'comments' => $request->comments

            ]);

        return redirect('/inspections');

    }

    public function delete($id)
    {

        DB::table('inspection')
            ->where('inspection_id', $id)
            ->delete();

        return redirect('/inspections');

    }

}
