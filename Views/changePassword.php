<?php
  session_start();
  include('navigation.php');
?>


<br><br><br>
    <div align="center">
        <div class="card text-white" style="width: 70%;">
            <div class="card-header bg-primary">Change Password</div>
            <div class="card-body">
                <form action="../Controllers/changePassword.php" method="POST">
                    <div class="form-group row">
                        <div class="col-4 mt-2 text-primary">
                            <label>Password</label>
                        </div>
                        <div class="col-6 mt-2">
                            <input class="form-control" type="text" name="pass" placeholder="Password" id="pass" />
                        </div>
                    </div>
                    <input type="hidden" name="id">
                    <input type="hidden" name="userName">
                    <input type="hidden" name="firstName">
                    <input type="hidden" name="lastName">
                    <input type="hidden" name="address">
                    <input type="hidden" name="phone">
                    <input type="hidden" name="email">
                    <input type="hidden" name="dob">
                    <input type="hidden" name="age">
                    <div class="form-group row">
                        <div class="col-4 mt-2 text-primary">

                        </div>
                        <div class="col-6 mt-2">
                            <button class="btn btn-dark form-control text-white" type="submit" name="submit"><i class="fas fa-save"></i> &nbsp; Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>