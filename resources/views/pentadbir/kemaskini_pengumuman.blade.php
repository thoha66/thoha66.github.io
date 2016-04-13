@extends('layouts.master')

@section('title')
  Daftar Guru
@endsection

@section('begin_title_left')
  Kemaskini Pengumuman
@endsection

@section('begin_title_right')
  <li><i class="fa fa-user "></i>&nbsp;<a href="#">Kemaskini Pengumuman</a>&nbsp;&nbsp;
@endsection

@section('content')
      <div class="panel panel-blue" style="background:#FFF;">
        <div class="panel-heading">Senarai Pengumuman</div>
        <div class="panel-body">
          <table class="table table-hover table-bordered">
            <thead>
            <tr>
              <th>#</th>
              <th>Nama Pelaku</th>
              <th>Tajuk</th>
              <th>Tindakkan</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=0; ?>
            @forelse ($newses as $news)

              <?php
              $no += 1;
              ?>

            <tr>
              <td>
                <?php echo $no; ?>
              </td>
              <td>
                {{ $news->admin->nama }}

              </td>
              <td>
                {{ $news->tajuk }}
              </td>
              <td>
                <span class="label label-sm label-success">Approved</span>
                <span class="label label-sm label-info">Pending</span>
                <span class="label label-sm label-warning">Suspended</span>
                <span class="label label-sm label-danger">Blocked</span>
              </td>
            </tr>

            @empty
              <tr>
                <td colspan="4">
                  <p class="alert alert-warning">No task found</p>
                </td>
              </tr>
            @endforelse
            </tbody>

          </table>
          {!! $newses->render() !!}
        </div>
      </div>
@stop
