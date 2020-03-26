@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>編輯類別</h1>
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
              <div class="card-header" style="background-color:#007bff;">
                <h3 class="card-title">編輯類別</h3>
              </div>
              <!-- /.card-header -->
              
              <!-- form start -->
              <form role="form" action="{{url('admin/categories/'.$field->cate_id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                @if(count($errors)>0)
                  @if(is_object($errors))
                      @foreach($errors->all() as $error)
                          <p class="text-danger" style="margin-top:15px; text-align:center;">
                            {{$error}}
                          </p>
                      @endforeach
                  @else
                  <p class="text-danger" style="margin-top:15px; text-align:center;">
                    {{$errors}}
                  </p>
                @endif
              @endif
                <div class="card-body">
                  <div class="form-group">
                    <label style="line-height:38px;">類別名稱</label>
                      <input type="text" class="form-control" name="cate_name" style="width: 80%; float:right;" value="{{$field->cate_name}}" placeholder="請輸入類別名稱" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="float: right; background-color:#007bff;">確定編輯</button>
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