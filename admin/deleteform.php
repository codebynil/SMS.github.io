<?php
include '../dbcon.php';
include 'titlehead.php';
 $id=$_REQUEST['upid'];

    $qry = "delete from student where id='$id'";
            
    $result=mysqli_query($conn, $qry);
    if($result)
    {
?>
            
<script>
alert('data deleted sucessfully');
window.open('deletestudent.php','_self');
</script>
<?php
        
//        echo 'data updated successfully';
//        header('location:updateform.php?upid=$id');
        /*window.open('updateform.php?upid=<?php echo $id; ?>','_self');*/
    }
 else 
     {
        die(mysqli_error($conn));
    }//('rollno','name','city','pcont','standard')
?>