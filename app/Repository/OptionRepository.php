<?php

namespace App\Repository;
use App\Models\Option;


use Illuminate\Http\Request;
use App\Repository\RepositoryInterface;




class OptionRepository implements RepositoryInterface{
    public function index()
    {
        return $datas=Option::all();
        //return view('admin.product.index',['datas'=>$datas]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $obj=new Option();
        $obj->weight=$request->weight;
        $obj->color=$request->color;
        $obj->width=$request->width;
        $obj->height=$request->height;
        $obj->size=$request->size;
        $obj->product_id=$request->product_id;
        $obj->save();        
    }
    public function edit($id)
    {
        return $data=Option::where(['option_id'=>$id])->first();
    }
    public function update(Request $request, $id)
    {
        $obj=Option::find($id);
        $obj->weight=$request->weight;
        $obj->color=$request->color;
        $obj->width=$request->width;
        $obj->height=$request->height;
        $obj->size=$request->size;
        $obj->product_id=$request->product_id;
        $obj->update();
    }

    public function delete($id)
    {
        return $obj=Option::find($id)->delete();
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

