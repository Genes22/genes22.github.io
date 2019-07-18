<?php 
require 'includes/daba.php';

$busname  = $_GET['busname'];

if (isset($_GET['save'])){
    $fname = cleaner($_GET['firstname']);
    $lname = cleaner($_GET['lastname']);
    $passname = cleaner($fname."    ".$lname);
    $phone = cleaner($_GET['phone']);
    $passid = cleaner($_GET['passengerID']);

    //get bus id
    $bus = $db->prepare("SELECT `bus_id`,`bus_photo`, `bus_fare` FROM `bus_details` WHERE `name`=?");
    $bus->execute(array($_GET['busname']));
    $buside = $bus->fetch(PDO::FETCH_ASSOC);
    $busID = $buside['bus_id'];
    $busPhoto = $buside['bus_photo'];
    $fare = $buside['bus_fare'];
    
    //update passenger details
    $buses = $db->prepare("UPDATE `passenger` SET `pass_name` = ?, `phone` = ? WHERE `passenger_id` = ?");
    $buses->execute(array($passname,$phone,$passid));
    //passenger details
    $tpass = $db->prepare("SELECT * FROM `passenger` WHERE `passenger_id` = ? and`phone` = ? ");
    $tpass->execute(array($passid, $phone));
    $passenger = $tpass->fetch(PDO::FETCH_ASSOC);

    //add ticket details
    $seatno = rand(1,60);
    $tickdet = $db->prepare("INSERT INTO `ticket` (`passenger_id`, `bus_id`, `seat_no`, `travel_date`) VALUES ()");
    $tickdet->execute(array($passid,$busID,$seatno,$passenger['travel_date']));
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
    <center>
    <div class="row"  style="margin-top: 10%;">
        <div class="col-sm-3 col-md-8 offset-md-2">
                <div style="float: left;margin-left: 5px; margin-top: 70px;">
                  <img src="assets/images/buses/<?php echo $busPhoto; ?>" alt="bus image">
                </div>
                <div style="float: right;">
                  <div class="pricingTable-header">
                    <!-- <p style="float: right; font-weight: bold;">Not paid</p> -->
                    <center><h3>Ticket</h3></center>
                </div>
                <div class="pricingContent">
                    <table class="table table-dark" style="width: 350px;">
                      <tbody>
                        <tr>
                          <th>First name</th>
                          <td><?php echo $fname; ?></td>
                        </tr>
                        <tr>
                          <th>last name</th>
                          <td><?php echo $lname; ?></td>
                        </tr>
                        <tr>
                          <th>From</th>
                          <td><?php echo $passenger['from']; ?></td>
                        </tr>
                        <tr>
                          <th>To</th>
                          <td><?php echo $passenger['destination']; ?></td>
                        </tr>
                        <tr>
                          <th>Bus name</th>
                          <td><?php echo $busname; ?></td>
                        </tr>
                        <tr>
                          <th>Bus fare</th>
                          <td><?php echo $fare; ?></td>
                        </tr>
                        <tr>
                          <th>Ticket number</th>
                          <td><?php echo $seatno; ?></td>
                        </tr>

                      </tbody>
                    </table>
                </div>
                <div class="pricingTable-sign-up"><a href="PAYMENT METHOD.HTML" class="btn btn-success">pay now</a></div>
                </div>  
            <!-- <img src="assets/images/buses/<?php //echo $busPhoto; ?>" alt="bus image"> -->
        </div>
    </div>
    </center>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>