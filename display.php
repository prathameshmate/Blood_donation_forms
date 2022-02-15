<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container m-top">
        <h2 class="text-info text-center">Display All Registration</h2>
        <table class="table table-striped table-hover table-bordered">
            <thead class=" bg-dark text-white">
                <tr class="text-center ">
                    <th scope="col">Id</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Age </th>
                    <th scope="col">Gender</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Amount Of Blood donate (in ml)</th>
                    <th scope="col">Vaccinated</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    // Database connection
                    $servicename = "localhost";
                    $username = "root";
                    $password = "";
                    $db = "camp";
                    $conn = new mysqli($servicename, $username, $password, $db);

                    $q = "select * from  blood_camp";
                    $query = mysqli_query($conn, $q);

                    while ($res = mysqli_fetch_array($query)) {


                ?>
                    <tr class=" text-center">
                        <td scope="row"><?php echo $res['Id']?></td>
                        <td scope="row"><?php echo $res['Full_Name']?></td>
                        <td scope="row"><?php echo $res['Contact_Number']?></td>
                        <td scope="row"><?php echo $res['Age']?></td>
                        <td scope="row"><?php echo $res['Gender']?></td>
                        <td scope="row"><?php echo $res['Blood_Group']?></td>
                        <td scope="row"><?php echo $res['Amount']?></td>
                        <td scope="row"><?php echo $res['Vaccinated']?></td>
                        <td scope="row"><button class=" btn btn-danger"><a class="text-white" href="delete.php?Id=<?php echo $res['Id']; ?>">Delete</a></button></td>
                        <td scope="row"><button class=" btn btn-primary"><a class="text-white" href="update.php?Id=<?php echo $res['Id']; ?>">Edit</a></button></td>  
                    </tr>

                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</body>

</html>