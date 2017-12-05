@extends('admin.master-admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
   <!-- left column -->
   <div class="col-md-12">
     <!-- general form elements -->
     <div class="box box-primary">
         <div class="box-header with-border">
               <nav class="navbar">
                  <div class="container-fluid">
                      <div class="navbar-header">
                         <a class="navbar-brand" class="mytile"><p class="myp">EDIT USERS</p></a>
                      </div>
                  </div>
               </nav>
         </div>

       @if(session('infor'))    <!-- display infor -->
          <div class="alert alert-success">
              <p>{{ session('infor') }}</p>
          </div>
       @endif
       <div class="box">
           <div class="box-body">
               <form role="form" action="{{url('administrator/user/editprofile')}}/{{$user->id}}" method="post" id="form">
                  {!!csrf_field()!!}
                   <div class="form-group">
                      <label for="user-name">User name</label>
                      <input type="text" name="user-name" class="form-control" id="user-name" value="{{$user->username}}">
                   </div>
                    @if ($errors->has('user-name'))
                         <span class="help-block">
                             <strong>{{ $errors->first('user-name') }}</strong>
                         </span>
                    @endif
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                           <option @if(($user->gender)== 'Male') selected @endif>Male</option>
                           <option @if(($user->gender)== 'Female') selected @endif>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}">
                   </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <div class="form-group">
                      <label for="text">Phone number</label>
                      <input type="number" name="phone_number" class="form-control" id="phone_number" value="{{$user->phone_number}}">
                    </div>
                    @if ($errors->has('phone_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif

                   <div class="box-footer">
                       <button type="submit" name="add" class="btn btn-primary click">save</button>
                   </div>
               </form>
           </div>
       </div>
</section>
<!-- /.content -->
@stop
