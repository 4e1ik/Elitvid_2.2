<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenchImage extends Model
{
    use HasFactory;

    protected $fillable = ['bench_product_id', 'image', 'description_image'];
}
