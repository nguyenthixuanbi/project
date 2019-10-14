<?php 
	class HomeController extends Controller{
		// public function __construct(){
		// 	$this->authentication();
		// }
		public function index(){
			$this->renderHTML("Views/Frontend/Home.php");
		}
	}
 ?>