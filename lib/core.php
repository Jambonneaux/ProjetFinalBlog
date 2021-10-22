<?php
function safe($param) {
    return addslashes($param);
}

function render($file, $data = null)
{
    $layout_file = VIEW_DIR.'/layouts/layout.php';
    ob_start();
    include_once($file);
    $content = ob_get_clean();
    include_once($layout_file);
}

function valideDate($date){
    if (preg_match('/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/', $date, $parts)) {
        if (checkdate($parts[2], $parts[3], $parts[1])) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}


 ?>
