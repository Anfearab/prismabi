<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function conapodo($name,$nickname)
    {
        
        return "Bienvenido {$name}, Tu apodo es {$nickname}";
    }
    public function sinapodo($name)
    {
    
    return "Bienvenido {$name}";
    }
}
