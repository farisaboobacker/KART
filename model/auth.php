<?php 

// Database connect 
// include_once('../Database/Db_connect.php');

class auth{
    var $_db;
    public function __construct($db) {
        $this->_db = $db->con;
    }

    public function login($email,$password){
        $sql ="SELECT * FROM `users` WHERE `email`='$email'";
        $res= $this->_db->query($sql)->fetch_object();
      
        if ($res && password_verify($password,$res->password)) {
            session_start();
            $_SESSION['logined']=true;
            $_SESSION['user_name']=$res->name;
            $_SESSION['role']=$res->role;
                if ($res->role=="admin") {
                    echo "<script>
                    alert('Login Success');
                    window.location.href='./admin/dashboard/admindashboard.php'
                    </script>";
                }
                
            echo "<script>
            alert('Login Success');
            window.location.href='../index.php'
            </script>";
        }else{
            echo "<script>
            alert('Login Failed');
            window.location.href='./login.php'
            </script>";
        }
        
        
    }

}