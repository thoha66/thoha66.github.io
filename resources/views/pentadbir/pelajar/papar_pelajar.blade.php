@extends('layouts.master')

@section('title')
  Papar Pelajar
@endsection

@section('begin_title_left')
  Papar Pelajar
@endsection

@section('begin_title_right')
  <li><i class="fa fa-user "></i>&nbsp;Papar Pelajar</li>
@endsection

@section('content')
    <div class="row">
  <div class="col-lg-12">
    <div class="row">

      <div class="col-lg-2"></div>
      <div class="col-lg-9">
        <div class="panel panel-grey">
          <div class="panel-heading">
            Papar Pelajar</div>
          <div class="panel-body pan">
              <form class="form-horizontal" action="{!! url('student/'.$student->id) !!}" method="POST" >
              <div class="form-body pal">

                {!! csrf_field() !!}

                <div class="form-group">
                  <label for="inputNSB" class="col-md-3 control-label">
                    No Surat Beranak</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="inputNSB" type="text" placeholder="" class="form-control" name="no_surat_beranak" value="{{ $student->no_surat_beranak }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputKp" class="col-md-3 control-label">
                    Kad Pengenalan</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="inputKp" type="text" placeholder="" class="form-control" name="no_kp" value="{{ $student->no_kp }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama" class="col-md-3 control-label">
                    Nama</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="nama" type="text" placeholder="" class="form-control" name="nama" value="{{ $student->nama }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tingkatan" class="col-md-3 control-label">
                    Tingkatan</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="tingkatan" type="text" placeholder="" class="form-control" name="tingkatan" value="{{ $student->tingkatan }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="classroom_id" class="col-md-3 control-label">
                    Kelas</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-info-circle"></i>
                      <input id="classroom_id" type="text" placeholder="" class="form-control" name="classroom_id" value="{{ $student->classroom->nama_kelas }} " disabled>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_kp_penjaga" class="col-md-3 control-label">
                    Kad Pengenalan Penjaga</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="no_kp_penjaga" type="text" placeholder="" class="form-control" name="no_kp_penjaga" value="{{ $student->no_kp_penjaga }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tarikh_lahir" class="col-md-3 control-label">
                    Tarikh Lahir</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="tarikh_lahir" type="date" placeholder="" class="form-control" name="tarikh_lahir" value="{{ $student->tarikh_lahir }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="alamat" class="col-md-3 control-label">
                    Alamat</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="alamat" type="text" placeholder="" class="form-control" name="alamat" value="{{ $student->alamat }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="poskod" class="col-md-3 control-label">
                    Poskod</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="poskod" type="text" placeholder="" class="form-control" name="poskod" value="{{ $student->poskod }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-md-3 control-label">
                    Email</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="email" type="text" placeholder="" class="form-control" name="email" value="{{ $student->email }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="umur" class="col-md-3 control-label">
                    Umur</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="umur" type="text" placeholder="" class="form-control" name="umur" value="{{ $student->umur }} " disabled></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jantina" class="col-md-3 control-label">
                    Jantina</label>
                  <div class="col-md-9">
                    <div class="input-icon right">
                      <i class="fa fa-user "></i>
                      <input id="jantina" type="text" placeholder="" class="form-control" name="jantina" value="{{ $student->jantina }} " disabled></div>
                  </div>
                </div>

                {{--hiddent input--}}
                <input type="hidden" name="admin_id" value="1">
                <input type="hidden" name="parent_id" value="1">

                <div class="form-actions pal">
                  <div class="form-group mbn">
                    <div class="btn pull-right">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <a href="{!! url('student/'.$student->id.'/edit') !!}" type="button" class="btn btn btn-warning btn-lg"><i class="glyphicon glyphicon-edit"></i>  Kemaskini</a>
                      <button type="submit" value="Submit" class="btn btn btn-danger btn-lg"><i class="glyphicon glyphicon-remove-sign"></i>   Buang</button>

                    </div>
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
  </div>
@stop
