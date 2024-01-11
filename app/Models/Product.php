<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $guarded=false;

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function colors()
    {
        return $this->belongsTo(Color::class,'color_id','id');
    }

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }
}
