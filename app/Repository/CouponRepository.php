<?php

namespace App\Repository;
use App\Models\Coupon;


use Illuminate\Http\Request;
use App\Repository\RepositoryInterface;




class CouponRepository implements RepositoryInterface{
    public function index()
    {
        return $datas=Coupon::all();
        //return view('admin.product.index',['datas'=>$datas]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $obj=new Coupon();   
        $obj->coupon_code=$request->coupon_code;
        $obj->active_status=$request->active_status;
        $obj->coupon_type=$request->coupon_type;

        $obj->application_rules=$request->application_rules;
        $obj->validaty=$request->validaty;
        $obj->discount_id=$request->discount_id;
        $obj->save();        
    }
    public function edit($id)
    {
        return $data=Coupon::where(['coupon_id'=>$id])->first();
    }
    public function update(Request $request, $id)
    {
        $obj=Coupon::find($id);  
        $obj->coupon_code=$request->coupon_code;
        $obj->active_status=$request->active_status;
        $obj->coupon_type=$request->coupon_type;
        $obj->application_rules=$request->application_rules;
        $obj->validaty=$request->validaty;
        $obj->discount_id=$request->discount_id;
        $obj->update();
    }

    public function delete($id)
    {
        return $obj=Coupon::find($id)->delete();
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

