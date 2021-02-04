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
                      <h1>Create User Roles
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
                        <span class="active">All Users Role</span>
                    </li>
                </ul>
<section class="vbox">
    <section class="scrollable padder">
        <section class="panel panel-default">
            <header class="panel-heading">

              <hr />
            </header>


    <form action="{{route('role.store')}}" method="post" role="form">
        {{csrf_field()}}
<div class="col-sm-6">
    <br>
    	<div class="form-group">
    		<label for="name">Name of role</label>
    		<input type="text" class="form-control" name="name" id="" placeholder="Name of role">
    	</div>
        <div class="form-group">
    		<label for="display_name">Display name</label>
    		<input type="text" class="form-control" name="display_name" id="" placeholder="Display name">
    	</div>
        <div class="form-group">
    		<label for="description">Description</label>
    		<input type="text" class="form-control" name="description" id="" placeholder="Description">
    	</div>
        <div class="form-group" >
            <label for="sub"></label>
            <input type="submit" class="form-control btn btn-primary" name="sub" id="" placeholder="sub">
        </div>
</div>
		{{--<select name="id" id="" multiple>--}}
			{{--<option value="1">men</option>--}}
			{{--<option value="2">men2</option>--}}
		{{--</select>--}}
<div class="col-sm-6" style="min-height:300px;">
        <div class="form-group text-left">
            <h3>Permissions</h3>

            @foreach($permissions as $permission)
    		<input type="checkbox"   name="permission[]" value="{{$permission->id}}" > {{$permission->name}} <br>
            @endforeach
    	</div>




</div>
<div>&nbsp;</div>
<!--
    	<button type="submit" class="btn btn-primary">Submit</button>
  -->
    </form>
     </section>
    </section>
 </section>

</div>
</div>
</div>



</body>
@endsection
