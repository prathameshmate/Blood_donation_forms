<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>display storage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container m-top">
        <h2 class="text-info text-center">Display Blood Storage</h2>
        <table class="table table-striped table-hover table-bordered">
            <thead class=" bg-dark text-white">
                <tr class="text-center ">
                    <th scope="col">Blood Group</th>
                    <th scope="col">Total Blood ( in ml )</th>
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

                    $q = "select Blood_Group , sum(Amount)  as Total from blood_camp 
                          group by Blood_Group";
                    $query = mysqli_query($conn, $q);

                    while ($res = mysqli_fetch_array($query)) {


                ?>
                    <tr class=" text-center">
                        
                        <td scope="row"><?php echo $res['Blood_Group']?></td>
                        <td scope="row"><?php echo $res['Total']?></td>
                     
                    </tr>

                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</body>

</html>