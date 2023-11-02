<?php include("menu.php") ?>
<div class="sendpostbox">
    <div class="sendposttitle">
        <p>تنظیمات منو</p>
    </div>
    <!-- sendposttitle -->
    <?php
        if(isset($_GET["memptymenu"])){
            echo"<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
        }
        if(isset($_GET["mok"])){
            echo"<center><font color=green> منو با موفقیت اضافه شد شد</font></center>";
        }
        if(isset($_GET["mnoinsert"])){
            echo"<center><font color=red> خطایی در اضافه کردن منو رخ داده است</font></center>";
        }
        ?>
    <form method="post" action="../code.php">
        <label>عنوان منو</label>
        <input type="text" name="title">
        <label> لینک منو :</label>
        <input type="text" name="link">
        <input type="submit" value="ارسال" name="menu">
    </form>
</div>
<!-- sendpostbox -->
<div class="sendpostbox">
    <div class="sendposttitle">
        <p>تنظیمات تبلیغات بالایی</p>
    </div>
    <?php
        if(isset($_GET["empty"])){
            echo"<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
        }
        if(isset($_GET["size"])){
            echo"<center><font color=red> حجم فایل انتخابی باید کمتر از 2 مگا بایت باشد </font></center>";
        }
        if(isset($_GET["errorinupload"])){
            echo"<center><font color=red> خطا در ارسال فایل رخ داده . لطفا مجدد تلاش کنید</font></center>";
        }
        if(isset($_GET["errorintype"])){
            echo"<center><font color=red> نوع فایل باید تصویر باشد</font></center>";
        }
        if(isset($_GET["ok"])){
            echo"<center><font color=green> تبلیغ با موفقیت اپلود شد</font></center>";
        }
        if(isset($_GET["noinsert"])){
            echo"<center><font color=red> خطایی در ارسال تبلیغ رخ داده است</font></center>";
        }
        ?>
    <!-- sendposttitle -->
    <form method="post" action="../code.php" enctype="multipart/form-data" >
        <label>تصویر تبلیغ :</label>
        <input type="file" name ="file1">
        <label> لینک تبلیغ :</label>
        <input type="text" name="link">
        <input type="submit" value="ارسال" name="btntopads">
    </form>
</div>
<!-- sendpostbox -->
<div class="sendpostbox">
    <div class="sendposttitle">
        <p>تنظیمات اسلایدر</p>
    </div>
    <?php
        if(isset($_GET["sempty"])){
            echo"<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
        }
        if(isset($_GET["ssize"])){
            echo"<center><font color=red> حجم فایل انتخابی باید کمتر از 2 مگا بایت باشد </font></center>";
        }
        if(isset($_GET["serrorinupload"])){
            echo"<center><font color=red> خطا در ارسال فایل رخ داده . لطفا مجدد تلاش کنید</font></center>";
        }
        if(isset($_GET["serrorintype"])){
            echo"<center><font color=red> نوع فایل باید تصویر باشد</font></center>";
        }
        if(isset($_GET["sok"])){
            echo"<center><font color=green> پست اسلایدر با موفقیت اپلود شد</font></center>";
        }
        if(isset($_GET["snoinsert"])){
            echo"<center><font color=red> خطایی در ارسال پست اسلایدر رخ داده است</font></center>";
        }
        ?>
    <!-- sendposttitle -->
    <form method="post" action="../code.php" enctype="multipart/form-data">
        <label>تصویر اسلایدر :</label>
        <input type="file" name ="file1">
        <label>عنوان اسلایدر</label>
        <input type="text" name="title">
        <label> لینک اسلایدر :</label>
        <input type="text" name="link">
        <input type="submit" value="ارسال" name="btnslider">
    </form>
</div>
<!-- sendpostbox -->
<div class="sendpostbox">
    <div class="sendposttitle">
        <p>تنظیمات تبلیغات پایینی</p>
    </div>
    <?php
        if(isset($_GET["bempty"])){
            echo"<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
        }
        if(isset($_GET["bsize"])){
            echo"<center><font color=red> حجم فایل انتخابی باید کمتر از 2 مگا بایت باشد </font></center>";
        }
        if(isset($_GET["berrorinupload"])){
            echo"<center><font color=red> خطا در ارسال فایل رخ داده . لطفا مجدد تلاش کنید</font></center>";
        }
        if(isset($_GET["berrorintype"])){
            echo"<center><font color=red> نوع فایل باید تصویر باشد</font></center>";
        }
        if(isset($_GET["bok"])){
            echo"<center><font color=green> تبلیغ با موفقیت اپلود شد</font></center>";
        }
        if(isset($_GET["bnoinsert"])){
            echo"<center><font color=red> خطایی در ارسال تبلیغ رخ داده است</font></center>";
        }
        ?>
    <!-- sendposttitle -->
    <form method="post" action="../code.php" enctype="multipart/form-data">
        <label>تصویر تبلیغ :</label>
        <input type="file" name ="file1">
        <label> لینک تبلیغ :</label>
        <input type="text" name="link">
        <input type="submit" value="ارسال" name="btnbads">
    </form>
</div>
<!-- sendpostbox -->
