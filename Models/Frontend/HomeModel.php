<?php 
	trait HomeModel{
		public function getAll($id){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from work_content inner join work on work.pk_work_id=work_content.fk_work_id inner join user_has_works on user_has_works.fk_work_id=work.pk_work_id inner join users on users.id=user_has_works.fk_user_id where users.id=:id");
			$query->execute([":id"=>$id]);
			$result=$query->fetchAll();
			return $result;
		}
	}
?>