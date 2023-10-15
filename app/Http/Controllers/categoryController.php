<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(Request $req){
        // get the data from the form
        $formFields = $req->validate([
            'category_name' => ['required','min:3'],
            'category_image' => ['required','mimes:jpeg,jpg,png']
        ]);
        // store the image that you get from the form
        $formFields['category_image'] = $req->file('category_image')->store('category_image','public');
        // save the data in the database
        // 1st step:- get the table from the backend into your controller/frontend
        $category = new Category();
        $category::create($formFields);
        return back()->with('message','Category Added Successfully!!!');
        // Category::create($formFields);

    }
}
