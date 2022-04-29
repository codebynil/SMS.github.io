<?php

function showDetails($standard,$Rollno)
{
    include 'dbcon.php';
    
    $sql = "select * from student where standard = '$standard' and rollno='$Rollno'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0)
    {    
   $data = mysqli_fetch_assoc($result);
   
?>
<table align="center" border="1" cellspace="5" style="width:35%;  margin-top:20px;">
    <tr>
        <th colspan="3">Student Details</th>
    </tr>
    <tr>
        <td rowspan="6" align="center"><img src="dataimg/<?php echo $data['image']; ?>" style="max-height: 150px; max-width: 150px;"/></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?php echo $data['name'] ?></td>
    </tr>
    <tr>
        <th>Roll No</th>
        <td><?php echo $data['rollno']; ?></td>
    </tr>
    <tr>
        <th>Parent Contact no.</th>
        <td><?php echo $data['pcont'] ?></td>
    </tr>
    <tr>
        <th>City</th>
        <td><?php echo $data['city'] ?></td>
    </tr>
    <tr>
        <th align="center">Satndard</th>
        <td><?php echo $data['standard'] ?></td>
    </tr>
    
</table>
<?php
    }
 else {
    ?>
<script>
    alert("No Records found.");
</script>
<?php
    }
            
}
