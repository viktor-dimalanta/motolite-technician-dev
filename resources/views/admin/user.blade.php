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
                      <h1>Users Management
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
                        <span class="active">All Users</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                  <div class="col-xs-12">

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
                                          <a class="btn btn-success" href="{{ route('user.create') }}"> <i class="fa fa-plus"></i>&nbsp;Create User</a>
                                      </div>
                                  </div>
                              </div>
                          </header>
                          <br>
                          <div class="row" style="margin-left: 0px; margin-right: 0px;">
                          <div style="width:80%; margin-left: 10%">

                          <form action="/search_user" method="POST" role="search" style=" display:inline!important;">
                          {{ csrf_field() }}
                              <div id="custom-search-input">
                                  <center>
                                          <div class="input-group col-md-6">
                                              <input type="text" name="q" class="form-control input-sm" placeholder="Search User" />
                                              <span class="input-group-btn">
                                                  <button class="btn btn-info btn-sm" type="submit">
                                                      <i class="glyphicon glyphicon-search"></i>
                                                  </button>
                                              </span>
                                          </div>
                                      </center>
                                      </div>
                          </form>

                              <br>
                              <table class="table table-bordered" >
                                  <tr>
                                      <th>Email</th>
                                      <th>Name</th>
                                      <th>Roles</th>
                                      <th><center>Status</center></th>
                                      <th><center>Action</center></th>
                                  </tr>
                                  @forelse($users as $user)
                                      <tr>
                                          <td>{{$user->email}}</td>
                                          <td>{{$user->fname}} {{$user->lname}}</td>
                                          <td>
                                              @foreach($user->roles as $role)
                                                  {{$role->name}}
                                              @endforeach

                                          </td>
                                          <td align="center">
                                              @if ( $user->status == '1')
                                              <input type="checkbox" checked data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"  data-size="mini"  class="livecheck" id= "{{$user->id}}" onclick=confirm('Press a button!'); >
                                              @else
                                              <input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"  data-size="mini"  class ="draftcheck" id="{{$user->id}}" >

                                              @endif


                                           </td>
                                          <td align="center">
                                              <!-- Button trigger modal -->
                                              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal-{{$user->id}}">
                                                 <i class="fa fa-edit"></i>
                                              </button>
                                              {{ Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete', 'style'=>'display:inline-block']) }}

                                                              <button type="submit" title="Delete Record?" class="btn btn-xs  btn-danger" onclick="return confirm('Are you sure you want to delete this?')" ><i class="fa fa-trash-o"></i></button>
                                                              {{ Form::close() }}


                                              <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal_pass-{{$user->id}}">
                                                 <i class="fa fa-key"></i>
                                              </button>

                                              <!-- Modal for change password-->


                                            <div class="modal fade"  id="myModal_pass-{{$user->id}}" data-id="{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document" style="width:400px;">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span></button>
                                                              <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                                                          </div>
                                                          <div class="modal-body" >
                                                              <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                              <input name="_method" type="hidden" value="PATCH">


                                                                  {{csrf_field()}}
                                                                  {{method_field('PATCH')}}
                                                                  <style type="text/css">
                                                              .block label { display: inline-block; width: 140px; text-align: left; }
                                                            </style>


                                                      {!! Form::open(array('route' => ['changepass', $user->id ], 'class' => 'form-horizontal')) !!}

                                                       <div class="form-group" style="margin-left: 0px; margin-right: 0px;">

                                                  <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                    <input  name="password" id="password" placeholder="New Password" class="form-control"  type="password">

                                                    </div>
                                                  </div>

                                                  <!-- Text input-->
                                                  <div class="form-group" style="margin-left: 0px; margin-right: 0px;">

                                                      <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                    <input name="confirmpass" id="confirmpass" placeholder="Confirm Password" class="form-control"  type="password">

                                                    </div>
                                                  </div>

                                                      <div class="form-group">
                                                          {!! Form::submit('Save',
                                                            array('class'=>'btn btn-primary')) !!}

                                                             {!! Form::submit('Close',
                                                            array('class'=>'btn btn-default', 'data-dismiss'=>'modal')) !!}
                                                      </div>

                                                      {!! Form::close() !!}

                                          </div>
                                      </div>
                                    </div>

                                    </div>






                                              <!-- Modal for edit CMS user-->
                                              <div class="modal fade" id="myModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                                          aria-hidden="true">&times;</span></button>
                                                              <h4 class="modal-title" id="myModalLabel">{{$user->name}} User Edit</h4>
                                                          </div>
                                                          <div class="modal-body" style="height: 140px;">
                                                              <form action="{{route('user.update',$user->id)}}" method="post" role="form" id="role-form-{{$user->id}}">
                                                                  {{csrf_field()}}
                                                                  {{method_field('PATCH')}}
                                                                  <style type="text/css">
                                                              .block label { display: inline-block; width: 140px; text-align: left; }
                                                            </style>
                                                          <div class="block">
                                                              <label><b>Email</b> </label>
                                                              <input type='text' name='email' value='{{$user->email}}'   />
                                                          </div>
                                                          <div class="block">
                                                              <label><b>Firstname</b> </label>
                                                              <input type='text' name='fname' value='{{$user->fname}}' />
                                                          </div>
                                                          <div class="block">
                                                              <label><b>Lastname</b> </label>
                                                              <input type='text' name='lname' value='{{$user->lname}}' />
                                                          </div>

                                                              <div class="block">

                                                                      <label><b>Role</b> </label>
                                                                      <select name="roles[]" style="width: 152px;">
                                                                          @foreach($allRoles as $role)
                                                                              <option value="{{$role->id}}">{{$role->name}}</option>
                                                                          @endforeach
                                                                      </select>


                                                              </div>
                                                                  {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                                                              </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                              <button type="submit" class="btn btn-primary" onclick="$('#role-form-{{$user->id}}').submit()">Save changes</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                  @empty
                                      <td>no users</td>
                                  @endforelse
                              </table>
                               {!! $users->render() !!}
                          <br><br>
                          </div>



                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->


                  </div>
                </div>
            </div>
      </div>
    </div>


</body>
@endsection
