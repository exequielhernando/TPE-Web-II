<?php

require_once('libs/Smarty.class.php');


class SignUpView {

    function __construct(){

    }
    public function DisplaySignUp(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"SignUp");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/signup.tpl');
    }
}
?>