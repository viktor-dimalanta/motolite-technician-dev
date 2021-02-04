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
                      <h1>Export Technician
                          <small>this will help to export technician data in the database</small>
                      </h1>
                  </div>
                </div>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Export Technician</span>
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

                            <div class="col-xs-6">
                              <div class="form-group">
                                  <div class="col-md-6" style="float:right">
                                      <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d" style="float:right;">
                                          <input type="text" class="form-control" placeholder="Start Date">
                                          <span class="input-group-btn">
                                              <button class="btn default" type="button">
                                                  <i class="fa fa-calendar"></i>
                                              </button>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d" >
                                  <input type="text" class="form-control" placeholder="End Date">
                                  <span class="input-group-btn">
                                      <button class="btn default" type="button">
                                          <i class="fa fa-calendar"></i>
                                      </button>
                                  </span>
                              </div>
                            </div>

                          </div>

                          <br /><br /><br />
                          <div class="col-xs-12">
                            <center>
                              <div>

                                  <select class="form-control" style="width:25%">
                                      <option>Option 1</option>
                                      <option>Option 2</option>
                                      <option>Option 3</option>
                                      <option>Option 4</option>
                                      <option>Option 5</option>
                                  </select>
                              </div>
                          </center>

                        </div>

                        <br /><br /><br />
                        <div class="col-xs-12">
                          <center>
                            <div>

                            <a class="btn btn-warning" href="{{ route('add_technician_directory')}} ">&nbsp;Export</a>

                            </div>
                        </center>
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
