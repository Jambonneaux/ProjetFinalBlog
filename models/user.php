<?php
function user_model_insert($request){
 require(CONNEX_DIR);
 foreach ($request as $key => $value) {
     $$key = mysqli_real_escape_string($con, $value);
 }
 $errorNb = '';
 $isValid = true;
 $passRegex = '/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/';
 $nameRegex = '/^[a-zA-Z]*$/';
 $blacklisting = array('11111111111a', 'monmotdepasse1', 'motdepassesuper1', '1234567890ab');

 //Validation des inputs

 if ($name == '' && $password == '' && $username == '') {
    $isValid = false;
    $errorNb = '0';
    header('Location: ?module=user&action=adduser&msg=0');
 }
 if (strlen($name) < 2 || strlen($name) > 25) {
    $isValid = false;
    $errorNb = '1';
    header('Location: ?module=user&action=adduser&msg=1');
 }
 elseif (!preg_match($nameRegex, $name)) {
    $isValid = false;
    $errorNb = '2';
    header('Location: ?module=user&action=adduser&msg=2');
 }
 if (!preg_match($passRegex, $password)) {
    $isValid = false;
    $errorNb = '3';
    header('Location: ?module=user&action=adduser&msg=3');
 }
 if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
    $errorNb = '4';
    header('Location: ?module=user&action=adduser&msg=4');
 }
 if (!valideDate($birthday)) {
    $isValid = false;
    $errorNb = '5';
    header('Location: ?module=user&action=adduser&msg=5');
 }

 //Password hash

 $password_hash = password_hash($password, PASSWORD_BCRYPT);

 if ($isValid) {
     $sql = "INSERT INTO User (name, username, password, birthday) VALUES ('$name', '$username', '$password_hash', '$birthday')";
       $result = mysqli_query($con, $sql);
      mysqli_close($con);
 }
 if (!$errorNb == '' && !$isValid) {
    return $errorNb;
 }
}

function user_model_auth($request){
     require(CONNEX_DIR);
     foreach ($request as $key => $value) {
         $$key = mysqli_real_escape_string($con, $value);
     }

     $sql = "SELECT * FROM User WHERE username = '$username'";
     $result = mysqli_query($con, $sql);
     mysqli_close($con);

     $rowcount = mysqli_num_rows($result);
     $isValid = true;
     $errorNb = '';

     if ($rowcount == 1) {
         $user = mysqli_fetch_assoc($result);
         $dbpassword = $user['password'];

         if (!password_verify($password, $dbpassword)) {
             $isValid = false;
             $errorNb = 2;

         }
     }
     else {
        $isValid = false;
        $errorNb = 1;
     }
     return $errorNb;
}



 ?>
