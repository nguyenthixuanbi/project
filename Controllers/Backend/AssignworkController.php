<?php 
	include "Models/Backend/AssignworkModel.php";
	class AssignWorkController extends Controller{
		use AssignworkModel;
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$pageSize = 4;
			$totalRecord = $this->totalRecord();//ham trong model
			$numPage = ceil($totalRecord/$pageSize);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			$from = $p * $pageSize;

			$data = $this->fetchAll($from,$pageSize);
			$this->renderHTML("Views/Backend/AssignworkView.php",array("data"=>$data,"numPage"=>$numPage));
		}
		public function assign(){
			$data = [
				'name_work' => $_POST['name_work'],
				'start' => $_POST['start'],
				'deadline' => $_POST['deadline'],
				'id_user' => $_POST['id_user'],
			];

			$this->insert($data);
		}
		public function show(){
			$id_user = $_POST["id_user"];
			$a = $this->getwork($id_user);
			echo json_encode($a);
		}
	} 
?>