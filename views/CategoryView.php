<?php

require_once('libs/Smarty.class.php');


class CategoryView {
    private $Smarty;
    function __construct(){
        $this->Smarty = new Smarty();
    }

    public function DisplayCategoriaId($Category){

        $this->Smarty->assign('titulo',"Categoria");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('list_Category',$Category);
        $this->Smarty->display('templates/categoria.tpl');
    }

    public function DisplayEditCategoriaId($Category,$User){

        $this->Smarty->assign('titulo',"EditCategoria");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('list_Category',$Category);
        $this->Smarty->assign('User',$User);
        $this->Smarty->display('templates/editcategoria.tpl');

    }
    public function DisplayFormEditCategory(){

        $this->Smarty->assign('titulo',"FormEditCategory");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->display('templates/formeditcategory.tpl');

    }
    public function VerFormEditCategory($category){

        $this->Smarty->assign('titulo',"FormEditCategory");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('category',$category);
        $this->Smarty->display('templates/formeditcategory.tpl');

    }
}
?>