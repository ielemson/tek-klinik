<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('services', 'public');
        $img = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 800);
        $img->save();

        Service::create([
            'title' => $validated['title'],
            'status' => $validated['status'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'slug' => Str::slug($validated['title'])
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $img = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 800);
            $img->save();

            $service->update([
                'image' => $imagePath
            ]);
        }

        $service->update([
            'title' => $validated['title'],
            'status' => $validated['status'],
            'content' => $validated['content'],
            'slug' => Str::slug($validated['title'])
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function destroy(Service $service)
    {
        // First, unlink the image from storage
        if ($service->image && Storage::exists('public/' . $service->image)) {
            Storage::delete('public/' . $service->image);
        }

        // Then, delete the service from the database
        $service->delete();

        // Redirect to index page with a success message
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}
