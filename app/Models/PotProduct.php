<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'material', 'size', 'weight', 'price', 'collection', 'active'];

    public function pot_images(){
        return $this->hasMany(PotImage::class, 'pot_product_id', 'id');
    }
}
