<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        return view('admin.services', compact('services'));
    }

    public function create()
    {
        return view('admin.service-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        Service::create($validated);

        return redirect()
            ->route('admin.services')
            ->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.service-edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $service->update($validated);

        return redirect()
            ->route('admin.services')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect()
            ->route('admin.services')
            ->with('success', 'Service deleted successfully.');
    }
}