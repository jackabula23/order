<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class CategoriesController extends CommonController
{
    //get.admin/category 全部分類列表
    public function index()
    {
        
        $categories=Categories::all();
        return view('admin.categories.index')->with('categories',$categories);
    }

    //get.admin/category/create 添加分類
    public function create()
    { 
        $categories=Categories::all();
        return view('admin/categories/add', compact('categories'));
    }

    //get.admin/category 添加分類提交
    public function store()
    { 
        $input = Input::except('_token');//不需要_token数据，排除
            $rules = [
                'cate_name' => 'required'
            ];
            $msg = [
                'cate_name.required'=>'類別名稱不能空白哦'
            ];
            $validator = Validator::make($input,$rules,$msg);
            if ($validator->passes()){
                $return = Categories::create($input);
                //寫入資料庫操作
                if ($return){
                    return redirect('admin/categories');
                }else{
                    return back()->with('errors','新增失敗');
                }
            }else{
                return back()->withErrors($validator);
            } 
    }

    //put.admin/category/{category} 更新分類
    public function update($cate_id)
    { 
        $input=Input::except('_token','_method');
        $re=Categories::where('cate_id',$cate_id)->update($input);
        if ($re) {
            return redirect('admin/categories');
        } else {
            return back()->with('errors','更新失敗');
        }
    }

    //get.admin/category/{category}/edit 編輯分類
    public function edit($cate_id)
    { 
        $field=Categories::find($cate_id);
        $categories=Categories::all();
        return view('admin/categories/edit', compact('field','categories'));
    }
    //get.admin/category/{category} 顯示單個分類訊息
    public function show()
    { }

    //delete.admin/category/{category} 刪除單個分類
    public function destroy()
    { }

}
