<?php

namespace App\Http\Controllers;

use App\Mail\Envio;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'email', 'result'=>Email::paginate(10), 'msg'=>""]);
    }
    
    public function subscribe(Request $request)
    {
        $email = new Email;
        $email->email = $request->email;
        $email->save();
        return redirect('/');
    }

    public function contact(Request $request)
    {
        Mail::to($request->email)->send(new Envio($request->all()));
        return view('contact',['msg'=> "Seu email foi enviado com sucesso!"]);
    }
}
