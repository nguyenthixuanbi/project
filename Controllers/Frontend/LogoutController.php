<?php 
	class LogoutController extends Controller{
		public function doLogout(){
			session_destroy();
			header("location:index.php");
		}
	}
?>