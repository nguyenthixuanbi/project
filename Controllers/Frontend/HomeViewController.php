<?php 
	//controller mac dinh khi controller khong truyen tren url
	class HomeViewController extends Controller{		
		//action mac dinh khi action khong truyen tren url
		public function index(){
			//goi view
			$this->renderHTML("Views/FrontEnd/HomeView.php");
		}		
	}
 ?>