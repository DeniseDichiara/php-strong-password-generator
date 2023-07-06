<?php 

if ( isset ($_GET['pswLength'])) {
    //*comportamneti che avvengono dopo la richiesta
}
function getRandomPassword($passwordLength){

    $characters  = 'qwertyuiopasdfghjklzxcvbnm';
    $numebers = '1234567890';
    $symbols = '!@#$%&()_+{}|:"<>?[]\;.';

    $actualCharacters = strtoupper($characters) .  $characters . $numebers .  $symbols;
    return $actualCharacters; 

    $newPassword = '';
}

echo getRandomPassword(1);

?>