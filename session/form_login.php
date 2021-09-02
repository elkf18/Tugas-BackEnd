<?php
    session_start();
    $msg="";
    
    if($_POST){
        $user = "admin";
        $pass = "pass";

        if($_POST['username'] == $user && $_POST['password'] == $pass){
            //berhasil login
            $_SESSION['username'] = $_POST['username'];
            $msg = " Halo ".$_POST['username'];

        }else{
            //gagal login
            $msg = "Gagal login";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Log in</title>

</head>

<body>
   <?php echo $msg; ?>
    <a href="form_login.php">Form Login</a> | <a href="logout.php">Logout</a> | <a href="access.php">Tes Akses</a>  
    <form action="form_login.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username"> <br>
        <label for="password">Password :</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="Login" >
    </form>
</body>

</html>