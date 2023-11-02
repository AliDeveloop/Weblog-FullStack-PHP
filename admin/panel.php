    <?php include("menu.php") ?>
        <div class="wellcome">
        <p><?php echo $_COOKIE["admin"]?> عزیز به پنل مدیریت سایت خوش امدید</p>
    </div>
    <!-- wellcome -->
    <div class="lastpostbox">
        <div class="lastposttitle">
            <p> 5 پست اخر سایت</p>
        </div>
        <!-- lastposttitle -->
        <ul>
        <?php 
            $query = "SELECT * FROM `post` ORDER BY `id` DESC limit 5;";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)){

        ?>
            <li><a href="<?php echo "../readmore.php?postid=$row[id]" ?>"><?php echo "$row[title]" ?></a></li>
            <?php }?>
        </ul>
    </div>
    <!-- lastpostbox -->
    <br>
    <div class="lastpostbox">
        <div class="lastposttitle">
            <p> 5 پست ویژه اخر سایت</p>
        </div>
        <!-- lastposttitle -->
        <ul>
        <?php 
            $query = "SELECT * FROM `spcialpost` ORDER BY `id` DESC limit 5;";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)){

        ?>
            <li><a><?php echo "$row[title]" ?></a></li>
            <?php }?>
        </ul>
    </div>
    <!-- lastpostbox -->
</body>
</html>