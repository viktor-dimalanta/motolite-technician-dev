<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Hash;

class UserController extends Controller
{

    function __construct()
    {
      //  $this->middleware(['permission:role-edit','permission:role-delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $users=User::all();
       $users = User::whereHas('roles', function($q){
                 $q->where('name', 'administrator');
                 //->orWhere('name','tsd');
        })->get();
        $users = User::paginate(5);


        $allRoles=Role::all();
        return view('admin.user',compact(['users','allRoles']));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id');
        //show specific role only in dropdown
        //$roles = Role::where('name', 'administrator')->pluck('name','id');
        return view('auth.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',


        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('user.index')
                        ->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

      public function search(Request $request)
    {

        $allRoles=Role::all();
        $q = Input::get ( 'q' );

        //$roles = Role::where('name','like','%'.$q.'%');

        $users = User::where('email','like','%'.$q.'%')
                ->orWhere('fname','like','%'.$q.'%')
                ->orWhere('lname','like','%'.$q.'%')
                //->orWhere('roles','like','%'.$q.'%')
                ->orderBy('id')
                ->paginate(5);

                return view('admin.user',compact(['users','allRoles']));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$2y$10$YmrP6iW0xqDRlkyAShoj7.cTprHEtFWbgQXB2RwE6VQeAVYJ4uTDO
    }

    public function change_login_status(Request $request){
         $id = $_POST['id'];
         $status = $_POST['stat'];
         DB::table('users')->where('id', $id )
                            ->update(['status' => $status]);
    }

    public function change_cms_password(Request $request, $id){

         $validator = Validator::make($request->all(), [
           // 'email' => 'required|email|max:255',
            'password' => 'required|same:confirmpass|min:8',
        ]);

        if ($validator->fails()) {
            return back()->with('password_fail', ['Wrong Password']);
            //find password_fail div message on blade (app)
        }

        $password = request('password') ;
        $password_hash =  Hash::make($password);

        DB::table('users')->where('id', $id )
                            ->update(['password' => $password_hash]);

     return back()->withMessage('Password Updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
       $user->fname = request('fname');
       $user->lname = request('lname');
       $user->email = request('email');
       //additional fields for encoder
       //if CMS user is updated it will have null value

       $user->save();
        $roles=$request->roles;
       // DB::table('users')->where('email',$email)->save();
        DB::table('role_user')->where('user_id',$id)->delete();

        foreach ($roles as $role){
            $user->attachRole($role);
        }

        return back()->withMessage('Updated');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        Session::flash('message','User was successfully deleted');
        Session::flash('m-class','alert-success');
        return redirect('user');
    }
}
