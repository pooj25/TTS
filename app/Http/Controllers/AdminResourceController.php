<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::latest()->get();

        return view('admin.resources', compact('resources'));
    }

    public function create()
    {
        return view('admin.resource-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'type' => 'nullable|string|max:100',
            'category' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        Resource::create($validated);

        return redirect()
            ->route('admin.resources')
            ->with('success', 'Resource created successfully.');
    }

    public function edit($id)
    {
        $resource = Resource::findOrFail($id);

        return view('admin.resource-edit', compact('resource'));
    }

    public function update(Request $request, $id)
    {
        $resource = Resource::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'type' => 'nullable|string|max:100',
            'category' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $resource->update($validated);

        return redirect()
            ->route('admin.resources')
            ->with('success', 'Resource updated successfully.');
    }

    public function destroy($id)
    {
        $resource = Resource::findOrFail($id);

        $resource->delete();

        return redirect()
            ->route('admin.resources')
            ->with('success', 'Resource deleted successfully.');
    }
}