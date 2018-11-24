<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Excel;
use App\Customer;
use App\Imports\UsersImport;
use App\Exports\CustomersExport;

class ExcelController extends Controller
{
   public function get(){
   	 return view ("excel.import");
   }

  public function PostImport(Request $request){
       $customers= Excel::import(new  UsersImport, $request->file("customer"));

  }
  public function Export(){
     return Excel::download(new CustomersExport, 'customer.xlsx');
     return back();

 }













}
