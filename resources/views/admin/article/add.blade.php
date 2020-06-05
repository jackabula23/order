@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>新增文章</h1>
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
                <h3 class="card-title">新增文章</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('admin/article')}}" method="POST" enctype="multipart/form-data">
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
                    <label style="line-height:38px;">分類</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 80%; float:right;" name="cate_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="3" value="0">頂級分類</option>
                        @foreach ($data as $d)
                          <option value="{{$d->cate_id}}">{{$d->_cate_name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">文章標題</label>
                    <input type="text" class="form-control" name="art_title" style="width: 80%; float:right;" placeholder="請輸入標題">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">作者</label>
                    <input type="text" class="form-control" name="art_editor" style="width: 80%; float:right;" placeholder="請輸入作者名稱">
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">圖片上傳</label>
                    <input type="text" class="form-control" style="width: 80%; float:right;" name="art_thumb">
                    <input id="file_upload"  type="file" multiple="true">
                    <script src="{{asset('resources/org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                    <link rel="stylesheet" type="text/css" href="{{asset('resources/org/uploadify/uploadify.css')}}">
                    <script type="text/javascript">
                      <?php $timestamp = time();?>
                      $(function() {
                          $('#file_upload').uploadify({
                              'buttonText' : '上傳圖片',
                              'formData'     : {
                                  'timestamp' : '<?php echo $timestamp;?>',
                                  '_token'     : '{{csrf_token()}}'
                              },
                              'swf'      : "{{asset('resources/org/uploadify/uploadify.swf')}}",
                              'uploader' : "{{url('admin/upload')}}",
                              'onUploadSuccess' : function(file, data, response) {
                                  $('input[name=art_thumb]').val(data);
                                  $('#art_thumb_img').attr('src','http://127.0.0.1/order/'+data);
                              }
                          });
                      });
                  </script>
                  <style>
                        .uploadify{display:inline-block;}
                        .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                        table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                  </style>                 
                  </div>
                  <div class="form-group">
                    <img src="" alt="" id="art_thumb_img" style="max-width: 350px;max-height: 100px">                    
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">關鍵字</label>
                    <input type="text" class="form-control" name="art_tag" style="width: 80%; float:right;" placeholder="請輸入關鍵字">                    
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">描述</label>
                    <textarea class="form-control" name="art_description" rows="2" style="width: 80%; float:right;" placeholder="你想描述什麼"></textarea>
                  </div>
                  <div class="form-group">
                    <label style="line-height:38px;">文章內容</label>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>

                    <script id="editor" name="art_content" type="text/plain" style="width:620px;height:500px;"></script>
                    <script type="text/javascript">
                      var ue = UE.getEditor('editor');
                    </script>
                    <style>
                      .edui-default{line-height: 28px;}
                      div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                      {overflow: hidden; height:20px;}
                      div.edui-box{overflow: hidden; height:22px;}
                    </style>
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