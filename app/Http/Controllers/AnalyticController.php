<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AnalyticController extends Controller
{

    public function index()
    {

        return view('analytics.analytics', [
            'role' => session('role')
        ]);

    }

    public function dashboard()
    {

        $totalProperties = DB::table('property')->count();

        $totalRenters = DB::table('renter')->count();

        $totalStaff = DB::table('staff')->count();

        $totalOwners = DB::table('owner')->count();

        $totalBranches = DB::table('branch')->count();

        $totalLeases = DB::table('lease')->count();

        $totalPayments = DB::table('payment')->count();

        return view('analytics.dashboard-analytics', [

            'totalProperties' => $totalProperties,
            'totalRenters' => $totalRenters,
            'totalStaff' => $totalStaff,
            'totalOwners' => $totalOwners,
            'totalBranches' => $totalBranches,
            'totalLeases' => $totalLeases,
            'totalPayments' => $totalPayments,
            'role' => session('role')

        ]);

    }

    public function revenue()
    {

        $totalRevenue = DB::table('payment')
            ->sum('amount');

        $totalPayments = DB::table('payment')
            ->count();

        $successfulCount = DB::table('payment')
            ->where('payment_status', 'Paid')
            ->count();

        $successfulPayments = $totalPayments > 0
            ? round(($successfulCount / $totalPayments) * 100)
            : 0;

        $monthlyData = DB::table('payment')
            ->selectRaw('MONTH(payment_date) as month, SUM(amount) as total')
            ->groupByRaw('MONTH(payment_date)')
            ->orderByRaw('MONTH(payment_date)')
            ->get();

        $months = [];

        $monthlyRevenue = [];

        foreach ($monthlyData as $data) {

            $months[] = date("F", mktime(0, 0, 0, $data->month, 1));

            $monthlyRevenue[] = $data->total;

        }

        return view('analytics.revenue-analytics', [

            'totalRevenue' => $totalRevenue,
            'successfulPayments' => $successfulPayments,
            'months' => $months,
            'monthlyRevenue' => $monthlyRevenue,
            'role' => session('role')

        ]);

    }

    public function branch()
    {

        $branchCount = DB::table('branch')->count();

        $branches = DB::table('branch')->get();

        $branchLabels = [];

        $branchData = [];

        foreach ($branches as $branch) {

            $branchLabels[] = $branch->branch_no;

            $staffCount = DB::table('staff')
                ->where('branch_no', $branch->branch_no)
                ->count();

            $branchData[] = $staffCount;

        }

        $topBranch = DB::table('staff')
            ->select('branch_no', DB::raw('COUNT(*) as total'))
            ->groupBy('branch_no')
            ->orderByDesc('total')
            ->value('branch_no');

        return view('analytics.branch-analytics', [

            'branchCount' => $branchCount,
            'branches' => $branches,
            'branchLabels' => $branchLabels,
            'branchData' => $branchData,
            'topBranch' => $topBranch,
            'role' => session('role')

        ]);

    }

}
