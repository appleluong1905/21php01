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

	//$sqlQuery = "SELECT * FROM student";
	$sqlQuery = "SELECT student.id as id, student.name  as name, student.avatar as avatar, class.name as class_name FROM student INNER JOIN class WHERE class.id = student.class_id";
	//var_dump($sqlQuery);exit();
	$listStudent = $connect->query($sqlQuery);
	//var_dump($listStudent);exit();


?>
<style>
	table, tr, td {
		border-collapse: collapse;
		border: 1px solid black;
	}
</style>
<h1>Danh sách sinh viên</h1>
<table>
	<?php while($row = $listStudent->fetch_assoc()) {?>
		<tr>
			<td>
			<?php 
				$id = $row['id'];
				echo $row['id'];
			?>
			</td>
			<td>
			<?php 
				echo $row['name'];
			?>
			</td>
			<td>
			<?php 
				echo $row['class_name'];
			?>
			</td>
			<td>
			<?php 
				$avatar = $row['avatar'];
				echo "<img src='uploads/$avatar' height = 100>";
			?>
			</td>
			<td>
				<a href="delete_student.php?id=<?php echo $id; ?>">Xóa </a>
			</td>
			<td>
				<a href="edit_student.php?id=<?php echo $id; ?>">Chỉnh sửa </a>
			</td>
		</tr>
	<?php }?>
</table>
<a href="add_student.php">Add student</a>