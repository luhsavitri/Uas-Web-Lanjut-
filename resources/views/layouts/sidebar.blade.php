<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/logopti.png" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dosen.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Data Dosen</span>
                </a>
                <a href="{{ route('jadwal.index') }}">
                    <i class="fa fa-dashboard"></i> <span>Data Jadwal Dosen</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
