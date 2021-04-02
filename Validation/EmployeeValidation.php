<?php

//include("index.php");


function validate($post, $errors)
{

   



    foreach ($errors as $error => $value) {
        // echo $error." ".$value."<br>" ;
        if (array_key_exists($error, $post) && $post[$error] == "") {
            $errors["is_error"] = true;
            $errors[$error] =  $error . " is required";
        }
    }


    return $errors;
}

function setValue($key)
{
    if (array_key_exists($key, $_POST))
    {
        return $_POST[$key];
    }
   
        return "";
   

}
