<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $hidden = ['pivot'];

    protected $fillable = [
        'name', 'price', 'description', 'category_id'
    ];

    public function feedbacks() {
        return $this->hasMany('App\Models\Feedback');
    }

    public function featuredImage() {
        return $this->hasOne('App\Models\ProductGallery');
    }

    public function gallery() {
        return $this->hasMany('App\Models\ProductGallery');
    }

    public function sizes() {
        return $this->hasMany('App\Models\ProductSize');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
