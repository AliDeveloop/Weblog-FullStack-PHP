<?php include("menu.php") ?>
<div class=" managepostbox">
    <div class="sendposttitle">
        <p> مدیریت پست های ویژه</p>
    </div>
    <center>
    <?php
        if(isset($_GET["delok"])){
            echo"<center><font color=green>حذف با موفقیت انجام شد</font></center>";
        }
        if(isset($_GET["delerror"])){
            echo"<center><font color=red> حذف با مشکل رو به رو شد</font></center>";
        }
        ?>
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
            echo"<center><font color=green> پست با موفقیت ویرایش شد</font></center>";
        }
        if(isset($_GET["noinsert"])){
            echo"<center><font color=red> خطایی در ویرایش پست رخ داده است</font></center>";
        }
        ?>
    <!-- sendposttitle -->
    <table border="1px">
        <tr>
            <td width="500px">عنوان</td>
            <td>ویرایش</td>
            <td>حذف</td>
        </tr>
        <?php 
            $query = "SELECT * FROM `spcialpost` ORDER BY `id` DESC";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)){

        ?>
        <tr>
        <td> <a href="#"><?php echo "$row[title]" ?></a></td>
        <td><a href="<?php echo "umanagespcialpost.php?sppostid=$row[id]" ?>" class="edit-icon"> <i class="fa fa-pencil"></i> </a></td>
        <td><a href="<?php echo "../code.php?sppostid=$row[id]" ?>" class="delete-icon"> <i class="fa fa-trash"></i> </a></td>
        </tr>
        <?php }?>
    </table>
    </center>
</div>
<!-- managepostbox -->
