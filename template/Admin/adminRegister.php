<?php
$title = "Admin";
?>
<?php include_once("./layout-admin/adminHead.php") ?>
<?php include_once("./layout-admin/adminHeader.php") ?>
<form action="#" method="post">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Register</p>

                                    <form class="mx-1 mx-md-4">
                                        <input type="hidden" name="role" value="admin">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" name="name"/>
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control" name="email"/>
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" name="password"/>
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="../../images/landing/draw1.png" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

<?php include_once("./layout-admin/adminFooter.php") ?>



<!--  -->
<?php 

   // Request
   if ($_SERVER['REQUEST_METHOD']=="POST") {
    // Add user model
        include("../../model/user.php");
        include('../../Database/Db_connect.php');
        $user_model=new User(new DB_CON());
       $name=$_REQUEST['name'];
       $email=$_REQUEST['email'];
       $password=$_REQUEST['password'];
       $role=$_REQUEST['role'];
        // insert
        $res=$user_model->insert($name,$email,$password,$role);
        if ($res) {
            echo "<script>
                alert('Registration Successfull');
                window.location.href='../login.php'
            </script>";
        } else {
            echo "<script>
                alert('Registration failed');
            </script>";
        }
        

   } 
?>