<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/userProperties.php');
    include('../Views/navigation.php');

    $mysqlConnection = mySqlConnection();
    $query = "select * from users ";
    $sqlExecution=mysqli_query($mysqlConnection,$query);
?>
<br>
<div class="container">
<h2>Users List</h2><br>
<table id="usersList" class="table table-warning table-bordered table-sm text-center">
        <thead class="table table-secondary">
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
            <?php
                while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) { 
                    echo "  
                         <tr>
                            <td>".$rowsCount['Id']."</td>
                            <td>".$rowsCount['UserName']."</td>
                            <td>".$rowsCount['FirstName']."</td>
                            <td>".$rowsCount['LastName']."</td>
                            <td>".$rowsCount['Address']."</td>
                            <td>".$rowsCount['Phone']."</td>
                            <td>".$rowsCount['Email']."</td>
                            <td>".$rowsCount['Birthdate']."</td>
                            <td>".$rowsCount['Age']."</td>
                        </tr>
                        ";
                }       
            ?>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#usersList').DataTable();
    } );
</script>