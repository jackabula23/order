<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends CommonController
{
    //get.admin/category 全部分類列表
    public function index()
    {
        //$categorys = Category::all(); 
        $categorys = (new Category)->tree();
        return view('admin.category.index')->with('data',$categorys);
    }

    public function changeOrder()
    {
        $input=Input::all();
        $cate=Category::find($input['cate_id']);
        $cate->cate_order=$input['cate_order'];
        $re=$cate->update();
        if ($re) {
            $data=[
                'status' => 0,
                'msg' => '排序更新成功'
        ];
        } else {
            $data=[
                'status' => 1,
                'msg' => '排序更新失敗'
        ];
        }
        return $data;
    }

    //get.admin/category/create 添加分類
    public function create()
    { 
        $data=Category::where('cate_pid',0)->get();
        return view('admin/category/add', compact('data'));
    }

    //post admin/category 添加分類提交
    public function store() {
        $input = Input::except('_token');//不需要_token数据，排除
            $rules = [
                'cate_name' => 'required',
            ];
            $msg = [
                'cate_name.required'=>'分類名稱不能空白哦',
            ];
            $validator = Validator::make($input,$rules,$msg);

            if ($validator->passes()){
                $re = Category::create($input);
                //寫入資料庫操作
                if ($re){
                    return redirect('admin/category');
                }else{
                    return back()->with('errors','新增失敗');
                }
            }else{
                return back()->withErrors($validator);
            }
        }

    //get.admin/category/{category}/edit 編輯分類
    public function edit($cate_id)
    { 
        $field = Category::find($cate_id);
        $data = Category::where('cate_pid',0)->get();
        return view('admin/category/edit', compact('field','data'));
        
    }

    //put.admin/category/{category} 更新分類
    public function update($cate_id)
    { 
        $input=Input::except('_token','_method');
        $re=Category::where('cate_id',$cate_id)->update($input);
        if ($re) {
            return redirect('admin/category');
        } else {
            return back()->with('errors','更新失敗');
        }
        
    }
    
    //get.admin/category/{category} 顯示單個分類訊息
    public function show()
    { }

    //delete.admin/category/{category} 刪除單個分類
    public function destroy($cate_id)
    { 
        $re=Category::where('cate_id',$cate_id)->delete();
        //刪除父級分類後，子分類就變成了父級分類
        Category::where('cate_pid',$cate_id)->update(['cate_pid'=>0]);
        if ($re) {
            $data=[
                'status'=> 0,
                'msg'=>'刪除成功',
            ];
        } else {
            $data=[
                'status'=> 1,
                'msg'=>'刪除失敗',
            ];
        }
        return $data;
    }

}
