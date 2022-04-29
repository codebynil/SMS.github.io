<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>School Management System</title>
    </head>
    <body>
        <h3 align="right" style="margin-right: 20px;">
            <a href="login.php">Admin Login</a></h3>
        <h1 align="center">Welcome to School management System</h1>
        
        <form action="index.php" method="post">
            <table style="width: 30%" align="center" border="2px">
                <tr>
                    <td colspan="2" align="center">Student Information</td>
                </tr>
                <tr>
                    <td align="left">Choose Standard</td>
                            <td><select name="std">
                                    <option value="1">First</option>
                                    <option value="2">Second</option>
                                    <option value="3">Third</option>
                                    <option value="4">Fourth</option>
                                    <option value="5">Fifth</option>
                                    <option value="6">Sixth</option>
                                    <option value="7">Seventh</option>
                                    <option value="8">Eighth</option>
                                    <option value="9">Nineth</option>
                                    <option value="10">Tenth</option>
                        </select></td>
                </tr>
                <tr>
                    <td align="left">Enter Roll no.</td>
                    <td><input type="text" name="rollno"></td>
                </tr>
                <tr>
                    
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Show info"></button>
                    </td>
                </tr>
                
            </table>
            
        </form>
    </body>
</html>

<?php
include 'dbcon.php';
include 'function.php';
if(isset($_POST['submit']))
{
  $standard = $_POST['std']                          ;
  $Rollno = $_POST['rollno'];
  
  showDetails($standard,$Rollno);
          
  
}

?>