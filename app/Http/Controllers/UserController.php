<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('users.index',[
            'idpage'=>'userindex',
            'title'=>'List of User'
         ])->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create',[
            'idpage'=>'usercreate',
            'title'=>'Create new User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email:dns|unique:users',
            'name'=>'required|unique:users',
            'password'=>'required|min:4',
            'roleid'=>'exists:roles,id'
        ]);

        //encrypt password before saving to db
        $request['password']=bcrypt($request['password']);
        User::create($request->all());
        return redirect()->route('users.index')->with('success','Create User Success');

    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      
        return view('users.show',compact('user'))->with([
            'title'=>'My Profile',
            'idpage'=>'userprofile'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'))->with([
            'title'=>'Edit User',
            'idpage'=>'useredit'
        ]);
       
    }

      /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email'=>'required|email:dns',
            'name'=>'required|max:50',
            'password'=>'required|min:4',
            'roleid'=>'exists:roles,id'
        ]);

        //encrypt password befor saving to db
        $request['password']=bcrypt($request['password']);
        $user->update($request->all());

        //check role from session
        //if non admin user we assume request from profile page
        //otherwise redirect to userlist its admin.... hopefully :P
        if(strtolower(trans($request->session()->get('rolename')))=='admin'){
            return redirect()->route('users.index')->with('success','User Update Success');
        }else{
            return redirect()->back()->with('success','User Update Success');
        }

    }
    

       /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','User Delete Success');
    }

    public function changePassword() {
        return view('dashboard.changepasswd')->with([
            'title'=>'Change Password',
            'idpage'=>'changepasswd'
        ]);
    }

    public function changePasswordPost(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:4|confirmed',
        ]);

        //Change Password
        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }

}
