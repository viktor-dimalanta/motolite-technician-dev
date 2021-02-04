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
                      <h1>Create CMS User
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
                        <span class="active">Create User</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                  <div class="col-xs-12">

                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                    <section class="content">
                      <section class="vbox">
                          <section class="scrollable padder">

                              <section class="panel panel-default">
                                  <header class="panel-heading">

                                      <h5>Fill up the following fields </h5>
                                  </header>


                          @if (count($errors) > 0)
                              <div class="alert alert-danger" style="margin-left: 20px; margin-right: 20px; margin-top: 10px;">
                                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
                          {!! Form::open(array('route' => 'user.store','method'=>'POST')) !!}
                          <div class="row" style="margin-left: 0px; margin-right: 0px;">
                              <br>
                              <div class="col-sm-6">


                                  <div class="form-group">
                                      <strong>Firstname:</strong>
                                      {!! Form::text('fname', null, array('placeholder' => 'Firstname','class' => 'form-control')) !!}
                                  </div>
                                  <div class="form-group">
                                      <strong>Lastname:</strong>
                                      {!! Form::text('lname', null, array('placeholder' => 'Lastname','class' => 'form-control')) !!}
                                  </div>


                                  <div class="form-group">
                                      <strong>Email:</strong>
                                      {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                  </div>
                                    <div class="form-group">
                                      <strong>Role:</strong>
                                      {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple', 'style' => 'height: 135px;')) !!}
                                  </div>
                              </div>


                              <div class="col-sm-6">

                                  <div class="form-group">
                                      <strong>Password:</strong>
                                      {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                  </div>
                                  <div class="form-group">
                                      <strong>Confirm Password:</strong>
                                      {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                  </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                       <br><br>
                              </div>

                          </div>
                          {!! Form::close() !!}

                               </section>
                          </section>
                       </section>
                    </div><!-- /.content-wrapper -->


                  </div>
                </div>
            </div>
      </div>
    </div>


</body>
@endsection
