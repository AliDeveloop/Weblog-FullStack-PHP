<?php
include('admin/config.php');
// ! admin login
if(isset($_POST["btnlogin"])){
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
       header("location:login.php?empty=1000");
       exit; 
    }
    $user = $_POST['username'];
    $pass=$_POST['password'];
    if($user=="admin" && $pass=="1234"){
        setcookie("admin",time()+(86400));
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

?>

