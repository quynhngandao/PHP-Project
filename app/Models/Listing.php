<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Petunia',
                'description' => 'She is very sweet'
            ],
            [
                'id' => 2,
                'title' => 'Roxie',
                'description' => 'She is very smart'
            ]
        ];
    }
    public static function find($id) {

        $listings = self::all(); // get all listing

        // loop through all listing
        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
