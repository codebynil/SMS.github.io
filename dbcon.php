<?php

$conn = mysqli_connect('localhost', 'root');// hostname , userid
mysqli_select_db($conn, 'sms'); // variable name  , db name
if(!$conn)
{
    echo "connection failed";
}
else
{
    //echo "connection ok";
}


        /*
<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'brm_db');
$Fetch_Query = "Select * from book";
$ResultSet = mysqli_query($con, $Fetch_Query);
$num = mysqli_num_rows($ResultSet);
mysqli_close($con);
?>
         *          */
?>