<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	public function emailsubscribe(Request $request)
    {

		
		$name=$request->name;
		$confirm=$request->confirm;
		$message=$request->message;

		$id = DB::table('guest_table')->insertGetId(
			array( 'guest_name' => $name,'email' =>'none','confirm' => $confirm,'message' => $message)
		);
		
		$mailControl = new MailController();
		$sendemail = $mailControl->sendsubscribe($name,$confirm);		
		
			$response = array(
			  'status' => 'success'
			  );
		

	  return response()->json($response); 
	//	return Redirect::to(URL::previous() . "#modal-konfirmasi-subscribe")->with('message', 'THANKS FOR YOUR MSG!');

    }
}
