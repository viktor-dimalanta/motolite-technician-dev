<meta charset="utf-8" />
<title>Metronic Admin Theme #4 | Admin Dashboard 2</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ URL::asset('global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('global/plugins/morris/morris.css" rel="stylesheet" type="text/css') }}" />
<link href="{{ URL::asset('global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{ URL::asset('global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ URL::asset('global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{{ URL::asset('/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{ URL::asset('layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" /> </head>



<script src="{{ URL::asset('global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ URL::asset('global/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ URL::asset('global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::asset('pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ URL::asset('layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>

<script type="text/javascript">


$( document ).ready(function() {
        $('.livecheck').change(function() {
        var stat = 0;
        var id=$(this).attr('id');
 $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        $.ajax({
            type : 'post',
            url : 'change_status',
            data :  {id: id, stat: stat},//Pass $id
            success : function(data){
            $('.fetched-data').html(data);

            }
        });
        });

            $('.draftcheck').change(function() {
            var stat = 1;
            var id=$(this).attr('id');
        $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        $.ajax({
            type : 'post',
            url : 'change_status',
            data :  {id: id, stat: stat},//Pass $id
            success : function(data){
             //setTimeout(function(){ location.reload(); }, 1);
             // alert("Status Changed to live!");
            $('.fetched-data').html(data);

            }
        });
          });
   });


</script>
