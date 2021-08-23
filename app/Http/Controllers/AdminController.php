<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    //

    public function index(){
        return view ("admin.dashboard");
    }

    
    public function product(){
        return view('admin.products',["products"=>Product::all()]);
    }


    public function insertProduct(Request $r){
        $validateData = $r->validate([
            'p_title' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ]);

        $filename = $r->image->getClientOriginalName();

        $r->image->move(public_path("photos"),$filename);

        $p = new Product();
        $p->p_title = $r->p_title;
        $p->brand = $r->brand;
        $p->price = $r->price;
        $p->discount_price = $r->discount_price;
        $p->category_id = $r->category_id;
        $p->description = $r->description;
        $p->image = $filename;
        $p->save();

        return redirect()->back();
    }

    public function deleteProduct($id){
        // $product -> delete();
        Product::find($id)->delete();
        return redirect()->back();
    }


    public function category(){
        return view('admin.categories',["categories"=>Category::all()]);
    }


    public function insertCategory(Request $r){
        $data = $r->validate([
            'title' => 'required'
        ]);
        Category::create($data);
        return redirect()->back();
        
    }

    public function deleteCategory($id){
        Category::find($id)->delete();
        return redirect()->back();
    }


    public function coupon(){

    }


    public function address(){

    }


    public function orders(){

    }


    public function users(){

    }
    

}
