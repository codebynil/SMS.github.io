<?php
include ('titlehead.php');
include ('header.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
    <table border="1" align="center" style="width: 70% ; margin-top: 40px;">
        <tr>
            <td>Roll no</td>
            <td><input type="text" name="rno" autocomplete="off" placeholder="enter roll no" style="width:60%" required></td>
        </tr>
                <tr>
            <td>Name</td>
            <td><input type="text" name="sname" autocomplete="off" placeholder="enter name" style="width:60%" required></td>
        </tr>
                <tr>
            <td>City</td>
            <td><input type="text" name="city" autocomplete="off" placeholder="enter city" style="width:60%" required=""></td>
        </tr>
                <tr>
            <td>Parent Contact no</td>
            <td><input type="text" name="pcno" autocomplete="off" placeholder="enter parent contact number" style="width:60%" required></td>
        </tr>
                <tr>
            <td>Standard</td>
            <td><input type="number" name="std" autocomplete="off" placeholder="enter standard" style="width:60%" required></td>
        </tr>
       <tr>
            <td>Image</td>
            <td><input type="file" name="studimg" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
//include ('dbcon.php');
if(isset($_POST['submit']))
{
    include ('../dbcon.php');
    $rollno = $_POST['rno'];
    $name = $_POST['sname'];
    $city = $_POST['city'];
    $pcono= $_POST['pcno'];
    $standard = $_POST['std'];
    $imagename = $_FILES['studimg']['name'];
    $tempname = $_FILES['studimg']['tmp_name'];
    move_uploaded_file($tempname, "../dataimg/$imagename");
    $qry = "Insert into student(rollno,name,city,pcont,standard,image) values ('$rollno','$name','$city','$pcono','$standard','$imagename')";
    $result=mysqli_query($conn, $qry);
    if($result)
    {?>
<script>
alert("data inserted successfully");
</script>
        <?php
     //   echo 'data inserted successfully';
               
    }
 else {
        die(mysqli_error($conn));
    }//('rollno','name','city','pcont','standard')
}
?>