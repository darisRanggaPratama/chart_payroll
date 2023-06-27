<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>Login</title>
</head>

<body>
    <div class="box">
        <div class="form">
            <h2>
                SIGN IN
            </h2>
            <form action="loginController.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="username" required="required" autofocus="">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
            
            
            <input type="submit" value="Login">
        </form>
             <!--Menampung jika ada pesan -->
             <?php
             if (isset($_GET['pesan'])) { ?>
                 <label style="color:red;">
                     <?php echo $_GET['pesan']; ?>
                 </label>
             <?php }  ?>
        </div>
    </div>
</body>

</html>