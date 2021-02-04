<!DOCTYPE html>
<html>
<head>
    <title>Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
@include('admin.layout.includes.header')
<div class="page-content">
        @if(Session::has('message'))
            <div class="alert alert-info">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <div class="row">
        @include('admin.layout.includes.sidenav')
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->

<script src="https://code.jquery.com/jquery.js"></script>
<script src="{{asset('js/parsley.min.js')}}"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
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
@yield('js')
</body>
</html>
