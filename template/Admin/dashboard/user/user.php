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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $row){ ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['role'] ?></td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                        
                </tbody>
            </table>
        </div>
    </div>

    <?= include("../../layout-admin/adminFooter.php"); ?>

   