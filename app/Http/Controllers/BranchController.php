<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class BranchController extends Controller
{

    public function index()
    {

        $branches = DB::table('branch')
            ->orderBy('branch_no', 'ASC')
            ->get();

        return view('branches.index', [
            'branches' => $branches,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        return view('branches.create', [
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        try {

            $exists = DB::table('branch')
                ->where('branch_no', $request->branch_no)
                ->exists();

            if ($exists) {

                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Duplicate Branch Number detected.');

            }

            DB::table('branch')->insert([

                'branch_no' => $request->branch_no,
                'street' => $request->street,
                'area' => $request->area,
                'city' => $request->city,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'fax' => $request->fax

            ]);

            return redirect('/branches')
                ->with('success', 'Branch added successfully.');

        } catch (QueryException $e) {

            throw $e;

        }

    }

    public function details($id)
    {

        $branch = DB::table('branch')
            ->where('branch_no', $id)
            ->first();

        return view('branches.details', [
            'branch' => $branch,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $branch = DB::table('branch')
            ->where('branch_no', $id)
            ->first();

        return view('branches.edit', [
            'branch' => $branch,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('branch')
            ->where('branch_no', $id)
            ->update([

                'street' => $request->street,
                'area' => $request->area,
                'city' => $request->city,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'fax' => $request->fax

            ]);

        return redirect('/branches')
            ->with('success', 'Branch updated successfully.');

    }

    public function delete($id)
    {

        DB::table('branch')
            ->where('branch_no', $id)
            ->delete();

        return redirect('/branches')
            ->with('success', 'Branch deleted successfully.');

    }

}
