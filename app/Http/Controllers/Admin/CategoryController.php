<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Category::all();
        return view('admin/category', $result);
        
    }
    
    
    public function manage_category(Request $request,$id='')
    {
        if($id>0){
            $arr=Category::where(['id'=>$id])->get();
            $result['cat_title']=$arr['0']->cat_title;
            
            $result['id']=$arr['0']->id;
            $result['category']=DB::table('categories')->where(['status'=>1])->where('id','!=',$id)->get();
            
        }else{
            $result['cat_title']='';
            $result['id']=0;

        }
        $result['category']=DB::table('categories')->where(['status'=>1])->get();
        return view('admin/manage_category', $result);
    }

   
    public function manage_category_process(Request $request)
    {
        $request->validate([
               'cat_title'=>'required',
               
        ]);
        if($request->post('id')>0){
        $model=Category::find($request->post('id'));
        $msg="Category updated";
        }else{
        $model= new Category();
        $msg="Category inserted";
        }
        $model->cat_title=$request->post('cat_title');
        
        $model->status=1;
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/category');
    }
    
    public function delete(Request $request,$id)
    {
          $model=Category::find($id);
          $model->delete();
          $request->session()->flash('message', 'Category updated');
          return redirect('admin/category');
    }

    public function status(Request $request,$status,$id)
    {
         $model=Category::find($id);
         $model->status=$status;
         $model->save();
         $request->session()->flash('message', 'Category status updated');
         return redirect('admin/category');
         
    }
    
}
