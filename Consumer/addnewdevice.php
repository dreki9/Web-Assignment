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
    <link rel="stylesheet" href="css/addnewdevice.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="container text-center my-5">
        <h1>Add New Device</h1>
    </div>
    <div class="container xform">
        <form>
            <div class="mb-3">
                <label for="device-name" class="form-label">Device name</label>
                <input type="text" class="form-control" id="device-name" aria-describedby="emailHelp">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select room</option>
                <option value="1">Kitchen</option>
                <option value="2">Kid's Room</option>
                <option value="3">Living Room</option>
            </select>
            <div class="my-3">
                <h3>Connect with Wi-Fi</h3>
            </div>
            <div class="mb-3">
                <label for="wifi-name" class="form-label">Wifi name</label>
                <input type="text" class="form-control" id="wifi-name">
            </div>
            <div class="mb-3">
                <label for="password-wifi" class="form-label">Password</label>
                <input type="password" class="form-control" id="password-wifi">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add Device</button>

            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>