<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\ImageRepository;
use App\Repository\ProductRepository;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ImageRepository $obj)
    {
        
        return view('admin.image.index',['datas'=>$obj->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProductRepository $obj1)
    {
        return view('admin.image.create',['productDatas'=>$obj1->index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ImageRepository $obj)
    {
         $obj->store($request);
        return redirect()->route('image.index');
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
    public function edit($id, ImageRepository $obj,ProductRepository $obj1)
    {
        return view('admin.image.edit',['data'=>$obj->edit($id),'productDatas'=>$obj1->index()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, ImageRepository $obj)
    {
        $obj->update($request, $id);
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,ImageRepository $obj)
    {
        $obj->delete($id);
        return redirect()->route('image.index');
    }
}
