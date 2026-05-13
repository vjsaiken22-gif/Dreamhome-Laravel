<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{

    public function index()
    {

        $ads = DB::table('advertisement')
            ->orderBy('ad_id', 'DESC')
            ->get();

        return view('ads.index', [
            'ads' => $ads,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        $properties = DB::table('property')->get();

        return view('ads.create', [
            'properties' => $properties,
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        DB::table('advertisement')->insert([

            'property_no' => $request->property_no,
            'platform' => $request->platform,
            'ad_date' => $request->ad_date

        ]);

        return redirect('/ads');

    }

    public function details($id)
    {

        $ad = DB::table('advertisement')
            ->where('ad_id', $id)
            ->first();

        return view('ads.details', [
            'ad' => $ad,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $ad = DB::table('advertisement')
            ->where('ad_id', $id)
            ->first();

        $properties = DB::table('property')->get();

        return view('ads.edit', [
            'ad' => $ad,
            'properties' => $properties,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('advertisement')
            ->where('ad_id', $id)
            ->update([

                'property_no' => $request->property_no,
                'platform' => $request->platform,
                'ad_date' => $request->ad_date

            ]);

        return redirect('/ads');

    }

    public function delete($id)
    {

        DB::table('advertisement')
            ->where('ad_id', $id)
            ->delete();

        return redirect('/ads');

    }

}
