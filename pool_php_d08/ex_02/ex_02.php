<?php

function my_password_hash($password)
{
    $salt = (rand(1000, 10000));
    $hash = md5($salt, $password);
    $hashed_password["hash"] = $hash;
    $hashed_password["salt"] = $salt;
    return $hashed_password;
}

function my_password_verify($password, $salt, $hash)
{
    $check = md5($salt, $password);
    if ($check == $hash)
        return true;
    else
        return false;
}

?>