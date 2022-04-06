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
	$id_edit = $_GET['id'];
	// Lấy thông tin cần sửa của sinh viên
	$sqlQuery = "SELECT * FROM student WHERE id = $id_edit";
	$oldStudent = $connect->query($sqlQuery);
	while($row = $oldStudent->fetch_assoc()) {
		$old_name = $row['name'];
		$old_avatar =  $row['avatar'];
	}


 	if (isset($_POST['edit'])) {
 		$name = $_POST['name'];
 		$avatar = $_FILES['avatar'];
 		$avatar_name = $avatar['name'];
 		move_uploaded_file($avatar['tmp_name'], 'uploads/'.$avatar['name']);
 		if ($avatar_name == '') {
 			$avatar_name = $old_avatar;
 		}
 		//var_dump($avatar);
 		//exit();
 		$sqlQuery = "UPDATE student SET name = '$name', avatar = '$avatar_name' WHERE id = $id_edit";
 		$connect->query($sqlQuery);
 		// chuyển trang trong PHP
 		header('Location: list_student.php');
 	}
?>
<h1>Chỉnh sửa sinh viên</h1>
<form action="#" method="POST" enctype='multipart/form-data'>
	<p>
		Name: <input type="text" name="name" value="<?php echo $old_name?>">
	</p>
	<p>
		Avatar: <input type="file" name="avatar">
	</p>
	<p>
		<input type="submit" name="edit" value="Edit">
	</p>
</form>
<a href="list_student.php">List student</a>