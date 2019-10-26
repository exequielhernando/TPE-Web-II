<?php

require_once('libs/Smarty.class.php');


class CategoryView {

    function __construct(){

    }

    public function DisplayCategoriaId($Category){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Categoria");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('list_Category',$Category);
        $smarty->display('templates/categoria.tpl');
    }

    public function DisplayEditCategoriaId($Category){

        $smarty = new Smarty();
        $smarty->assign('titulo',"EditCategoria");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('list_Category',$Category);
        $smarty->display('templates/editcategoria.tpl');

    }
}
?>