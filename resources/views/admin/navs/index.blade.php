@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>導覽列管理</h1>
            <a href="{{ url('admin/navs/create')}}"><button type="button" class="btn btn-block btn-success" style="width:18%;"><i class="fas fa-plus"></i>新增導覽</button></a>
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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="tc" width="5%">排序</th>
                    <th class="tc" width="5%">ID</th>
                    <th>导航名称</th>
                    <th>别名</th>
                    <th>导航地址</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $v)
                    <tr>
                        <td><input type="text" size="5" onchange="changeOrder(this,{{$v->nav_id}})" value="{{$v->nav_order}}"></td>
                        <td class="tc">{{$v->nav_id}}</td>
                        <td>
                            <a href="#">{{$v->nav_name}}</a>
                        </td>
                        <td>{{$v->nav_alias}}</td>
                        <td>{{$v->nav_url}}</td>
                        <td>
                            <a href="{{url('admin/navs/'.$v->nav_id.'/edit')}}"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>編輯</button></a>
                            <a href="javascript::" onclick="delArt({{$v->nav_id}})"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>刪除</button></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="tc" width="5%">排序</th>
                        <th class="tc" width="5%">ID</th>
                        <th>导航名称</th>
                        <th>别名</th>
                        <th>导航地址</th>
                        <th>操作</th>
                    </tr>
                </tfoot>
              </table>
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
    function changeOrder(obj,nav_id) {
        var nav_order = $(obj).val();

        $.post("{{url('admin/navs/changeorder')}}",{'_token':'{{csrf_token()}}','nav_id':nav_id,'nav_order':nav_order},function (data) {
            if(data.status == 0){
                layer.msg(data.msg,{icon:6});
            }else{
                layer.msg(data.msg,{icon:5});
            }
        })
    }

    //这里是删除自定义导航的提示框
    function delnavs(nav_id){
        layer.confirm('您确定要删除这个导航吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //传异步参数
            $.post("{{url('admin/navs/')}}/"+nav_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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
