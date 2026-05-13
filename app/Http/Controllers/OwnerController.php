<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{

    public function index()
    {

        $owners = DB::table('owner')
            ->orderBy('owner_no', 'ASC')
            ->get();

        return view('owners.index', [
            'owners' => $owners,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        return view('owners.create', [
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        DB::table('owner')->insert([

            'owner_no' => $request->owner_no,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'address' => $request->address,
            'telephone' => $request->telephone

        ]);

        return redirect('/owners');

    }

    public function details($id)
    {

        $owner = DB::table('owner')
            ->where('owner_no', $id)
            ->first();

        return view('owners.details', [
            'owner' => $owner,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $owner = DB::table('owner')
            ->where('owner_no', $id)
            ->first();

        return view('owners.edit', [
            'owner' => $owner,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('owner')
            ->where('owner_no', $id)
            ->update([

                'fname' => $request->fname,
                'lname' => $request->lname,
                'address' => $request->address,
                'telephone' => $request->telephone

            ]);

        return redirect('/owners');

    }

    public function delete($id)
    {

        DB::table('owner')
            ->where('owner_no', $id)
            ->delete();

        return redirect('/owners');

    }

}
