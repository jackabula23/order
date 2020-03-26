<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    protected $guarded=[];
    public $timestamps = false;

//第一種方法
public function tree()
{
    $categorys = $this->orderBy('cate_order','asc')->get();
    return $this->getTree($categorys,'cate_name','cate_id','cate_pid');
}

//第二種方法
// public static function tree()
// {
//     $categorys = Category::all();
//     return (new Category)->getTree($categorys,'cate_name','cate_id','cate_pid');
// }

public function getTree($data,$fieid_name,$fieid_id='id',$fieid_pid='pid',$pid=0)
    {
        $arr=array();
            foreach ($data as $k => $v) {
                if ($v->$fieid_pid==$pid) {
                    $data[$k]['_'.$fieid_name]=$data[$k][$fieid_name];
                    $arr[]=$data[$k];
                    foreach ($data as $m => $n) {
                        if ($n->$fieid_pid==$v->$fieid_id) {
                            $data[$m]['_'.$fieid_name]='->'.$data[$m][$fieid_name];
                            $arr[]=$data[$m];
                        }
                    }
                }
            }
        return $arr;
    }
}

