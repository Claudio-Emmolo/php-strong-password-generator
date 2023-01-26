<?php
include_once __DIR__ . '/index.php';

function generatePassword($length, $charactersForPassword)
{
    if (isset($length)) {
        $passwordString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomNumber = rand(1, strlen($charactersForPassword));
            $passwordString .= $charactersForPassword[$randomNumber];
        }
        return $passwordString;
    }
}
