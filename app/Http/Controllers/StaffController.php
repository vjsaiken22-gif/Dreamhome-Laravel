<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class StaffController extends Controller
{

    public function index()
    {

        $staffs = DB::table('staff')
            ->orderBy('staff_no', 'ASC')
            ->get();

        return view('staff.index', [
            'staffs' => $staffs,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        return view('staff.create', [
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        try {

            DB::table('staff')->insert([

                'staff_no' => $request->staff_no,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'sex' => $request->sex,
                'dob' => $request->dob,
                'nin' => $request->nin,
                'position' => $request->position,
                'salary' => $request->salary,
                'branch_no' => $request->branch_no,
                'date_joined' => $request->date_joined,
                'username' => $request->username,
                'password' => $request->password,
                'role' => $request->role

            ]);

            return redirect('/staff')
                ->with('success', 'Staff added successfully.');

        } catch (QueryException $e) {

            if ($e->errorInfo[1] == 1062) {

                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Duplicate Staff Number, Username, or NIN detected.');

            }

            throw $e;

        }

    }

    public function details($id)
    {

        $staff = DB::table('staff')
            ->where('staff_no', $id)
            ->first();

        return view('staff.details', [
            'staff' => $staff,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $staff = DB::table('staff')
            ->where('staff_no', $id)
            ->first();

        return view('staff.edit', [
            'staff' => $staff,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('staff')
            ->where('staff_no', $id)
            ->update([

                'fname' => $request->fname,
                'lname' => $request->lname,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'sex' => $request->sex,
                'dob' => $request->dob,
                'nin' => $request->nin,
                'position' => $request->position,
                'salary' => $request->salary,
                'branch_no' => $request->branch_no,
                'date_joined' => $request->date_joined,
                'username' => $request->username,
                'password' => $request->password,
                'role' => $request->role

            ]);

        return redirect('/staff')
            ->with('success', 'Staff updated successfully.');

    }

    public function delete($id)
    {

        DB::table('staff')
            ->where('staff_no', $id)
            ->delete();

        return redirect('/staff')
            ->with('success', 'Staff deleted successfully.');

    }

}
