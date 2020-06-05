<?php

namespace App\Repository;


use App\Models\ImageModel;
use Illuminate\Http\Request;
use App\Repository\RepositoryInterface;


use Image;

class ImageRepository implements RepositoryInterface{
    public function index()
    {
        return $datas=ImageModel::all();
        //return view('admin.product.index',['datas'=>$datas]);
    }

    public function store(Request $request)
    {
 
    }
    public function edit($id)
    {
        return $data=ImageModel::where(['image_id'=>$id])->first();
    }


    public function update(Request $request, $id)
    {
      $i=1;

       if($request->hasFile('general_image')){
  $general_image = $request->file('general_image');
  $filename1 = time().'.'.$general_image->getClientOriginalExtension();
  
  $location1 = public_path('productImages/'.$filename1);
  Image::make($general_image)->resize(200,200)->save($location1);
/*   ImageModel::where(['image_id'=>$id])->update([
  
  'general_image'=>$filename1,

]);*/

   ImageModel::where(['image_id'=>$id])->update([
  'general_image'=>$filename1.$i++
  

]);
}

   if($request->hasFile('thumbnail_image')){
  $thumbnail_image = $request->file('thumbnail_image');
  $filename2 = time().'.'.$thumbnail_image->getClientOriginalExtension();
  
  $location2 = public_path('productImages/'.$filename2);
  Image::make($thumbnail_image)->resize(200,200)->save($location2);
/*   ImageModel::where(['image_id'=>$id])->update([
  
  'thumbnail_image'=>$filename2

]);*/


   ImageModel::where(['image_id'=>$id])->update([
  
  'thumbnail_image'=>$filename2

]);

  
  
  
  
 }

         if($request->hasFile('featured_image')){
  $featured_image = $request->file('featured_image');
  $filename3 = time().'.'.$featured_image->getClientOriginalExtension();
  
  $location3 = public_path('productImages/'.$filename3);
  Image::make($featured_image)->resize(552,584)->save($location3);
/*     ImageModel::where(['image_id'=>$id])->update([
  
  'featured_image'=>$filename3

]);*/
   ImageModel::where(['image_id'=>$id])->update([
  
  'featured_image'=>$filename3

]);
  
 }
        if($request->hasFile('slider_image')){
  $slider_image = $request->file('slider_image');
  $filename4 = time().'.'.$slider_image->getClientOriginalExtension();
  
  $location4 = public_path('productImages/'.$filename4);
  Image::make($slider_image)->resize(181,181)->save($location4);
/*       ImageModel::where(['image_id'=>$id])->update([
  
  'slider_image'=>$filename4

]);*/
   ImageModel::where(['image_id'=>$id])->update([
  
  'slider_image'=>$filename4

]);
  
 }
         if($request->hasFile('back_image')){
  $back_image = $request->file('back_image');
  $filename5 = time().'.'.$back_image->getClientOriginalExtension();
  
  $location5 = public_path('productImages/'.$filename5);
  Image::make($back_image)->resize(200,200)->save($location5);
/*  ImageModel::where(['image_id'=>$id])->update([
  
  'back_image'=>$filename5

]);*/
   ImageModel::where(['image_id'=>$id])->update([
  
  'back_image'=>$filename5

]);

  
 }


 
 }


  

    public function delete($id)
    {
      ImageModel::where(['image_id'=>$id])->delete();
    }

    public function publish($id){
     
    }
    public function unPublish($id){
      
    }


    public function show($id)
    {
        return $obj=ImageModel::where(['image_id'=>$id])->first();
    }
    public function find($id){

    }
 
    public function search(Request $request){

    }
   
}

