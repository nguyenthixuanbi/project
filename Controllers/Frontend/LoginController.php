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
			if($record != NULL){
				$_SESSION['email'] = $record->email;
				$_SESSION['role_id'] = $record->role_id;
				$_SESSION['id'] = $record->id;
				//header("location:index.php");
				if($_SESSION['role_id']==1 || $_SESSION['role_id']==2){
					header("location:index.php?area=Backend&controller=Home");
				}
				else{
					header("location:index.php?controller=HomeView");
				}
			}else{
				header("location:index.php?controller=Login");
 			}	
		}
	}
 ?>