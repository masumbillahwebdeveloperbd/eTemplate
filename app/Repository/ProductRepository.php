<?php

namespace App\Repository;
use App\Models\Product;
use App\Models\Inventory;
use App\Models\ImageModel;
use Illuminate\Http\Request;
use App\Repository\RepositoryInterface;

use Illuminate\Support\Str;
use Image;

class ProductRepository implements RepositoryInterface{
    public function index()
    {
        return $datas=Product::all();
        //return view('admin.product.index',['datas'=>$datas]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $obj=new Product();
        $obj->name=$request->name;
        $obj->slug = Str::slug($request->name, '-');
        $obj->quantity=$request->quantity;
        $obj->purchase_price=$request->purchase_price;
        $obj->sell_price=$request->sell_price;
        $obj->short_description=$request->short_description;
        $obj->long_description=$request->long_description;
        $obj->re_order_level=$request->re_order_level;
        $obj->publication_status=$request->publication_status;
        $obj->category_id=$request->category_id;
        $obj->menufacture_id=$request->menufacture_id;
        $obj->supplier_id=$request->supplier_id;
        $obj->save();
        $lastInsertedId = $obj->id;
        
        $obj1=new Inventory();
        $obj1->product_id=$lastInsertedId;
        $obj1->quantity=$request->quantity;
        $obj1->purchase_price=$request->purchase_price;

        if($request->purchasedate!=null){
            $obj1->purchasedate=$request->purchasedate;
        }
        
        $obj1->save();

        $obj2=new ImageModel();
        $obj2->product_id=$lastInsertedId;

       if($request->hasFile('general_image')){
  $general_image = $request->file('general_image');
  $filename = time().'.'.$general_image->getClientOriginalExtension();
  $location = public_path('productImages/'.$filename);
  Image::make($general_image)->resize(200,200)->save($location);
  $obj2->general_image=$filename;
 }
 $obj2->save();

        
    }
    public function edit($id)
    {
        return $data=Product::where(['product_id'=>$id])->first();
    }

    
        public function update(Request $request, $id)
    {
        $obj=Product::where(['product_id'=>$id])->update([
        'name'=>$request->name,
      
        'quantity'=>$request->quantity,
        'purchase_price'=>$request->purchase_price,
        'sell_price'=>$request->sell_price,
        'short_description'=>$request->short_description,
        'long_description'=>$request->long_description,
        're_order_level'=>$request->re_order_level,
        'publication_status'=>$request->publication_status,
        'category_id'=>$request->category_id,
        'menufacture_id'=>$request->menufacture_id,
        'supplier_id'=>$request->supplier_id
        ]);
    
  
    }

    public function delete($id)
    {
        
       Product::where(['product_id'=>$id])->delete();
        //Product::find($id)->delete();
    }

    public function publish($id){
     return $obj=Product::where('product_id', $id)
          ->update(['publication_status' => 1]);
    }
    public function unPublish($id){
       return $obj=Product::where('product_id', $id)
          ->update(['publication_status' => 0]);
    }


    public function show($id)
    {
        return $obj=Product::where(['product_id'=>$id])->first();
    }
    public function find($id){

    }
 
    public function search(Request $request){

    }
   
}

