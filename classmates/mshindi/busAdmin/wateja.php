<?php 
require 'includes/daba.php';

$getpass = $db->prepare("SELECT * FROM `passenger`");
$getpass->execute();


 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=e48da71b445e079c893c2d5e0aabc572">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=007e2915579cabc3c96ddf9761ed3584">
</head>

<body>
    <h3>Travellers</h3>
    <div class="datagrid" style="width: 60%; margin-top: 10px;">
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>From</th>
                    <th>destination</th>
                    <th>phone</th>
                    <th>Travelling date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($pass = $getpass->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                    <tr>
                    <td>".$pass['pass_name']."</td>
                    <td>".$pass['from']."</td>
                    <td>".$pass['destination']."</td>
                    <td>".$pass['phone']."</td>
                    <td>".$pass['travel_date']."</td>
                </tr>";
                }


                 ?>
                
            </tbody>
            <tfoot>
                <tr></tr>
            </tfoot>
        </table>
    </div>
    <script src="assets/js/jquery.min.js?h=1dd785e1de9a32e236b624ae268bb803"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
</body>

</html>