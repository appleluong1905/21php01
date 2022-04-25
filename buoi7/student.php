<?php 
	class Student {
		private function addStudent() {
			$name = 'Chad';
			$avatar = '';
			echo "Test add student $name";
		}
		function listStudent() {
			echo "<br>";
			$this->addStudent();
			echo "<br>Danh sách";
		}
		function deleteStudent() {
			echo "Delete student <br>";
			//$this->addStudent();
		}
	}

	$student = new Student();
	//$student->addStudent();

	echo "<br>";



	// Tính kế thừa
	class Teacher extends Student {
		function addTeacher() {
			$this->listStudent();
		}
		function deleteStudent() {
			echo "<br> Delete teacher";
		}
	}

	$teacher = new Teacher();
	//$teacher->addTeacher();
	echo "<br>";
	$teacher->addTeacher();

	// public, protected, private

	echo "<br>";
	$teacher->deleteStudent();

?>