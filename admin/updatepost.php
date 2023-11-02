<?php include("menu.php") ?>

<div class="sendpostbox">
    <div class="sendposttitle">
        <p>ویرایش پست</p>
    </div>
    
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
        <input type="hidden" name="postid"value="<?php echo $row['id'] ?>">
        <input type="submit" value="ویرایش" name="btnupdatepost">
    </form>
    <?php } ?>
</div>
<!-- sendpostbox -->