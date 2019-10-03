<?php 
	trait HomeModel{
		//san pham noi bat
		public function productHot(){
			$conn = Connection::getInstance();
			$query = $conn->query("select name, img, price,id from tbl_product where hotproduct=1 order by id desc limit 0,6");
			//tra ve tat ca cac phan tu
			return $query->fetchAll();
		}
		//san pham moi
		public function productNew(){
			$conn = Connection::getInstance();
			$query = $conn->query("select name, img, price,id from tbl_product order by id desc limit 0,6");
			//print_r($query->fetchAll());
			//tra ve tat ca cac phan tu
			return $query->fetchAll();
		}
	}
 ?>