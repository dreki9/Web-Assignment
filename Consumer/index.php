<?php include "logout.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container my-3">
        <h1>Welcome to your Home Automation System <?php echo $_SESSION['username'] ?></h1>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col card text-center" style="width: 18rem;">
                <div class="card-body">
                    <i class='bx bx-time-five card-title'></i>
                    <div class="time card-text">
                        <h3>14:07</h3>
                        <h4>22.04.2023</h4>
                    </div>
                </div>
            </div>
            <div class="col card text-center mx-1" style="width: 18rem; ">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <i class='bx bxs-thermometer card-title'></i>
                    <div class="temperature">
                        <h1><?php echo(rand(0,38)) ?>°C</h1>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <i class='bx bx-droplet card-title'></i>
                    <div class="humidity">
                        <h1><?php echo(rand(20,80)) ?>%</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>