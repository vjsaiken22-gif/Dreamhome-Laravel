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

        $request->validate([
            'property_no' => 'required',
            'platform' => 'required',
            'ad_date' => 'required'
        ]);

        $exists = DB::table('advertisement')
            ->where('property_no', $request->property_no)
            ->where('platform', $request->platform)
            ->where('ad_date', $request->ad_date)
            ->exists();

        if ($exists) {

            return redirect('/ads/create')
                ->withInput()
                ->with('error', 'Advertisement already exists.');

        }

        DB::table('advertisement')->insert([

            'property_no' => $request->property_no,
            'platform' => $request->platform,
            'ad_date' => $request->ad_date

        ]);

        return redirect('/ads')
            ->with('success', 'Advertisement added successfully.');

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

        $request->validate([
            'property_no' => 'required',
            'platform' => 'required',
            'ad_date' => 'required'
        ]);

        $exists = DB::table('advertisement')
            ->where('property_no', $request->property_no)
            ->where('platform', $request->platform)
            ->where('ad_date', $request->ad_date)
            ->where('ad_id', '!=', $id)
            ->exists();

        if ($exists) {

            return redirect('/ads/edit/' . $id)
                ->withInput()
                ->with('error', 'Advertisement already exists.');

        }

        DB::table('advertisement')
            ->where('ad_id', $id)
            ->update([

                'property_no' => $request->property_no,
                'platform' => $request->platform,
                'ad_date' => $request->ad_date

            ]);

        return redirect('/ads')
            ->with('success', 'Advertisement updated successfully.');

    }

    public function delete($id)
    {

        DB::table('advertisement')
            ->where('ad_id', $id)
            ->delete();

        return redirect('/ads')
            ->with('success', 'Advertisement deleted successfully.');

    }

}
