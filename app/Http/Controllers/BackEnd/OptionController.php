<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\OptionRepository;
use App\Repository\ProductRepository;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OptionRepository $obj)
    {
        return view('admin.option.index',['datas'=>$obj->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProductRepository $obj)
    {
        
        return view('admin.option.create',['productDatas'=>$obj->index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,OptionRepository $obj)
    {
        $obj->store($request);
        return redirect()->route('option.index');
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
    public function edit($id,OptionRepository $obj,ProductRepository $obj1)
    {
        return view('admin.option.edit',['data'=>$obj->edit($id),'productDatas'=>$obj1->index()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, OptionRepository $obj)
    {
        /*dd($request->all());*/
        $obj->update($request, $id);
        return redirect()->route('option.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id, OptionRepository $obj)
    {
        $obj->delete($id);
        return redirect()->route('option.index');
    }
}
