<?php include("menu.php") ?>
<div class="sendpostbox">
    <div class="sendposttitle">
        <p>ارسال پست ویژه1</p>
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
            echo"<center><font color=green> پست با موفقیت اپلود شد</font></center>";
        }
        if(isset($_GET["noinsert"])){
            echo"<center><font color=red> خطایی در ارسال پست رخ داده است</font></center>";
        }
        ?>

    <!-- sendposttitle -->
    <form method="post" action="../code.php" enctype="multipart/form-data">
        <label>  پست ویژه شماره  :</label>
        <input type="text" name="title">
        <label> تصویر شماره  :</label>
        <input type="file" name ="file1">
        <label> متن شماره  :</label>
        <textarea name="content"></textarea>
        <input type="submit" value="ارسال" name="btnspcial">
    </form>
</div>    
<!-- sendpostbox -->