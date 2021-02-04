@extends('layouts.master')
@section('content')
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo" style="overflow-x:hidden">


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
                      <h1>Pre Enlistment
                          <small>this will show all the pre enlisted technician</small>
                      </h1>
                  </div>
                </div>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Pre Enlistment</span>
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
                            <div class="col-xs-4">
                              <form class="search-form" action="page_general_search_2.html" method="GET">
                                  <div class="input-group">
                                      <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                                      <span class="input-group-btn">
                                          <a href="javascript:;" class="btn submit">
                                              <i class="icon-magnifier"></i>
                                          </a>
                                      </span>
                                  </div>
                              </form>

                            </div>

                            <div class="col-xs-8">
                              <div class="pull-right">
                                  <a class="btn btn-success" href="{{ route('add_technician')}} "> <i class="fa fa-plus"></i>&nbsp;Add</a>
                              </div>
                            </div>

                          </div>
                        </div>

                        </div>
                        <br />

                        <div class="row">
                           <div class="col-lg-12 col-lg-offset-4 text-center">

                                     <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                         <input type="text" class="form-control" readonly>
                                         <span class="input-group-btn">
                                             <button class="btn default" type="button">
                                                 <i class="fa fa-calendar"></i>
                                             </button>
                                         </span>
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
                                      <th></th>
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
                                      <td><i class="fa fa-times" style="color:red"></i></td>
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
                                      <td><i class="fa fa-times" style="color:red"></i></td>
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
                                      <td><i class="fa fa-times" style="color:red"></i></td>
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
                                      <td><i class="fa fa-times" style="color:red"></i></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                      <br />

                      <div class="row">
                         <div class="col-lg-12 col-lg-offset- text-center">
                           <a class="btn btn-primary" href=""> <i class="fa fa-check"></i>&nbsp;Enroll Now</a>

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
