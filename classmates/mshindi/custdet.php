<?php 
require 'includes/daba.php';

if (isset($_GET['routeDT'])){
    $init = $_GET['location'];
    $destination = $_GET['destination'];
    $date = $_GET['TravelDate'];

    $buses = $db->prepare("SELECT * FROM `bus_details` WHERE `location`=? AND `destination`=?");
    $buses->execute(array($init,$destination));
} 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Online Bus Booking</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <form method="GET" action="ticket.php">
    <div class="container">
        <div class="row">
            <div class="col-md-11 offset-md-3 offset-lg-2 text-center" style="width: 80%;padding: 0px;margin-left: 120px;">
                <div class="shadow" style="width: 80%;margin: 0;margin-top: 119px;background-color: rgba(255,255,255,0.79);">
                       <div style="height: 100px;">
                            <div class="form-group">
                                <h4 class="text-center">Select bus and enter you details</h4>
                            </div>
                            <div class="form-group text-center"s>
                                <select class="form-control form-control-sm" name="busname" style="width:300px;">
                                    <optgroup label="Buses">
                                    <?php 
                                        while ($bus = $buses->fetch(PDO::FETCH_ASSOC)){
                                            echo "
                                            <option value".$bus['name'].">".$bus['name']."</option>
                                            ";      
                                        }
                                         ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="container profile " id="profile">
                                <div class="form-row profile-row">
                                    <div class="col-md-8">
                                        <hr>
                                        <div class="form-row">
                                            <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label>Firstname </label>
                                                <input class="form-control" type="text" name="firstname" required="">
                                            </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                <label>Lastname </label>
                                                <input class="form-control" type="text" name="lastname" required="">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input class="form-control" type="tel" autocomplete="off" required="true" name="phone">
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="col-md-12 content-right">
                                                <input class="btn btn-primary form-btn" type="submit" name="save" value="save">
                                                <button class="btn btn-danger form-btn" type="reset">Reset</button>
                                            </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>



<!-- <div class="row">
    <div class="col-md-12 alert-col relative">
        <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
    </div>
</div> -->