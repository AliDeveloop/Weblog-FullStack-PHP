<?php
include('admin/config.php');
// ! admin login
if(isset($_POST["btnlogin"])){
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
       header("location:login.php?empty=1000");
       exit; 
    }
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $query="SELECT * FROM `user` WHERE username = '$user' AND password = '$pass'";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_assoc($result);
    $rowcount=mysqli_num_rows($result);
    if($rowcount==1){
        setcookie("admin",$row['name'],time()+(86400));
        header("location:admin/panel.php");
        exit;
    }
    else{
        header("location:login.php?error=1001");
        
        exit;
    }
}

// ! admin exit
if(isset($_GET["exit"])){
    setcookie("admin",'',time()-(86400));
    header("location:index.php");
}



//?uploadfile

if(isset($_POST['btnupload'])){
    if(empty($_FILES['file1'])){
        echo 'هیچ فایلی انتخاب نشده';
    }
    else{
        $filename=$_FILES['file1']['name'];
        echo $filename. "<br>";
        $fileext=pathinfo($filename,PATHINFO_EXTENSION);
        $filesize=$_FILES['file1']['size'];
        echo $filesize. "<br>";
        $filetype=$_FILES['file1']['type'];
        echo $filetype. "<br>";
        $filetemp=$_FILES['file1']['tmp_name'];
        echo $filetemp. "<br>";
        if(($filetype=='image/png')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
            $filesize=floor($filesize/1024);
            echo $filesize."KB <br>";
            if($filesize>2048){
                echo "حجم فایل بیش از 2 مگابایت است";
            }
            else{
            $uniq=time().uniqid(rand());   
            $path="picture/".$uniq.".".$fileext;
        if(move_uploaded_file($filetemp,$path)){
            echo 'file uploaded successfully <br>';
            echo $path;
        }
        else{
            echo 'file not uploaded successfully';
        }
        }
    }
        else{
            echo'نوع فایل اشتباه است';
        }
    
        
    }
    
}
//?uploadfile
// ! send post
if(isset($_POST['btnsendpost'])){
    if(empty($_POST['title'])||empty($_POST['content'])||empty($_FILES['file1'])){
        header('Location:admin/sendpost.php?empty=1000');
        exit();
    }
    else{
        $title=$_POST['title'];
        $content=$_POST['content'];
        $image;
        $file1=$_FILES['file1']['name'];
        $fileext=pathinfo($file1,PATHINFO_EXTENSION);
        $filesize=$_FILES['file1']['size'];
        $filetype=$_FILES['file1']['type'];
        $filetemp=$_FILES['file1']['tmp_name'];
        if(($filetype=='image/png')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
            $filesize=floor($filesize/1024);
            echo $filesize."KB <br>";
            if($filesize>2048){
                header('Location:admin/sendpost.php?size=22000');
                exit();
            }
            else{
                $uniq=time().uniqid(rand());   
                $path="picture/".$uniq.".".$fileext;
            if(move_uploaded_file($filetemp,$path)){
                $image=$path;
            }
            else{
                header('Location:admin/sendpost.php?errorinupload=3000');
                exit();
            }
            }
        }
            else{
                header('Location:admin/sendpost.php?errorintype=2000');
                exit();
            }

            $query="INSERT INTO `post` (`id`, `title`, `image`, `content`) VALUES (NULL, '".$title."', '".$image."', '".$content."');";
            $result=mysqli_query($link,$query);
            if($result){
                header('Location:admin/sendpost.php?ok=5000');
                exit();
            }
            else{
                header('Location:admin/sendpost.php?noinsert=66000');
                exit();
            }
            
        }
        
}

// ! delete post
if(isset($_GET['postid'])){
    $postid=$_GET['postid'];
    $query="DELETE FROM `post` WHERE `id` = '$postid';";
    $result=mysqli_query($link,$query);
    if($result){
        header('Location:admin/managepost.php?delok=5000');
        exit();
    }
    else{
        header('Location:admin/managepost.php?delerror=6000');
        exit();
    }
}

