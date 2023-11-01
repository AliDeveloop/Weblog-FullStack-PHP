<?php include("menu.php") ?>
<div class=" managepostbox">
    <div class="sendposttitle">
        <p> مدیریت پست ها</p>
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
    <!-- sendposttitle -->
    <table border="1px">
        <tr>
            <td width="500px">عنوان</td>
            <td>ویرایش</td>
            <td>حذف</td>
        </tr>
        <?php 
            $query = "SELECT * FROM `post` ORDER BY `id` DESC";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)){

        ?>
        <tr>
        <td> <a href="<?php echo "../readmore.php?postid=$row[id]" ?>"><?php echo "$row[title]" ?></a></td>
        <td><a href="<?php echo "updatepost.php?postid=$row[id]" ?>" class="edit-icon"> <i class="fa fa-pencil"></i> </a></td>
        <td><a href="<?php echo "../code.php?postid=$row[id]" ?>" class="delete-icon"> <i class="fa fa-trash"></i> </a></td>
        </tr>
        <?php }?>
    </table>
    </center>
</div>
<!-- managepostbox -->
