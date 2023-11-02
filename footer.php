<div class="ads">
<ul>
                <?php 
                $query = "SELECT * FROM `bottomads` ORDER BY `id` DESC limit 4";
                $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_array($result)){
                ?> 
                <li>
                    <a href=<?php echo $row['link']; ?>> <img src=<?php echo $row['image'];?>></a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <!--  ads  -->
        <div class="footer">
            <div class="menu">
                <ul>
            <?php 
                $query = "SELECT * FROM `menu`";
                $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_array($result)){
                ?> 
                <li><a href=<?php echo $row['link']; ?>><?php echo $row['title'];?></a></li>
                <?php
                }
                ?>
            </ul>
            </div>
            <!-- menu -->
            <div class="socialmedia">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <!-- social media -->
        <p>کلیه حقوق مادی و معنوی متعلق به سازنده میباشد</p>
        
        <p>CopyRight by 2023</p>
        </div>
        <!-- footer -->
      