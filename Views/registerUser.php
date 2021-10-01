<?php include('navigation.php');?>

<br> <br>
<div align="center" class="mt-4">
    <div class="card text-white" style="width: 70%;">
        <div class="card-header bg-primary">Register New User</div>
        <div class="card-body">
            <form id="form">
                <div class="form-group row">
                    <div class="col-4 text-primary">
                        <label>Id</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="id" placeholder="Id" id="id" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 text-primary">
                        <label>User Name</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="userName" placeholder="User Name" id="userName" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 text-primary">
                        <label>First Name</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="firstName" placeholder="First Name" id="firstName" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">
                        <label>Last Name</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="lastName" placeholder="Last Name" id="lastName" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">
                        <label>Address</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="address" placeholder="Address" id="address" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">
                        <label>Phone</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="phone" placeholder="Phone" id="phone" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">
                        <label>Email</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="email" placeholder="Email" id="email" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">
                        <label>Birthdate</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="date" name="dob" placeholder="Dob" id="dob" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">
                        <label>Age</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="text" name="age" placeholder="Age" id="age" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">
                        <label>Password</label>
                    </div>
                    <div class="col-4 mt-2">
                        <input class="form-control" type="password" name="password" placeholder="Password" id="password" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4 mt-2 text-primary">

                    </div>
                    <div class="col-4 mt-2">
                        <a class="form-control btn btn-primary text-white" type="button" id="register"><i class="fas fa-user-plus"></i> &nbsp; Submit</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../lib/js/registerUser.js"></script>