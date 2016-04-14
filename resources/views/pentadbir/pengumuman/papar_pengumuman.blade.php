@extends('layouts.master')

@section('title')
  Daftar Guru
@endsection

@section('begin_title_left')
  Butiran Pengumuman
@endsection

@section('begin_title_right')
  <li><i class="fa fa-user "></i>&nbsp;<a href="#">Butiran Pengumuman</a>&nbsp;&nbsp;
@endsection

@section('content')
      <div class="col-lg-12">
        <div class="row">

          <div class="col-lg-2"></div>
          <div class="col-lg-9">
            <div class="panel panel-grey">
              <div class="panel-heading">
                Pengumuman</div>
              <div class="panel-body pan">
                <form class="form-horizontal">
                  <div class="form-body pal">

                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="inputTajuk" class="col-md-3 control-label">
                        Tajuk Pengumuman</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-info-circle"></i>
                          <input id="inputTajuk" type="text" placeholder="" class="form-control" name="tajuk" value="{{ $news->tajuk }}" disabled></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputTarikhMula" class="col-md-3 control-label">
                        Tarikh Mula</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-calendar"></i>
                          <input id="inputTarikhMula" type="date" placeholder="" class="form-control" name="tarikh_mula" value="{{ $news->tarikh_mula }}" disabled></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputTarikhAkhir" class="col-md-3 control-label">
                        Tarikh Akhir</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-calendar"></i>
                          <input id="inputTarikhAkhir" type="date" placeholder="" class="form-control" name="tarikh_akhir" value="{{ $news->tarikh_akhir }}" disabled></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputMasaMula" class="col-md-3 control-label">
                        Masa Mula</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-clock-o"></i>
                          <input id="inputMasaMula" type="time" placeholder="" class="form-control" name="masa_mula" value="{{ $news->masa_mula }}" disabled></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputMasaAkhir" class="col-md-3 control-label">
                        Masa Akhir</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-clock-o"></i>
                          <input id="inputMasaAkhir" type="time" placeholder="" class="form-control" name="masa_akhir" value="{{ $news->masa_akhir }}" disabled></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputTempat" class="col-md-3 control-label">
                        Tempat</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-compass"></i>
                          <input id="inputTempat" type="text" placeholder="" class="form-control" name="tempat" value="{{ $news->tempat }}" disabled></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputAktiviti" class="col-md-3 control-label">
                        Penerangan Aktiviti</label>
                      <div class="col-md-9">
                        <div class="input-icon right">
                          <i class="fa fa-list"></i>
                          <textarea rows="5" id="inputAktiviti" type="text" placeholder="{{ $news->penerangan_aktiviti }}" class="form-control" name="penerangan_aktiviti" disabled></textarea>
                          {{--<input id="inputAktiviti" type="text" placeholder="" class="form-control" name="penerangan_aktiviti"></div>--}}
                      </div>
                    </div>

                    {{--hiddent input--}}
                    <input type="hidden" name="admin_id" value="1">

                  </div>
                  <div class="form-actions pal">
                    <div class="form-group mbn">
                      <div class="btn pull-right">
                        {{--<a href="#" class="btn btn-primary">Register</a>&nbsp;&nbsp;--}}
                        <a href="{!! url('news/'.$news->id.'/edit') !!}" type="button" class="btn btn btn-warning btn-lg"><i class="glyphicon glyphicon-edit"></i>  Kemaskini</a>
                        <a href="{!! url('news/'.$news->id) !!}" type="button" class="btn btn btn-danger btn-lg"><i class="glyphicon glyphicon-remove-sign"></i>  Buang</a>
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
