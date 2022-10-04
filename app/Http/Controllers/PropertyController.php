<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Testimonial;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyAgent;
use App\Models\SellType;

class PropertyController extends Controller
{

    // Show homepage
    public function index()
    {
        return view('index', [
            'heading' => 'Makaan',
            'property_types' => PropertyType::all(),
            'properties' => Property::latest()->filter(request(['property_types', 'search']))->get(),
            'property_agents' => PropertyAgent::all(),
            'testimonials' => Testimonial::all(),
            'sell_types' => SellType::all()
        ]);
    }

    // Show single property page
    public function show($property)
    {
        return view('properties.show', [
            'property' => Property::find($property)
        ]);
    }

    // Show create property page
    public function create()
    {
        return view('properties.create', [
            'property_types' => PropertyType::all(),
            'sell_types' => SellType::all()
        ]);
    }

    // Store property
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'property_type' => 'required',
            'sell_type' => 'required',
            'address' => 'required',
            'city' => 'required',
            'town' => 'required',
            'rooms' => 'required',
            'baths' => 'required',
            'square' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('properties', 'public');
        }



        Property::create($formFields);
        return redirect('/')->with('message', 'Property created successfully.');
    }

    // Show all property listing page
    public function showList()
    {
        return view('properties.property-list', [
            'properties' => Property::latest()->filter(request(['property_types', 'search']))->paginate(6)
        ]);
    }

    // Show property edit page
    public function edit(Property $property)
    {
        return view('properties.edit', [
            'property_types' => PropertyType::all(),
            'property' => $property,
            'sell_types' => SellType::all()
        ]);
    }

    // Update property edit data
    public function update(Request $request, Property $property)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'property_type' => 'required',
            'sell_type' => 'required',
            'address' => 'required',
            'city' => 'required',
            'town' => 'required',
            'rooms' => 'required',
            'baths' => 'required',
            'square' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('properties', 'public');
        }

        $property->update($formFields);
        return back()->with('message', 'Property updated successfully.');
    }

    // Delete property
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect('/')->with('message', 'Property deleted successfully.');
    }
}
