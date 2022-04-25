<?php 
	include 'model/model.php';
	class Controller extends Model {
		// Xử lý yêu cầu
		function handleRequest() {
			$action = $_GET['action'];
			switch ($action) {
				case 'home':
					echo "Home";
					break;

				case 'news':
					$this->getNews();
					include "views/news.php";
					break;

				case 'product':
					$this->getProduct();
					include "views/product.php";
					break;

				default:
					# code...
					break;
			}
		}
	}
?>