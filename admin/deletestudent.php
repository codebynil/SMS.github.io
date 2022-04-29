<?php
include ('header.php');
include ('titlehead.php');
?>

    <form action="deletestudent.php" method="post">
        <table align="center">
    <tr>
        <td>Enter Standard</td>
        <td><input type="number" name="strd" autocomplete="off" placeholder="enter standard" required="required"></td>
    
        <td>Enter Student Name</td>
        <td><input type="text" name="stname" autocomplete="off" placeholder="enter name" required="required"></td>
        <td></td>
        <td><input type="submit" name="submit" value="Search"></td>
    </tr>
    </table>
    </form>


<table align="center" width="80%" border="1">
    <th>Sr No</th>    
    <th>Name</th>  
    <th>Rollno</th>
    <th>Image</th>    
    <th>Standard</th>    
    <th>City</th>    
    <th>pContact no</th> 
    <th>Update</th>

<?php
include ('../dbcon.php');
if(isset($_POST['submit']))
{
    $standard=$_POST['strd'];
    $name=$_POST['stname'];
    
    $update_qu = "Select * from student where standard='$standard' and name like '%$name%'";
    $result = mysqli_query($conn, $update_qu);
    
    $tot_rows=mysqli_num_rows($result);
    if($tot_rows < 1)
    {
        echo "No records found";
    }
 else
     {
     $count=0;
            
        while ($data= mysqli_fetch_assoc($result))
        {
            $count++;
            ?><tr align="center">
            <td><?php echo $count; ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['rollno'] ?></td>
            <td><img src="../dataimg/<?php echo $data['image']?>" style="max-height: 150px; max-width: 150px;"/></td>
            
            <!--style="max-height: 150px; max-width: 150px;-->
            <td><?php echo $data['standard']?></td>
            <td><?php echo $data['city']?></td>
            <td><?php echo $data['pcont']?></td>
            <td><a href="deleteform.php?upid=<?php echo $data['id']; ?>">Delete</a></td>
                 <!--above tect is url after ? is variable   --!>
            </tr>
    <?php
        }
    }
        
}
?>

</table>