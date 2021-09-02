<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tes Access</title>
</head>

<body>
    <?php
        if(isset($_SESSION['username'])){
            //sudah login
            echo "<h1>Anda berhasil mengakses halaman spesial ini</h1>";
        }else{
            //belum login
            echo 'Silahkan klik <a href="form_login.php">disini</a> untuk kembali ke halaman Form Login.';
        }
    ?>
    
</body>

</html>