@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>新增類別</h1>
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
              <div class="card-header">
                <h3 class="card-title">修改類別</h3>
              </div>
              <!-- /.card-header -->
              
              <!-- form start -->
              <form role="form" action="{{url('admin/category/'.$field->cate_id)}}" method="POST">
                <input type="hidden" name="_method" value="put">
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
                    <label style="line-height:38px;">父級分類</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 80%; float:right;" name="cate_pid" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="3" value="0">頂級分類</option>
                        @foreach ($data as $d)
                          <option value="{{$d->cate_id}}" 
                            @if ($d->cate_id==$field->cate_pid) selected 
                            @endif>{{$d->cate_name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">分類名稱</label>
                    <input type="text" class="form-control" name="cate_name" style="width: 80%; float:right;" value="{{$field->cate_name}}" placeholder="請輸入分類名稱">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">分類標題</label>
                    <input type="text" class="form-control" name="cate_title" style="width: 80%; float:right;" value="{{$field->cate_title}}" placeholder="請輸入分類標題">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">排序</label>
                    <input type="text" class="form-control" name="cate_order" style="width: 80%; float:right;" value="{{$field->cate_order}}" placeholder="請排序">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">描述</label>
                    <textarea class="form-control" name="cate_description" rows="2" style="width: 80%; float:right;" placeholder="你想描述什麼">{{$field->cate_description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">關鍵字</label>
                    <textarea class="form-control" name="cate_keywords" rows="2" style="width: 80%; float:right;" placeholder="請輸入關鍵字">{{$field->cate_keywords}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="float: right;">確定修改</button>
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