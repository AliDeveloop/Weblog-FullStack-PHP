<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    <title>وبلاگ دانش کامپیوتر</title>
</head>
<body>
<?php include("admin/config.php")?>
    <div class="allweb">
     
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
        <!-- top menu -->
        <div class="ads">
            <ul>
                <?php 
                $query = "SELECT * FROM `topads` ORDER BY `id` DESC limit 4";
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