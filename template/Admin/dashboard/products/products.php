<?php 

include('../../../../model/user.php');
include('../../../../Database/Db_connect.php');
$user_model=new User(new DB_CON());
$users=$user_model->fecthUsers();
?>
<?= include("../../layout-admin/adminHead.php"); ?>
<?= include("../../layout-admin/adminHeader.php"); ?>
<?= include("../../layout-admin/aside.php"); ?>

    <div class="content-box shadow rounded border">
        <div class="container">
            
        </div>
    </div>


<?= include("../../layout-admin/adminFooter.php"); ?>