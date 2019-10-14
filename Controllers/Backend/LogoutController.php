<?php 
	class LogoutController{
		public function index(){
			//huy cac gia tri
			session_destroy();
			//quay tro ve trang index.php?controller=backend
			header("location:index.php");
		}
	}
 ?>