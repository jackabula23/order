@extends('layouts.admin')

@section('content')
	  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>修改密碼</h1>
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
              <div class="col-md-5" style="position:relative; margin:0 auto;">
                <!-- /.card -->
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">修改密碼</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        {{csrf_field()}}
                        @if (count($errors)>0)
                            @if (is_object($errors))
                                @foreach ($errors->all() as $error)
                                <div class="card-header" style="background-color:#fff; border-bottom:none; margin-bottom:-30px; text-align:center;">
                                    <p class="text-danger">{{$error}}</p>
                                </div>
                                @endforeach
                            @else
                                <div class="card-header" style="background-color:#fff; border-bottom:none; margin-bottom:-30px; text-align:center;">
                                    <p class="text-danger">{{$errors}}</p>
                                </div>
                            @endif
                        @endif    
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">請輸入舊密碼</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" name="passwd_old" id="passwd_old" min="6" max="14" placeholder="請輸入舊密碼">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-4 col-form-label">請輸入新密碼</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" name="passwd" id="passwd" min="6" max="14" placeholder="請輸入新密碼(密碼最少6位最多14位)">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">請再次輸入新密碼</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" name="passwd_confirmation" id="passwd_confirmation" min="6" max="14" placeholder="請再次輸入新密碼">
                            </div>
                          </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">送出</button>
                        <button type="reset" class="btn btn-default float-right">重填</button>
                      </div>
                      <!-- /.card-footer -->
                     </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
@endsection
