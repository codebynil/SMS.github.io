<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(isset($_SESSION['sid']))
{
    echo "";
}
else
{
    header('location: ../login.php');
}

?>
<div class="admintitle" align="center">
<h1>Welcome to Admin Dashboard</h1>
<h3><a href="Logout.php" style="float:right; margin-right: 25px; color:cornsilk; margin-top:-220px">Logout</a></h3>
<h3><a href="admindash.php" style="float: left; margin-left: 25px;color: cornsilk; margin-top: -220px">Back to Dashboard</a></h3>
</div>