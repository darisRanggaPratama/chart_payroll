<?php
session_start();

if ($_SESSION['status'] != "sudah_login") {
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Chart</title>
    <link rel="stylesheet" href="style2.css" type="text/css">
</head>

<body>
    <div class="sidebar" id="mySidebar">
        <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">✘</a>
        <a>.:MENU:.</a>
        <a href="logout.php">Logout</a>

    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰ Malea Energy</button>
        <div class="content">
        <h4>Urra! Selamat datang : <?php echo $_SESSION['nama']; ?></h4>
            <br>
            <object data="chart_bruto_trf.php" height="1015px" width="100%">
                Your browser does not support the object tag.
            </object>

            <object data="table.php" height="820px" width="100%">
                Your browser does not support the object tag.
            </object>

            <object data="chart_gp_pot.php" height="1015px" width="100%">
                Your browser does not support the object tag.
            </object>
            <object data="chart_lembur_tjlain.php" height="1015px" width="100%">
                Your browser does not support the object tag.
            </object>
            <object data="chart_human.php" height="1015px" width="100%">
                Your browser does not support the object tag.
            </object>
        </div>
    </div>
    <script type="text/javascript" src="./open_close_nav.js"></script>
</body>

</html>