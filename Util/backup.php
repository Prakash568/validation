<?php




function validate($errors,$post)
{
  
   

   foreach($errors as $key => $value)
   {
     $first_value = array_key_first($value);
     $last_value = array_key_last($value);
     if (array_key_exists($first_value, $post) && $post[$first_value] == "") {
        echo  $value[$last_value];
    }
   }

    

    





//include("index.php");


/*function validate($post, $errors)
{

foreach($errors as $error)
{
    foreach($error as $er)
    {
        echo $er['rules'];
    }
}
    
//print_r($errors);
//exit();
}*/



/*
  foreach ($errors as $error => $value) {
         echo $error." ".$value."<br>" ;
         exit();
        if (array_key_exists($error, $post) && $post[$error] == "") {
            $errors["is_error"] = true;
            $errors[$error] =  $error . " is required";
        }
    }
return $errors;
}
*/


function setValue($key)
{
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }

    return "";
}
