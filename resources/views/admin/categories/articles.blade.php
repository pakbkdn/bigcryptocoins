@extends('admin.master-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$category->name}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $index=>$article)
                                <tr class="odd gradeX">
                                    <td>{{ $index++}}</td>
                                    <td>{{ $article ->title }}</td>
                                    <td><img src="{{asset('page/images/thumbnail/'.$article->thumbnail)}}" alt="{{ $article ->title }}" style="width: 70px; height: 50px;"> </td>
                                    <td>{{ $article ->description }}</td>
                                    <td class="center"><a href="{{ url('administrator/article/edit-article') }}/{{$article->id}}"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                    <td class="center"><a href="{{url('administrator/article/delete-article')}}/{{$article->id}}"><span class="glyphicon glyphicon-trash"></span></a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop
