<?php 
	trait remindWorkModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function getAll($id,$from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->prepare("select * from work inner join content_time on work.pk_work_id=content_time.fk_work_id inner join work_time on work_time.id=content_time.fk_worktime_id inner join user_has_works on user_has_works.fk_work_id=work.pk_work_id inner join users on users.id=user_has_works.fk_user_id where fk_user_id=:id order by work.pk_work_id desc limit $from, $pageSize");
			$query->execute([':id'=>$id]);
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->prepare("select * from work inner join content_time on work.pk_work_id=content_time.fk_work_id inner join work_time on work_time.id=content_time.fk_worktime_id inner join user_has_works on user_has_works.fk_work_id=work.pk_work_id inner join users on users.id=user_has_works.fk_user_id where fk_user_id=:id");
			//tra ve tong so luong ban ghi
			$query->execute([":id"=>$id]);
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from work inner join content_time on work.pk_work_id=content_time.fk_work_id inner join work_time on work_time.id=content_time.fk_worktime_id where work.pk_work_id=:id");
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
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update work set name_work=:namework where pk_work_id=:id");
			$query->execute(array("id"=>$id,"namework"=>$namework));
		}
		//insert ban ghi
		
		public function insert(){
			$namework = $_POST["namework"];
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert  into work(name_work) values(:namework)");
			//thuc thi truy van
			$query->execute([
				":namework"=>$namework
			]);
			$result= $conn->prepare("select pk_work_id from work where name_work=:namework");
			$result->execute([
				':namework'=>$namework
			]);
			return $result->fetch();
		}
		public function insertTime(){
			$deadline=$_POST["deadline"];
			$start=$_POST["start"];
			$conn=Connection::getInstance();
			$query = $conn->prepare("insert into work_time(start, deadline) values(:start, :deadline)");
			$query->execute([
				":start"=>$start,
				":deadline"=>$deadline
			]);
			$re = $conn->prepare("select id from work_time where deadline=:deadline and start=:start");
			$re->execute([
				':start'=>$start,
				":deadline"=>$deadline
			]);
			return $re->fetch();
		}
		public function insertContentTime($idWork, $idTime){
			$conn=Connection::getInstance();
			$query = $conn->prepare("insert into content_time(fk_work_id,fk_worktime_id) values(:idWork, :idTime)");
			$query->execute([
				":idTime"=>$idTime,
				":idWork"=>$idWork
			]);
		}
		public function insertUW($idUser, $idWork){
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into user_has_works(fk_work_id,fk_user_id) values(:idWork, :idUser)");
			$query->execute([
				":idWork"=>$idWork,
				":idUser"=>$idUser
			]);
		}
		//delete
		public function deleteWork($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from work where pk_work_id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
		public function deleteTime($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from work_time where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>