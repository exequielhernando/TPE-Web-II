<?php

require_once('libs/Smarty.class.php');


class mayoristaropaView {

    function __construct(){

    }

    public function Displaymayoristaropa($mayoristaropa){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar mayoristaropa");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_mayoristaropa',$mayoristaropa);
        $smarty->display('templates/ver_mayoristaropa.tpl');
    }
}

?>