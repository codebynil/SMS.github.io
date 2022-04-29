<?php
include '../dbcon.php';

$upid = $_POST['upid'];
 $rollno = $_POST['rno'];
    $name = $_POST['sname'];
    $city = $_POST['city'];
    $pcono= $_POST['pcno'];
    $standard = $_POST['std'];
    $imagename = $_FILES['studimg']['name'];
    $tempname = $_FILES['studimg']['tmp_name'];
    move_uploaded_file($tempname, "../dataimg/$imagename");
    $qry = "update student set id='$upid', rollno='$rollno',name='$name' , city='$city' , pcont='$pcono' , standard = '$standard', image='$imagename' where id='$upid'";// ,image='$imagename' ;
            
    $result=mysqli_query($conn, $qry);
    if($result)
    {
        ?>
            
<script>
alert('data updated sucessfully');
window.open('updatestudent.php?upid=<?php echo $upid;?>','_self');
//window.open('updateform.php?upid=<?php //echo $upid; ?>','_self');
</script>
            <?php
        
//        echo 'data updated successfully';
//        header('location:updateform.php?upid=$id');
        /*window.open('updateform.php?upid=<?php echo $id; ?>','_self');*/
    }
 else {
        die(mysqli_error($conn));
    }//('rollno','name','city','pcont','standard')

