<div class="slider">
            <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 0px;">
                <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                    <ul class="amazingslider-slides" style="display:none;">
                        <?php 
                            $query = "SELECT * FROM `slider` ORDER BY `id` DESC limit 3;";
                            $result = mysqli_query($link, $query);
                            while($row = mysqli_fetch_array($result)){

                        ?>
                    <li>
                        <a href=<?php echo $row['link'] ?>>
                            <img src=<?php echo $row['image'] ?> alt="پست شماره  اسلیدر"  title=<?php echo $row['title'] ?> />
                        </a>
                    </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
         </div>
         <!-- slider -->