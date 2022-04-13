<?php 
	// Thông tin kết nối MySQL mặc định ở localhost
	$server = 'localhost';
	$username = 'root';
	$password = ''; // Mặc định password khi cài đặt xampp là để trống
	$databaseName = 'myschool';

	$connect = new mysqli($server, $username, $password, $databaseName);

	// Check connection
	if ($connect->connect_error) {
	    die("Connection failed: " . $connect->connect_error);
	} else {
		echo "Connect success!";
	}

	$id_delete = $_GET['id'];
	//echo $id_delete;
	$sql = "DELETE FROM student WHERE id = $id_delete";
	$connect->query($sql);
	header('Location: list_student.php');
