<?php 
	trait CategoryModel{
		public function getAll(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from tbl_category order by id desc");
			//tra ve tat ca cac phan tu
			return $query->fetchAll();
		}
	}
 ?>