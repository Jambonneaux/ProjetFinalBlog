<?php
$errorVide = '';
$errorName = '';
$errorName2 = '';
$errorPassword = '';
$errorDate = '';
$errorUsername = '';

//Affichage des érreurs.

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        $errorName = '*Votre nom doit être en 2 et 25 caractères.';
    }
    elseif ($_GET['msg'] == 2) {
        $errorName2 = '*Votre nom doit contenir que des lettres ou des espaces.';
    }
    elseif ($_GET['msg'] == 3) {
        $errorPassword = '*Password doit être de 12 caractères minimum et comporter 1 chiffre et une lettre minimum.';
    }
    elseif ($_GET['msg'] == 4) {
        $errorUsername = '*Adresse mail invalide.';
    }
    elseif ($_GET['msg'] == 5) {
        $errorDate = '*La date est invalide.';
    }
}
 ?>
<div class="box">
    <div class="wrapper box-flex">
        <h1 class="title-form">Sign up</h1>
        <form action="?module=user&action=errors" method="post" class="box-flex">
          <input class="inputs" type="text" name="name" maxlength="25" value="" placeholder="Name">
          <span class="errors"><?php echo $errorName; echo $errorName2?></span>
          <input class="inputs" type="email" name="username" maxlength="45" value=""  placeholder="Username/Email">
          <span class="errors"><?php echo $errorUsername; ?></span>
          <input class="inputs" type="password" name="password" placeholder="Password">
          <span class="errors"><?php echo $errorPassword; ?></span>
          <input class="inputs" type="text" name="birthday" maxlength="10" placeholder="Birthday : aaaa-mm-jj" value="">
          <span class="errors"><?php echo $errorDate; ?></span>
          <input type="submit" value="Create" class="btn">

        </form>
    </div>
</div>
