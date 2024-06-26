<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'oldprice', 'quantity', 'description', 'created_at', 'updated_at', 'category_id', 'imagepath'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
