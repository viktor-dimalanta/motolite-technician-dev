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
                      <h1>Technician Directory
                          <small>this will show all the technician registered</small>
                      </h1>
                  </div>
                </div>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Technician Directory</span>
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
                                      <input type="text" class="form-control input-sm" placeholder="Search Keyword" name="query">
                                      <span class="input-group-btn">
                                          <a href="javascript:;" class="btn submit">
                                              <i class="icon-magnifier"></i>
                                          </a>
                                      </span>
                                  </div>
                              </form>

                            </div>

                            <div class="col-xs-2">
                              <div class="form-group">
                                  <select class="form-control">
                                      <option>Option 1</option>
                                      <option>Option 2</option>
                                      <option>Option 3</option>
                                      <option>Option 4</option>
                                      <option>Option 5</option>
                                  </select>
                              </div>
                            </div>
                            <div class="col-xs-2">
                              <div class="form-group">
                                  <select class="form-control">
                                      <option>Option 1</option>
                                      <option>Option 2</option>
                                      <option>Option 3</option>
                                      <option>Option 4</option>
                                      <option>Option 5</option>
                                  </select>
                              </div>
                            </div>
                            <div class="col-xs-2">
                              <div class="form-group">
                                  <select class="form-control">
                                      <option>Option 1</option>
                                      <option>Option 2</option>
                                      <option>Option 3</option>
                                      <option>Option 4</option>
                                      <option>Option 5</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-xs-3">
                              <div class="pull-right">
                                  <a class="btn btn-success" href="{{ route('add_technician_directory')}} "> <i class="fa fa-plus"></i>&nbsp;Add</a>
                              </div>
                            </div>

                          </div>
                        </div>

                        </div>
                        <br />

                      <div class="row">
                      <div class="col-xs-12" style="padding-left:40px; padding-right:40px;">
                      <div class="table-scrollable">
                          <table class="table table-striped table-hover">
                              <thead>
                                  <tr>
                                      <th> No. </th>
                                      <th> Region </th>
                                      <th> City </th>
                                      <th> Store Name </th>
                                      <th> Store Address </th>
                                      <th> Lastname </th>
                                      <th> Firstname </th>
                                      <th> MI</th>

                                      <th> Position</th>
                                      <th> Years In Service</th>
                                      <th> Birthday</th>
                                      <th> Educational Attainment</th>
                                      <th> Incentive</th>
                                      <th> Action</th>
                                      <th>Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td> 1 </td>
                                      <td> Mark </td>
                                      <td> Otto </td>
                                      <td> makr124 </td>
                                      <td>g</td>
                                      <td> Otto </td>
                                      <td> makr124 </td>
                                      <td>g</td>

                                      <td>Technician</td>
                                      <td>12</td>
                                      <td>September 1, 2010</td>
                                      <td>College Graduate</td>
                                      <td>5 points</td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil" style="color:green"></i></td>
                                      <td><input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"  data-size="mini"  class ="draftcheck"  ></td>
                                  </tr>
                                  <tr>
                                      <td> 2 </td>
                                      <td> Jacob </td>
                                      <td> Nilson </td>
                                      <td> jac123 </td>
                                      <td>g</td>
                                      <td> Otto </td>
                                      <td> makr124 </td>
                                      <td>g</td>

                                      <td>Technician</td>
                                      <td>12</td>
                                      <td>September 1, 2010</td>
                                      <td>College Graduate</td>
                                      <td>5 points</td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil" style="color:green"></i></td>
                                      <td><input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"  data-size="mini"  class ="draftcheck"  ></td>

                                  </tr>
                                  <tr>
                                      <td> 3 </td>
                                      <td> Larry </td>
                                      <td> Cooper </td>
                                      <td> lar </td>
                                      <td>g</td>
                                      <td> Otto </td>
                                      <td> makr124 </td>
                                      <td>g</td>

                                      <td>Technician</td>
                                      <td>12</td>
                                      <td>September 1, 2010</td>
                                      <td>College Graduate</td>
                                      <td>5 points</td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil" style="color:green"></i></td>
                                      <td><input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"  data-size="mini"  class ="draftcheck"  ></td>

                                  </tr>
                                  <tr>
                                      <td> 4 </td>
                                      <td> Sandy </td>
                                      <td> Lim </td>
                                      <td> sanlim </td>
                                      <td>g</td>
                                      <td> Otto </td>
                                      <td> makr124 </td>
                                      <td>g</td>

                                      <td>Technician</td>
                                      <td>12</td>
                                      <td>September 1, 2010</td>
                                      <td>College Graduate</td>
                                      <td>5 points</td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil" style="color:green"></i></td>
                                      <td><input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"  data-size="mini"  class ="draftcheck"  ></td>

                                  </tr>
                              </tbody>
                          </table>
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
