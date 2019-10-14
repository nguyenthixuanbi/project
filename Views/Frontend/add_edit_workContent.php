<?php 
  //dat duong dan cho bien $fileLayout de load template vao day
  $this->fileLayout = "Views/Frontend/layout_TC.php";
 ?>
    <!-- tao ghi chu -->
    <div class="col-md-8 text-center border border-primary" style="margin-left: 20%">
      <form method="post" action="<?php echo $formAction; ?>">
      <!-- <div class="panel panel-primary"> -->
      <div class="panel-heading" style="font-weight: bold; text-align: center; color: red;">Nhắc việc</div>
      <div class="panel-body">
      <!-- row -->
      <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-3">Tiêu đề</div>
        <div class="col-md-9">
        <!-- <select name="fk_work_id" class="form-control" style="width: 300px;"> -->
          <?php if(isset($record->fk_work_id)){
             $id=$record->fk_work_id;
             $work=$this->getName($id);
            }
            else{
              $a=$_SESSION['work'];
            }
            ?>
      <input readonly type="text" name="fk_work_id" class="form-control" value="<?php echo isset($work->pk_work_id)? $work->pk_work_id:$a; ?>">
        </div>
      </div>
    <!-- end row -->


    <!-- row -->
    <div class="row" style="margin-bottom: 5px;">
      <div class="col-md-3">Nội dung</div>
      <div class="col-md-9"><textarea name="content" class="form-control" style="height:150px;">
        <?php echo isset($record->content)? $record->content:""; ?>
      </textarea></div>
    </div>
    <!-- end row -->
    <!-- row -->
    <div class="row" style="margin-bottom: 5px;">
      <div class="col-md-3">Ghi chú</div>
      <div class="col-md-9"><textarea name="note" class="form-control" style="height:150px;">
        <?php echo isset($record->note)? $record->note:""; ?>
      </textarea></div>
    </div>
    <!-- end row -->
    <!-- row -->
    <div class="row" style="margin-bottom: 5px;">
      <div class="col-md-3">Yêu cầu CV</div>
      <div class="col-md-9"><textarea name="request" class="form-control" style="height:100px;">
        <?php echo isset($record->request)? $record->request:""; ?>
      </textarea></div>
    </div>
    <!-- end row -->
    <!-- row -->
      <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-3">Ngày thực hiện</div>
        <div class="col-md-9"><input type="datetime-local" name="workday" class="form-control" value="<?php echo isset($record->workday)? $record->workday:""; ?>">
        </div>
      </div>
    <!-- end row -->
    <div class="row" style="margin-bottom: 5px;">
      <div class="col-md-2"></div>
      <div class="col-md-10"><input type="submit" value="Tạo" class="btn btn-primary"> <input type="reset" value="Hủy" class="btn btn-danger"></div>
    </div>
  <!-- end row -->
      </div>
     <!-- </div> -->
    </form>
  </div>
  <!--end tao ghi chu -->