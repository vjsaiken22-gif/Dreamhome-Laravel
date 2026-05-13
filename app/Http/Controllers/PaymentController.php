<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{

    public function index()
    {

        $payments = DB::table('payment')
            ->orderBy('payment_id', 'DESC')
            ->get();

        return view('payments.index', [
            'payments' => $payments,
            'role' => session('role')
        ]);

    }

    public function create()
    {

        $leases = DB::table('lease')->get();

        return view('payments.create', [
            'leases' => $leases,
            'role' => session('role')
        ]);

    }

    public function store(Request $request)
    {

        DB::table('payment')->insert([

            'lease_no' => $request->lease_no,
            'payment_date' => $request->payment_date,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'payment_status' => $request->payment_status

        ]);

        return redirect('/payments');

    }

    public function details($id)
    {

        $payment = DB::table('payment')
            ->where('payment_id', $id)
            ->first();

        return view('payments.details', [
            'payment' => $payment,
            'role' => session('role')
        ]);

    }

    public function edit($id)
    {

        $payment = DB::table('payment')
            ->where('payment_id', $id)
            ->first();

        $leases = DB::table('lease')->get();

        return view('payments.edit', [
            'payment' => $payment,
            'leases' => $leases,
            'role' => session('role')
        ]);

    }

    public function update(Request $request, $id)
    {

        DB::table('payment')
            ->where('payment_id', $id)
            ->update([

                'lease_no' => $request->lease_no,
                'payment_date' => $request->payment_date,
                'amount' => $request->amount,
                'payment_method' => $request->payment_method,
                'payment_status' => $request->payment_status

            ]);

        return redirect('/payments');

    }

    public function delete($id)
    {

        DB::table('payment')
            ->where('payment_id', $id)
            ->delete();

        return redirect('/payments');

    }

}
