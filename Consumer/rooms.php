<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rooms.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="my-3 mx-3">
        <h1>Your Rooms</h1>
    </div>
    <div class="container room-list">
        <div class="row">
            <div class="col room">
                <figure>
                    <img class="image" src="assets/images/kitchen.jpg">
                </figure>
                <span><a href="index.php">Kitchen</a></span>
            </div>
            <div class="col room">
                <figure>
                    <img class="image" src="assets/images/kidsroom.jpg">
                </figure>
                <span><a href="#">Kid's Room</a></span>
            </div>
            <div class="col room">
                <figure>
                    <img class="image" src="assets/images/living.jpg">
                </figure>
                <span><a href="#">Living Room</a></span>
            </div>
            
        </div>

    </div>
    <div class="container">
        <button type="button" class="open-button" onclick="openForm()">Add new room</button>
    </div>
    <div class="form-popup" id="myForm">
        <form class="form-container">
            <h1>Add New Room</h1>

            <label for="room-name"><b>Room Name</b></label>
            <input type="text" placeholder="Enter New Room's Name" name="room-name" id="room-name" required>

            <button type="submit" class="btn addbtn" id="addbtn">Add</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

    <script src="js/room.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    
</body>

</html>