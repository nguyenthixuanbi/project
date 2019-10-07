<?php 
	include "Models/Frontend/workContentModel.php";
	class workContentController extends Controller{
		use workContentModel;
		public function index(){
			
			//số bản ghi trên 1 trang
			$pageSize = 10;
			//tinh tong so ban ghi
			$totalRecord = $this->totalRecord();//ham trong model
			//var_dump($this);
			//tinh so trang
			//ham ceil su dung de lay tran. VD: ceil(2.1)=3
			$numPage = ceil($totalRecord/$pageSize);
			//lay bien p truyen tren url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao
			$from = $p * $pageSize;
			//lay cac ban ghi
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//$id=$_SESSION['work'];
			$data = $this->fetchAll($id,$from,$pageSize);
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Frontend/workContentView.php",array("data"=>$data,"numPage"=>$numPage,"id"=>$id));
		}
		public function edit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->fetch($id);
			// var_dump($record);
			// die();
			$formAction = "index.php?area=Frontend&controller=workContent&action=doEdit&id=$id";
			$this->renderHTML("Views/Frontend/add_edit_workContent.php",array("record"=>$record,"formAction"=>$formAction));

		}
		public function doEdit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham insert trong model de insert ban ghi
			$this->update($id);
			$a=$_SESSION['work'];
			header("location:index.php?area=Frontend&controller=workContent&action=index&id=$a");
		}
		public function add(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
            $work_id=$this->getName($id);
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=Frontend&controller=workContent&action=doAdd";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Frontend/add_edit_workContent.php",array("formAction"=>$formAction,"work_id"=>$work_id));
		}
		//do add user
		public function doAdd(){
			//goi ham insert trong model de insert ban ghi
			$this->insert();
			$a=$_SESSION['work'];
			header("location:index.php?area=Frontend&controller=workContent&action=index&id=$a");
		}
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteWork($id);
			//quay tro lai duong dan
			header("location:index.php?area=Frontend&controller=workContent");
		}
	}
 ?>