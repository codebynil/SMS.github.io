<?php
session_start();
if(isset($_SESSION['sid']))
{
    header('location:admin/admindash.php');
}
?>

<html>
    <head>
        <title>
            Login Page
        </title>
        
    </head>
    <body>
        
        <form action="login.php" method="post">
        <h2 align="center">Admin Login</h2>
        <table align="center">
            <tr>
                <td>Username</td>
                <td><input type="text" name="uname" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" autocomplete="off" required></td>
            </tr>
            <tr>
                
                <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
        </form>
    </body>
</html>

<?php
 include ('dbcon.php');
 if(isset($_POST['login']))
 {
     $username=$_POST['uname'];
     $password=$_POST['pass'];
     
     $qry= "SELECT * FROM `admin` WHERE username='$username' AND password='$password'"; //column name should not contains in  quote
     $run = mysqli_query($conn, $qry);
     $row = mysqli_num_rows($run);
     if($row <1)
     {
         ?>
        <script>
        alert('username and password Incorrect !!');
        window.open('login.php','_self');
        </script>
        <?php
     }
     else
     {
         $data = mysqli_fetch_assoc($run);
         $id=$data['id'];
         echo "db id = ".$id;
         
         //session_start();
         $_SESSION['sid']=$id;//session_id()
         echo "session id : ".$_SESSION['sid'];
         header('location:admin/admindash.php');
     }
     
 }
 
 ?>