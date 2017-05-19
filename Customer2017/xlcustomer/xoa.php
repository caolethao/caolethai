<?php
	//lay gia tri
	$id=$_GET['id'];
	$db = new PDO('mysql:host=localhost;dbname=Dbcustomer','root','');
	$del="delete from customers where id='$id'";
	$db->exec($del);
	
	//chuyen trang
	
	
	header('location:../index.php');
	
	

?>