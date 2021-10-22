<?php
$errorUsername = '';
$errorPassword = '';


//Affichage des érreurs.

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        $errorUsername = '*Username invalide.';
    }
    elseif ($_GET['msg'] == 2) {
        $errorPassword = '*Password invalide.';
    }
}
 ?>
<div class="box">
    <div class="wrapper box-flex">
        <h1 class="title-form">Login</h1>
        <form action="?module=login&action=auth" method="post" class="box-flex">
          <input class="inputs" type="email" name="username" maxlength="45" value=""  placeholder="Username/Email">
          <span class="errors"><?php echo $errorUsername;?></span>
          <input class="inputs" type="password" name="password" placeholder="Password">
          <span class="errors"><?php echo $errorPassword;?></span>
          <input type="submit" value="Login" class="btn2">

        </form>
    </div>
</div>
