<?php 
	//include model
	include "Models/Frontend/remindWorkModel.php";
	class remindWorkController extends Controller{
		//khai bao de su dung class UserModel
		use remindWorkModel;
		public function __construct(){
			$this->authentication();
		}
		public Function index(){
			//so ban ghi tren mot trang
			$pageSize = 5;
			$a=$_SESSION['id'];
			//tinh tong so ban ghi
			$totalRecord = $this->totalRecord($a);//ham trong model
			$numPage = ceil($totalRecord/$pageSize);
			//lay bien p truyen tren url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao
			$From = $p * $pageSize;
			//lay cac ban ghi
			$data = $this->getAll($a,$From,$pageSize);
			var_dump($data);
			echo $data->pk_work_id;
			die();
			// if($data!=NULL){
			// 	// $_SESSION['pk_work_id']=$data->pk_work_id;
			// 	// $a=$_SESSION['pk_work_id'];
			// 	// echo '$a';
			// 	// exit();
			// }
			$this->renderHTML("Views/Frontend/remindWorkView.php",array("data"=>$data,"numPage"=>$numPage));
		}
		//edit user
		public Function edit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong model de lay 1 ban ghi
			$record = $this->fetch($id);
			$_SESSION['work']=$record->pk_work_id;
			//tao bien $FormAction de dieu phoi action cua Form
			$FormAction = "index.php?area=Frontend&controller=remindWork&action=doEdit&id=$id";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Frontend/add_edit_work.php",array("record"=>$record,"FormAction"=>$FormAction));
		}
		//do edit user
		public Function doEdit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			$this->update($id);
			$id_time=$this->up($id);
			// var_dump($id_time);
			// die(); 
			$this->updatetime($id);
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=remindWork");
		}
		//add user
		public Function add(){
			//tao bien $FormAction de dieu phoi action cua Form
			$FormAction = "index.php?area=Frontend&controller=remindWork&action=doAdd";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Frontend/add_edit_work.php",array("FormAction"=>$FormAction));
		}
		//do add user
		public Function doAdd(){
			//goi ham insert trong model de insert ban ghi
			$work = $this->insert();

			$time = $this->insertTime();
			$work_id = $work->pk_work_id;
			$time_id = $time->id;
			$user_id = $_SESSION['id'];
			$this->insertContentTime($work_id, $time_id);
			$this->insertUW($user_id, $work_id);
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=remindWork");
		}
		//delete user
		public Function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteWork($id);
			$id_time=$this->up($id);
			// var_dump($id_time);
			// die(); 
			$this->deleteTime($id_time);
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=remindWork");
		}
	}
 ?>