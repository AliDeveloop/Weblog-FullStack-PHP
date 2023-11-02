<?php include("header.php") ?>

<div class="content-wrapper">
    <?php 
        $query = "SELECT * FROM `spcialpost` order by `id` DESC";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
        ?>
            <div class="content">
                <div class="content-title">
                    <p>
                        <?php echo $row['title'] ?>
                    </p>
                </div>
                <!-- content title -->
                <div class="content-img">
                    <img src=<?php echo $row['image']; ?>>
                </div>
                <!-- content img -->
                <div class="content-txt">
                    <p>
                    <?php echo $row['content'] ?>
                    </p>
                </div>
                <!-- content txt -->
            </div>
            <!-- content -->

            <?php }?>
        </div>
        <!-- content wrapper -->

<?php include("footer.php")?>  