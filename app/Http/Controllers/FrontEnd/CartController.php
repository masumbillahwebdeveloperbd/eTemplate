<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use DB;
use Session;
use App\Models\Product;
use App\Models\ProductDiscount;
use App\Models\CategoryDiscount;
use Redirect;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontEnd.cart.cartPage');
    }

    public function addToCart($id){
            $productInfo=DB::table('products')
                    ->select('*')
                    ->where('product_id',$id)
                    ->first();
            $productImage=DB::table('images')
                    ->select('general_image')
                    ->where('product_id',$id)
                    ->first();
            $cartData=array();
            $cartData['id'] = $productInfo->product_id;
            $cartData['name'] = $productInfo->name;
            $cartData['price'] = $productInfo->sell_price;
            $cartData['quantity'] = 1;
            $cartData['attributes'] = 
            array('img'=>$productImage->general_image);
           
   $productDiscount=DB::table('product_discounts')
    ->join('discounts','product_discounts.discount_id','=','discounts.discount_id')
    ->join('products','product_discounts.product_id','=','products.product_id')
     ->select('products.sell_price','discounts.rate','discounts.rules','product_discounts.product_discount_id')
    ->where('product_discounts.product_id',$productInfo->product_id)
    ->first();

if($productDiscount){
if($productDiscount->sell_price>$productDiscount->rules){
$x='';
$y='';
$z='';
$z=Session::get('discount');
if($z!=null){
    $x=0;
    $y=0;
    $x=Session::get('discount');
    $y=(($productDiscount->rate*$productDiscount->sell_price)/100);
$x=$x+$y;
Session::put('discount',$x);
}
else{
  $x=0;
  $y=0;
  $y=(($productDiscount->rate*$productDiscount->sell_price)/100);
  $x=$x+$y;
  Session::put('discount',$x);
}


}
else{
    $pFinalDiscount=0;
}
}

/*}*/
$categoryDiscount=DB::table('products')
 ->join('category_discounts','category_discounts.category_id','=','products.category_id')
    ->join('discounts','category_discounts.discount_id','=','discounts.discount_id')
     ->select('products.sell_price','discounts.rate','discounts.rules','category_discounts.category_discount_id')
    ->where('product_id',$productInfo->product_id)
    ->first();
$cFinalDiscount='';
if($categoryDiscount){
if($categoryDiscount->sell_price>$categoryDiscount->rules){
$cFinalDiscount=(($categoryDiscount->rate*$categoryDiscount->sell_price)/100);
}

else{
    $cFinalDiscount=0;
}
}



/* echo '<pre>';
print_r($categoryDiscount);
    exit();*/

Cart::add($cartData);

return Redirect::to('/show-cart');
/*  echo '<pre>';
            print_r($cartData);
            exit();*/
    }
public function showCart(){
    $items = Cart::getContent();
return view('frontEnd.cart.cartPage',['items'=>$items]);
}

public function removeToCart($id,$q){
        $x='';
        $y='';
      
        $itm = Cart::getContent();
        

    $discount=DB::table('product_discounts')
    ->join('discounts','product_discounts.discount_id','=','discounts.discount_id')
     ->select('discounts.rate','product_discounts.product_discount_id')
    ->where('product_id',$id)
    ->first();
    $sellPrice=Product::where('product_id',$id)->value('sell_price');
if($discount){

    $y=Session::get('discount');
$x=($discount->rate*$sellPrice)/100;

$y=$y-($x*$q);
Session::put('discount',$y);

}
Cart::remove($id);

 $items = Cart::getContent();
            
return view('frontEnd.cart.cartPage',['items'=>$items]);
   
     //return view('frontEnd.cart.carPage');
    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function couponCode($id){
        //Coupon::where('')
     /*  $discount= Cart::getSubTotal()*$id/100;
      echo $discount;*/
    }
    public function removeSession(){
        Session::put('discount','');
        return redirect()->route('home');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addToInput($id){
        
    $discount=DB::table('coupons')
    ->join('discounts','coupons.discount_id','=','discounts.discount_id')
     ->select('discounts.rate','discounts.rules')
    ->where('coupon_code',$id)
    ->first();
   if (Cart::getSubTotal()>=$discount->rules){
            $vat=Cart::getSubTotal()*5/100;
            $tax=Cart::getSubTotal()*3/100;
            $discountProduct=array();
            $discountProduct['discount_total']=(Cart::getSubTotal()*$discount->rate)/100;
            $discountProduct['total']=Cart::getSubTotal()+$vat+$tax-$discountProduct['discount_total'];

            $myJSON = json_encode($discountProduct);

            echo $myJSON;
    }
    else{
               $vat=Cart::getSubTotal()*5/100;
               $tax=Cart::getSubTotal()*3/100;
               $discountProduct=array();
               $discountProduct['discount_total']=0;
               $discountProduct['total']=Cart::getSubTotal()+$vat+$tax-0;
               $myJSON = json_encode($discountProduct);
               echo $myJSON;
        
            }

   }
}


