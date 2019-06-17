<?php

function fullName($lastname, $firstname) : String
{

    return strtoupper("$lastname") . " " . ucfirst(strtolower("$firstname"));

}