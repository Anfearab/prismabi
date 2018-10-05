<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class welcomeUsersTest extends TestCase
{  
    /** @test*/
    function bienvenido_usuario_con_apodo()
    {
        $this->get('/saludo/Andres/tresmilagros')
            ->assertStatus(200)
            ->assertSee('Bienvenido Andres, Tu apodo es tresmilagros');
    }

    /** @test*/
    function bienvenido_usuario_sin_apodo()
    {
        $this->get('/saludo/Andres')
            ->assertStatus(200)
            ->assertSee('Bienvenido Andres');
    }

    /** @test*/
    function bienvenido_usuario()
    {
        $this->get('/saludo/Andres')
            ->assertStatus(200)
            ->assertSee('Bienvenido Andres');
    
    }  
    
    /** @test*/
    function editar_usuario()
    {
        $this ->get ('/usuarios/1234/edit')
            ->assertStatus(200)
            ->assertSee('USUARIO A EDITAR : 1234');
    }
    
    
   

   
}
