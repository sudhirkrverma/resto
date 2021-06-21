<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
// use AuthenticateUser;
use Auth;
use Session;
class AuthController extends Controller
{
    //Here we will define the login and registration function
 

    public function register(Request $request){

        $data=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:3',
           
            
            

        ]);
     

        $data['password']=bcrypt($request->password);
        $request->session()->flash('message','Restaurant registered successfully');
        $user=User::create($data);

        // return $data;
        return \redirect('/')->with('message','You are registerd');


    }

    public function login(Request $request){
        $loginData=$request->validate([
            'email'=>'email|required',
            'password'=>'required'

        ]);
        if(!auth()->attempt($loginData)){
            return redirect('/login')->with('error', 'Invalid Email address or Password');
        }
        // $request->session()->put('user',$request->input('email'));
        $username=Session::put('email', $loginData['email']);
        return \redirect('/')->with('username',$username);


    }
    public  function logout(Request $request)
    {
       if(auth::check())
       {
           auth::logout();
           $request->session()->invalidate();

       }
       return \redirect('/login');

    }

}
