<?php
	//mysql_connect('server','db_user','db_password');
	//mysqli_connect('server','db_user','db_password','database');

	$connection=mysqli_connect('localhost','root','','class_php5_database');
	$query= "INSERT INTO directories(name) VALUES('MCPA');";
	mysqli_query($connection,$query);

?>