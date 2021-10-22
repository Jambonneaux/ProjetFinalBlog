<?php

//Redirection vers ma page sign up

function user_controller_adduser(){
  render(VIEW_DIR.'/user/adduser.php');
}

//Redirection vers méssage d'érreur ou si ok vers page Login
function user_controller_errors($request){
    require_once(MODEL_DIR.'/user.php');
    $data = user_model_insert($request);
    if ($data == 5) {
        header('Location: ?module=user&action=adduser&msg=5');
    }
    elseif ($data == 4) {
        header('Location: ?module=user&action=adduser&msg=4');
    }
    elseif ($data == 3) {
        header('Location: ?module=user&action=adduser&msg=3');
    }
    elseif ($data == 2) {
        header('Location: ?module=user&action=adduser&msg=2');
    }
    elseif ($data == 1) {
        header('Location: ?module=user&action=adduser&msg=1');
    }
    else {
        header("Location: ?module=login&action=login");
    }
}


 ?>
