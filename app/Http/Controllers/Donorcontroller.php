<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use DB;

class Donorcontroller extends Controller
{
    public function add(){
    	return view("donors.add-donor");
    }
    public function store(Request $request){

 				
    	$this->validate($request,[
    		'donor_name'=>'required',
    		'donor_address'=>'required',
    		'donor_email'=>'email',
    		'donor_phone'=>'required|numeric',
    		'donor_blood_group'=>'required'
    	]);
 $donors = new Donor;
 $donors->name = $request->donor_name;
  $donors->address = $request->donor_address;
   $donors->email= $request->donor_email;
    $donors->phone = $request->donor_phone;
     $donors->bloodgroup = $request->donor_blood_group;

     $donors->save();
     return redirect('/view-donor');

    }

    public function view(){
    	$donor = Donor::get()->all();
    	return view('donors.donor-show',compact('donor'));
    }

    public function deletedonor($id){
    	$donors = Donor::where('id',$id)->get()->first()->delete();
    	return redirect('/view-donor');
    }
    public function edit($id){
$donor = Donor::where('id',$id)->get()->first();
    	return view('donors.edit-donor',compact('donor'));
    
    }
    public function update(Request $request,$id){
    	$donors= Donor::where('id',$id)->get()->first();
 		$donors->name = $request->donor_name;
 		 $donors->address = $request->donor_address;
   		$donors->email= $request->donor_email;
    	$donors->phone = $request->donor_phone;
     $donors->bloodgroup = $request->donor_blood_group;
     $donors->save();
     return redirect('/view-donor');

}
} 
