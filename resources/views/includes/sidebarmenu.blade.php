<nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
    data-position="right" class="navbar-default navbar-static-side">
<div class="sidebar-collapse menu-scroll">
    <ul id="side-menu" class="nav">

         <div class="clearfix"></div>
        <li class="active"><a href="{{ url('laman-utama') }}"><i class="fa fa-tachometer fa-fw">
            <div class="icon-bg bg-orange"></div>
        </i><span class="menu-title">Laman Utama</span></a></li>

        <li><a href="{!! url('news/create') !!}"><i class="fa fa-bullhorn fa-fw">
            <div class="icon-bg bg-pink"></div>
        </i><span class="menu-title">Buat Pengumuman</span></a>

        </li>

        <li><a href="{!! url('news') !!}"><i class="fa fa-bullhorn fa-fw">
                    <div class="icon-bg bg-pink"></div>
                </i><span class="menu-title">Senarai Pengumuman</span></a>

        </li>

        <li><a href="{!! url('teacher/create') !!}"><i class="fa fa-user fa-fw">
            <div class="icon-bg bg-green"></div>
        </i><span class="menu-title">Daftar Guru</span></a>

        </li>

        <li><a href="{!! url('teacher') !!}"><i class="fa fa-user fa-fw">
                    <div class="icon-bg bg-green"></div>
                </i><span class="menu-title">Senarai Guru</span></a>

        </li>
        <li><a href="{!! url('student/create') !!}"><i class="fa fa-graduation-cap fa-fw">
            <div class="icon-bg bg-violet"></div>
        </i><span class="menu-title">Daftar Pelajar</span></a>

        </li>
        <li><a href="{!! url('student') !!}"><i class="fa fa-graduation-cap fa-fw">
                    <div class="icon-bg bg-violet"></div>
                </i><span class="menu-title">Senarai Pelajar</span></a>

        </li>
        <li><a href="{!! url('subject/create') !!}"><i class="fa fa-male fa-fw">
            <div class="icon-bg bg-violet"></div>
        </i><span class="menu-title">Daftar Penjaga</span></a>
        </li>
        <li><a href="{!! url('subject/create') !!}"><i class="fa fa-book fa-fw">
            <div class="icon-bg bg-blue"></div>
        </i><span class="menu-title">Daftar Subjek</span></a>

        </li>
        <li><a href="{!! url('subject') !!}"><i class="fa fa-book fa-fw">
                    <div class="icon-bg bg-blue"></div>
                </i><span class="menu-title">Senarai Subjek</span></a>
        </li>
        <li><a href="{!! url('classroom/create') !!}"><i class="fa fa-institution fa-fw">
            <div class="icon-bg bg-red"></div>
        </i><span class="menu-title">Daftar Kelas</span></a>

        </li>
        <li><a href="{!! url('classroom') !!}"><i class="fa fa-institution fa-fw">
                    <div class="icon-bg bg-red"></div>
                </i><span class="menu-title">Senarai Kelas</span></a>

        </li>
        <li><a href="{{ route('daftar-kelas-subjek') }}"><i class="fa fa-info-circle fa-fw">
            <div class="icon-bg bg-yellow"></div>
        </i><span class="menu-title">Daftar Kelas Subjek</span></a>

    </ul>
</div>
</nav>
