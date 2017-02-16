<!DOCTYPE html>
<html>
<head>
    <title>Upload progress</title>
</head>
<body onclick="myFunction()" style="width:100%;height:100%;">
<center>
<?php 
session_start();
$user='root';
$pass='';
$db='up_pro';
   $conn= new mysqli('localhost',$user,$pass,$db) or die("not connected");
   //echo "<br>";

$uid=$_SESSION['uid'];
?>

<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    /*echo "Sorry, file already exists.";*/
    $uploadOk = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.Try uploading sizes less than 200MB";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "mpeg4" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only mp4, mpeg4, avi & mkv files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $str="INSERT INTO up_pro.video_sub (url,title,user) VALUES('".$target_file
        ."','".$_POST["title"]."','".$_SESSION["uid"]."');";
         if(mysqli_query($conn,$str))
        {
        
        echo ("<h1>You have successfully added new VIDEO</h1>");

         }
        else
            {
        
        echo ('<br><h1>error'.mysqli_error($conn).'</h1>');
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
        echo $target_file;
    }
    echo "<br><br><a href='http://localhost/uploadtube/'>Continue </a>";
}

?>
<script type="text/javascript">
    function myFunction () {
        window.location.replace('http://localhost/uploadtube/');
    }
</script>
</center>
</body>
</html>
