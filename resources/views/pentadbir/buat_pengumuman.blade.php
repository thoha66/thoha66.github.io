@extends('layouts.master')

@section('title')
  Buat Pengumuman
@endsection

@section('begin_title_left')
  Buat Pengumuman
@endsection

@section('begin_title_right')
  <li><i class="fa fa-bullhorn"></i>&nbsp;<a href="#">Buat Pengumuman</a>&nbsp;&nbsp;
@endsection

@section('content')
  <div class="col-lg-12">
        <div class="row">

            <div class="col-lg-2"></div>
          <div class="col-lg-9">
            <div class="panel panel-grey">
              <div class="panel-heading">
                Login Form</div>
              <div class="panel-body pan">
                <form action="#" class="form-horizontal">
                  <div class="form-body pal">
                    <div class="form-group">
                      <label for="inputName" class="col-md-3 control-label">
                        Name</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-user"></i>
                          <input id="inputName" type="text" placeholder="" class="form-control"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-md-3 control-label">
                        Password</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-lock"></i>
                          <input id="inputPassword" type="text" placeholder="" class="form-control"></div>
                        <span class="help-block mbn"><a href="#"><small>Forgot password?</small> </a></span>
                      </div>
                    </div>
                    <div class="form-group mbn">
                      <div class="col-md-offset-3 col-md-6">
                        <div class="checkbox">
                          <label class="">
                            <div class="icheckbox_minimal-grey" style="position: relative;"><input tabindex="5" type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>&nbsp; Keep me logged in</label></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions pal">
                    <div class="form-group mbn">
                      <div class="col-md-offset-3 col-md-6">
                        <a href="#" class="btn btn-primary">Register</a>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary">
                          Login</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
            <div class="col-lg-3"></div>
        </div>
  </div>

@stop
