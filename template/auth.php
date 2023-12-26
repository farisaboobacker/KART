<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>
    alert('please login');
    window.location.href='/ekart/template/login.php'
</script>";
}
?>