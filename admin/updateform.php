<?php
//to add column in sql table use query is following
//alter table tablename add column name datatype not null after column name;
include ('titlehead.php');
include 'header.php';
include '../dbcon.php';

$upid = $_GET['upid'];
$qu = "select * from student where id = '$upid'";
$result = mysqli_query($conn, $qu);

$row_data = mysqli_fetch_assoc($result);
$name = $row_data['name'];
$rollno = $row_data['rollno'];
$city = $row_data['city'];
$pcon=$row_data['pcont'];
$std = $row_data['standard'];
$image = $row_data['image'];
$upid = $row_data['id'];



?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
    <table border="1" align="center" style="width: 70% ; margin-top: 40px;">
        <tr>
            <td>Roll no</td>
            <td><input type="text" name="rno" autocomplete="off" value="<?php echo $rollno ?>" style="width:60%" required></td>
        </tr>
                <tr>
            <td>Name</td>
            <td><input type="text" name="sname" autocomplete="off" value="<?php echo $name ?>" style="width:60%" required></td>
        </tr>
                <tr>
            <td>City</td>
            <td><input type="text" name="city" autocomplete="off" value="<?php echo $city ?>" style="width:60%" required=""></td>
        </tr>
                <tr>
            <td>Parent Contact no</td>
            <td><input type="text" name="pcno"autocomplete="off" value="<?php echo $pcon; ?>" style="width:60%" required></td>
        </tr>
                <tr>
            <td>Standard</td>
            <td><input type="number" name="std" autocomplete="off" value="<?php echo $std ?>" style="width:60%" required></td>
        </tr>
       <tr>
            <td>Image</td>
            <td><input type="file" name="studimg" value="<?php echo $image ?>" required></td>
        </tr>
        <tr>
            
            <td colspan="2" align="center">
                <input type="hidden" name="upid" value="<?php echo $row_data['id'] ?>"/>
                <input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

