<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertiesController extends Controller
{
    /**
     * Show the form for creating a new property.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Display a listing of the properties.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', ['properties' => $properties]);
    }

    /**
     * Store a newly created property in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|string|in:House,Apartment',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        $photoPath = $request->file('photo')->store('photos');

        // Create a new Property instance with the validated data
        $property = new Property;
        $property->title = $validatedData['title'];
        $property->bedrooms = $validatedData['bedrooms'];
        $property->bathrooms = $validatedData['bathrooms'];
        $property->location = $validatedData['location'];
        $property->price = $validatedData['price'];
        $property->type = $validatedData['type'];
        $property->description = $validatedData['description'];
        $property->photo = $photoPath;
        $property->save();

        // Redirect back to the properties index route with a success message
        return redirect()->route('properties.index')->with('success', 'Property added successfully.');
    }

    /**
     * Display the specified property.
     *
     * @param  int  $property_id
     * @return \Illuminate\Http\Response
     */
    public function show($property_id)
    {
        // Retrieve the property by its ID
        $property = Property::findOrFail($property_id);

        // Return the view with the property data
        return view('properties.show', ['property' => $property]);
    }
}
