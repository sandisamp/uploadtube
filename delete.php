<?php
session_start();

$user='root';
            $pass='';
            $db='up_pro';
              $conn= new mysqli('localhost',$user,$pass,$db) or die("not connected"); 
            $str='SELECT * FROM up_pro.video_sub WHERE id LIKE '.$_GET['id'];
          /*  echo $str;*/
            $result=mysqli_query($conn,$str);
            $row = mysqli_fetch_assoc($result);
            $flag =unlink($row['url']);
            $str='DELETE FROM up_pro.video_sub WHERE id LIKE '.$_GET['id'];
            $result=mysqli_query($conn,$str);
            /*print_r($result);*/
            if($flag==1 && $result==1)
            {echo "Your video has been succsesfully removed.<br><br>
<a href='http://localhost/uploadtube/'>Continue to home page</a>";}
	else{
		echo "There was a problem deleting this video.Please Try Again.<br><br>
<a href='http://localhost/uploadtube/'>Continue to home page</a>";
	}
?>
