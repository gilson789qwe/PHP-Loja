<?php
namespace App\Controller\Pages;

class Home{
    
    /**
     * Método responsável por retornar o conteúdo (View) da Home
     * @return string
     */
    public static function getHome(){
        return "Olá, Mundo";
    }
}