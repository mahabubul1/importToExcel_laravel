<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class CustomerController extends Controller
{

 public function index(){
     
    $customers=DB::table("customers")->paginate(15);
    return view("welcome")->with("customers",$customers);
 }
    ///customer add  
    public function save(Request $request){
          $customers= new Customer();
    	  $this->validate($request, [
	            "FirstName"=>"required",
	            "LastName"=>"required",
	            "Email"=>"required",
	            "Phone"=>"required",],

	            [
	             "FirstName.required"=>"Must be fill up this field",
	             "LastName.required"=>"Must be fill up this field",
	             "Email.required"=>"Must be fill up this field",
	             "Phone.required"=>"Must be fill up this field",

    	  	]);

        /* $customers->FirstName=>$request->FirstName,
          $customers->LastName=>$request->LastName,
          $customers->Email=>$request->Email,
          $customers->Phone=>$request->Phone,
          $customers->save();*/


        DB::table("customers")->insert([
        	"FirstName"=>$request->FirstName,
        	"LastName"=>$request->LastName,
        	"Email"=>$request->Email,
            "Phone"=>$request->Phone,

        ]);
    return redirect()->back();


    }

public function deleteAll(){
  DB::table("customers")->delete();
    return redirect()->back();

 }


}
