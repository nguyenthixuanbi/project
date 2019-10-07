<?php 
	trait LoginModel{
		public function login($data){
			// $email=$_POST['email'];
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from users inner join user_has_role on user_has_role.fk_user_id=users.id inner join roles on user_has_role.fk_role_id=roles.role_id where email=:email and password=:password");
			$query->execute(array(":email"=>$data['email'],":password"=>$data['password']));
			$result = $query->fetch();
			return $result;
		}
	}
?>