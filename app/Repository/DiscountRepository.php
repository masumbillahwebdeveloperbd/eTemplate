<?php

namespace App\Repository;
use App\Models\Discount;
use App\Models\Coupon;
use App\Models\CategoryDiscount;
use App\Models\ProductDiscount;


use Illuminate\Http\Request;
use App\Repository\RepositoryInterface;




class DiscountRepository implements RepositoryInterface{
    public function index()
    {
        return $datas=Discount::all();
        //return view('admin.product.index',['datas'=>$datas]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $obj=new Discount();   
        
        $obj->discount_type=$request->discount_type;
        $obj->rate=$request->rate;
        $obj->rules=$request->rules;
        $obj->starting_date=$request->starting_date; 
        $obj->ending_date=$request->ending_date; 
        $obj->publication_status=$request->publication_status;
        $obj->save(); 
        $lastInsertedId = $obj->id;
        
        if($request->discount_type==3){
            $couponCode=$request->coupon_code;
            $obj1=new Coupon();
            $obj1->coupon_code=$couponCode;
            $obj1->discount_id=$lastInsertedId;
            $obj1->save();
        }
           if($request->discount_type==4){
            $categoryId=$request->category_id;
            $obj2=new CategoryDiscount();
            $obj2->category_id=$categoryId;
            $obj2->discount_id=$lastInsertedId;
            $obj2->save();
        }
           if($request->discount_type==5){
            $productId=$request->product_id;
            $obj3=new ProductDiscount();
            $obj3->product_id=$productId;
            $obj3->discount_id=$lastInsertedId;
            $obj3->save();
        }

    }
    public function edit($id)
    {
        return $data=Discount::where(['discount_id'=>$id])->first();
    }
    public function update(Request $request, $id)
    {
        $obj=Discount::find($id);  
        $obj->product_id=$request->product_id;
        $obj->discount_type=$request->discount_type;
        $obj->discount_rate=$request->discount_rate;
        $obj->active_status=$request->active_status;
        $obj->start_date=$request->start_date;
        $obj->end_date=$request->end_date;
        $obj->update();
    }

    public function delete($id)
    {
        return $obj=Discount::find($id)->delete();
    }

    public function publish($id){
    
    }
    public function unPublish($id){
      
    }


    public function show($id)
    {
        
    }
    public function find($id){

    }
 
    public function search(Request $request){

    }
   
}

