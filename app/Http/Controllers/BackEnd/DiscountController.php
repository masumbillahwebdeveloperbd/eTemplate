<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\DiscountRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Models\Discount;
use Session;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DiscountRepository $obj)
    {
        return view('admin.discount.index',['datas'=>$obj->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProductRepository $obj)
    {
        $dis=Discount::where('publication_status',1)
                                 ->first();
        if($dis->discount_type==1){
            Session::put('discountType','Fixed');
        }
        else if($dis->discount_type==2){
            Session::put('discountType','Percentage');
        }
        else if($dis->discount_type==4){
            Session::put('discountType','Category');
        }
        else if($dis->discount_type==5){
            Session::put('discountType','Product');
        }
        return view('admin.discount.create',['productDatas'=>$obj->index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,DiscountRepository $obj)
    {
        //dd($request->all());
        $obj->store($request);
        return redirect()->route('discount.index');
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
    public function edit($id, DiscountRepository $obj, ProductRepository $obj2)
    {
        return view('admin.discount.edit',
            ['data'=>$obj->edit($id),'productDatas'=>$obj2->index()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, DiscountRepository $obj)
    {
        $obj->update($request, $id);
        return redirect()->route('discount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
    public function discountImplement($id, CategoryRepository $obj,ProductRepository $obj1){
$categoryDatas=$obj->index();
$productDatas=$obj1->index();
/*echo '<pre>';
print_r($categoryDatas);
exit();*/
         if($id==3){
            echo '<div class="form-group"><label for="coupon_code">Coupon Code</label>
<input type="text" id="coupon_code" name="coupon_code" class="form-control"></div>';
         }
                if($id==4){
            echo '<div class="form-group"><label for="category_id">Category</label>

<select name="category_id" id="category_id" class="form-control">
    <option value="">Select</option>';
    foreach($categoryDatas as $categoryData){
        echo '
    <option value="';
   echo $categoryData->category_id;
  echo  '">';

   echo $categoryData->name;
}


   echo '</option>
</select>
</div>';
         }
if($id==5){
                echo '<div class="form-group"><label for="product_id">Product</label>

<select name="product_id" id="product_id" class="form-control">
    <option value="">Select</option>';
    foreach($productDatas as $productData){
        echo '
    <option value="';
   echo $productData->product_id;
  echo  '">';

   echo $productData->name;
}


   echo '</option>
</select>
</div>';

    }
    }
}
