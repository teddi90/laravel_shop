<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Product $product)
    {
        dd($product);
        $data=$request->validated();
        $product->update($data);

        return view('product.show', compact('product'));
    }
}
