@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>新增導覽</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6" style="position:relative; margin:0 auto;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color:#28a745;">
                <h3 class="card-title">新增導覽</h3>
              </div>
              <!-- /.card-header -->
              
              <!-- form start -->
              <form role="form" action="{{url('admin/navs')}}" method="POST">
                {{ csrf_field() }}
                  @if(count($errors)>0)
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                          <div style="border-bottom:none; text-align:center;">
                            <p class="text-danger">{{$error}}</p>
                          </div>
                        @endforeach
                    @else
                  <div style="border-bottom:none; text-align:center;">
                    <p class="text-danger">{{$errors}}</p>
                  </div>
                  @endif
                @endif
                <div class="card-body">
                  <div class="form-group">
                    <label style="line-height:38px; float: left;">導覽名稱</label>
                    <input type="text" class="form-control" name="nav_name" style="width: 50%; float:right;" placeholder="請輸入導覽名稱">
                    <input type="text" class="form-control" name="nav_alias">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">URL</label>
                    <input type="text" class="form-control" name="nav_url" style="width: 80%; float:right;" value="http://">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">排序</label>
                    <input type="text" class="form-control" name="nav_order" style="width: 80%; float:right;" value="0">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="float: right; background-color:#28a745; border-color:#28a745;">確定新增</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection