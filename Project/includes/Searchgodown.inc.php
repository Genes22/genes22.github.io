<?php              
if (isset($_POST['search_submit'])) {

    require 'dbh.inc.php';


                    $Status = $_POST['Status'];
                    $Locality = $_POST['Locality'];
                    $District = $_POST['District'];
                    $Area = $_POST['Area'];
                    $City = $_POST['City'];

                    if (empty($Locality) || empty($Area)){
                        header("Location: ../Searchgodown.php?error=emptyfield");
                        exit();
                    }
                    elseif (!preg_match("/^[0-9]*$/", $Area)) {
                         header("Location: ../Searchgodown.php?error=invalidinputs");
                         exit();
                    }
                    else {
                        $sql = "SELECT * FROM godown WHERE Status=? and Location=? and District=? or Area=?  and City=?";
                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                             header("Location: ../Searchgodown.php?error=sqlerror");
                             exit();
                            }
                            else {
                                mysqli_stmt_bind_param($stmt, "sssis", $Status, $Locality, $District, $Area, $City);
                                mysqli_stmt_execute($stmt);
                               # mysqli_stmt_store_result($stmt);
                               # $resultCheck = mysqli_stmt_num_rows($stmt);
                                $resultCheck = mysqli_stmt_get_result($stmt);

                                if ($row = mysqli_fetch_assoc($resultCheck) > 0) {

                                    header("Location: ../Searchgodown.php?succes=resultfound");

                                    echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Ref#</th>';
                    echo '<th>Status</th>';
                    echo '<th>Locality</th>';
                    echo '<th>Price</th>';
                    echo '<th>Contact</th>';
                    echo '<th>Area(M<sup>2</sup>)</th>';
                    echo '<th>Column 7</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($resultCheck)) {
                echo '<tr>';
                    echo '<td>'.$row['Id'].'</td>';
                    echo '<td>'.$row['Status'].'</td>';
                    echo '<td>'.$row['Location'].'</td>';
                    echo '<td>'.$row['Price'].'</td>';
                    echo '<td>'.$row['Contact'].'</td>';
                    echo '<td>'.$row['Area'].'</td>';
                    echo '<td>Cell 2</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td colspan="7" style="color:rgb(255,255,255);">'.$row['Discription'].'</td>';
                echo '</tr>';
            echo '</tbody>';
            }
                
        echo '</table>';
                                    
                                    exit();        
                                }
                                else {
                                    header("Location: ../Searchgodown.php?error=noresult");
                                    exit();
                                }
                            }
                    }
                }
                else {
                    header("Location: ../Searchgodown.php?error=aaa");
                    exit();
                }
            