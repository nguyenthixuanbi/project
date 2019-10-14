<?php 
	include "Models/Frontend/HomeModel.php";
	class HomeViewController extends Controller{		
		use HomeModel;
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$a = $_SESSION["id"];
			$data = $this->getAll($a);//goi view
			$this->renderHTML("Views/FrontEnd/HomeView.php",["data"=>$data]);
		}		
	}
 ?>