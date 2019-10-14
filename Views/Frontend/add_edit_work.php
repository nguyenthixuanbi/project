<?php 
  //dat duong dan cho bien $fileLayout de load template vao day
  $this->fileLayout = "Views/Frontend/layout_TC.php";
 ?>

<div class="col-md-12">	
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-weight: bold; color: red;">Thêm sửa công việc</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $FormAction; ?>">		
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Tên công việc</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->name_work)?$record->name_work:''; ?>" name="namework" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Ngày bắt đầu</div>
				<div class="col-md-10">
					<input type="date" value="<?php echo isset($record->start)?$record->start:''; ?>" name="start" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Ngày kết thúc</div>
				<div class="col-md-10">
					<input type="date" value="<?php echo isset($record->deadline)?$record->deadline:''; ?>" name="deadline" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" value="Tạo" class="btn btn-primary">
					<input type="reset" value="Hủy" class="btn btn-danger">
				</div>
			</div>
			<!-- end rows -->
		</form>
		</div>
	</div>
</div>