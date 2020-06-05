<?php

namespace App\Repository;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repository\RepositoryInterface;
use DB;
class InventoryRepository implements RepositoryInterface{
    public function index()
    {
        return $datas=Inventory::paginate(20);
        //return view('admin.product.index',['datas'=>$datas]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $obj=new Inventory();
        $obj->product_id=$request->product_id;
        $obj->quantity=$request->quantity;
        $obj->purchase_price=$request->purchase_price;
        if($request->purchasedate!=null){
        	$obj->purchasedate=$request->purchasedate;
        }
     
        
        $obj->save();

       $obj1= DB::table('products')->where('product_id',$request->product_id)->first();

       $q=$obj1->quantity;
    
      

        $obj2=Product::where(['product_id'=>$request->product_id])->update([

'quantity'=>$q+$request->quantity,
'purchase_price'=>$request->purchase_price
]
);
    
        
    }
    public function edit($id)
    {
        
    }
        public function update(Request $request, $id)
    {
     
    }

    public function delete($id)
    {
        
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





