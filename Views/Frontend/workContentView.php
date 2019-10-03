<?php 
	//dat duong dan cho bien $fileLayout de load template vao day
	$this->fileLayout = "Views/Frontend/layout_TC.php";
?>
</style>
    <div class="container-fluid">
	  <!-- Breadcrumbs-->
	  <ol class="breadcrumb ">
	  	
	    <li class="breadcrumb-item ">
	      Nội dung công việc của > <a href="index.php?area=frontend&controller=remindWork"><?php
    $work = $this->getNameWork();
    echo isset($work->name_work)?$work->name_work:"";
 ?></a>
	    </li>
	    <!-- <li class="breadcrumb-item active">Overview</li> -->
	  </ol>
	  <div style="margin-bottom:5px;">
        <a href="index.php?area=frontend&controller=workContent&action=add" class="btn btn-primary">Tạo</a>
    </div>
	     <!-- DataTables Example -->
	    <div class="card mb-3">
	       <!-- <div class="card-header">
	       <i class="fas fa-table"></i>
	       Data Table Example</div> -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr class="bg-light">
                  <th>STT</th>
                  <th>Nội dung</th>
                  <th>Ghi chú</th>
                  <th>Yêu cầu</th>
                  <th>Ngày thực hiện</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              
              <tbody>
              	<?php $i=1; ?>
              	<?php foreach($data as $rows): ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <!-- <td><?php echo $rows->id; ?></td> -->
                  <td><?php echo $rows->content; ?></td>
                  <td><?php echo $rows->note; ?></td>
                  <td><?php echo $rows->request; ?></td>
                  <td><?php echo $rows->workday; ?></td>
                  <td>
                    <button type="button"><a href="index.php?area=Frontend&controller=workContent&action=edit&id=<?php echo $rows->workcontent_id; ?>"><i class="fa fa-edit"></i></a></button>&nbsp;
                    <button type="button"><a href="index.php?area=Frontend&controller=workContent&action=delete&id=<?php echo $rows->workcontent_id; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash"></i></a></button>
                  </td>
                </tr>
                <?php $i++; ?>
               <?php endforeach; ?>
              </tbody>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px; float: right;}
            </style>
            <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Trang</a></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li class="page-item"><a class="page-link" href="index.php?area=backend&controller=workContent&action=index&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
          </ul>
          <div style="clear: both;"></div>
          </div>
        </div>
      </div>

    </div>