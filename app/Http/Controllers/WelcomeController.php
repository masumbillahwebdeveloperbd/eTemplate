<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Discount;
use App\Models\ProductDiscount;
use App\Models\Option;
use App\Models\ImageModel;
use DB;

class WelcomeController extends Controller
{
    public function index(){


         $imgProducts= DB::table('products')


     ->join('images','products.product_id','=','images.product_id')
     
  
   ->select('products.product_id','products.name','products.sell_price','images.general_image')
   
     ->get();

     $featutedImages=ImageModel::all();
    	        
    	return view('frontEnd.home.homeContent',
    		['imgProducts'=>$imgProducts,'featutedImages'=>$featutedImages]);
    }



    public function categoryProduct($id){


         $categoryProducts= DB::table('products')


     ->join('images','products.product_id','=','images.product_id')
  
   ->select('products.product_id','products.name','products.sell_price','images.general_image')
   ->where('products.category_id','=',$id)
     ->get();

        return view('frontEnd.category.categoryProduct',['categoryProducts'=>$categoryProducts]);
                 
    }
    public function productDetails($id){
   
      $productDetails= DB::table('products')         
      ->join('images','images.product_id','=','products.product_id')
      ->select('products.product_id','products.name','products.sell_price','products.short_description','products.long_description','images.general_image')
      ->where('products.product_id','=',$id)
      ->first();
       $productOptions=Option::where('product_id',$id)
                               ->get();

      $productDiscount=ProductDiscount::where('product_id',$id)
                               ->first();
      if ($productDiscount) {
        $discountId=$productDiscount->discount_id;
        $discount=Discount::where('discount_id',$discountId)
                  ->first();

                  return view('frontEnd.product.productDetails',['productDetails'=>$productDetails,'productOptions'=>$productOptions,'productDiscount'=>$productDiscount,'discount'=>$discount]);
      }
          
        else{
          return view('frontEnd.product.productDetails',['productDetails'=>$productDetails,'productOptions'=>$productOptions]);
        }

     
      /*  echo '<pre>';
                 print_r($discountCoupon);
                 exit();*/

    	
    }
  
}
