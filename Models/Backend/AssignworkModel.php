<?php 
	trait AssignworkModel{
		public function fetchAll($from, $pageSize){
			$conn = Connection::getInstance();
			
			//lay bien ket noi csdl
			//thuc thi truy van
			// $query = $conn->query("select id_user, MIN(name) as name, MIN(start) as start, MIN(deadline) as deadline, MIN(process) as process, MIN(confirm) as confirm from users inner join user_has_role on user_has_role.fk_user_id=users.id inner join assginwork on assginwork.id_user=users.id where fk_role_id=3 GROUP by id_user order by start desc limit $from,$pageSize");
			$query = $conn->query("select * from users inner join user_has_role on user_has_role.fk_user_id=users.id inner join roles on roles.role_id=user_has_role.fk_role_id where role_id=3 order by id desc limit $from, $pageSize");
			$assign = $conn->query("select * from assginwork ");
			//lay tat ca ket qua tra ve
			$data = [
				'listuser'=> $query->fetchAll(),
				'assign'=> $assign->fetchAll()
			];
			return $data;
		} 
		public function getwork($id_user){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from assginwork where id_user=:id_user");
			$result = $query->execute([':id_user'=>$id_user]);
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->prepare("select id_user, MIN(name), MIN(start), MIN(deadline) from users inner join user_has_role on user_has_role.fk_user_id=users.id inner join assginwork on assginwork.id_user=users.id where fk_role_id=3 GROUP by id_user");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		} 
		public function insert($data){
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into assginwork(name_work, start, deadline, process, id_user,confirm ) values (:name_work, :start, :deadline, :process, :id_user,:confirm )");
			$query->execute([
				':name_work' => $data['name_work'],
				':start' => $data['start'],
				':deadline' => $data['deadline'],
				':id_user' => $data['id_user'],
				':process' => 0,
				':confirm' => 1,
			]);
		}
	}
?>