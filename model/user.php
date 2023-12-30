<?php 

// Database connect 
// include_once('../Database/Db_connect.php');

class User{
    var $_db;
    public function __construct($db) {
        $this->_db = $db->con;
    }

    // public function login($email,$password){
    //     $sql ="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    //     $res= $this->_db->query($sql)->fetch_object();
    //     if (!$res) {
    //         echo "<script>
    //         alert('Login Failed');
    //         window.location.href='./login.php'
    //     </script>";
    //     }else{
    //         $_SESSION['user_id']=$res->id;
    //         $_SESSION['user_name']=$res->name;
            
    //         exit();
    //         echo "<script>
    //         alert('Login Success'$res->id);
    //         window.location.href='../index.php'
    //         </script>";
    //     }
        
        
    // }

    public function insert($name,$email,$password,$role="user")  {
        $pass_hash=password_hash($password,PASSWORD_BCRYPT);
        // $sql="INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
        $sql = $this->_db->prepare("INSERT INTO `users` (`name`,`email`,`password`,`role`) VALUES (?, ?, ?,?)");
        $sql->bind_param("ssss",$name, $email,$pass_hash,$role);
        return $sql->execute();
    }
}
?>