<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت سایت</title>
    <link rel="stylesheet" type="text/css" href="../style/panel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<?php
    if(!isset($_COOKIE["admin"])){
        header("location:../index.php");
        exit();
    }
    ?>
<body>
    <?php include("config.php")?>
<div class="menu">
        <ul>
            <li>
                <a href="panel.php">پنل مدیریت</a>
            </li>
            <li>
               <a href="#"> مدیریت پست های ویژه </a>
                <ul>
                    <li><a href="managespcialpost.php"> پست ویژه جدید</a></li>
                    <li><a href="amanagespcialpost.php">مدیریت پست های ویژه </a></li>
                </ul>
            </li>
            <li>
                <a href="#">مدیریت پست </a>
                <ul>
                    <li><a href="sendpost.php"> پست جدید</a></li>
                    <li><a href="managepost.php">مدیریت پست ها </a></li>
                </ul>
            </li>
            <li>
                <a href="setting.php"> تنظیمات   </a>
            </li>
            <li>
                <a href="addadmin.php"> اضافه کردن مدیر جدید   </a>
            </li>
            <li>
                <a href="../index.php"> خانه   </a>
            </li>
            <li>
                <a href=<?php echo '../code.php?exit=200'; ?>> خروج </a>
            </li>

        </ul>
    </div>
    <!-- menu -->