<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;
    protected $table = 'product_galleries';
    public $timestamps = false;
    
    protected $fillable = [
        'name', 'path', 'product_id'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
