<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       if (request()->has('empty')){
           $users =[];
       } else {

        $users = ['andres','daniel','lesny','jobany','cristhian',];

    }
       
         $title ='Listado de usuarios';
         

        return view('users.index',compact('title','users'));
        
    }
    public function show($id)
    {
        return view('users.show',compact('id'));
    }
    public function create()
    {
        return 'esto funciona';
    }
    public function editar($ID)
    {
        return "USUARIO A EDITAR : {$ID}";
    }
    public function menuPrincipal()
    {
        return view('menu');
        
    }
    
}
