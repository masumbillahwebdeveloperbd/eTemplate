<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\CategoryRepository;
use App\Repository\MenufactureRepository;
use App\Repository\SupplierRepository;
use App\Repository\ProductRepository;
use App\Repository\InventoryRepository;
use DB;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductRepository $obj)
    {
        
        return view('admin.product.index',['datas'=>$obj->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=DB::table('categories')
        ->where('parent_id','!=',null)
        ->get();

        $menufacture=new MenufactureRepository();
        $supplier=new SupplierRepository();
        
        if($category->count()==0){
            Session::flash('info','You must have some categories before attempting to create Product Table');
            return redirect()->back();
        }
        return view('admin.product.create',['categoryDatas'=>$category, 'menufactureDatas'=>$menufacture->index(),'supplierDatas'=>$supplier->index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProductRepository $obj)
    {
        //dd($request->all());
       /* $data=new ProductRepository();*/
       $obj->store($request);
       
        
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,ProductRepository $obj)
    {
        
        return view('admin.product.view',['data'=>$obj->show($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,ProductRepository $obj,CategoryRepository $obj1, MenufactureRepository $obj2, SupplierRepository $obj3)
    {
       // return "masum";
        return view('admin.product.edit',['data'=>$obj->edit($id),'categoryDatas'=>$obj1->index(),'menufactureDatas'=>$obj2->index(),'supplierDatas'=>$obj3->index()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, ProductRepository $obj)
    {
        $obj->update($request,$id);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id, ProductRepository $obj)
    {
        
        
        $obj->delete($id);
       // return redirect()->route('product.index');
    }
    public function publish($id,ProductRepository $obj){
        $obj->publish($id);
      return redirect()->route('product.index');
    }
    public function unPublish($id, ProductRepository $obj){
         $obj->unPublish($id);
      return redirect()->route('product.index');
    }
}
