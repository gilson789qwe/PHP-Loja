<?php

namespace App\Utils;

class View{

    /**
     * Método responsável por retorna o conteúdo de uma View
     * @param string $view
     * @return string
     */
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file):'';
    }

    /**
     * Método responsável por retorna o conteúdo renderizado de uma View
     * @param string $view
     * @return string
     */
    public static function render($view) {
        //CONTEÚDO DA VIEW
        $contentView = self::getContentView($view);

        //RETORNA CONTEúDO RENDERIZADO
        return $contentView;
    }

}