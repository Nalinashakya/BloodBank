<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization; 
use DB;
class Organizationcontroller extends Controller
{
    public function add(){
    	return view("organizations.add-organization");
    }
    public function store(Request $request){
    	$this->validate($request,[                                     
    		'org_name'=>'required',
    		'org_address'=>'required',
    		'org_email'=>'required|email',
    		'org_phone'=>'required|numeric',
    		'org_manager'=>'required',
    		'image'=>'required|image',
    	]);
 $organizations = new Organization;
 $organizations->name = $request->org_name;								
  $organizations->address = $request->org_address;
   $organizations->email= $request->org_email;
    $organizations->phone = $request->org_phone;
     $organizations->manager = $request->org_manager;
     
    if($request->image){
    	$file = $request->image;
    	$filename =time().$file->getClientOriginalName(); 
    	$destinationPath = "upload";
    	$file->move($destinationPath,$filename);
    	$organizations->image =$filename;
    }

     $organizations->save();
     return redirect('/view-organization');//yesko kam bujyo?

    }


    public function view(){
    	$organization = Organization::get()->all();
    	return view('organizations.organization-show',compact('organization'));
    }

    public function deleteorganization($id){

    	$org = Organization::where('id',$id)->get()->first();
    	if(file_exists('upload/'.$org->image)){
    		unlink('upload/'.$org->image);
    	}
    	$org = Organization::where('id',$id)->get()->first()->delete();
    	return redirect('/view-organization');

    }
    public function edit($id){
$org = Organization::where('id',$id)->get()->first();
    	return view('organizations.edit-organization',compact('org'));
    
    }
    public function update(Request $request,$id){
    	$organizations= Organization::where('id',$id)->get()->first();
    	$this->validate($request,[                                     
    		'org_name'=>'required',
    		'org_address'=>'required',
    		'org_email'=>'required|email',
    		'org_phone'=>'required|numeric',
    		'org_manager'=>'required',
    		'image'=>'required|image',
    	]);
 		$organizations->name = $request->org_name;
 	 $organizations->address = $request->org_address;
   	$organizations->email= $request->org_email;
    $organizations->phone = $request->org_phone;
     $organizations->manager = $request->org_manager;
     if($request->image){//hamro form ma image xa ki xaina vanera check gareko 
     	if(file_exists('upload/'.$organizations->image)){  
     		unlink('upload/'.$organizations->image); //yedi xa vane teslai delete gareko
     	}
    	$file = $request->image;
    	$filename =time().$file->getClientOriginalName(); 
    	$destinationPath = "upload";
    	$file->move($destinationPath,$filename);
    	$organizations->image =$filename;

    }
     $organizations->save();
     return redirect('/view-organization');
}
}

