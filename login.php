<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به حساب کاربری</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <div class="loginbox">
        <p>ورود به پنل کاربری</p>
        <?php
        if(isset($_GET["empty"])){
            echo"<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
        }
        if(isset($_GET["error"])){
            echo"<center><font color=red>نام کاربری یا رمز عبور اشتباه است</font></center>";
        }
        ?>
        <form method="post" action="code.php">
            <label > نام کاربری :</label>
            <input type="text" name="username" placeholder="UserName">
            <label >  رمز عبور :</label>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="ورود" name="btnlogin">
        </form>
        <!-- form -->
        <a href="index.php">بازگشت</a>
    </div>
    <!-- loginbox -->
</body>
</html>