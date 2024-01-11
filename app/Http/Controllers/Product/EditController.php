<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories=Category::all();
        $current_category=new CategoryResource($product->category);
        $tags=Tag::all();
        $colors=Color::all();
    return view('product.edit', compact('product','tags','colors','categories','current_category'));
    }
}
