<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function method(){
        return view('insert') ;
    }

    public function filestore (Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'imge' => 'nullable|mimes:jpeg,png',
        ]);


        //upload image
        $imageName = null;
        if ($request->image) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('image'), $imageName);
        }

        


        $product = new Product;
        $product ->name = $request->name;
        $product ->description = $request->description;
        $product ->image = $imageName ;
        
        $product ->save();

        return redirect()->route('home')->with('success','Your post has been created');
    }

    
}
