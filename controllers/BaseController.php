<?php

//redirection vers ma page par défault (view/base/index)

function base_controller_index($request)
{
    render(VIEW_DIR.'/base/index.php');
}


 ?>
