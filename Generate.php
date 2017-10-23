<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $alphabet .= '0123456789';
    $alphabet .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alphabet .= '~`!@#$%^&*()-_\/\'";:,.+=<>? ';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 30; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
echo "\n\r\n\r" . randomPassword() . "\n\r\n\r";
?>
