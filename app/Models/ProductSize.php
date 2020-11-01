<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model 
{
    use HasFactory;
    protected $table = 'product_sizes';
    public $timestamps = false;

    protected $fillable = [
        'name', 'product_id'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
