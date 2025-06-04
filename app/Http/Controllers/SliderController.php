<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
class SliderController extends Controller
{
   
       public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('sliders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_header' => 'required|string|max:255',
            'second_header' => 'required|string|max:255',
            'status' => 'required|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // $path = $request->file('image')->store('sliders', 'public');

        // $validated['image'] = $path;

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('assets/img/sliders'); // points to /public/sliders

        // Ensure the folder exists
        if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
        }

        $image->move($destinationPath, $imageName);

        $validated['image'] = 'assets/img/sliders/' . $imageName;
        }


        Slider::create($validated);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    public function edit(Slider $slider)
    {
        return view('sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $validated = $request->validate([
            'first_header' => 'required|string|max:255',
            'second_header' => 'required|string|max:255',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // if ($request->hasFile('image')) {
        //     Storage::disk('public')->delete($slider->image);
        //     $validated['image'] = $request->file('image')->store('sliders', 'public');
        // }

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('assets/img/sliders'); // points to /public/sliders

        // Ensure the folder exists
        if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
        }

        $image->move($destinationPath, $imageName);

        $validated['image'] = 'assets/img/sliders/' . $imageName;
            }

            
        $slider->update($validated);

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        Storage::disk('public')->delete($slider->image);
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
