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
                      <h1>All Technician
                          <small>this will show all the technician in the database</small>
                      </h1>
                  </div>
                </div>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Dashboard</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                  <div class="col-xs-12">

                    <div class="container">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-default">
                            <div class="panel-heading">Full Calendar Example</div>
                            <div class="panel-body">
                        {!! $calendar->calendar() !!}
                              </div>
                          </div>
                      </div>
                  </div>
                </div>


                  </div>
                </div>
            </div>
      </div>
    </div>


</body>
@endsection
