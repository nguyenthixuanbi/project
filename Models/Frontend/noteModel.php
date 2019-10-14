<?php 
	trait noteModel{
		public function fetchAll($id,$from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->prepare("select * from note where fk_user_id=:id order by id desc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			$query->execute([":id"=>$id]);
			$result=$query->fetchAll();
			return $result;
		}
		public function totalRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->prepare("select * from note where fk_user_id=:id");
			$query->execute([":id"=>$id]);
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		}
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from note where id=:id");
			//thuc thi truy van
			$query->execute([':id'=>$id]);
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			$work_note = $_POST["worknote"];
			$time_note = $_POST['daynote'];
			$a=$_SESSION['id'];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update note set worknote=:worknote,time_note=:time_note, fk_user_id=$a where id=:id");
			
			//thuc thi truy van
			$query->execute(array("id"=>$id,"worknote"=>$work_note, "time_note"=>$time_note));
		}
				//insert ban ghi
		public function insert(){
			$work_note = $_POST["worknote"];
			$time_note = $_POST['daynote'];
			$a=$_SESSION['id'];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into note set worknote=:worknote, time_note=:time_note, fk_user_id = $a");
			//thuc thi truy van
			$query->execute(array("worknote"=>$work_note, "time_note"=>$time_note));
		}
		//delete
		public function deleteWork($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from note where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
?>