<?php
require '../include/dbConnect.php';
if(!empty($_POST['Cid']))
{

        $query = "SELECT * FROM customer WHERE id = '".$_POST["Cid"]."'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        echo json_encode($row);

} ?>
