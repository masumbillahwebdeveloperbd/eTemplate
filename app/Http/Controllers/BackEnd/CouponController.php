<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\DiscountRepository;
use App\Repository\CouponRepository;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(CouponRepository $obj)
    {
        return view('admin.coupon.index',['datas'=>$obj->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DiscountRepository $obj)
    {
        return view('admin.coupon.create',['discountDatas'=>$obj->index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CouponRepository $obj)
    {
        /*dd($request->all());*/
        $obj->store($request);
        return redirect()->route('coupon.index');
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
    public function edit($id, CouponRepository $obj, DiscountRepository $obj1)
    {
        return view('admin.coupon.edit',['data'=>$obj->edit($id),'discountDatas'=>$obj1->index()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, CouponRepository $obj)
    {
        $obj->update($request, $id);
        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id, CouponRepository $obj)
    {
        $obj->delete($id);
        return redirect()->route('coupon.index');
    }
}
