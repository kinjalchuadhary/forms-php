<?php
    
    if($_POST)
    {
        //not empty
        //atleast 6 characters long

        $errors = array();


        //start validation
        if(empty($_POST['firstName']))
        {
            $errors['firstName1'] = "Your first name cannot be empty";
        }
        if(strlen($_POST['firstName']) < 2)
        {
            $errors['firstName2'] = "Your first name must be atleast 2 characters long";
        }

        if(empty($_POST['lastName']))
        {
            $errors['lastName1'] = "Your last name cannot be empty";
        }
        if(strlen($_POST['lastName']) < 2)
        {
            $errors['lastName2'] = "Last name must be atleast 2 characters long";
        }

        if(empty($_POST['email']))
        {
            $errors['email1'] = "Email cannot be empty";
        }
        if(strlen($_POST['email']) < 6)
        {
            $errors['email2'] = "Email must be atleat 6 characters long";
        }

        if(empty($_POST['password']))
        {
            $errors['password1'] = "Password cannot be empty";
        }
        if(strlen($_POST['password']) < 8)
        {
            $errors['password2'] = "Password must be atlest 8 characters long";
        }

        //check errors
        if(count($errors) == 0)
        {
            //redirect to success pages
            header("Location: success.php");
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form method="post" target="">
            
            <label for="firstName">FirstName</label>
            <input type="text" name="firstName" id="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>" />
            
            <p><?php if(isset($errors['firstName1'])) echo $errors['firstName1']; ?></p>
            <p><?php if(isset($errors['firstName2'])) echo $errors['firstName2']; ?></p>

         
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>" />
        
            <p><?php if(isset($errors['lastName1'])) echo $errors['lastName1']; ?></p>
            <p><?php if(isset($errors['lastName2'])) echo $errors['lastName2']; ?></p>

          
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" />
        
            <p><?php if(isset($errors['email1'])) echo $errors['email1']; ?></p>
            <p><?php if(isset($errors['email2'])) echo $errors['email2']; ?></p>

          
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
          
            <p><?php if(isset($errors['password1'])) echo $errors['password1']; ?></p>
            <p><?php if(isset($errors['password2'])) echo $errors['password2']; ?></p>

            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
