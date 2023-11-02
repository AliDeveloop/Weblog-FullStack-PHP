<html lang="en">
<head>
    <?php
    if(!isset($_COOKIE["admin"])){
        header("location:../index.php");
        exit();
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  ساخت مدیر جدید </title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
    <div class="loginbox">
        <p>ساخت مدیر جدید</p>
        <?php
        if(isset($_GET["memptymenu"])){
            echo"<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
        }
        if(isset($_GET["mok"])){
            echo"<center><font color=green> مدیر با موفقیت اضافه شد</font></center>";
        }
        if(isset($_GET["mnoinsert"])){
            echo"<center><font color=red> خطایی در اضافه کردن مدیر رخ داده است</font></center>";
        }
        ?>
        <form method="post" action="../code.php">
            <label > نام مدیر :</label>
            <input type="text" name="name" placeholder="Name">
            <label > نام کاربری :</label>
            <input type="text" name="username" placeholder="Username">
            <label >  رمز عبور :</label>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="اضافه کردن" name="btnadd">
        </form>
        <!-- form -->
        <a href="panel.php">بازگشت</a>
    </div>
    <!-- loginbox -->
</body>
</html>