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
                      <h1>Enroll Technician
                      </h1>
                  </div>
                </div>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Training Index</span>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Enroll Technician</span>
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

                      <div class="row">
                        <div class="col-xs-12">
                          <div class="col-xs-3">
                            {{ $events }}
                          <h5><b>Training Title:</b> Battery Training </h5>
                          <h5><b>Training Date:</b> January 1, 2018</h5>
                          <h5><b>Number of Participants:</b> 20</h5>
                        </div>
                        </div>
                      </div>

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


                            <div class="col-xs-9">
                              <div class="pull-right">

                                  <a class="btn btn-success" onclick="add_enrollee()" > <i class="fa fa-plus"></i>&nbsp;Add Technician</a>
                                  <a class="btn btn-info" onclick="add_enrollee()" > <i class="fa fa-plus"></i>&nbsp;Add New Technician</a>
                                  <a class="btn btn-danger" onclick="add_enrollee()" > <i class="fa fa-plus"></i>&nbsp;Process Training</a>

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
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td> </td>

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

    <div class="modal fade" id="add_enrollee_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:10000">
      <div class="modal-dialog" style="width:1250px;">
        <div class="modal-content admin-form">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Select to Enroll  Participants</h4>
          </div>
          <div class="modal-body">
            <div id="edit_event_alert"></div>
            <form id="edit_event_frm" action=""  method="post" enctype="multipart/form-data"  >
                 {{ csrf_field() }}


                 <div class="row">
                 <div class="col-xs-12" style="padding-left:40px; padding-right:40px;">
                   <div class="col-xs-6">
                    <h3 class="text-center">Colorful Example</h3>
                    <div class="well" style="max-height: 300px;overflow: auto;">
                      <ul id="check-list-box" class="list-group checked-list-box">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item" data-color="success">Dapibus ac facilisis in</li>
                          <li class="list-group-item" data-color="info">Morbi leo risus</li>
                          <li class="list-group-item" data-color="warning">Porta ac consectetur ac</li>
                          <li class="list-group-item" data-color="danger">Vestibulum at eros</li>
                        </ul>
                        <br />
                        <button class="btn btn-primary col-xs-12" id="get-checked-data">Get Checked Data</button>
                    </div>
                    <pre id="display-json"></pre>
                </div>
               </div>

             </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
<style>
/* CSS REQUIRED */
.state-icon {
    left: -5px;
}
.list-group-item-primary {
    color: rgb(255, 255, 255);
    background-color: rgb(66, 139, 202);
}

/* DEMO ONLY - REMOVES UNWANTED MARGIN */
.well .list-group {
    margin-bottom: 0px;
}
</style>
<script>
function add_enrollee(){
  $('#add_enrollee').html('');
  $('#add_enrollee_modal').modal({
  show: 'true'
  });

}

$(function () {
    $('.list-group.checked-list-box .list-group-item').each(function () {

        // Settings
        var $widget = $(this),
            $checkbox = $('<input type="checkbox" class="hidden" />'),
            color = ($widget.data('color') ? $widget.data('color') : "primary"),
            style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        $widget.css('cursor', 'pointer')
        $widget.append($checkbox);

        // Event Handlers
        $widget.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });


        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $widget.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $widget.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$widget.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $widget.addClass(style + color + ' active');
            } else {
                $widget.removeClass(style + color + ' active');
            }
        }

        // Initialization
        function init() {

            if ($widget.data('checked') == true) {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
            }

            updateDisplay();

            // Inject the icon if applicable
            if ($widget.find('.state-icon').length == 0) {
                $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
            }
        }
        init();
    });

    $('#get-checked-data').on('click', function(event) {
        event.preventDefault();
        var checkedItems = {}, counter = 0;
        $("#check-list-box li.active").each(function(idx, li) {
            checkedItems[counter] = $(li).text();
            counter++;
        });
        $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
    });
});
</script>

</body>
@endsection
