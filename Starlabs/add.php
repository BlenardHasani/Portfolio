<?php



    include_once('config.php');
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $temppass=$_POST['password'];
        $tempconfpass=$_POST['confirmpassword'];
        $password=password_hash($temppass, PASSWORD_DEFAULT);
        $confirmpassword=password_hash($tempconfpass, PASSWORD_DEFAULT);
        if (empty($name)||empty($lastname)||empty($email)||empty($temppass)||empty($tempconfpass)) {
        echo "Please fill out the form";
        }

else{

            if ($temppass==$tempconfpass)
        {



          $sql="INSERT INTO costumers (name,lastname,email,password,confirmpassword) VALUES (:name,:lastname,:email,:password,:confirmpassword)";

               $newUser=$conn->prepare($sql);
               $newUser->bindParam(':name',$name);
               $newUser->bindParam(':lastname',$lastname);
               $newUser->bindParam(':email',$email);
               $newUser->bindParam(':password',$password);
               $newUser->bindParam(':confirmpassword',$confirmpassword);

               $newUser->execute();
               header('Location: dashboard.php');
        }
      else{
        echo"Passwords must match";
      }
    }
  }
?>