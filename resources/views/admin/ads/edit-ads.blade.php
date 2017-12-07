@extends('admin.master-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit advertisement</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{url('administrator/ads/edit-ads')}}/{{$ads->id}}" method="post" id="form" enctype="multipart/form-data">
                                {!!csrf_field()!!}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{$ads->name}}">
                                    </div>
                                    @if ($errors->has('name'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" id="link" name="link" class="form-control" value="{{$ads->link}}">
                                    </div>
                                    @if ($errors->has('link'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('link') }}</strong>
                                          </span>
                                     @endif
                                     <div class="form-group">
                                         <label>700 x 87</label>
                                         <input type="file" name="image1" id="files1" value="{{$ads->image1}}"><br>
                                         <img alt=""  id="image1" style="width: 700px; height: 87px;">

                                     </div>

                                     <div class="form-group">
                                         <label>340 x 283</label>
                                         <input type="file" name="image2" id="files2" value="{{$ads->image2}}"><br>
                                         <img alt="" id="image2" style="width: 340px; height: 283px;">
                                     </div>

                                      <button type="submit" class="btn btn-success">Save</button>
                                      <button type="reset" class="btn btn-primary">Reset</button>
                                </div>
                            </form>

                        <!-- /.col-lg-8 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script type="text/javascript">
        document.getElementById("files1").onchange = function () {
           var reader = new FileReader();

           reader.onload = function (e) {
               // get loaded data and render thumbnail.
               document.getElementById("image1").src = e.target.result;
           };

           // read the image file as a data URL.
           reader.readAsDataURL(this.files[0]);
           };
    </script>
    <script type="text/javascript">
        document.getElementById("files2").onchange = function () {
           var reader = new FileReader();

           reader.onload = function (e) {
               // get loaded data and render thumbnail.
               document.getElementById("image2").src = e.target.result;
           };

           // read the image file as a data URL.
           reader.readAsDataURL(this.files[0]);
           };
    </script>
@stop
