@extends('admin.master-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Article</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('admin/article/edit-article') }}/{{$article->id}}" method="post" id="form" enctype="multipart/form-data">
                                {!!csrf_field()!!}
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Select category</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{$article->title}}">
                                    </div>
                                    @if ($errors->has('title'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('title') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Thumbnail</label>
                                        <input type="file" id="thumbnail" name="thumbnail" value="{{$article->thumbnail}}">
                                    </div>
                                    @if ($errors->has('thumbnail'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('thumbnail') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="description"  class="form-control">{{$article->description}}</textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('description') }}</strong>
                                          </span>
                                     @endif
                                    <div class="form-group">
                                        <label>Hot News</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="hot" id="hot" value="1">Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="hot" id="hot" value="0" checked>No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <h1>Content</h1>
                                        <textarea name="content" id="content"  class="form-control" rows="15">{{$article->content}}</textarea>
                                        <script>CKEDITOR.replace('content');</script>
                                    </div>
                                    @if ($errors->has('content'))
                                          <span class="help-block" style="color:red;">
                                              <strong>{{ $errors->first('content') }}</strong>
                                          </span>
                                     @endif

                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
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

@stop
