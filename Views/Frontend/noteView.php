<?php 
	//dat duong dan cho bien $fileLayout de load template vao day
	$this->fileLayout = "Views/Frontend/layout_TC.php";
 ?>
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb ">
            <li class="breadcrumb-item ">
              <a href="#">Ghi chú</a>
            </li>
            <!-- <li class="breadcrumb-item active">Overview</li> -->
          </ol>

          <!-- DataTables Example -->
        <div class="col-md-12"  style="margin-top: 30px;margin-bottom: 30px;">
          <!-- tao ghi chu -->
          <div class="col-md-12 border border-primary">
            <form method="post" action="<?php if( isset($record)==false || is_null($record)) echo('index.php?area=Frontend&controller=note&action=doAdd'); else echo($FormAction); ?>
            ">
            <!-- <div class="panel panel-primary"> -->
            <div class="panel-heading" style="font-weight: bold; text-align: center; color: red;">Ghi chú</div>
            <div class="panel-body">
          <!-- row -->
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-3">Nội dung</div>
            <div class="col-md-9"><textarea name="worknote" class="form-control" style="height:170px;"><?php
            if(isset($record))
             echo $record->worknote; ?></textarea>
            <script type="text/javascript">
                CKEDITOR.replace("worknote");
            </script>
            </div>
          </div>
          <!-- end row -->
          
          <!-- row -->
          <div class="row" style="margin-bottom: 5px;">
            <div class="col-md-2"></div>
            <div class="col-md-10"><input type="submit" value="<?php  if( isset($record)==false || is_null($record)) echo('Tạo'); else echo('Lưu'); ?>" class="btn btn-primary" > <input type="reset" value="Hủy" class="btn btn-danger">
            <!-- <input type="submit" value="Lưu" class="btn btn-primary"> -->
            </div>
          </div>
        <!-- end row -->
            </div>
           <!-- </div> -->
          </form>
        </div>
        <!--end tao ghi chu -->
        <!-- ds ghi chu -->
        <div class="col-md-12 border">
            <table style="margin-top: 30px;" class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Nội dung</th>
                  <th>Ngày tạo</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach($data as $rows): ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $rows->worknote ?></td>
                  <td><?php echo date("Y/m/d"); ?></td>
                  <td style="text-align:center;">
                    <a href="index.php?area=Frontend&controller=note&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                    <a href="index.php?area=Frontend&controller=note&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
            </table>
        </div>
        <!-- end ds ghi chu -->
        </div>
        <style type="text/css">
                .pagination{padding:0px; margin:0px; float: right;}
            </style>
            <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Trang</a></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li class="page-item"><a class="page-link" href="index.php?area=backend&controller=note&action=index&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
          </ul>
          <div style="clear: both;"></div>
        </div>