<?php

namespace App\Repository;
use App\Models\Category;
use App\Repository\RepositoryInterface;
use Illuminate\Http\Request;

class CategoryRepository implements RepositoryInterface{
    public function index()
    {
        return $obj=Category::all();
        
        
    }

    public function store(Request $request)
    {
        $obj=new Category();
        $obj->name=$request->name;
        $obj->category_description=$request->category_description;
        $obj->parent_id=$request->parent_id;
        $obj->publication_status=$request->publication_status;
        $obj->save();

        
    }
    public function edit($id)
    {
        //
    }
        public function update(Request $request, $id)
    {
        $obj=Category::find($id);
        $obj->name=$request->name;
        $obj->category_description=$request->category_description;
        $obj->parent_id=$request->parent_id;
        $obj->publication_status=$request->publication_status;
        $obj->update();
    }

    public function delete($id)
    {
        Category::where('category_id',$id)->delete();
    }

    public function publish($id){

    }
    public function unPublish($id){

    }


    public function show($id)
    {
        //
    }
    public function find($id){

    }
 
    public function search(Request $request){

    }
   
}

