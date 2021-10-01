<?php include('navigation.php');?>

    <br><br><br>
    <div align="center">
        <div class="card text-white" style="width: 70%;">
            <div class="card-header bg-primary">System Login</div>
            <div class="card-body">
                <form action="../Controllers/login.php" method="POST">
                    <div class="form-group row">
                        <div class="col-4 mt-2 text-primary">
                            <label>Email</label>
                        </div>
                        <div class="col-6 mt-2">
                            <input class="form-control" type="text" name="email" placeholder="Email" id="email" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 mt-2 text-primary">
                            <label>Password</label>
                        </div>
                        <div class="col-6 mt-2">
                            <input class="form-control" type="password" name="password" placeholder="Password" id="password" />
                        </div>
                    </div>
                    <input type="hidden" name="id">
                    <input type="hidden" name="userName">
                    <input type="hidden" name="firstName">
                    <input type="hidden" name="lastName">
                    <input type="hidden" name="address">
                    <input type="hidden" name="phone">
                    <!-- <input type="hidden" name="email"> -->
                    <input type="hidden" name="dob">
                    <input type="hidden" name="age">
                    <div class="form-group row">
                        <div class="col-4 mt-2 text-primary">

                        </div>
                        <div class="col-6 mt-2">
                            <button class="btn btn-dark form-control text-white" type="submit" name="submit"><i class="fas fa-sign-in-alt"></i> &nbsp; Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>