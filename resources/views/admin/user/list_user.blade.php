@extends('admin.master-admin')
@section('content')
    <div class="box box-primary">
         <div class="box-header with-border">
            <h1>Manage User</h1>
         </div>
         @if(session('infor'))    <!-- display infor -->
        <div class="alert alert-success">
            <p>{{ session('infor') }}</p>
        </div>
           @endif
           <div class="box">
               <div class="box-body">
                   <table class="table table-bordered" id="mytable" border="0">
                       <tr class="mytr" >
                         <th class="myth">User code</th>
                         <th class="myth">User name</th>
                         <th class="myth">Gender</th>
                         <th class="myth">Roles</th>
                         <th class="myth">Email</th>
                         <th class="myth">Phone Number</th>
                         <th class="myth">Change Roles</th>
                       </tr>
                       @foreach($users as $user)
                       <tr>
                           <td >{{$user->id}}</td>
                           <td ><b>{{$user->username}}</b></td>
                           <td >{{$user->gender}}</td>
                           <td >
                               @if(($user->roles)==2) Admin @endif
                               @if(($user->roles)==1) Editor @endif
                               @if(($user->roles)==0) User @endif
                           </td>
                           <td >{{$user->email}}</td>
                           <td >{{$user->phone_number}}</td>
                           <td ><a href="{{url('administrator/manage_user/changeroles')}}/{{$user->id}}" style="color:red" class="click"><button type="button" class="btn btn-success">Edit</button></a></td>
                       </tr>
                       @endforeach
                   </table>
               </div>
         </div>

    </div>
@stop
