
<?php

include("Models/Employee.php");
include("Services/EmployeeService.php");
include("Util/Validation.php");

$errors = ['fields'=> [
                        'firstname'  => ['rules' => 'required | min:3', 'msg'=>""], 
                        'lastname'  => [ 'rules' => 'required | min:3' , 'msg'=>""],
                        'address'  => [ 'rules' => 'required | min:3' , 'msg'=>""],
                        'email'  => [ 'rules' => 'required | min:3' , 'msg'=>""],
                        'contact'  => [ 'rules' => 'required | min:3' , 'msg'=>""],

                      ],
                      'is_error' => false
                     
        ];

 






if($_SERVER["REQUEST_METHOD"]== "POST")
{
  // $errors =  validate($_POST,$errors);

  $errors = validate($errors,$_POST);
 // print_r($errors);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <form action="" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" value="<?=setValue("firstname")?>">
                        <span><?php echo ( $errors['fields']['firstname']['msg'] != "")? $errors['fields']['firstname']['msg']:"" ?></span>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="<?=setValue("lastname")?>">
                            <span><?php echo ( $errors['fields']['lastname']['msg'] != "")? $errors['fields']['lastname']['msg']:"" ?></span>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="<?=setValue("email")?>">
                                <span><?php echo ($errors['fields']['email']['msg'] != "")? $errors['fields']['email']['msg']:""  ?></span>


                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="<?=setValue("address")?>">
                                    <span><?php echo ($errors['fields']['address']['msg'] != "")? $errors['fields']['address']['msg']:""  ?></span>

                                    <div class="form-group">
                                        <label>Contact</label>
                                        <input type="text" class="form-control" name="contact" value="<?=setValue("contact")?>">
                                        <span><?php echo ($errors['fields']['contact']['msg'] != "")? $errors['fields']['contact']['msg']:""  ?></span>

<br>
       <button class="button-danger" name="submit">Submit</button>

                                    </div>
                                </div>
                            </div>

        </form>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>




</html>
