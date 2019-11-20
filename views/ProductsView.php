<?php

require_once('libs/Smarty.class.php');


class ProductsView {
    private $Smarty;
    function __construct(){
        $this->Smarty = new Smarty();
    }

    public function DisplayProductsId($Products){

        $this->Smarty->assign('titulo',"Products");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('list_Products',$Products);
        $this->Smarty->display('templates/products.tpl');

    }
    public function DisplayProductsCSR(){
        $this->Smarty->assign('titulo',"Lista de Productos CSR");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->display('templates/showproductscsr.tpl');
    }


    public function DisplayEditProductsId($Products,$Category){

        $this->Smarty->assign('titulo',"EditProducts");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('list_Products',$Products);
        $this->Smarty->assign('list_Category',$Category);
        $this->Smarty->display('templates/editproducts.tpl');

    }
    public function DisplayFormEditProduct($Products,$Category){
        $this->Smarty->assign('titulo',"FormEditProducts");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('list_Products',$Products);
        $this->Smarty->assign('list_Category',$Category);
        $this->Smarty->display('templates/formeditproduct.tpl');

    }
    public function VerFormEditProduct($product,$category){
        $this->Smarty->assign('titulo',"FormEditProducts");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('product',$product);
        $this->Smarty->assign('category',$category);
        $this->Smarty->display('templates/formeditproduct.tpl');

    }
    public function DisplayOnlyProductId($Product){

        $this->Smarty->assign('titulo',"product");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('product',$Product);
        $this->Smarty->display('templates/product.tpl');

    }
}
?>  