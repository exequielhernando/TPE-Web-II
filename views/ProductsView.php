<?php

require_once('libs/Smarty.class.php');


class ProductsView {

    function __construct(){

    }

    public function DisplayProductsId($Products){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Products");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('list_Products',$Products);
        $smarty->display('templates/products.tpl');

    }
    public function DisplayEditProductsId($Products,$Category){

        $smarty = new Smarty();
        $smarty->assign('titulo',"EditProducts");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('list_Products',$Products);
        $smarty->assign('list_Category',$Category);
        $smarty->display('templates/editproducts.tpl');

    }
    public function DisplayFormEditProduct(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"FormEditProducts");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/formeditproduct.tpl');

    }
    public function VerFormEditProduct(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"FormEditProducts");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/formeditproduct.tpl');

    }
    public function DisplayOnlyProductId($Product){

        $smarty = new Smarty();
        $smarty->assign('titulo',"product");
        $smarty->assign('product',$Product);
        $smarty->display('templates/product.tpl');

    }
}
?>  