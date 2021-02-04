@extends('layouts.master')
@section('content')
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">


    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
      @include ('layouts.partials._navigation')

      <div class="page-content-wrapper">
          <!-- BEGIN CONTENT BODY -->
          <div class="page-content">
              <!-- BEGIN PAGE HEAD-->
              <div class="page-head">
                  <!-- BEGIN PAGE TITLE -->
                  <div class="page-title">
                      <h1>Import Technician
                          <small>this will help to import all technician in the databse</small>
                      </h1>
                  </div>
                </div>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Import Technician</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="content-wrapper">
                    <!-- Main content -->
                    <section class="content">

                      <section class="vbox">
                          <section class="scrollable padder">
                              <section class="panel panel-default">
                                  <header class="panel-heading">

                      <div class="row">
                              <div class="col-lg-12 margin-tb">

                                  <div class="pull-right">
a                                  </div>
                              </div>
                      </div>
                      </header>

                      <div >
                        <br />
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="col-xs-3">
                              <form class="search-form" action="page_general_search_2.html" method="GET">
                                  <div class="input-group">
                                      <input type="file" class="form-control input-sm" placeholder="Search Keyword" name="query">
                                  </div>
                              </form>

                            </div>
                            <div class="col-xs-3">
                              <div >
                                  <a class="btn btn-primary" href="{{ route('add_technician_directory')}} ">&nbsp;Import</a>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="pull-right">
                                  <a class="btn btn-success" href="{{ route('add_technician_directory')}} ">&nbsp;<i class="fa fa-download"></i>&nbsp;Download Template</a>
                              </div>
                            </div>

                          </div>
                          <div class="col-xs-12">
                            <div class="col-xs-3">
                            <i><h6>Note: max file size of 2MB</h6></i>
                            </div>
                          </div>
                        </div>

                        </div>

                      <br />

                    </section>
                  </section>
                </section>


            </div>
            </div>
      </div>
    </div>


</body>
@endsection
