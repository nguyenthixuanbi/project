<?php 
	trait remindWorkModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll($from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from work inner join content_time on work.id=content_time.fk_work_id inner join work_time on work_time.id=content_time.fk_worktime_id order by work.id desc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from work inner join content_time on work.id=content_time.fk_work_id inner join work_time on work_time.id=content_time.fk_worktime_id");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from work inner join content_time on work.id=content_time.fk_work_id inner join work_time on work_time.id=content_time.fk_worktime_id where work.id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function up($id){
			$conn = Connection::getInstance();
		    $query=$conn->prepare("select fk_worktime_id from content_time where fk_work_id=:id");
		    $query->execute(array("id"=>$id));
		    $id_time=$query->fetch();
		    //echo $id_time->fk_work_id;
		}
		public function updatetime($id){
			$start = $_POST["start"];
			$deadline=$_POST["deadline"];
			$conn = Connection::getInstance();
			$query=$conn->prepare("update work_time set start=:start, deadline=:deadline where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id,"start"=>$start, "deadline"=>$deadline));
		}
		public function update($id){
			$namework = $_POST["namework"];
			// $start = $_POST["start"];
			// $deadline=$_POST["deadline"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update work set name_work=:namework where id=:id");
			$query->execute(array("id"=>$id,"namework"=>$namework));
		}
		//insert ban ghi
		
		public function insert(){
			$namework = $_POST["namework"];
			$start = $_POST["start"];
			$deadline=$_POST["deadline"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into work set name_work=:namework");
			//thuc thi truy van
			$query->execute(array("namework"=>$namework));
		}
		public function insertTime(){
			$deadline=$_POST["deadline"];
			$start=$_POST["start"];
			$conn=Connection::getInstance();
			$query = $conn->prepare("inser into work_time set start=:start, deadline=:deadline");
			$query->execute(array("start"=>$start, "deadline"=>$deadline));
		}
		//delete
		public function deleteWork($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from work where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>