<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category_id', 'price'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function categories() {
        return $this->belongsTo('App\Models\Category');
    }
}
