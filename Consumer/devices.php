<?php include "logout.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/devices.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="container">
        <h1>Your Devices</h1>
    </div>
    <div class="container">
        <div class="row my-3">
            <div class="col mt-3">
                <div class="card" style="width: 18rem; height: auto;">
                    <img src="assets/images/wifiextender.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wifi Extender</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tenetur.</p>
                        <a href="#" class="btn btn-primary">Ayarlar</a>
                    </div>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/wifiextender.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wifi Extender 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tenetur.</p>
                        <a href="#" class="btn btn-primary">Ayarlar</a>
                    </div>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/wifiextender.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wifi Extender 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tenetur.</p>
                        <a href="#" class="btn btn-primary">Ayarlar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container button" >
        <button type="button" class="btn btn-primary"><a href="addnewdevice.php">Add new device</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>    
</body>


</html>