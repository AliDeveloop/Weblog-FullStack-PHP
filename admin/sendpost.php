<?php include("menu.php") ?>
<div class="sendpostbox">
    <div class="sendposttitle">
        <p>ارسال پست</p>
    </div>
    <!-- sendposttitle -->
    <form method="post" action="#">
        <label>  عنوان پست :</label>
        <input type="text" name="title">
        <label> تصویر :</label>
        <input type="file" name ="imagefile">
        <label>متن :</label>
        <textarea name="content"></textarea>
        <input type="submit" value="ارسال">
    </form>
</div>
<!-- sendpostbox -->