<?php

namespace App\Http\Controllers;

use App\Models\Resource;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::where('status', 'active')
            ->latest()
            ->get();

        return view('resources', compact('resources'));
    }

    public function show($slug)
    {
        $resource = Resource::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        return view('resource-details', compact('resource'));
    }
}