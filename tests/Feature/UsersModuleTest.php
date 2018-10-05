<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test*/
    function listado_usuarios()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('andres')
            ->assertSee('daniel');
    }
    /** @test*/
    function mensaje_si_la_lista_esta_vacia()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No Hay Usuarios Registrados');
            
    }
   /** @test*/
   function detalles_de_usuario()
   {
       $this->get('/usuarios/5')
           ->assertStatus(200)
           ->assertSee('Mostrando detalles del usuario: 5');
   }

   /** @test*/
   function cargar_pagina_nuevo_usuario()
   {
       $this->get('/usuarios/nuevo')
           ->assertStatus(200)
           ->assertSee('esto funciona');
   }

   /** @test*/
   function menu_principal()
   {
       $this->get('/menu')
           ->assertStatus(200)
           ->assertSee('MENU');
   }

}
