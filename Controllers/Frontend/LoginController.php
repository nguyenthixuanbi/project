<?php 
	include "Models/Frontend/LoginModel.php";
	class LoginController extends Controller{
		use LoginModel;
		public function index(){
			$this->renderHTML("Views/Frontend/LoginView.php");
		}
		public function doLogin(){
			$data = [
				'email'=>$_POST['email'],
				'password'=>md5($_POST['password']),
			];
			$record=$this->login($data);	
			$_SESSION['email'] = $record->email;
			$_SESSION['role_id'] = $record->role_id;
			if($_SESSION['role_id']==1){
				header("location:index.php?area=Backend&controller=Home");
			}
			else{
				header("location:index.php?area=Frontend&controller=HomeView");
			}
			
		die();
		}
	}
 ?>