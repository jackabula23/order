@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>類別管理</h1>
            <a href="{{ url('admin/category/create')}}"><button type="button" class="btn btn-block btn-success" style="width:18%;"><i class="fas fa-plus"></i>新增類別</button></a>
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
                  <th width="10%">排序</th>
                  <th>id</th>
                  <th>類別名稱</th>
                  <th>分類筆數</th>
                  <th>查看次數</th>
                  <th>操作</th>
                </tr>
                </thead>
				<tbody>
					@foreach ($data as $v)
					<tr>
						<td><input class="col-xs-1" type="text" name="ord[]" onchange="changeOrder(this,{{$v->cate_id}})" value="{{$v->cate_order}}"></td>
						<td>{{$v->cate_id}}</td>
						<td>{{$v->_cate_name}}</td>
						<td>{{$v->cate_title}}</td>
            <td>{{$v->cate_view}}</td>
            <td>                        
              <a href="{{ url('admin/category/'.$v->cate_id.'/edit')}}"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>編輯</button></a>
              <a href="javascript:;" onclick="delCate({{$v->cate_id}})"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>刪除</button></a>
            </td>
					</tr>
					@endforeach
				</tbody>
          <tfoot>
            <tr>
              <th width="10%">排序</th>
              <th>id</th>
              <th>類別名稱</th>
              <th>分類筆數</th>
              <th>查看次數</th>
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
    function changeOrder(obj,cate_id) {
      let cate_order=$(obj).val();
      $.post("{{ url('admin/cate/changeorder') }}",{'_token':'{{csrf_token()}}','cate_id':cate_id,'cate_order':cate_order},function(data) {
        if (data.status==0) {
          layer.msg(data.msg,{icon:6});
        } else {
          layer.msg(data.msg,{icon:5});
        }
      });
    }
    function delCate(cate_id) {
      layer.confirm('您確定要刪除嗎？', {
        btn: ['確定','取消'] //按钮
      }, function(){
        $.post("{{url('admin/category/')}}/"+cate_id,{'_method':'delete','_token':"{{csrf_token()}}"}, function(data){
          if (data.status == 0) {
            //刷新当前界面
            location.href = location.href;
            layer.msg(data.msg,{icon:5});
          } else {
            layer.msg(data.msg,{icon:6});
          }
        });
        //layer.msg('的确很重要', {icon: 1});
      }, function(){

      });
    }
    
  </script>
@endsection

