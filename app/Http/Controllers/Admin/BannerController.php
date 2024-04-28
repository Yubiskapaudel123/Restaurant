<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
     {
         $banners = Banner::all();
         return view('admin/banner', ['banners' => $banners]);
     }
    
    
    public function manage_banner(Request $request,$id='')
    {
        if($id>0){
            $arr=Banner::where(['id'=>$id])->get();
            $result['image']=$arr['0']->image;
            $result['id']=$arr['0']->id;
        }else{
            $result['image']='';
            $result['id']='';
        
        }
       
        return view('admin/manage_banner', $result);
    }

   
    public function manage_banner_process(Request $request)
    {
        $request->validate([
               'image'=>'required|image|mimes:jpeg,jpg,png;gif|max:2048',
        ]);
        if($request->post('id')>0){
        $model=Banner::find($request->post('id'));
        $msg="Banner updated";
        }else{
        $model= new Banner();
        $msg = "Banner inserted";
        }
       
       
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_name=time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/storage/media/banner/', $image_name);
            $model->image=$image_name;
            }
        $model->status=1;
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/banner');
    }
    
    public function delete(Request $request,$id)
    {
          $model=Banner::find($id);
          $model->delete();
          $request->session()->flash('message', 'Banner deleted');
          return redirect('admin/banner');
    }

    public function status(Request $request,$status,$id)
    {
         $model=Banner::find($id);
         $model->status=$status;
         $model->save();
         $request->session()->flash('message', 'Banner status updated');
         return redirect('admin/banner');
         
    }
}
