<?php include("header.php") ?>
<?php include("slider.php")?>
<?php include("spcial-page.php")?>
<?php include("admin/func.php")?>
<?php 
$query = "SELECT * FROM `post` ORDER BY `id` DESC";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)){

?>
        <div class="big-content">
            <div class="big-content-img">
                <img src=<?php echo $row['image'];?> alt="">
            </div>
            <!-- big-content-img -->
        <div class="big-content-title">
            <p><?php echo $row['title'];?></p>
        </div>
        <!-- big-content-title -->
        <div class="big-content-txt">
            <p><?php echo post_cut( $row['content']);?></p>
        </div>
        <!-- big-content-txt -->
        <div class="big-content-footer">
            <a href=<?php echo "readmore.php?postid=$row[id]" ?> target="_blank">ادامه مطلب</a>
        </div>
        <!-- big-content-footer -->
        </div>
        <!-- big content -->
        <?php } ?>
        <?php include("footer.php")?>  
        
       
    </div> 
    <!-- all web -->
</body>
</html>