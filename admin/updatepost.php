<?php include("menu.php") ?>

<div class="sendpostbox">
    <div class="sendposttitle">
        <p>ویرایش پست</p>
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
        <?php 
            $postid=$_GET['postid'];
            $query = "SELECT * FROM `post` where `id` =$postid ;";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)){ 
        ?>
    <!-- sendposttitle -->
    <form method="post" action="../code.php" enctype="multipart/form-data">
        <label>  عنوان پست :</label>
        <input type="text" name="title" value=<?php echo $row['title'] ?> >
        <label> تصویر فعلی پست  :</label>
        <img src=<?php echo"../". $row['image'];?>>
        <input type="file" name ="file1">
        <label>متن :</label>
        <textarea name="content"><?php echo $row['content'] ?></textarea>
        <input type="submit" value="ویرایش" name="btnsendpost">
    </form>
    <?php } ?>
</div>
<!-- sendpostbox -->