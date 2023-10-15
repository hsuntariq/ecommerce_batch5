<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function insertData(Request $req){
        $formFields = $req->validate([
            'name' => ['required','min:3','max:20'],
            'price' => ['required','min:3','max:5'],
            'description' => ['required','min:5'],
            'category' => ['required'],
            'image' => ['required','mimes:jpg,png'],
        ]); 
        $formFields['image'] = $req->file('image')->store('images','public');
        $products = new Products();
        $products::create($formFields);
        return back()->with('message','Data inserted succesdfully!!!');

    }  
    
    
    public function getData(){
        $product = Products::paginate(3);
        return view('welcome',compact('product'));
    }



}
