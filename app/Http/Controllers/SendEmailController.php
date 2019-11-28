<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   'this is test'
        );

     Mail::to('hyongyong0803@tutanota.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
