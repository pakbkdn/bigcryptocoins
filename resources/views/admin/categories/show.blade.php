@extends('admin.master-admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('create-category')}}" class="btn btn-info"><i class="fa fa-plus"></i>Add Category</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($categories as $index => $category)
                            <tr class="odd gradeX">
                            	<td>{{$index++}}</td>
                            	<td><a href="{{url('administrator/category/'.$category->id)}}">{{$category->name}} ({{$category->articles->count()}})</a></td>
                                <td class="center"><a href="{{url('administrator/category/'.$category->id.'/edit')}}"><span class="glyphicon glyphicon-edit"></a></span></td>
                                <td class="center"><a href="{{url('administrator/category/'.$category->id.'/delete')}}" onclick="return confirm('Are you sure ?');"><span class="glyphicon glyphicon-trash"></a></span></td>
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
