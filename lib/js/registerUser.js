$("#register").click(function () {
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var address = document.getElementById('address').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var dob = document.getElementById('dob').value;
    var age = document.getElementById('age').value;
    var password = document.getElementById('password').value;
    //var Department = document.getElementById('Department').value;
    //var Designation = document.getElementById('Designation').value;
    var formData = $("#form").serialize();
    var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.open('POST', '../Controllers/registerUser.php', true);
    xmlHttpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttpRequest.send(formData);
    if (firstName != "" && lastName !="" && address !="" && phone !="" && email !="" && dob !="" && age !="" && password !="") {
        xmlHttpRequest.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert("Registered new employee !");
                //$("#statusMessage").append("Registered new employee !").css('color', '#14c41f');
                document.getElementById('firstName').value = '';
                document.getElementById('lastName').value = '';
                document.getElementById('address').value = '';
                document.getElementById('phone').value = '';
                document.getElementById('email').value = '';
                document.getElementById('dob').value = '';
                document.getElementById('age').value = '';
                document.getElementById('password').value = '';
                setTimeout(function () {
                    //$("#statusMessage").html("");
                }, 3000);
            }
        }
    }
    else {
        alert("You can't leave any fields empty !");
        //$("#statusMessage").append("You can't leave any fields empty !").css('color', 'red');
        setTimeout(function () {
            ///$("#statusMessage").html("");
        }, 3000);
    }
});




