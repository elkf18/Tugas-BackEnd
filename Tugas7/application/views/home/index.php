<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <br>
    <center>
        <h1>Selamat Datang <?= format_admin($this->session->userdata('username')) ?> !</h1>
    </center>
</body>

</html>