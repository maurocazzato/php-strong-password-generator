<?php

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+[]{}|;:,.<>?';
    $password = '';
    
    // applico un minimo e un massimo di caratteri
    if (!is_numeric($length) || $length < 8 || $length > 32) {
        $length = 8;
    }
    // ciclo per iterare casualmente la passw
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}
