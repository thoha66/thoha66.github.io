@extends('layouts.master')

@section('title')
  Butiran Pengumuman
@endsection

@section('begin_title_left')
  Butiran Pengumuman
@endsection

@section('begin_title_right')
  <li><i class="fa fa-user "></i>&nbsp;Butiran Pengumuman</li>
@endsection

@section('content')

      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="panel panel-grey">
              <div class="panel-heading">
                Pengumuman
              </div>
              <div class="panel-body pan">
                <form class="form-horizontal" method="POST" action="{!! url('teacher/'.$teacher->id) !!}">
                  <div class="form-body pal">

                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="inputKp" class="col-md-3 control-label">
                        Kad Pengenalan
                      </label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-credit-card "></i>
                          <input id="inputKp" type="text" placeholder="" class="form-control" name="no_kp" value="{{ $teacher->no_kp }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputNama" class="col-md-3 control-label">
                        Nama Guru</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-user "></i>
                          <input id="inputNama" type="text" placeholder="" class="form-control" name="jenis_guru" value="{{ $teacher->nama }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputGK" class="col-md-3 control-label">
                        Guru Kelas</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-university"></i>
                          <input id="inputGK" type="text" placeholder="" class="form-control" name="guru_kelas" value="{{ $teacher->guru_kelas }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputJG" class="col-md-3 control-label">
                        Jenis Guru</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa fa-user-plus "></i>
                          <input id="inputJG" type="text" placeholder="" class="form-control" name="jenis_guru" value="{{ $teacher->jenis_guru }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="no_tel" class="col-md-3 control-label">
                        No Tel</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-volume-control-phone"></i>
                          <input id="no_tel" type="text" placeholder="" class="form-control" name="no_tel" value="{{ $teacher->no_tel }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="no_hp" class="col-md-3 control-label">
                        No HP</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-mobile"></i>
                          <input id="no_hp" type="text" placeholder="" class="form-control" name="no_hp" value="{{ $teacher->no_hp }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="tarikh_lahir" class="col-md-3 control-label">
                        Tarikh Lahir</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-calendar"></i>
                          <input id="tarikh_lahir" type="date" placeholder="" class="form-control" name="tarikh_lahir" value="{{ $teacher->tarikh_lahir }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="alamat" class="col-md-3 control-label">
                        Alamat</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-home"></i>
                          <input id="alamat" type="text" placeholder="" class="form-control" name="guru_kelas" value="{{ $teacher->alamat }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="poskod" class="col-md-3 control-label">
                        Poskod</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-braille"></i>
                          <input id="poskod" type="text" placeholder="" class="form-control" name="poskod" value="{{ $teacher->poskod }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">
                        Email</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-location-arrow"></i>
                          <input id="email" type="text" placeholder="" class="form-control" name="email" value="{{ $teacher->email }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="umur" class="col-md-3 control-label">
                        Umur</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-hashtag"></i>
                          <input id="umur" type="text" placeholder="" class="form-control" name="umur" value="{{ $teacher->umur }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="jantina" class="col-md-3 control-label">
                        Jantina</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-venus-mars"></i>
                          <input id="jantina" type="text" placeholder="" class="form-control" name="jantina" value="{{ $teacher->jantina }}">
                        </div>
                      </div>
                    </div>

                    <div class="form-actions pal">
                      <div class="form-group mbn">
                        <div class="btn pull-right">

                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <a href="{!! url('teacher/'.$teacher->id.'/edit') !!}" type="button" class="btn btn btn-warning btn-lg"><i class="glyphicon glyphicon-edit"></i>  Kemaskini</a>
                          <button type="submit" value="Submit" class="btn btn btn-danger btn-lg"><i class="glyphicon glyphicon-remove-sign"></i>   Buang</button>

                        </div>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
      </div>

@stop
