@extends('admin.master-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Advertisement</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('add-ads')}}"class="btn btn-info"><i class="fa fa-plus"></i> Add advertisement</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Ads ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>700 x 87</th>
                                <th>340 x 283</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ads as $ad)
                            <tr class="odd gradeX">
                                <td>{{ $ad ->id }}</td>
                                <td>{{ $ad ->name }}</td>
                                <td>{{ $ad ->link }}</td>
                                <td><img src="{{asset('page/images/image1/'.$ad->image1)}}" alt="{{ $ad -> image1}}" style="width: 150px; height: 50px;"> </td>
                                <td><img src="{{asset('page/images/image2/'.$ad->image2)}}" alt="{{ $ad -> image2}}" style="width: 50px; height: 50px;"> </td>
                                <td class="center"><a href="{{url('administrator/ads/edit-ads')}}/{{$ad->id}}"><span class="glyphicon glyphicon-edit"></span></a> </td>
                                <td class="center"><a href="{{url('administrator/ads/delete-ads')}}/{{$ad->id}}"><span class="glyphicon glyphicon-trash"></span></a> </td>
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
