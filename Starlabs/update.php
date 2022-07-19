<?php

    include_once('config.php');

    if (isset($_POST['submit']))
    {
    	$id=$_POST['id'];
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

    	$sql="UPDATE costumers SET name=:name, lastname=:lastname, email=:email, password=:password,confirmpassword=:confirmpassword WHERE ID=:id";

    	$prep=$conn->prepare($sql);

    	$prep->bindParam(":id",$id);
    	$prep->bindParam(":name",$name);
    	$prep->bindParam(":lastname",$lastname);
    	$prep->bindParam(":email",$email);
        $prep->bindParam(":password",$password);
        $prep->bindParam(":confirmpassword",$confirmpassword);

    	$prep->execute();
    	header('Location: dashboard.php');
    }

?>