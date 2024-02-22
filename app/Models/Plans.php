<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable=[
            "name",
            "description",
            "price",
            "number_of_rooms",
            "image",
            "2D_image"
    ];

protected $casts=[
    "image"=>"array",
    "2D_image"=>"array"
];
}
