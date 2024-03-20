<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    public function run()
    {
        // Define property data
        $properties = [
            [
                'title' => 'Furnished Cottage',
                'description' => 'This spacious cottage is located in a peaceful suburb.',
                'bedrooms' => 4,
                'bathrooms' => 2,
                'location' => '23 Jordon Way, Portland',
                'price' => 25,000.00,
                'type' => 'House',
                'photo' => 'images/house1.jpg',
            ],
            [
                'title' => 'Luxurious Apartment in City Center',
                'description' => 'Luxurious apartment with stunning city views.',
                'bedrooms' => 2,
                'bathrooms' => 1,
                'location' => 'St Johns',
                'price' => 500,000,
                'type' => 'Apartment',
                'photo' => 'images/apt1.jpg',
            ],
            // Add more property data as needed
        ];

        // Insert data into the properties table
        foreach ($properties as $propertyData) {
            Property::create($propertyData);
        }
    }
}
