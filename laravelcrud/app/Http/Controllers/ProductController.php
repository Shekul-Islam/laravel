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
       if (isset($request->image)) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
       }
        //add new product

        $product = new Product;

        $product ->name = $request->name;
        $product ->description = $request->description;
        $product ->image = $imageName;

        $product ->save();

        return redirect()->route('home')->with('success','Your post has been created');

    }

    public function editData ($id) {
        $product = Product::findorFail($id);
        return view('edit', ['ourproduct'=> $product]);
    }

    public function updateData($id, Request $request) {


       $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'imge' => 'nullable|mimes:jpeg,png',
    ]);




    //update product
    $product = Product::findorFail($id);
    $product ->name = $request->name;
    $product ->description = $request->description;

     //upload image

   if (isset($request->image)) {
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);
    $product ->image = $imageName;
   }


    $product ->save();

    return redirect()->route('home')->with('success','Your post has been updated');
    }


    public function deleteData($id){
        $product = Product::findorFail($id);

        $product->delete();

        return redirect()->route('home')->with('success','Your post has been deleted');

    }
}
