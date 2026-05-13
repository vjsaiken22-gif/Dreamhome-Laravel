<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RenterController;
use App\Http\Controllers\LeaseController;
use App\Http\Controllers\ViewingController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\AnalyticController;
use App\Http\Controllers\ReportController;


Route::view('/', 'login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {

    if (!session()->has('username')) {
        return redirect('/');
    }

    $propertyCount = DB::table('property')->count();

    $renterCount = DB::table('renter')->count();

    $staffCount = DB::table('staff')->count();

    return view('dashboard', [
        'role' => session('role'),
        'propertyCount' => $propertyCount,
        'renterCount' => $renterCount,
        'staffCount' => $staffCount
    ]);

});

Route::get('/logout', function () {

    session()->flush();

    return redirect('/');

});

Route::get('/properties',
[PropertyController::class, 'index']);

Route::get('/properties/create',
[PropertyController::class, 'create']);

Route::post('/properties/store',
[PropertyController::class, 'store']);

Route::get('/properties/details/{id}',
[PropertyController::class, 'details']);

Route::get('/properties/edit/{id}',
[PropertyController::class, 'edit']);

Route::post('/properties/update/{id}',
[PropertyController::class, 'update']);

Route::get('/properties/delete/{id}',
[PropertyController::class, 'delete']);


Route::get('/renters',
[RenterController::class, 'index']);

Route::get('/renters/create',
[RenterController::class, 'create']);

Route::post('/renters/store',
[RenterController::class, 'store']);

Route::get('/renters/details/{id}',
[RenterController::class, 'details']);

Route::get('/renters/edit/{id}',
[RenterController::class, 'edit']);

Route::post('/renters/update/{id}',
[RenterController::class, 'update']);

Route::get('/renters/delete/{id}',
[RenterController::class, 'delete']);


Route::get('/leases',
[LeaseController::class, 'index']);

Route::get('/leases/create',
[LeaseController::class, 'create']);

Route::post('/leases/store',
[LeaseController::class, 'store']);

Route::get('/leases/details/{id}',
[LeaseController::class, 'details']);

Route::get('/leases/edit/{id}',
[LeaseController::class, 'edit']);

Route::post('/leases/update/{id}',
[LeaseController::class, 'update']);

Route::get('/leases/delete/{id}',
[LeaseController::class, 'delete']);


Route::get('/viewings',
[ViewingController::class, 'index']);

Route::get('/viewings/create',
[ViewingController::class, 'create']);

Route::post('/viewings/store',
[ViewingController::class, 'store']);

Route::get('/viewings/details/{id}',
[ViewingController::class, 'details']);

Route::get('/viewings/edit/{id}',
[ViewingController::class, 'edit']);

Route::post('/viewings/update/{id}',
[ViewingController::class, 'update']);

Route::get('/viewings/delete/{id}',
[ViewingController::class, 'delete']);


Route::get('/inspections',
[InspectionController::class, 'index']);

Route::get('/inspections/create',
[InspectionController::class, 'create']);

Route::post('/inspections/store',
[InspectionController::class, 'store']);

Route::get('/inspections/details/{id}',
[InspectionController::class, 'details']);

Route::get('/inspections/edit/{id}',
[InspectionController::class, 'edit']);

Route::post('/inspections/update/{id}',
[InspectionController::class, 'update']);

Route::get('/inspections/delete/{id}',
[InspectionController::class, 'delete']);


Route::get('/ads',
[AdsController::class, 'index']);

Route::get('/ads/create',
[AdsController::class, 'create']);

Route::post('/ads/store',
[AdsController::class, 'store']);

Route::get('/ads/details/{id}',
[AdsController::class, 'details']);

Route::get('/ads/edit/{id}',
[AdsController::class, 'edit']);

Route::post('/ads/update/{id}',
[AdsController::class, 'update']);

Route::get('/ads/delete/{id}',
[AdsController::class, 'delete']);


Route::get('/staff',
[StaffController::class, 'index']);

Route::get('/staff/create',
[StaffController::class, 'create']);

Route::post('/staff/store',
[StaffController::class, 'store']);

Route::get('/staff/details/{id}',
[StaffController::class, 'details']);

Route::get('/staff/edit/{id}',
[StaffController::class, 'edit']);

Route::post('/staff/update/{id}',
[StaffController::class, 'update']);

Route::get('/staff/delete/{id}',
[StaffController::class, 'delete']);


Route::get('/payments',
[PaymentController::class, 'index']);

Route::get('/payments/create',
[PaymentController::class, 'create']);

Route::post('/payments/store',
[PaymentController::class, 'store']);

Route::get('/payments/details/{id}',
[PaymentController::class, 'details']);

Route::get('/payments/edit/{id}',
[PaymentController::class, 'edit']);

Route::post('/payments/update/{id}',
[PaymentController::class, 'update']);

Route::get('/payments/delete/{id}',
[PaymentController::class, 'delete']);


Route::get('/owners',
[OwnerController::class, 'index']);

Route::get('/owners/create',
[OwnerController::class, 'create']);

Route::post('/owners/store',
[OwnerController::class, 'store']);

Route::get('/owners/details/{id}',
[OwnerController::class, 'details']);

Route::get('/owners/edit/{id}',
[OwnerController::class, 'edit']);

Route::post('/owners/update/{id}',
[OwnerController::class, 'update']);

Route::get('/owners/delete/{id}',
[OwnerController::class, 'delete']);


Route::get('/branches',
[BranchController::class, 'index']);

Route::get('/branches/create',
[BranchController::class, 'create']);

Route::post('/branches/store',
[BranchController::class, 'store']);

Route::get('/branches/details/{id}',
[BranchController::class, 'details']);

Route::get('/branches/edit/{id}',
[BranchController::class, 'edit']);

Route::post('/branches/update/{id}',
[BranchController::class, 'update']);

Route::get('/branches/delete/{id}',
[BranchController::class, 'delete']);


Route::get('/analytics',
[AnalyticController::class, 'index']);

Route::get('/analytics/dashboard',
[AnalyticController::class, 'dashboard']);

Route::get('/analytics/revenue',
[AnalyticController::class, 'revenue']);

Route::get('/analytics/branch',
[AnalyticController::class, 'branch']);


Route::get('/reports',
[ReportController::class, 'index']);

Route::get('/reports/lease',
[ReportController::class, 'lease']);

Route::get('/reports/payment',
[ReportController::class, 'payment']);

Route::get('/reports/property',
[ReportController::class, 'property']);

Route::get('/reports/renter',
[ReportController::class, 'renter']);

Route::get('/reports/staff',
[ReportController::class, 'staff']);



