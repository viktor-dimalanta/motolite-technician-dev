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
                      <h1>User Roles
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
                    <header class="panel-heading" style=" min-height:50px;">
                        <div style="float: right;">
                            <a href="{{route('role.create')}}" type="button" class="btn btn-sm btn-primary dropdown-toggle">
                                <i class="fa fa-plus"></i>
                                            Create Role
                                        </a>
                        </div>

                    </header>


            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th><center>Action</center></th>
                </tr>

                @forelse($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->display_name}}</td>
                        <td>{{$role->description}}</td>
                        <td >
                            <center>
                            <form action="{{route('role.destroy',$role->id)}}"  method="POST">
                               {{csrf_field()}}
                               {{method_field('DELETE')}}

                               <a href="{{route('role.edit',$role->id)}}" class="btn btn-xs  btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                               <button type="submit" title="Delete Record?" class="btn btn-xs  btn-danger" onclick="return confirm('Are you sure you want to delete this?')" ><i class="fa fa-trash-o"></i></button>
                             </form>
                         </center>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>No roles</td>
                    </tr>
                    @endforelse

            </table>
                </section>
            </section>
         </section>

</div>
</div>
</div>



</body>

@endsection
