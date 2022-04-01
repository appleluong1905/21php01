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
if (isset($_POST['name'])) {
	echo "Đã submit";
	$name  = $_POST['name'];
	$room  = $_POST['room'];
	$quantity  = $_POST['quantity'];
	$year  = $_POST['year'];

	$sqlQuery = "INSERT INTO class (name, room, quantity, year) VALUES ('$name', '$room', '$quantity', '$year')";
	echo "<br>";
	echo $sqlQuery;
	// Thực thi câu lệnh SQL
	$connect->query($sqlQuery);
}
?>
<h1>Class register</h1>
<form action="#" method="POST">
	<p>
		Name
		<input type="text" name="name">
	</p>
	<p>
		Room
		<input type="text" name="room">
	</p>
	<p>
		Quantity
		<input type="text" name="quantity">
		<!-- select option -->
	</p>
	<p>
		Year
		<input type="text" name="year">
	</p>
	<p>
		<input type="submit" name="register" value="Register">
	</p>
</form>