<?php
    $e=$_POST['email'];
    $p=$_POST['password'];
  	$sql= "select * from user where email='$e' and password='$p'";
    $db = new PDO('mysql:host=localhost;dbname=Dbcustomer', 'root', '');
	$result=$db->query($sql);
    if($result->rowCount()>0)
        header('location:../Index.php');
    else {
        echo 'error';
}
?>