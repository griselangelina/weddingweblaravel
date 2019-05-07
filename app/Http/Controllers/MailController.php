<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Mail\EmailSubscribeEmail;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
 use Exception;
class MailController extends Controller
{

	public function sendsubscribe($name,$confirm)
    {
		
		try {
		 $objDemo = new \stdClass();
         $objDemo->name = $name;
         $objDemo->confirm = $confirm;

         Mail::to("griselangelina@gmail.com")->send(new EmailSubscribeEmail($objDemo)); //ganti jadi email ko leo/iche

		}
		catch (\Exception $e) {
			return "error";
		}
    }
	
}
