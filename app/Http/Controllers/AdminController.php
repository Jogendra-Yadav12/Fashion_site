<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use App\Mail\EmailDemo;
use Illuminate\Support\Facades\Mail;
class AdminController extends Controller
{
    public function adminPage($id = null){
        $user = Login::where('user_type','admin')->get();
        $value = null;
        if ($id) {
            $value = Login::where('id',$id)->first();
        }
        return view('Member.Add',['users'=>$user,'value'=>$value]); 
    }

    public function adminsave(Request $request)
    {
        $request->validate([
            'name'=>'required|regex:/^[\pL\s]+$/u|max:255',
            'phone'=>'required|numeric',
            'email'=> 'required|email:rfc,dns,filter',
            'password'=> 'required',
            'type'=>'required',

        ]);
       
        $data = Login::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'number' => $request->phone,
            'user_type'=>$request->type,
        ]);
        return redirect()->back()->with(['success'=>"User {$data->name} inserted successfully"]);
    }

    public function adminupdate(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|regex:/^[\pL\s]+$/u|max:255',
            'phone'=>'required|numeric',
            'email'=> 'required|email:rfc,dns,filter',
            'type'=>'required',
            ]);
        $data = Login::where('id',$id)->first();
        $data->name = $request->name;
        $data->number = $request->phone;
        $data->email = $request->email;
        $data->user_type = $request->type;
        $data->save();
        return redirect(url('add-admin'))->with(['success'=>"User {$data->name} Updated successfully"]);
    }
}
