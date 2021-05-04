<?php

namespace shawon3719\Communication\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use shawon3719\Communication\Mail\CommunicationMailable;
use shawon3719\Communication\Models\Communication;

class CommunicationsController extends Controller
{
    public function index(){
        return view('communication::communication');
    }

    public function send(Request $request){
        Mail::to(config('communication.send_email_to'))
        ->send(new CommunicationMailable($request->message, $request->name, $request->email));
        Communication::create($request->all());
        return redirect(route('communication'));
    }
}
