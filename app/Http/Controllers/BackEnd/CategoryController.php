<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repository\CategoryRepository;
use Session;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Category::all();
        $items=DB::table('categories')
               ->select('*')
               ->where('parent_id','=',null)
               ->get();
             /*  echo '<pre>';
               print_r($items);
               exit();*/
      return view('admin.category.index',['datas'=>$datas,'items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        
        $data=new Category();
        $data->name=$request->name;
        $data->category_description=$request->category_description;
        if($request->parent_id !=null){
            $data->parent_id=$request->parent_id;
        }
       

        
        $data->publication_status=$request->publication_status;
        $data->save();
        return redirect()->back();
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
    public function delete($id,CategoryRepository $obj)
    {
        $obj->delete($id);
        return redirect()->route('category.index');
    }
   
      public function unPublish($id){
        $data=Category::find($id);
        $data->publication_status=0;
        $data->save();
        return redirect()->back();
    }
      public function publish($id){
        $data=Category::find($id);
        $data->publication_status=1;
        $data->update();
       /* Category::where('id', $id)
          ->update(['publication_status' => 1]);
          */
        return redirect()->back();
    }

}
