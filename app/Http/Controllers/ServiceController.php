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
        // return view('services.index', compact('services'));
        //   $services = Service::with('parent')->latest()->get();
        // return view('services.index', compact('services'));
        $services = Service::with('parent')->orderBy('created_at', 'desc')->get();
        return view('services.index', compact('services'));
    }

   
     public function create()
    {
        // Only top-level services as potential parents
        $parents = Service::whereNull('parent_id')->pluck('title', 'id');
        return view('services.create', compact('parents'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'status' => 'required|in:active,inactive',
    //         'excerpt' => 'nullable|string|max:500',
    //         'content' => 'nullable|string',
    //          'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    //         'parent_id' => 'nullable|exists:services,id',
    //     ]);

    //     if ($request->hasFile('banner')) {
    //         $banner = $request->file('banner')->store('banners', 'public');
    //     }

    //     Service::create([
    //         'title'     => $request->title,
    //         'status'    => $request->status,
    //         'excerpt'   => $request->excerpt,
    //         'content'   => $request->content,
    //         'banner'    => $banner,
    //         'parent_id' => $request->parent_id,
    //         'slug'      => Str::slug($request->title),
    //     ]);

    //     return redirect()->route('services.index')->with('success', 'Service created successfully.');
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required',
            'excerpt' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        // Check if folder exists
        $folder = 'services';

        // Ensure the folder exists in the public disk
        if (!Storage::disk('public')->exists($folder)) {
            Storage::disk('public')->makeDirectory($folder);
        }


        // Handle image upload
        // $imagePath = $request->file('banner')->store('services', 'public');
        // $img = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 800);
        // $img->save();

        if ($request->hasFile('banner')) {
        $image = $request->file('banner');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('assets/img/services'); // points to /public/sliders

        // Ensure the folder exists
        if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
        }

        $image->move($destinationPath, $imageName);

        $imagePath =  'assets/img/services/' . $imageName;
        }

        Service::create([
            'title' => $validated['title'],
            'status' => $validated['status'],
            'content' => $validated['content'],
            'excerpt' => $validated['excerpt'],
            'banner' => $imagePath,
            'slug' => Str::slug($validated['title'])
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function edit(Service $service)
    {
        // Exclude current service to prevent selecting self as parent
        $parents = Service::whereNull('parent_id')->where('id', '!=', $service->id)->pluck('title', 'id');
        return view('services.edit', compact('service', 'parents'));
    }

       public function update(Request $request, Service $service)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required',
            'excerpt' => 'required',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        // Check if folder exists
        $folder = 'services';

        // Ensure the folder exists in the public disk
        if (!Storage::disk('public')->exists($folder)) {
            Storage::disk('public')->makeDirectory($folder);
        }

        // Handle image upload if exists
        if ($request->hasFile('banner')) {
            $imagePath = $request->file('banner')->store('services', 'public');
            $img = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 800);
            $img->save();

            $service->update([
                'banner' => $imagePath
            ]);
        }

        if ($request->hasFile('banner')) {
            // dd($request);
        $image = $request->file('banner');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('assets/img/services'); // points to /public/sliders

        // Ensure the folder exists
        if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
        }

        $image->move($destinationPath, $imageName);
        $imagePath = 'assets/img/services/' . $imageName;
        $service->update([
        'banner' => $imagePath
            ]);
        }

        $service->update([
        'title' => $validated['title'],
        'status' => $validated['status'],
        'content' => $validated['content'],
        'excerpt' => $validated['excerpt'],
        'slug' => Str::slug($validated['title'])
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted.');
    }
}
