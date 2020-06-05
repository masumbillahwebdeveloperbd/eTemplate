<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menufacture;
use App\Repository\MenufactureRepository;

class MenufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datas=Menufacture::all();
        return view('admin.Menufacture.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Menufacture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MenufactureRepository $obj)
    {
        $obj->store($request);
        return redirect()->route('menufacture.index');
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
    public function delete($id)
    {
        Menufacture::where('menufacture_id',$id)->delete();
    }
        public function unPublish($id){
        $data=Menufacture::find($id);
        $data->publication_status=0;
        $data->save();
        return redirect()->back();
    }
      public function publish($id){
        $data=Menufacture::find($id);
        $data->publication_status=1;
        $data->update();
       /* Category::where('id', $id)
          ->update(['publication_status' => 1]);
          */
        return redirect()->back();
    }

}
