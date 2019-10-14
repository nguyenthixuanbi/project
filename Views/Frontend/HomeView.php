<?php 
	//dat duong dan cho bien $fileLayout de load template vao day
	$this->fileLayout = "Views/Frontend/layout_TC.php";
 ?>
        <div class="container-fluid">
          <!-- Breadcrumbs-->
	      <ol class="breadcrumb ">
	        <li class="breadcrumb-item ">
	          <a href="#">Trang chủ</a>
	        </li>
	        <!-- <li class="breadcrumb-item active">Overview</li> -->
	      </ol>

      <!-- DataTables Example -->
	    <div class="card mb-3">
	       <!-- <div class="card-header">
	       <i class="fas fa-table"></i>
	       Data Table Example</div> -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="background: #ccc;">
              <thead>
                <tr class="bg-light">
                  <th></th>
                  <th>Thứ 2</th>
                  <th>Thứ 3</th>
                  <th>Thứ 4</th>
                  <th>Thứ 5</th>
                  <th>Thứ 6</th>
                  <th>Thứ 7</th>
                  <th>Chủ nhật</th>
                </tr>
              </thead>
              
              <tbody>
                <?php 
                   $date = getdate();
                  $day = $date['mday'] + 1;
                 ?>
                <?php foreach($data as $rows): ?>
                <?php  $thu=date("w", strtotime($rows->workday));
                  $getday = date("d", strtotime($rows->workday));
                
                 ?>
                <tr>
                  <td><?=  date("H:i", strtotime($rows->workday)) ?></td>
                  <td style="<?= $day == $getday &&$thu == 1?"background:yellow":'';  ?>"><?php if ($thu == 1){ ?>
                    <!-- <span style="font-weight:bold;"><?= $rows->name_work ?></span><br> --><span><?= $rows->content ?></span><br>
                    <span style="font-weight:bold;">Thời gian</span>:<span><?=  date("Y/m/d", strtotime($rows->workday)) ?></span><br>
                    <span style="font-weight:bold;">Note</span>:<span><?= $rows->note ?></span><br>
                    <span style="font-weight:bold;">Yêu cầu</span>:<span><?= $rows->request ?></span>
                  <?php } ?>
                  </td>
                  <td style="<?= $day == $getday&&$thu == 2 ?"background:yellow":'';  ?>"><?php if ($thu == 2){ ?>
                    <!-- <span style="font-weight:bold;"><?= $rows->name_work ?></span><br> --><span><?= $rows->content ?></span><br>
                    <span style="font-weight:bold;">Thời gian</span>:<span><?=  date("Y/m/d", strtotime($rows->workday)) ?></span><br>
                    <span style="font-weight:bold;">Note</span>:<span><?= $rows->note ?></span><br>
                    <span style="font-weight:bold;">Yêu cầu</span>:<span><?= $rows->request ?></span>
                  <?php } ?>
                  </td>
                   
                  <td style="<?= $day == $getday&&$thu == 3 ?"background:yellow":'';  ?>"><?php if ($thu == 3){ ?>
                    <!-- <span style="font-weight:bold;"><?= $rows->name_work ?></span><br> --><span><?= $rows->content ?></span><br>
                    <span style="font-weight:bold;">Thời gian</span>:<span><?=  date("Y/m/d", strtotime($rows->workday)) ?></span><br>
                    <span style="font-weight:bold;">Note</snhupan>:<span><?= $rows->note ?></span><br>
                    <span style="font-weight:bold;">Yêu cầu</span>:<span><?= $rows->request ?></span>
                  <?php } ?>
                  </td>
                   
                  <td style="<?= $day == $getday&&$thu == 4 ?"background:yellow":'';  ?>"><?php if ($thu == 4){ ?>
                   <!--  <span style="font-weight:bold;"><?= $rows->name_work ?></span><br> --><span><?= $rows->content ?></span><br>
                    <span style="font-weight:bold;">Thời gian</span>:<span><?=  date("Y/m/d", strtotime($rows->workday)) ?></span><br>
                    <span style="font-weight:bold;">Note</span>:<span><?= $rows->note ?></span><br>
                    <span style="font-weight:bold;">Yêu cầu</span>:<span><?= $rows->request ?></span>
                  <?php } ?>
                  </td>
                   
                  <td style="<?php echo $day == $getday&&$thu == 5 ?"background:yellow":'';  ?>"><?php if ($thu == 5){ ?>
                    <!-- <span style="font-weight:bold;"><?= $rows->name_work ?></span><br> --><span><?= $rows->content ?></span><br>
                    <span style="font-weight:bold;">Thời gian</span>:<span><?=  date("Y/m/d", strtotime($rows->workday)) ?></span><br>
                    <span style="font-weight:bold;">Note</span>:<span><?= $rows->note ?></span><br>
                    <span style="font-weight:bold;">Yêu cầu</span>:<span><?= $rows->request ?></span>
                  <?php } ?>
                  </td>
                  
                  <td style="<?= $day == $getday&&$thu == 6 ?"background:yellow":'';  ?>"><?php if ($thu == 6){ ?>
                   <!--  <span style="font-weight:bold;"><?= $rows->name_work ?></span><br> --><span><?= $rows->content ?></span><br>
                    <span style="font-weight:bold;">Thời gian</span>:<span><?=  date("Y/m/d", strtotime($rows->workday)) ?></span><br>
                    <span style="font-weight:bold;">Note</span>:<span><?= $rows->note ?></span><br>
                    <span style="font-weight:bold;">Yêu cầu</span>:<span><?= $rows->request ?></span>
                  <?php } ?>
                  </td>
                   
                  <td style="<?= $day == $getday&&$thu == 0?"background:yellow":'';  ?>"><?php if ($thu == 0){ ?>
                   <!--  <span style="font-weight:bold;"><?= $rows->name_work ?></span><br> --><span><?= $rows->content ?></span><br>
                    <span style="font-weight:bold;">Thời gian</span>:<span><?=  date("Y/m/d", strtotime($rows->workday)) ?></span><br>
                    <span style="font-weight:bold;">Note</span>:<span><?= $rows->note ?></span><br>
                    <span style="font-weight:bold;">Yêu cầu</span>:<span><?= $rows->request ?></span>
                  <?php } ?>
                  </td>
                  
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
</div>

			
			