// ! UPDATE post
if(isset($_POST['btnupdatepost'])){
    if(empty($_POST['title'])||empty($_POST['content'])){
        header('Location:admin/managepost.php?empty=1000');
        exit();
    }
    else{
        $postid=$_POST['postid'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $image;
        $filetemp=$_FILES['file1']['tmp_name'];
         if(empty($filetemp)){
            $query="UPDATE `post` SET `title`='".$title."',`content`='".$content."' WHERE `post`.`id` = $postid;";
            
        }
        
        else{
            $file1=$_FILES['file1']['name'];
            $fileext=pathinfo($file1,PATHINFO_EXTENSION);
            $filesize=$_FILES['file1']['size'];
            $filetype=$_FILES['file1']['type'];
            $filetemp=$_FILES['file1']['tmp_name'];
            if(($filetype=='image/png')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
                $filesize=floor($filesize/1024);
                echo $filesize."KB <br>";
                if($filesize>2048){
                    header('Location:admin/managepost.php?size=22000');
                    exit();
                }
                else{
                    $uniq=time().uniqid(rand());   
                    $path="picture/".$uniq.".".$fileext;
                    if(move_uploaded_file($filetemp,$path)){
                        $image=$path;
                    }
                    else{
                        header('Location:admin/managepost.php?errorinupload=3000');
                        exit();
                    }
                }  
            }
            else{
                header('Location:admin/managepost.php?errorintype=2000');
                exit();
            }

            $query="UPDATE `post` SET `title`='".$title."',`content`='".$content."',`image`='".$image."' WHERE `post`.`id`=$postid ;";

        }     
        $result=mysqli_query($link,$query);
        if($result){
            header('Location:admin/managepost.php?ok=50000');
            exit();
        }
    }
}

// ! topmenu
if(isset($_POST['menu'])){
    if(empty($_POST['title'])||empty($_POST['title'])){
        header('Location:admin/setting.php?memptymenu=1000');
        exit();
    }
    else{
        $title=$_POST['title'];
        $add=$_POST['link'];
        $query="INSERT INTO `menu` (`id`, `title`, `link`) VALUES (NULL, '".$title."', '".$add."');";
        $result=mysqli_query($link,$query);
        if($result){
            header('Location:admin/setting.php?mok=1400');
            exit();
        }
        else{
            header('Location:admin/setting.php?mnoinsert=5000');
        exit();
        }
    }
}
// ! top ads
if(isset($_POST['btntopads'])){
    if(empty($_POST['link'])||empty($_FILES['file1'])){
        header('Location:admin/setting.php?empty=1000');
        exit();
    }
    else{
        $address=$_POST['link'];
        $image;
        $file1=$_FILES['file1']['name'];
        $fileext=pathinfo($file1,PATHINFO_EXTENSION);
        $filesize=$_FILES['file1']['size'];
        $filetype=$_FILES['file1']['type'];
        $filetemp=$_FILES['file1']['tmp_name'];

        if(($filetype=='image/png')||($filetype=='image/gif')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
            $filesize=floor($filesize/1024);
            if($filesize>2048){
                header('Location:admin/setting.php?size=22000');
                exit();
            }
            else{
                $uniq=time().uniqid(rand());   
                $path="picture/".$uniq.".".$fileext;
            if(move_uploaded_file($filetemp,$path)){
                $image=$path;
            }
            else{
                header('Location:admin/setting.php?errorinupload=3000');
                exit();
            }
            }
        }
            else{
                header('Location:admin/setting.php?errorintype=2000');
                exit();
            }

            $query="INSERT INTO `topads` (`id`,`image`, `link`) VALUES (NULL,'".$image."', '".$address."');";
            $result=mysqli_query($link,$query);
            if($result){
                header('Location:admin/setting.php?ok=5000');
                exit();
            }
            else{
                header('Location:admin/setting.php?noinsert=66000');
                exit();
            }
            
        }
        
}

// ! botoom ads
if(isset($_POST['btnbads'])){
    if(empty($_POST['link'])||empty($_FILES['file1'])){
        header('Location:admin/setting.php?bempty=1000');
        exit();
    }
    else{
        $address=$_POST['link'];
        $image;
        $file1=$_FILES['file1']['name'];
        $fileext=pathinfo($file1,PATHINFO_EXTENSION);
        $filesize=$_FILES['file1']['size'];
        $filetype=$_FILES['file1']['type'];
        $filetemp=$_FILES['file1']['tmp_name'];

        if(($filetype=='image/png')||($filetype=='image/gif')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
            $filesize=floor($filesize/1024);
            if($filesize>2048){
                header('Location:admin/setting.php?bsize=22000');
                exit();
            }
            else{
                $uniq=time().uniqid(rand());   
                $path="picture/".$uniq.".".$fileext;
            if(move_uploaded_file($filetemp,$path)){
                $image=$path;
            }
            else{
                header('Location:admin/setting.php?berrorinupload=3000');
                exit();
            }
            }
        }
            else{
                header('Location:admin/setting.php?berrorintype=2000');
                exit();
            }

            $query="INSERT INTO `bottomads` (`id`,`image`, `link`) VALUES (NULL,'".$image."', '".$address."');";
            $result=mysqli_query($link,$query);
            if($result){
                header('Location:admin/setting.php?bok=5000');
                exit();
            }
            else{
                header('Location:admin/setting.php?bnoinsert=66000');
                exit();
            }
            
        }
        
}

// !  slider
if(isset($_POST['btnslider'])){
    if(empty($_POST['title'])||empty($_POST['link'])||empty($_FILES['file1'])){
        header('Location:admin/setting.php?sempty=1000');
        exit();
    }
    else{
        $title=$_POST['title'];
        $addr=$_POST['link'];
        $image;
        $file1=$_FILES['file1']['name'];
        $fileext=pathinfo($file1,PATHINFO_EXTENSION);
        $filesize=$_FILES['file1']['size'];
        $filetype=$_FILES['file1']['type'];
        $filetemp=$_FILES['file1']['tmp_name'];
        if(($filetype=='image/png')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
            $filesize=floor($filesize/1024);
            echo $filesize."KB <br>";
            if($filesize>2048){
                header('Location:admin/setting.php?ssize=22000');
                exit();
            }
            else{
                $uniq=time().uniqid(rand());   
                $path="picture/".$uniq.".".$fileext;
            if(move_uploaded_file($filetemp,$path)){
                $image=$path;
            }
            else{
                header('Location:admin/setting.php?serrorinupload=3000');
                exit();
            }
            }
        }
            else{
                header('Location:admin/setting.php?serrorintype=2000');
                exit();
            }

            $query="INSERT INTO `slider` (`id`, `title`, `image`, `link`) VALUES (NULL, '".$title."', '".$image."', '".$addr."');";
            $result=mysqli_query($link,$query);
            if($result){
                header('Location:admin/setting.php?sok=5000');
                exit();
            }
            else{
                header('Location:admin/setting.php?snoinsert=66000');
                exit();
            }
            
        }
        
}

// ! spcial post
if(isset($_POST['btnspcial'])){
    if(empty($_POST['title'])||empty($_POST['content'])||empty($_FILES['file1'])){
        header('Location:admin/managespcialpost.php?empty=1000');
        exit();
    }
    else{
        $title=$_POST['title'];
        $content=$_POST['content'];
        $image;
        $file1=$_FILES['file1']['name'];
        $fileext=pathinfo($file1,PATHINFO_EXTENSION);
        $filesize=$_FILES['file1']['size'];
        $filetype=$_FILES['file1']['type'];
        $filetemp=$_FILES['file1']['tmp_name'];
        if(($filetype=='image/png')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
            $filesize=floor($filesize/1024);
            echo $filesize."KB <br>";
            if($filesize>2048){
                header('Location:admin/managespcialpost.php?size=22000');
                exit();
            }
            else{
                $uniq=time().uniqid(rand());   
                $path="picture/".$uniq.".".$fileext;
            if(move_uploaded_file($filetemp,$path)){
                $image=$path;
            }
            else{
                header('Location:admin/managespcialpost.php?errorinupload=3000');
                exit();
            }
            }
        }
            else{
                header('Location:admin/managespcialpost.php?errorintype=2000');
                exit();
            }

            $query="INSERT INTO `spcialpost` (`id`, `title`, `image`, `content`) VALUES (NULL, '".$title."', '".$image."', '".$content."');";
            $result=mysqli_query($link,$query);
            if($result){
                header('Location:admin/managespcialpost.php?ok=5000');
                exit();
            }
            else{
                header('Location:admin/managespcialpost.php?noinsert=66000');
                exit();
            }
            
        }
        
}
// ! signup admin
if(isset($_POST['btnadd'])){
    if(empty($_POST['name'])||empty($_POST['username'])||empty($_POST['password'])){
        header('Location:admin/addadmin.php?memptymenu=1000');
        exit();
    }
    else{
        $name=$_POST['name'];
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $query="INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES (NULL, '.$user.', '.$pass.', '.$name.');";
        $result=mysqli_query($link,$query);
        if($result){
            header('Location:admin/addadmin.php?mok=1400');
            exit();
        }
        else{
            header('Location:admin/addadmin.php?mnoinsert=5000');
        exit();
        }
    }
}
// ! amanagespcialpost
// ! delete spcialpost
if(isset($_GET['sppostid'])){
    $sppostid=$_GET['sppostid'];
    $query="DELETE FROM `spcialpost` WHERE `id` = '$sppostid';";
    $result=mysqli_query($link,$query);
    if($result){
        header('Location:admin/amanagespcialpost.php?delok=5000');
        exit();
    }
    else{
        header('Location:admin/amanagespcialpost.php?delerror=6000');
        exit();
    }
}
// ! UPDATE post
if(isset($_POST['btnsupdatepost'])){
    if(empty($_POST['title'])||empty($_POST['content'])){
        header('Location:admin/amanagespcialpost.php?empty=1000');
        exit();
    }
    else{
        $postid=$_POST['postid'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $image;
        $filetemp=$_FILES['file1']['tmp_name'];
         if(empty($filetemp)){
            $query="UPDATE `spcialpost` SET `title`='".$title."',`content`='".$content."' WHERE `spcialpost`.`id` = $postid;";

        }
        
        else{
            $file1=$_FILES['file1']['name'];
            $fileext=pathinfo($file1,PATHINFO_EXTENSION);
            $filesize=$_FILES['file1']['size'];
            $filetype=$_FILES['file1']['type'];
            $filetemp=$_FILES['file1']['tmp_name'];
            if(($filetype=='image/png')||($filetype=='image/jpg')||($filetype=='image/bmp')||($filetype=='image/jpeg')){
                $filesize=floor($filesize/1024);
                echo $filesize."KB <br>";
                if($filesize>2048){
                    header('Location:admin/amanagespcialpost.php?size=22000');
                    exit();
                }
                else{
                    $uniq=time().uniqid(rand());   
                    $path="picture/".$uniq.".".$fileext;
                    if(move_uploaded_file($filetemp,$path)){
                        $image=$path;
                    }
                    else{
                        header('Location:admin/amanagespcialpost.php?errorinupload=3000');
                        exit();
                    }
                }  
            }
            else{
                header('Location:admin/amanagespcialpost.php?errorintype=2000');
                exit();
            }

            $query="UPDATE `spcialpost` SET `title`='".$title."',`content`='".$content."',`image`='".$image."' WHERE `spcialpost`.`id`=$postid ;";

        }     
        $result=mysqli_query($link,$query);
        if($result){
            header('Location:admin/amanagespcialpost.php?ok=50000');
            exit();
        }
    }
}



































?>

