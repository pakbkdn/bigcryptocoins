@extends('admin.master-admin')
@section('content')
<div class="body">
                              <h2 class="tttk"><b>Change password</b></h2><br>
                              <form name="xuly" action="{{ url('admin/user/change-password') }}" method="post">
                                  {!!csrf_field()!!}

                                  <label class="lb" for=""><b>Enter the old password</b></label><span class="sp">*</span><br>
                                  <input class="ip form-control" type="password" name="oldpassword" autofocus>
                                  @if ($errors->has('oldpassword'))
                                      <span class="help-block" style="color: red;">
                                          <strong>{{ $errors->first('oldpassword') }}</strong>
                                      </span>
                                  @endif
                                  <br><br>

                                  <label class="lb" for=""><b>Enter the new password</b></label><span class="sp">*</span><br>
                                  <input class="ip form-control" type="password" name="newpassword">
                                  @if ($errors->has('newpassword'))
                                      <span class="help-block" style="color: red;">
                                          <strong>{{ $errors->first('newpassword') }}</strong>
                                      </span>
                                  @endif
                                  <br><br>

                                  <label class="lb" for=""><b>confirm password</b></label><span class="sp">*</span><br>
                                  <input class="ip form-control" type="password" name="repassword">
                                  @if ($errors->has('repassword'))
                                      <span class="help-block" style="color: red;">
                                          <strong>{{ $errors->first('repassword') }}</strong>
                                      </span>
                                  @endif
                                  <br><br>

                                  <input class="btn btn-primary click" type="submit" value="save" name="submit">
                              </form>
                          </div>
@stop
