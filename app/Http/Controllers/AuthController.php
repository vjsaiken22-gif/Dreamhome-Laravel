<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = DB::table('staff')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->first();

        if ($user) {

            session([
                'staff_no' => $user->staff_no,
                'username' => $user->username,
                'role' => $user->role
            ]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Invalid username or password');
    }
}
