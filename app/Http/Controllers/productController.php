<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function insertData(Request $req){
        $formFields = $req->validate([
            'name' => ['required','min:3','max:20'],
            'price' => ['required','min:3','max:5'],
            'd_price' => ['required','min:3','max:5'],
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
        $category = Category::all();
        return view('welcome',compact('product','category'));
    }

    public function viewData(){
        $products = Products::latest()->paginate(10);
        return view('pages.admin.view_products',compact('products'));
    }


    public function deleteItem($id){
        $item = Products::find($id);
        $item->delete();
        return back()->with('message','Item Deleted Successfully!!!');
    }



}
