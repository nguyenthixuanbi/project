<?php 
	//dat duong dan cho bien $fileLayout de load template vao day
	$this->fileLayout = "Views/Frontend/layout_TC.php";
 ?>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <div class="container-fluid">
	  <!-- Breadcrumbs-->
	  <ol class="breadcrumb ">
	    <li class="breadcrumb-item ">
	      <a href="#">Nhắc việc</a>
	    </li>
	    <!-- <li class="breadcrumb-item active">Overview</li> -->
	  </ol>
	  <div style="margin-bottom:5px;">
        <a href="index.php?area=Frontend&controller=remindWork&action=add" class="btn btn-primary">Tạo</a>
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
                  <th>Tên công việc</th>
                  <th>Ngày bắt đầu</th>
                  <th>Ngày kết thúc</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <?php $i=1; ?>
                  <?php foreach($data as $rows): ?>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $rows->name_work; ?></td>
                  <td><?php echo $rows->start; ?></td>
                  <td><?php echo $rows->deadline; ?></td>
                  
                  <td>
                    <a href="index.php?area=Frontend&controller=remindWork&action=edit&id=<?php echo $rows->id; ?>"><i class="fa fa-edit"></i></a>&nbsp;
                    <a href="index.php?area=Frontend&controller=remindWork&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                    <button class="btn btn-dark" type="button"><a href="index.php?area=Frontend&controller=workContent&action=index&id=<?php echo $rows->id; ?>">Show Content</a></button>
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
            <li class="page-item"><a class="page-link" href="index.php?area=Frontend&controller=remindWork&action=index&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
          </ul>
          <div style="clear: both;"></div>
          </div>
        </div>
      </div>

    </div>