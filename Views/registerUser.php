
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="card text-white">
    <div class="card-header bg-primary">Register New User</div>
    <div class="card-body">
        <form  id="form">
            <div class="form-group row">
                <div class="col-2 text-primary">
                    <label>First Name</label>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="firstName" placeholder="First Name" id="firstName" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                    <label>Last Name</label>
                </div>
                <div class="col-4 mt-2">
                    <input class="form-control" type="text" name="lastName" placeholder="Last Name" id="lastName" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                    <label>Address</label>
                </div>
                <div class="col-4 mt-2">
                    <input class="form-control" type="text" name="address" placeholder="Address" id="address" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                    <label>Phone</label>
                </div>
                <div class="col-4 mt-2">
                    <input class="form-control" type="text" name="phone" placeholder="Phone" id="phone" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                    <label>Email</label>
                </div>
                <div class="col-4 mt-2">
                    <input class="form-control" type="text" name="email" placeholder="Email" id="email" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                    <label>Birthdate</label>
                </div>
                <div class="col-4 mt-2">
                    <input class="form-control" type="date" name="dob" placeholder="Dob" id="dob" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                    <label>Age</label>
                </div>
                <div class="col-4 mt-2">
                <input class="form-control" type="text" name="age" placeholder="Age" id="age" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                    <label>Password</label>
                </div>
                <div class="col-4 mt-2">
                <input class="form-control" type="password" name="password" placeholder="Password" id="password" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2 mt-2 text-primary">
                
                </div>
                <div class="col-4 mt-2">
                <input class="form-control btn btn-primary text-white" type="button" id="register" value="Submit" />
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../lib/js/registerUser.js"></script>