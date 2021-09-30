<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bit Mascot</title>
</head>

<body>
    <link href="../lib/bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../lib/css/site.css">
    <header class="customHeader">
        <nav align="right">
            <img align="left" src="../lib/images/BitMascot.png" />
            <br />
            <a style="text-decoration-line: inherit; color: white; margin: 3px;" href="homepage.html">Home</a> &nbsp;
            <a style="text-decoration-line: inherit; color: white; margin: 5px;" href="../Views/login.php">Login</a>
        </nav>
    </header>

    <br><br><br><br>

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
                            <button class="btn btn-dark form-control text-white" type="submit" name="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>