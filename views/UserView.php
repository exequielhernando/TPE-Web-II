<?php

require_once('libs/Smarty.class.php');


class UserView {

    function __construct(){

    }

    public function DisplayLogin(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Login");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/login.tpl');
    }
    public function ShowUsers($Users){
        $smarty = new Smarty();
        $smarty->assign('title',"Users");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('Users',$Users);
        $smarty->display('templates/users.tpl');
    }
}
?>