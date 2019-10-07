<?php 
	trait noteModel{
		public function fetchAll($from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from note order by id desc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from note");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from note where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			$work_note = $_POST["worknote"];
			$time_note = date("Y/m/d");
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update note set worknote=:worknote,time_note=:time_note where id=:id");
			
			//thuc thi truy van
			$query->execute(array("id"=>$id,"worknote"=>$work_note, "time_note"=>$time_note));
		}
				//insert ban ghi
		public function insert(){
			$work_note = $_POST["worknote"];
			$time_note = date("Y/m/d");
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into note set worknote=:worknote, time_note=:time_note");
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