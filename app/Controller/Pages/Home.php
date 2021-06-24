<?php
namespace App\Controller\Pages;

use App\Utils\View;

class Home{
    
    /**
     * Método responsável por retornar o conteúdo (View) da Home
     * @return string
     */
    public static function getHome(){
        return View::render('pages/home');
    }
}