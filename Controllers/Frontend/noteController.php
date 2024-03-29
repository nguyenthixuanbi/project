<?php 
	include "Models/Frontend/noteModel.php";
	class noteController extends Controller{
		use noteModel;
		public function __construct(){
			$this->authentication();
		}
		public Function index(){
			//số bản ghi trên 1 trang
			$a=$_SESSION['id'];
			$pageSize = 5;
			//tinh tong so ban ghi

			$totalRecord = $this->totalRecord($a);//ham trong model
			$numPage = ceil($totalRecord/$pageSize);
			//lay bien p truyen tren url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao
			$From = $p * $pageSize;
			//lay cac ban ghi
			$data = $this->fetchAll($a,$From,$pageSize);
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//$record = $this->fetch($id,$a);
			$record = $this->fetch($id);
			$FormAction = "index.php?area=Frontend&controller=note&action=doEdit&id=$id";
			$this->renderHTML("Views/Frontend/noteView.php",array("data"=>$data,"numPage"=>$numPage,"record"=>$record,"FormAction"=>$FormAction));

		}
		public Function doEdit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham insert trong model de insert ban ghi
			$this->update($id);
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=note");
		}
		public Function add(){
			//tao bien $FormAction de dieu phoi action cua Form
			$FormAction = "index.php?area=Frontend&controller=note&action=doAdd";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Frontend/noteView.php",array("FormAction"=>$FormAction));
		}
		//do add user
		public Function doAdd(){
			$this->insert();
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=note");
		}
		public Function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteUser($id);
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=note");
		}
	}
 ?>

