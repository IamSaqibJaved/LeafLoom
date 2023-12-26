<?php

namespace App\Http\Controllers;
use App\Models\AddProd;
use Illuminate\Http\Request;

class AddProdController extends Controller
{
    public function addprod(Request $request){
        $addprod = new AddProd;
        $addprod->product_name = $request->input("product_name");
        $addprod->product_price = $request->input("product_price");
        $addprod->category = $request->input("category");
        if($addprod->category!="makeup"){
        $addprod->sub_category = $request->input("sub_category");
        $addprod->ingredient = $request->input("ingredient");
        $addprod->type = $request->input("type");
        }
        $pic = $request->file('product_image');
        $picName = $pic->getClientOriginalName(); 
        $picType = $pic->getClientOriginalExtension(); 
        $picSize = $pic->getSize(); 
        $pic->move('uploads',$picName); 
        $addprod->product_image = 'uploads/'.$picName;
        $addprod->save();

        return redirect('/addprod');

    }

    public function displayAllUsers()
    {
        $prod = AddProd::all();

        return view('/landingpg', ["prod" => $prod]);
    }

    public function showCategory($category) {
        $prod = AddProd::where('category', $category)->get();
        return view('/showbycategory',["prod" => $prod, "category" => $category]);
    }
    public function showtype($type) {
        $prod = AddProd::where('type', $type)->get();
        return view('/showbytype',["prod" => $prod, "type" => $type]);
    }
    public function showingredient($ingredient) {
        $prod = AddProd::where('ingredient', $ingredient)->get();
        return view('/showbyingredient',["prod" => $prod, "ingredient" => $ingredient]);
    }

    
}


