<?php 
	include "Models/Backend/ManagerModel.php";
	class ManagerController extends Controller{
		use ManagerModel;
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			//so ban ghi tren mot trang
			$pageSize = 4;
			//tinh tong so ban ghi
			$totalRecord = $this->totalRecord();//ham trong model
			//tinh so trang
			//ham ceil su dung de lay tran. VD: ceil(2.1)=3
			$numPage = ceil($totalRecord/$pageSize);
			//lay bien p truyen tren url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao
			$from = $p * $pageSize;
			//lay cac ban ghi
			$data = $this->fetchAll($from,$pageSize);
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/ManagerView.php",array("data"=>$data,"numPage"=>$numPage));
		}
		public function edit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong model de lay 1 ban ghi
			$record = $this->fetch($id);
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=User&action=doEdit&id=$id";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/AddEditUserView.php",array("record"=>$record,"formAction"=>$formAction));
		}
		public function doEdit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham insert trong model de insert ban ghi
			$this->update($id);
			//quay tro lai duong dan
			header("location:index.php?area=backend&controller=User");
		}
		//add user
		public function add(){
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=User&action=doAdd";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/AddEditUserView.php",array("formAction"=>$formAction));
		}
		//do add user
		public function doAdd(){
			//goi ham insert trong model de insert ban ghi
			$this->insert();
			//quay tro lai duong dan
			header("location:index.php?area=backend&controller=User");
		}
		//delete user
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteUser($id);
			//quay tro lai duong dan
			header("location:index.php?area=backend&controller=User");
		}
	}
?>