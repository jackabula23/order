@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>編輯文章</h1>
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
              <form role="form" action="{{url('admin/config/'.$field->conf_id)}}" method="POST">
                {{method_field('PUT')}}
                {{csrf_field()}}
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
                    <label style="line-height:38px;">標題</label>
                    <input type="text" class="form-control" name="conf_title" style="width: 80%; float:right;" value="{{$field->conf_title}}">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">名稱</label>
                    <input type="text" class="form-control" name="conf_name" style="width: 80%; float:right;" value="{{$field->conf_name}}">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">類型</label>
                    <input type="radio" class="sm" name="field_type" value="input" @if($field->field_type == 'input') checked @endif onclick="showTr()">input　
                    <input type="radio" class="sm" name="field_type" value="textarea"  @if($field->field_type == 'textarea') checked @endif onclick="showTr()">textarea　
                    <input type="radio" class="sm" name="field_type" value="radio"  @if($field->field_type == 'radio') checked @endif onclick="showTr()">radio
                  </div>
                  <div class="field_value">
                    <div class="form-group">
                      <label style="line-height:38px;">類型值</label>
                      <input type="text" class="form-control" name="field_value" style="width: 80%; float:right;" value="{{$field->field_value}}">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label style="line-height:38px;">排序</label>
                    <input type="text" class="form-control" name="conf_order" style="width: 80%; float:right;" value="{{$field->conf_order}}">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">說明</label>
                    <textarea id="" class="form-control" cols="30" rows="10" name="conf_tips">{{$field->conf_tips}}</textarea>
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
  <script>
    showTr();
    function showTr() {
        var type = $('input[name=field_type]:checked').val();
        if (type == 'radio'){
            $('.field_value').show();
        }else {
            $('.field_value').hide();
        }
    }
</script>
@endsection