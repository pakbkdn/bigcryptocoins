@extends('admin.master-admin')
@section('content')
    <div class="box-body">
        <h1>Edit User(change roles)</h1>
       <form role="form" action="{{url('administrator/manage_user/editusers')}}/{{$user->id}}" method="post" id="form">
          {!!csrf_field()!!}
           <div class="form-group">
              <label for="user-name">User name</label>
              <input type="text" name="user-name" class="form-control" id="user-name" value="{{$user->username}}" disabled>
           </div>
            <div class="form-group">
                <label for="Roles">Roles</label>
                <select name="roles" id="roles" class="form-control">
                   <option value="0" @if(($user->roles)==0) selected @endif>User</option>
                   <option  value="1" @if(($user->roles)==1) selected @endif>Editor</option>
                   <option  value="2" @if(($user->roles)==2) selected @endif>Admin</option>
                </select>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" disabled>
           </div>

            <div class="form-group">
              <label for="text">Phone number</label>
              <input type="number" name="phone_number" class="form-control" id="phone_number" value="{{$user->phone_number}}" disabled>
            </div>
            @if ($errors->has('phone_number'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
            @endif

           <div class="box-footer">
               <button type="submit" name="add" class="btn btn-primary click">Save</button>
           </div>
       </form>
   </div>
@stop
