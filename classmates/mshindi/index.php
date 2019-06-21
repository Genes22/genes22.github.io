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
    <div class="row" style="margin-top: 10%;">
        <div class="col-md-12" style="color: rgb(0,0,0);">
            <h2 class="text-center text-info" style="color: rgb(0,0,0)!important;font-weight: bold;">Please Enter Your Traveling details</h2>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-4" id="contact-box" style="padding-left: 40px;max-width: 30%;margin-left: 5%;">
            <p id="contact-text" style="margin-bottom: 0px;padding-bottom: 0px;">Please enter your detail where you come from and where your going &nbsp;and the date at which you plan to travel.<br></p>
            <div class="info-box"><span><br>Contact us:<br></span></div>
            <div class="info-box"><i class="fa fa-map-marker my-info-icons"></i><span class="text-uppercase text-info">Address: </span><span>Dar es salaam</span></div>
            <div class="info-box"><i class="fa fa-envelope my-info-icons"></i><span class="text-uppercase text-info">Email: </span><span>email@mshindi.com</span></div>
            <div class="info-box"><i class="fa fa-phone-square my-info-icons"></i><span class="text-uppercase text-info">Phone: </span><span>+25570000</span></div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 site-form" style="padding-right: 40px;margin-left: 5%;">
            <form action="custdet.php" method="GET" id="my-form">
                <div class="form-group">
                    <label for="from">From</label>
                    <input class="form-control" type="text" name="location" required="" placeholder="Dar " autofocus="">
                </div>
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input class="form-control form-control-lg" type="text" name="destination" required="" placeholder="Arusha" id="lastname">
                </div>
                <div class="form-group">
                    <label for="TravelDate">Travel date</label>
                    <input class="form-control" type="date" name="TravelDate" required="">
                </div>
                <button class="btn btn-warning" type="button">Reset</button>
                <input type="submit" name="routeDT" class="btn btn-success text-right">
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>