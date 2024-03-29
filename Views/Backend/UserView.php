<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>               
<div class="col-md-1"></div>    
<div class="col-md-10">
    <div style="margin-bottom:5px;">
        <?php if($_SESSION['role_id'] == 2) {?>
        <a href="index.php?area=backend&controller=User&action=add" class="btn btn-primary">Add user</a>
        <?php } ?>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List User</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th style="width:150px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->email; ?></td>
                    <td style="text-align:center;">
                        <?php if($_SESSION['role_id'] == 2){?>
                        <a href="index.php?area=backend&controller=User&action=edit&id=<?php echo $rows->id; ?>"><i class="fa fa-cogs"></i> Edit</a><br>
                        <?php } ?>
                        <?php if($_SESSION['role_id']==1){ ?>
                        <a href="index.php?area=backend&controller=User&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash"></i> Delete</a>
                        <?php } ?>
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
                    <a href="index.php?area=backend&controller=User&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>                    
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>