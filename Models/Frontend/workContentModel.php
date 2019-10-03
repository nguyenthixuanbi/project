<?php 
	trait workContentModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll($id,$from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			// $query = $conn->query("select * from work_content inner join work on work.id=work_content.fk_work_id order by work_content.id desc limit $from, $pageSize");
			$query = $conn->query("select * from work_content inner join work on work.id=work_content.fk_work_id where work_content.fk_work_id=$id order by work_content.workcontent_id desc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from work_content");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		}
		public function listWorkContent($id){
			$conn=Connection::getInstance();
			$query = $conn->prepare("select * from work_content inner join work on work.id=work_content.fk_work_id where work_content.fk_work_id=:id ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//$query->execute(array("id"=>$id));
			return $query->fetchAll();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from work_content where workcontent_id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		public function fetchid($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			//$query = $conn->prepare("select * from work_content inner join work on work.id=work_content.fk_work_id where work_content.id=:id");
			$query = $conn->prepare("select id from work_content where fk_work_id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			// $work = $_POST["work"];
			$content = $_POST["content"];
			$note = $_POST["note"];
			$request =$_POST["request"];
			$workday=$_POST["workday"];
			$fk_work_id=$_POST["fk_work_id"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update work_content set content=:content, note=:note, request=:request, workday=:workday, fk_work_id=:fk_work_id where workcontent_id=:id");
			
			//thuc thi truy van
			$query->execute(array("id"=>$id,"content"=>$content, "note"=>$note, "request"=>$request,"workday"=>$workday,"fk_work_id"=>$fk_work_id));
		}
		//insert ban ghi
		public function insert(){
			$workday = $_POST["workday"];
			$content = $_POST["content"];
			$note = $_POST["note"];
			$request =$_POST["request"];
			$fk_work_id=$_POST["fk_work_id"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into work_content set content=:content, note=:note, request=:request, workday=:workday, fk_work_id=:fk_work_id");
			//thuc thi truy van
			$query->execute(array("content"=>$content, "note"=>$note, "request"=>$request,"workday"=>$workday, "fk_work_id"=>$fk_work_id));
		}
		//delete
		public function deleteWork($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from work_content where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
		public function getName($id){
			//$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->prepare("select * from work where id=:id");
			$query->execute(array("id"=>$id));
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function getNameWork(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select name_work from work where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
	}
 ?>