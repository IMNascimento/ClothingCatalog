<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    
    public function subscribe(Request $request)
    {
        $email = new Email;
        $email->email = $request->email;
        $email->save();
        return redirect('/');
    }

    public function contact()
    {
        
    }
}
