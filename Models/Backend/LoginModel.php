<?php 
	trait LoginModel{
		//lay mot ban ghi
		public function modelFetch(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select email from users where email=:email and password=:pass");
			//thuc hien truy van co truyen danh sach bien
			$query->execute(array("email"=>$email,"pass"=>$password));
			//lay mot ban ghi
			$result = $query->fetch();
			return $result;
			//---
		}
	}
 ?>