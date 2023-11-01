<?php include("header.php")?>
<?php 
$postid=$_GET['postid'];
$query = "SELECT * FROM `post` where `id` =$postid ;";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)){ 
?>
<div class="rm-big-content">
    <div class="rm-big-content-thumb">
        <img src=<?php echo $row['image'];?>>
    </div>
    <!-- rm-big-content-thumb -->
    <div class="rm-big-content-txt">
    <a href="#"<?php echo $row['title'];?> </a>
    <p><?php echo $row['content'];?> </p>
<!-- rm-big-content-txt -->
</div>
<?php }?>
<!-- rm-big-content -->
<?php include("footer.php")?>