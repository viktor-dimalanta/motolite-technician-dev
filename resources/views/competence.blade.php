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
                      <h1>Competence
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
                            <div class="col-xs-12">
                              <div class="pull-right">
                                <a class="btn  btn-success" data-toggle="modal" href="#basic">  <i class="fa fa-plus"></i>&nbsp;Add </a>
                              </div>
                            </div>

                          </div>
                        </div>

                        </div>
                        <br />

                      <div class="row">
                      <div class="col-xs-12" style="padding-left:40px; padding-right:40px;">
                      <center>
                      <div class="table-scrollable" style="width:60%">
                          <table class="table table-striped table-hover">
                              <thead>
                                  <tr>
                                      <th> No. </th>
                                      <th> Competence </th>
                                      <th> Action </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td> 1 </td>
                                      <td> Mark </td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil-alt" style="color:green"></i></td>
                                  </tr>
                                  <tr>
                                      <td> 2 </td>
                                      <td> Jacob </td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil-alt" style="color:green"></i></td>
                                  </tr>
                                  <tr>
                                      <td> 3 </td>
                                      <td> Larry </td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil-alt" style="color:green"></i></td>
                                  </tr>
                                  <tr>
                                      <td> 4 </td>
                                      <td> Sandy </td>
                                      <td><i class="fa fa-eye" style="color:blue"></i>&nbsp;<i class="fa fa-pencil-alt" style="color:green"></i></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </center>
                    </div>
                  </div>
                      <br />
                      <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                      <h4 class="modal-title">Add New Competence</h4>
                                  </div>
                                  <div class="modal-body"> Click Add to more competence </div>
                                  <input type="hidden" name="count" value="1" />
                                    <div class="control-group" id="fields">
                                        <div class="controls" id="profs">
                                            <form class="input-append">
                                                <div id="field">
                                                  <center>

                                                  <input autocomplete="off" class="input form-control" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8" style="width:200px;"/><button id="b1" class="btn add-more" type="button" style="margin-top: -56px;margin-left: 232px;">+</button>

                                                  </center>
                                                </div>
                                            </form>
                                        <br>
                                        </div>
                                    </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn green">Save changes</button>
                                  </div>
                              </div>
                              <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                      </div>
                    </section>
                  </section>
                </section>


            </div>
            </div>
      </div>
    </div>


</body>

<script>
$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" style="width:200px;" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" style="margin-top: -56px;margin-left: 232px;" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });



});

</script>
@endsection
