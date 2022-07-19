<?php
    require 'config.php';
    session_start();

    if (isset($_POST['submit'])) {
    	$email=$_POST['email'];
    	$password=$_POST['password'];

    	$sql="SELECT * FROM costumers WHERE email=:email";
    	$prep=$conn->prepare($sql);
    	$prep->bindParam(':email',$email);
    	$prep->execute();

    	$data=$prep->fetch();

    	if ($data==false) {
    		echo "User with the email $email was not found";
    	}
    	elseif (password_verify($password, $data['password'])){
            $_SESSION['email']=$data['email'];
            $_SESSION['id']=$data['ID'];
    		header('Location: index.php');
    	}
    	else {
    		echo "password is wrong";
    	};
    }

?>