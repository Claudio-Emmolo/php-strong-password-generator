<?php
include_once __DIR__ . '/index.php';


function generatePassword($length, $charactersForPassword, $repeatCharacters)
{
    $numberList = [];


    if (isset($length)) {

        $passwordString = '';
        for ($i = 0; $i < $length; $i++) {

            do {
                $randomNumber = rand(1, strlen($charactersForPassword));
            } while ((in_array($randomNumber, $numberList)) && ($repeatCharacters == 'false'));

            $numberList[] = $randomNumber;

            $passwordString .= $charactersForPassword[$randomNumber];
        }
        return $passwordString;
    }
}
