<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $data;

    public function __construct()
    {

        $this->data= \Illuminate\Support\Facades\Http::get('https://fakestoreapi.com/products')->object();
    }

    public  function allProducts(){

//        return $this->data;
        return Product::all();
    }

    public function productByPriceMax($amount){
//      return  array_filter($this->data,fn($d)=>$d->price < $amount);
        return Product::where("price","<",$amount)->get();
    }

    public function productByPriceMin($amount){
//        return collect($this->data)->where('price','>',$amount);
        return Product::where("price",">",$amount)->get();

    }

    public function productByPriceBetween($minAmount,$maxAmount){
//        return collect($this->data)->whereBetween('price',[$minAmount,$maxAmount]); //fakestore ကနေ သွားယူတာ
        return Product::whereBetween('price',[$minAmount,$maxAmount])->get();   //database ကနေ ပြန်သွားယူတာ ->get ထည့်ပေးရမယ်
    }

    public function productSearch(Request $request){
        $result= collect($this->data)->whereBetween('price',[$request->min,$request->max]);
        foreach ($result as $r){
            $product= new Product();
            $product->title= $r->title;
            $product->image=$r->image;
            $product->price= $r->price;
            $product->save();
        }

        return view('results',compact('result'));

    }
}
