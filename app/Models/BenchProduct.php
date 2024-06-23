<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenchProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'material', 'size', 'weight', 'price', 'collection', 'active'];

    public function bench_images(){
        return $this->hasMany(BenchImage::class, 'bench_product_id', 'id');
    }
}
