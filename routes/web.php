<?php

use Illuminate\Support\Facades\Route;

Route::get('/patient', action: function () {
    return view(view: '/pages/application');
});

Route::get('/create-patient', function () {
    return view(view: '/pages/create-patient');
});

Route::get('/create-medicine', function () {
    return view(view: '/pages/create-medicine');
});

Route::get('/', function () {
    return view(view: '/authentication/sign-in');
});

Route::get('/super-admin/clinic-management', function () {
    return view('pages/super-admin/clinic-management');
});

Route::get('/admin/clinic-management', function () {
    return view('pages/admin/clinic-management');
});

Route::get('/admin/patients', function () {
    return view('pages/admin/patients');
});

// Appointments
Route::get('/admin/appointments', function () {
    return view('pages/admin/appointments');
});

// Medicine Management
Route::get('/admin/medicine-management', function () {
    return view('pages/admin/medicine-management');
});

// Billing & Invoices
Route::get('/admin/billing-invoices', function () {
    return view('pages/admin/billing-invoices');
});

// Reports
Route::get('/admin/reports', function () {
    return view('pages/admin/reports');
});

// Notifications
Route::get('/admin/notifications', function () {
    return view('pages/admin/notifications');
});

// Settings
Route::get('/admin/settings', function () {
    return view('pages/admin/settings');
});






