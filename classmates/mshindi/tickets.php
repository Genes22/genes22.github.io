<?php 
require 'includes/daba.php';

$bus  = $_GET['busname'];

if (isset($_GET['save'])){
    $fname = $_GET['firstname'];
    $lname = $_GET['lastname'];
    $phone = $_GET['phone'];

    //$buses = $db->prepare("SELECT * FROM `bus_details` WHERE `location`=? AND `destination`=?");
    //$buses->execute(array($init,$destination));
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
    <div class="row">
        <div class="col-sm-4 col-md-7 offset-md-3">
            <div class="pricingTable green" style="margin-top: 100px;">
                <div class="pricingTable-header">
                    <p style="float: right; font-weight: bold;">Not paid</p>
                    <center><h3>Ticket</h3></center>
                </div>
                <div class="pricingContent">
                    <table class="table table-hover table-dark">
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
                          <td>Mwanza</td>
                        </tr>
                        <tr>
                          <th>To</th>
                          <td>Dodoma</td>
                        </tr>
                        <tr>
                          <th>Bus name</th>
                          <td><?php echo $bus; ?></td>
                        </tr>
                        <tr>
                          <th>Bus fare</th>
                          <td>40,000Tsh</td>
                        </tr>
                        <tr>
                          <th>Ticket number</th>
                          <td>12</td>
                        </tr>

                      </tbody>
                    </table>
                </div>
                <div class="pricingTable-sign-up"><a href="#" class="btn btn-block">pay now</a></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>