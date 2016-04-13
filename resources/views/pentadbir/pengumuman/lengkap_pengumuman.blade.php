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
      <div class="panel panel-blue" style="background:#FFF;">
        <div class="panel-heading">Butiran Pengumuman</div>
        <div class="panel-body">
          <table class="table table-hover table-bordered">

            <tr >
              <th class="text-center">#</th>
              <th class="text-center">Nama Pelaku</th>
              <th class="text-center">Tajuk</th>
              <th class="text-center">Tindakkan</th>
            </tr>

            <tbody>

            <tr>
              <td>

              </td>
              <td class="text-center">
                {{ $news->admin->nama }}

              </td>
              <td class="text-center">
                {{ $news->tajuk }}
              </td>
              <td class="text-center">
                <a href="facebook.com" class="btn btn btn-info btn-sm"><i class="glyphicon glyphicon-info-sign"></i>  Maklumat Lengkap</a>
                <a type="button" class="btn btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i>  Kemaskini</a>
                <a type="button" class="btn btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove-sign"></i>  Buang</a>
              </td>
            </tr>

            @empty
              <tr>
                <td colspan="4">
                  <p class="alert alert-warning">Tiada pengumuman yang dijumpai ...</p>
                </td>
              </tr>
            @endforelse
            </tbody>

          </table>
<div class="text-center">
  {!! $newses->render() !!}
</div>



        </div>
      </div>
@stop
