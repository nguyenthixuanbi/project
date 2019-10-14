<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>    

 <div class="col-md-1"></div>         
<div class="col-md-10 admin">
    <div style="margin-bottom:5px;">
        <?php if($_SESSION['role_id'] == 2) {?>
        <a href="index.php?area=backend&controller=Assignwork&action=assign" class="btn btn-primary">Assign work for all</a>
        <?php } ?>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List user</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Fullname</th>
                    
                    <th style="width:100px;"></th>
                </tr>
                <?php 
                    $listUsers = $data['listuser'];
                    $assigns = $data['assign'];
                    // var_dump($listUsers);
                    // var_dump($assigns);
                    // die();
                 ?>
                <?php foreach($listUsers as $listuser): ?>
                <tr>
                        <td class="listassign" data-id="<?= $listuser->id ?>"><?= $listuser->name ?></td>  
                   
                        <td style="text-align:center;">
                            <button class="assign" data-id ="<?= $listuser->id  ?>"><span><i class="fa fa-cogs"></i> Assign work</span></button>
                        </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled">
                    <a href="#" class="page-link">Trang</a>
                </li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item">
                    <a href="index.php?area=backend&controller=Assignwork&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>                    
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
<!-- <div class="form-assign"> -->
<?php 
    include "Views/Backend/test.php";
?>
<!-- </div> -->
<table id="assignTable">
    <tr>
        <td id="name_work"></td>
        <td id="start"></td>
        <td id="deadline"></td>
        <td id="confirm"></td>
        <td id="proc"></td>
    </tr>
</table>