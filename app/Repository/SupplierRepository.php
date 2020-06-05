<?php

namespace App\Repository;
use App\Models\Supplier;
use App\Repository\RepositoryInterface;
use Illuminate\Http\Request;
class SupplierRepository implements RepositoryInterface{
    public function index()
    {
        return $obj=Supplier::paginate(100);
        
        
    }

    public function store(Request $request)
    {
        $obj=new Supplier();
        $obj->name=$request->name;
        $obj->description=$request->description;
        $obj->publication_status=$request->publication_status;
        $obj->save();

        
    }
    public function edit($id)
    {
        //
    }
        public function update(Request $request, $id)
    {
        $obj=Supplier::find($id);
        $obj->name=$request->name;
        $obj->description=$request->description;
        $obj->publication_status=$request->publication_status;
        $obj->update();
    }

    public function delete($id)
    {
        Category::find($id)->delete();
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

