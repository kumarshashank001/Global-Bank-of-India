<?php
    include "header.php";
    include "navbar.php";
    

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">

    <title>Home-GBI</title>
</head>

<body style="background-image: url(images/bg.jpg);">
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header" style="padding-top:50px;"><strong>Transact Securely, Wherever Globally</strong></h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <form action="customer_login_action.php" method="post">
                    <div class="flex-item-login">
                        <h2 style="color:white; text-align:center; padding-top:10px">Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                    </div>

                    <div class="flex-item" style="color:white; text-align:center; padding-top:10px; font-size:1.5em; margin-bottom:20px; ">
                        <button style="border-radius:30px; text-width:100" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>
<?php include "footer.php"; ?>
