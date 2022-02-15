<?php

//database connection
$serviceName = "localhost";
$userName = "root";
$password = "";
$db = "camp";
$conn = new mysqli($serviceName, $userName, $password, $db);
$id = $_GET["Id"];

if (isset($_POST['done'])) {
    $fullName = $_POST['fullName'];
    $contactNumber = $_POST['contactNO'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $bloodGrp = $_POST['select_box'];
    $amount = $_POST['amount'];
    $vaccinated = $_POST['vaccine'];


    $q  = "update blood_camp set Id = '$id' , Full_Name =' $fullName' , Contact_Number = '$contactNumber ' , Age = '$age' , Gender =  '$gender' , Blood_Group =  '$bloodGrp' , Amount = '$amount' , Vaccinated = '$vaccinated'  where Id=  $id";

    mysqli_query($conn, $q);

    header("Location: display.php");
    exit;
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration form</title>
</head>

<body>
    <h2 class="update_h2">Updating     Form</h2>
    <div class="registration_form">
        <form method="post" name="login">
            <label>Full Name : </label> <span id="ans"></span> <br>
            <input id="inp" type="text" name="fullName" placeholder="Enter Your Full Name" onkeyup="namefun()">
            <br>

            <label>Contact Number :</label> <span id="ans1"></span> <br>
            <input id="inp" type="number" name="contactNO" placeholder="Enter Your Contact Number" onkeyup="numfun()">

            <br>

            <label>Age </label> <span id="ans2"></span> <br>
            <input id="inp" type="number" name="age" placeholder="Enter Your Age" onkeyup="agefun()">

            <br>
            <label>Gender :</label>
            <br>
            <label id="radio"><input type="radio" name="gender" value="m">Male</label>
            <br />
            <label id="radio"><input type="radio" name="gender" value="f">Female</label>

            <br>
            <label>Blood Group : </label>

            <select name="select_box">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

            <br>
            <label>Amount of Blood Donate</label> <br>
            <input id="inp" type="text" name="amount" placeholder="Enter Amount of Blood Donate In ml. ex : 1000">

            <br>
            <label>Vaccinated: </label>
            <br>
            <label id="radio"><input type="radio" name="vaccine" value="Only First Dose">Only First Dose</label>
            <br />
            <label id="radio"><input type="radio" name="vaccine" value="Both Doses">Both Doses</label>
            <br />
            <!-- <label id="radio"><input type="radio" name="vaccine" value="None">None</label> -->

            <div id="btn">
                <button type="submit" class="btn btn-primary" name="done" onclick="fun()">Update</button>
            </div>
        </form>
    </div>

    <SCript>
        function fun() {
            // prompt()
            confirm("Are you want to submit...?");
            alert("form submit successfully...!")
        }

        // fullname validation
        var name_access = document.login.fullName;
        var ans = document.getElementById("ans");

        function namefun() {
            let regx = /^([^0-9]*)$/;
            if (regx.test(name_access.value)) {
                ans.textContent = "Valid";
                ans.style = "color : green;";
            } else {
                ans.textContent = "Invalid"
                ans.style = "color : red";;
            }
        }


        //mobile number validation
        var num_access = document.login.contactNO;
        var ans1 = document.getElementById("ans1");

        function numfun() {
            let regx =/^(\+\d{1,3}[- ]?)?\d{10}$/;

            if (regx.test(num_access.value)) {
                ans1.textContent = "Valid";
                ans1.style = "color : green;";
            } else {
                ans1.textContent = "Invalid"
                ans1.style = "color : red";;
            }
        }

        //age validation
        var ans2 = document.getElementById("ans2");
        function agefun() {
            var x = document.login.age.value;
            if (isNaN(x) || x < 1 || x > 100) {
                ans2.textContent = "Invalid";
                ans2.style = "color : red"
            } else {
                ans2.textContent = "Valid";
                ans2.style = "color : green";
            }
        }
    </SCript>
</body>

</html>