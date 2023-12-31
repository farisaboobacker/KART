<?php 
session_start();
$uri= basename($_SERVER['REQUEST_URI']);
if ($uri=="login.php"||$uri=="register.php"||$uri=="adminregister.php") {
  
} else if(!isset($_SESSION['logined'])){
  header("Location:/ekart/template/login.php");
  exit();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">EKART</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/ekart">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#category">Category</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ekart/template/register.php">Register</a>
      </li>
      <li class="nav-item">
        <?php 
          if (!isset($_SESSION['logined'])) {
            echo "<a class='nav-link' href='/ekart/template/login.php'>Login</a>";
          } else {
            echo "<a class='nav-link' href='/ekart/template/logout.php'>Logout</a>";
           
          }
        ?>
      </li>
      <li class="nav-item">
        <?= (isset($_SESSION['logined']))?"<a class='nav-link' href=''>".$_SESSION['user_name']."</a>":"" ?>
      </li>
      <li class="nav-item">
        <?php 
        if (isset($_SESSION['logined'])) {
            if ($_SESSION['role']=='admin') {
              echo "<a class='nav-link' href='/ekart/template/admin/dashboard/admindashboard.php'>Dashborad</a>";
            }
          }
        ?>
      </li>
     
    </ul>
    
  </div>
</nav>