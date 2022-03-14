<!DOCTYPE html>
<html>
<head>
	<title>Add news</title>
</head>
<body>
	<?php 
	$errTitle = '';
	$errDescription = '';
	$errContent = '';
		if (isset($_POST['title'])) {
			if ($_POST['title'] == '') {
				$errTitle = 'Please input title';
			}
			if ($_POST['description'] == '') {
				$errDescription = 'Please input description';
			}
			if ($_POST['content'] == '') {
				$errContent = 'Please input content';
			}
		} else {
			echo "Chưa submit";
		}
	?>
	<h1>Add news</h1>
	<form action="#" method="POST">
		<p>
			Title
			<input type="text" name="title" value="<?php echo $_POST['title']?>">
			<?php echo $errTitle;?>
		</p>
		<p>
			Description
			<input type="text" name="description" value="<?php echo $_POST['description']?>">
			<?php echo $errDescription;?>
		</p>
		<p>
			Content
			<textarea name="content"><?php echo $_POST['content']?></textarea>
			<?php echo $errContent;?>
		</p>
		<p>
			Image
			<input type="file" name="image">
		</p>
		<p>
			Publish date
			<input type="date" name="publish_date">
		</p>
		<p>
			Publish?
			<input type="radio" name="publish"> Publish
			<input type="radio" name="publish"> No publish
		</p>
		<p>
			News type
			<select name="news_type">
				<option value="">Choose type</option>
				<option value="1">Tin thể thao</option>
				<option value="2">Tin xã hội</option>
				<option value="3">Tin thế giới</option>
			</select>
		</p>
		<p>
			<input type="submit" name="Add news">
		</p>
	</form>
</body>
</html>