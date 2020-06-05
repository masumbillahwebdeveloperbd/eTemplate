<?php

namespace App\Repository;
use App\Models\Menufacture;
use App\Repository\RepositoryInterface;
use Illuminate\Http\Request;
class MenufactureRepository implements RepositoryInterface{
    public function index()
    {
        return $obj=Menufacture::paginate(100);
        
        
    }

    public function store(Request $request)
    {
        $obj=new Menufacture();
        $obj->name=$request->name;
        $obj->menufacture_description=$request->menufacture_description;
        $obj->publication_status=$request->publication_status;
        $obj->save();

        
    }
    public function edit($id)
    {
        //
    }
        public function update(Request $request, $id)
    {
        $obj=Menufacture::find($id);
        $obj->name=$request->name;
        $obj->menufacture_description=$request->menufacture_description;
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

