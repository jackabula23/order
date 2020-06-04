@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>配置管理</h1>
            <a href="{{ url('admin/config/create')}}"><button type="button" class="btn btn-block btn-success" style="width:18%;"><i class="fas fa-plus"></i>新增配置</button></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">總類別</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{url('admin/config/changecontent')}}" method="post">
                {{csrf_field()}}
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="tc" width="5%">排序</th>
                      <th class="tc" width="5%">ID</th>
                      <th>標題</th>
                      <th>名稱</th>
                      <th>内容</th>
                      <th>操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $v)
                      <tr>
                        <td class="tc">
                          <input type="text" size="5" onchange="changeOrder(this,{{$v->conf_id}})" value="{{$v->conf_order}}">
                        </td>
                        <td class="tc">{{$v->conf_id}}</td>
                        <td>
                            <a href="#">{{$v->conf_title}}</a>
                        </td>
                        <td>{{$v->conf_name}}</td>
                        <td>
                            <input type="hidden" name="conf_id[]" value="{{$v->conf_id}}">
                            {!! $v->_html !!}
                        </td>
                        <td>
                            <a href="{{url('admin/config/'.$v->conf_id.'/edit')}}"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>編輯</button></a>
                            <a href="javascript::" onclick="delLinks({{$v->conf_id}})"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>刪除</button></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                        <th class="tc" width="5%">排序</th>
                        <th class="tc" width="5%">ID</th>
                        <th>標題</th>
                        <th>名稱</th>
                        <th>内容</th>
                        <th>操作</th>
                      </tr>
                  </tfoot>
                </table>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    function changeOrder(obj,conf_id) {
        var conf_order = $(obj).val();

        $.post("{{url('admin/config/changeorder')}}",{'_token':'{{csrf_token()}}','conf_id':conf_id,'conf_order':conf_order},function (data) {
            if(data.status == 0){
                layer.msg(data.msg,{icon:6});
            }else{
                layer.msg(data.msg,{icon:5});
            }
        })
    }

    //这里是删除配置项的提示框
    function delLinks(conf_id){
        layer.confirm('您确定要删除这个配置项吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //传异步参数
            $.post("{{url('admin/config/')}}/"+conf_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status == 0){
                    //刷新当前界面
                    location.href = location.href;
                    layer.msg(data.msg,{icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
//            alert(cate_id);
           // layer.msg('的确很重要', {icon: 1});
        }, function(){
//            layer.msg('也可以这样', {
//                time: 20000, //20s后自动关闭
//                btn: ['明白了', '知道了']
//            });
        });
    }

</script>
@endsection
