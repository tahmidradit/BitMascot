<?php
session_start();
?>
<?php
if(isset($_SESSION['loggedIn']))
{
?>
<html>

<head>
    <title>Admin Home</title>
</head>

<body>
    <link rel="stylesheet" href="../lib/css/site.css">
    <header class="customHeader">
        <nav align="right">
            <img align="left" src="../lib/images/BitMascot.png" />
            <br>
            
        </nav>
    </header>
    <br> <br> <br>
    <center>
    <?php
        echo "<h2> Welcome ".$_SESSION['email']."!</h2>";
    ?> 
    </center>
    <center>
        
    </center>
    <br>
    <!-- <center>
        <div id="load"></div>
    </center> -->
    <div id="load"></div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>

</html>

<?php
}
else
{
include('login.php');
}
?>