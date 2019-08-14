<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use Auth;
class UserProfileController extends Controller
{
  public function edituserpage($id){
    $userdata=UserProfile::find($id);
  	return view('edituser' ,compact('userdata'));
  }

  public function updateuserinfo(Request $request , $id){
    $data=UserProfile::find($id);
    $data->id=Auth::user()->id;
    $data->email=$request->email;
    $data->firstname=$request->firstname;
    $data->lastname=$request->lastname;
    $data->address=$request->address;
    $data->zipcode=$request->zipcode;
    $data->city=$request->city;
    $data->state=$request->state;
    $data->country=$request->country;
    $data->nearlocation=$request->nearlocation;
    $data->update();
    return redirect()->route('account');

  }

  public function account(){
    $id=Auth::user()->id;
    $data=UserProfile::find($id);

    // dd($data);
    return view('account' , compact('data'));
  }

  public function adduser(){
  	
  	return view('adduser');
  }

    public function storeuserinfo(Request $request){
      // dd($request->all());
  	$data= new UserProfile();
    $data->id=Auth::user()->id;
  	$data->email=$request->email;
  	$data->firstname=$request->firstname;
  	$data->lastname=$request->lastname;
  	$data->address=$request->address;
    $data->zipcode=$request->zipcode;
    $data->city=$request->city;
    $data->state=$request->state;
    $data->country=$request->country;
    $data->nearlocation=$request->nearlocation;
  	$data->save();
  	return redirect()->route('account');
  	
  }


}
