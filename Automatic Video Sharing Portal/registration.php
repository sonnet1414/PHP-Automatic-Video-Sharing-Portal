
<?php
if (isset($_POST['submit'])) {
    $db=mysqli_connect("localhost","root","","avspdatabase");
    $username=mysql_real_escape_string($_POST['username']);
    $password=mysql_real_escape_string($_POST['password']);
    $query="select *from users where username='$username'";
    if($result=mysqli_query($db,$query))
    {
      if (mysqli_num_rows($result) > 0) {
        $message="user already existed";
      }
      else
      {
        $sql="insert into users(username,password)values('$username','$password')";
        if (mysqli_query($db,$sql)) {
          $message="Registration Successfull";
        }
        else
        {
          $message="Failed. Try again";
        }
      }
    }
   else
   {
        $message="Failed. Try again";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if(!empty($message))
    {
         echo "<div id='error_msg'>".$message."</div>";
    }
?>
<div class="reg">
    <form method="post" action="mainpage.php">
            <table>
                <tr>
                    <td><img src="user_reg.svg" alt="user_regphoto" height="150" width="150"></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="username" value=""</td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" value=""</td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="register"></td>
                </tr>
            </table>
            
</form>
</div>

</body>
</html>

    