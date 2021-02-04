
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse" style='width:none'>
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">



            <li {{{ (Request::is('home') ? 'class=active open' : 'class=nav-item start') }}}>
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open">
                        <a href="{{url('/')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Dashboard 1</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="{{ route('all_technician') }}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">All Technician</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="heading">
                <h3 class="uppercase">Main</h3>
            </li>
            <!-- <li  {{{ (Request::is('preenlistment') ? 'class=active' : '') }}}>
                <a href="{{ route('preenlistment') }}" class="nav-link">
                    <i class="fa fa-bookmark"></i>
                    <span class="title">Pre-Enlistment</span>
                </a>
            </li> -->
            <li {{{ (Request::is('trainingindex') ? 'class=active' : '') }}}>
                <a href="{{ route('trainingindex') }}" class="nav-link nav-toggle">
                    <i class="fa fa-calendar"></i>
                    <span class="title">For Training Index</span>
                </a>
            </li>
            <li {{{ (Request::is('techniciandirectory') ? 'class=active' : '') }}}>
                <a href="{{ route('techniciandirectory') }}" class="nav-link nav-toggle">
                    <i class="icon-bulb"></i>
                    <span class="title">Technician Directory</span>
                </a>
            </li>
            <li {{{ (Request::is('competence') ? 'class=active' : '') }}}>
                <a href="{{ route('competence') }}" class="nav-link nav-toggle">
                    <i class="fa fa-bell"></i>
                    <span class="title">Competence</span>
                </a>
            </li>
            <li {{{ (Request::is('import') ? 'class=active' : 'class=nav-item start') }}} {{{ (Request::is('export') ? 'class=active' : 'class=nav-item start') }}}>
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Backup</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li {{{ (Request::is('import') ? 'class=active open' : '') }}}>
                        <a href="{{ route('import') }}" class="nav-link ">
                            <i class="fa fa-download"></i>
                            <span class="title">Import</span>
                        </a>
                    </li>
                    <li {{{ (Request::is('export') ? 'class=active open' : '') }}}>
                        <a href="{{ route('export') }}" class="nav-link ">
                            <i class="fa fa-upload"></i>
                            <span class="title">Export</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Users</h3>
            </li>
            <li {{{ (Request::is('users') ? 'class=active' : 'class=nav-item start') }}} {{{ (Request::is('roles') ? 'class=active' : 'class=nav-item start') }}}>
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Users</span>
                    <span class="arrow"></span>
                </a>

                <ul class="sub-menu">
                    <li {{{ (Request::is('users') ? 'class=active open' : '') }}}>
                        <a href="{{ route('users') }}" class="nav-link ">
                          <i class="icon-users"></i>
                            <span class="title">All Users</span>
                        </a>
                    </li>
                    <li {{{ (Request::is('roles') ? 'class=active open' : '') }}}>
                        <a href="{{ route('roles') }}" class="nav-link ">
                          <i class="icon-key"></i>
                            <span class="title">User Role</span>
                        </a>
                    </li>
                  </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
