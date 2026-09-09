<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\Product;
use App\Models\Resource;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // ===============================
        // Dashboard Counts
        // ===============================

        $totalEnquiries = ContactMessage::count();

        $totalServices = Service::count();

        $activeServices = Service::where('status', 'active')->count();

        $totalProducts = Product::count();

        $activeProducts = Product::where('status', 'active')->count();

        $totalResources = Resource::count();

        $activeResources = Resource::where('status', 'active')->count();


        // ===============================
        // Recent Enquiries
        // ===============================

        $contactMessages = ContactMessage::latest()->get();


        // ===============================
        // Send Data To Dashboard
        // ===============================

        return view('admin.dashboard', compact(
            'contactMessages',
            'totalEnquiries',
            'totalServices',
            'activeServices',
            'totalProducts',
            'activeProducts',
            'totalResources',
            'activeResources'
        ));
    }
}