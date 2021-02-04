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
                      <h1>Add Technician
                          <small>this form will help you add technician in the database</small>
                      </h1>
                  </div>
                </div>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span >Pre Enlistment</span>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Add Technician</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                  <div class="col-xs-12">

                    <div class="portlet box green ">
                        <div class="portlet-title">
                            <div class="caption">
                                Fill up the following fields</div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                <a href="" class="reload"> </a>
                                <a href="" class="remove"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                          <br />
                          <form role="form">
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Enrollee</label>
                                        <div class="col-md-8">
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.col-md-6 -->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Firstname</label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa fa-info-circle tooltips" data-original-title="Firstname" data-container="body"></i>
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                    </div>
                                  </div>

                                  <!-- /.col-md-6 -->

                              <br /><br /><br />
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">No</label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa fa-info-circle tooltips" data-original-title="Technician Number" data-container="body"></i>
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- /.col-md-6 -->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Lastname</label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa fa-info-circle tooltips" data-original-title="Lastname" data-container="body"></i>
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                    </div>
                                  </div>
                                  <br /><br /><br />
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Region</label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa fa-info-circle tooltips" data-original-title="Region" data-container="body"></i>
                                                    <input type="text" class="form-control"> </div>
                                            </div>
                                        </div>
                                      </div>
                                      <!-- /.col-md-6 -->
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Middle Initial</label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa fa-info-circle tooltips" data-original-title="Middle Initial" data-container="body"></i>
                                                    <input type="text" class="form-control"> </div>
                                            </div>
                                        </div>
                                      </div>
                                      <br /><br /><br />
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">City</label>
                                                <div class="col-md-8">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-info-circle tooltips" data-original-title="City" data-container="body"></i>
                                                        <input type="text" class="form-control"> </div>
                                                </div>
                                            </div>
                                          </div>
                                          <!-- /.col-md-6 -->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Store Address</label>
                                                <div class="col-md-8">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-info-circle tooltips" data-original-title="Store Address" data-container="body"></i>
                                                        <input type="text" class="form-control"> </div>
                                                </div>
                                            </div>
                                          </div>
                                          <br /><br /><br />
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Store Name</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Store Name" data-container="body"></i>
                                                            <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <!-- /.col-md-6 -->

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Remarks</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Remarks" data-container="body"></i>
                                                            <textarea class="form-control" rows="4"></textarea> </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <br /><br />
                                              <div class="col-md-6">
                                                    <input type="submit" value="Submit" class="btn btn-success"/>
                                                    <a class="btn btn-primary" href="{{ route('preenlistment')}}">Cancel</a>
                                            </div>
                                </div>
                          </form>
                        </div>
                      </div>


                  </div>
                </div>
            </div>
      </div>
    </div>


</body>
@endsection
