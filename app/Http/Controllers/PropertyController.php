<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{

    public function index()
    {

        $properties = DB::table('property')
            ->orderBy('property_no', 'DESC')
            ->get();

        return view('properties.index', [
            'properties' => $properties,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        return view('properties.create', [
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        DB::table('property')->insert([

            'property_no' => $request->property_no,
            'street' => $request->street,
            'city' => $request->city,
            'type' => $request->type,
            'rooms' => $request->rooms,
            'rent' => $request->rent

        ]);

        return redirect('/properties');

    }

    public function details($id)
    {

        $property = DB::table('property')
            ->where('property_no', $id)
            ->first();

        return view('properties.details', [
            'property' => $property,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $property = DB::table('property')
            ->where('property_no', $id)
            ->first();

        return view('properties.edit', [
            'property' => $property,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('property')
            ->where('property_no', $id)
            ->update([

                'street' => $request->street,
                'city' => $request->city,
                'type' => $request->type,
                'rooms' => $request->rooms,
                'rent' => $request->rent

            ]);

        return redirect('/properties');

    }

    public function delete($id)
    {

        DB::table('property')
            ->where('property_no', $id)
            ->delete();

        return redirect('/properties');

    }

}
