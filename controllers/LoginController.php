<?php

//Redirection vers page Login (btn)

function login_controller_login(){
  render(VIEW_DIR.'/user/login.php');
}

//Redirection vers méssage d'érreurs sur la page login ou si pk  vers la page index.

function login_controller_auth($request){
    require_once(MODEL_DIR.'/user.php');
    $data = user_model_auth($request);
    if ($data == 1) {
        header('Location: ?module=login&action=login&msg=1');
    }
    elseif ($data == 2) {
        header('Location: ?module=login&action=login&msg=2');
    }
    else {
        header("Location: ?module=base&action=index");
    }
}



 ?>
