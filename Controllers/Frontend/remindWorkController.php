<?php 
	//include model
	include "Models/Frontend/remindWorkModel.php";
	class remindWorkController extends Controller{
		//khai bao de su dung class UserModel
		use remindWorkModel;
		public Function index(){
			//so ban ghi tren mot trang
			$pageSize = 4;
			//tinh tong so ban ghi
			$totalRecord = $this->totalRecord();//ham trong model
			//$totalRecord=5;
			//tinh so trang
			//ham ceil su dung de lay tran. VD: ceil(2.1)=3
			$numPage = ceil($totalRecord/$pageSize);
			//lay bien p truyen tren url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao
			$From = $p * $pageSize;
			//lay cac ban ghi
			$data = $this->FetchAll($From,$pageSize);
			// var_dump($data);
			// die(); 
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Frontend/remindWorkView.php",array("data"=>$data,"numPage"=>$numPage));
		}
		//edit user
		public Function edit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong model de lay 1 ban ghi
			$record = $this->fetch($id);
			//tao bien $FormAction de dieu phoi action cua Form
			$FormAction = "index.php?area=Frontend&controller=remindWork&action=doEdit&id=$id";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Frontend/add_edit_work.php",array("record"=>$record,"FormAction"=>$FormAction));
		}
		//do edit user
		public Function doEdit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham insert trong model de insert ban ghi
			// var_dump($_POST["namework"]);
			// die();
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
			$this->insert();
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=remindWork");
		}
		//delete user
		public Function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteWork($id);
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=remindWork");
		}
	}
 ?>