<?php

function validate($errors, $post)
{
    foreach ($errors["fields"]as $key => $value) {
      
        if (array_key_exists($key, $post) && $post[$key] == "") {
            $errors["is_error"] = true;
            $errors['fields'][$key]['msg'] = $key . " is required";

            //$errors[[0][$key]] =  $key . " is required";
        }
    }
   
    return $errors;
}

function setValue($key)
{
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }

    return "";
}
