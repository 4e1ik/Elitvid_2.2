<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotImage extends Model
{
    use HasFactory;

    protected $fillable = ['pot_product_id', 'image', 'color', 'texture', 'description_image'];
}
