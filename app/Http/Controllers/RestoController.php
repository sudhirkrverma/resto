<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurants;
use Session;
use App\Http\Middleware\Authenticate;
class RestoController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
       
        return view('home');
    }

    public function list(){
       $list=restaurants::all()->sortByDesc('created_at');
       return view('list')->with('lists',$list);
    }
    public function addResto(){
        return view('add');
    }
    public function registerData(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required'

        ]);
        $resto=new restaurants; 
        $resto->name=$request['name'];
        $resto->email=$request['email'];
        $resto->address=$request['address'];
        $resto->save();
        $request->session()->flash('status','Restaurant registered successfully');
        return \redirect('list');
    }
    
    public function edit(Request $request,$id){
        $data=array();
        $data=restaurants::find($id);
        // return $data->id;
        return view('edit')->with(['data'=>$data]);

    }

    public function updateData(Request $request){
        $id=$request->id;
        $data=$request->validate([
            'email'=>'required|email',
            'name'=>'required',
            'address'=>'required'
        ]);
        $update=restaurants::where('id','=',$id)->limit(1)->update(['email'=>$data['email'],'name'=>$data['name'],'address'=>$data['address']]);
        $request->session()->flash('status','Restaurant details updated successfully');

        return redirect('list');

    }

    public function delete($id)
    {   
       $data= restaurants::find($id);
       $data->delete();
        Session::flash('status','Restaurant has been deleted Successfully');
        return \redirect('list');

    }
}
