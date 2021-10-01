<?php
  session_start();
  require_once('../Models/dbConnection.php');
  include('navigation.php');
?>



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
            <h4 class="fs-5 d-none d-sm-inline badge bg-white text-dark form-control"> <?php echo "Dashboard" ?> </h4>
            <h4 class="fs-5 d-none d-sm-inline form-control badge bg-primary text-white"> <?php echo $row['FirstName'] ; echo "&nbsp;"; echo $row['LastName']; ?> </h4> 

                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                        <a href="../Controllers/usersList.php" class="nav-link align-middle px-0 text-white"><i class="fas fa-users"></i> &nbsp; Users </a>
                    </li>
                    <li class="nav-item">
                        <a href="../Views/changePassword.php" class="nav-link align-middle px-0 text-white"><i class="fab fa-expeditedssl"></i> &nbsp; Change password</a>
                    </li>
                    <li>
                        <a href="../Controllers/logout.php" class="nav-link px-0 align-middle text-white"><i class="fas fa-sign-out-alt"></i> &nbsp; Logout</a>
                    </li>
                </ul>
                <hr>
        </div>
</div>
        <div class="col py-3">
          <br> <br>
          <center>
          <h4 class="fs-5 d-none d-sm-inline form-control badge bg-primary text-white"> <?php echo "User Profile"; ?> </h4>
          </center>
          <br> <br>

        <div class="mt-2">
            <table class="table table-hover table-bordered table-sm text-center" style="background-color:lightskyblue" width="100%">
                <thead>
                     <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['Id'];?></td>
                        <td><?php echo $row['UserName'];?></td>
                        <td><?php echo $row['FirstName'];?></td>
                        <td><?php echo $row['LastName'];?></td>
                        <td><?php echo $row['Address'];?></td>
                        <td><?php echo $row['Phone'];?></td>
                        <td><?php echo $row['Email'];?></td>
                        <td><?php echo $row['Birthdate'];?></td>
                        <td><?php echo $row['Age'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>  
        </div>
    </div>
</div>
