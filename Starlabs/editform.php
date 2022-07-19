    <?php
    include_once('config.php');

    $id=$_GET['id'];

    $sql="SELECT * FROM costumers WHERE ID=:id";
    $prep=$conn->prepare($sql);
    $prep->bindParam(":id",$id);
    $prep->execute();
    $data=$prep->fetch();

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?=$data['ID']; ?>" required><br>
        <input type="text" name="name" placeholder="Name"
        value="<?= $data['name']; ?>"><br>
        <input type="text" name="lastname" placeholder="Lastname" value="<?= $data['lastname']; ?>"><br>
        <input type="text" name="email" placeholder="email" value="<?= $data['email']; ?>">
        <input type="text" name="password" placeholder="Password"
        value="<?= $data['password']; ?>"><br>
        <input type="text" name="confirmpassword" placeholder="Confirmpassword"
        value="<?= $data['confirmpassword']; ?>"><br>
        <input type="submit" name="submit" placeholder="Submit">
        
    </form>
</body>
</html>