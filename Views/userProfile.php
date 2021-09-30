
<?php
session_start();
require_once('../Models/dbConnection.php');
?>
<link href="../lib/bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="homepage.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item text-white" href="#">Action</a></li>
                      <li><a class="dropdown-item text-white" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

          <?php 
            global $row;
            $_email = $_SESSION['email'];
            $mysqlConnection = mySqlConnection();
            $query = "SELECT * from users where Email ='$_email'";
            $sqlExecution = mysqli_query($mysqlConnection, $query);
            $row = mysqli_fetch_array($sqlExecution);
            ?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <h4 class="fs-5 d-none d-sm-inline badge bg-primary text-white"> <?php echo $row['FirstName'] ; echo "&nbsp;"; echo $row['LastName']; ?> </h4>

                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
        <div class="mt-2">
            <table class="table table-hover table-bordered table-sm text-center" style="background-color:lightskyblue" width="100%">
                <thead>
                     <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>User Name</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
        </div>  
        </div>
    </div>
</div>
