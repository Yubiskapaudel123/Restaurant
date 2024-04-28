<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Multiple_image;
use Illuminate\Http\Request;

class MultipleImageController extends Controller
{
    public function index()
    {
        $images = Multiple_image::all();
        
        return view('admin/multipleimage', ['images' => $images]);
    }
    public function manage_multipleimage(Request $request,$id='')
    {
        $result = [];

        if($id>0){
            $image = Multiple_image::findOrFail($id);
            $result['title']=$image->title;
            $result['image']=$image->image;
        }else{
            $result['title']='';
            $result['image']='';
        }
        
        return view('admin/manage_multipleimage', compact('result'));
    }

    public function manage_multipleimage_process(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);
     if ($request->post('id') > 0) {
        $model = Multiple_image::findOrFail($request->post('id'));
    } else {
        $model = new Multiple_image();
    }
       if($request->hasfile('image'))
       {
        foreach($request->file('image') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/', $name);
            $images[]=$name;
        }
       }
        
        $model->image = json_encode($images);
        $model->title = $request->title;
        $model->status = 1;
        $model->save();

        return redirect('admin/multipleimage')->with('message', 'Image uploaded successfully.');
    }

    public function delete(Request $request,$id)
    {
          $model=Multiple_image::find($id);
          $model->delete();
          $request->session()->flash('message', 'Image deleted');
          return redirect('admin/multipleimage');
    }

    public function status(Request $request,$status,$id)
    {
         $model=Multiple_image::find($id);
         $model->status=$status;
         $model->status = 1;
         $model->save();
         $request->session()->flash('message', 'Image status updated');
         return redirect('admin/multipleimage');
         
    }
}


