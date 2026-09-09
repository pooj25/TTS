<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 'active')
            ->latest()
            ->get();

        return view('solutions', compact('services'));
    }
}