<?php
// !connect to database
// $link=mysqli_connect('localhost','root','','test');
// if(mysqli_connect_errno()){
//     exit('خطایی در هنگام اتصال به پایگاه داده رخ داده است:'.mysqli_connect_error());
// }
// ! query 
// mysqli_query($link,'SET CHARCTER SET utf8');
// $query='select * from tests';
// $result=mysqli_query($link,$query);
// while($row=mysqli_fetch_array($result)){
//     echo $row['name']."=>".$row['code']  .'</br>';
// }
// ! insert from database
// $query="insert into tests(name,code) values('ali','147852')";
// $result=mysqli_query($link,$query);
// if($result){
//     echo "insert ok";
// }
// else{
//     echo"insert failed";
// }
// ! delete from database
// $query="delete from tests where `name`='ali'";
// $result=mysqli_query($link,$query);
// if($result){
//     echo "delete ok";
// }
// else{
//     echo"delete failed";
// }
// !close database
// mysqli_close($link);

?>
<form method="post" action="code.php" enctype="multipart/form-data">
    <label>انتخاب فایل :</label>
    <input type="file" name="file1">
    <input type="submit" value="ارسال" name="btnupload">
</form>
