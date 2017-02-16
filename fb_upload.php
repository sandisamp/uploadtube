<!DOCTYPE html>
<html>
<head>
  <title>UploadResult</title>
</head>
<body>
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

require_once __DIR__ . '/php-graph-sdk-5.0.0/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '169951450122327',
  'app_secret' => '1ac341acf9feab2d4a63af3e27bed0e0',
  'default_graph_version' => 'v2.4',
  ]);



 $data = [
  'title' => $row['title'],
  'description' => '',
  'source' => $fb->videoToUpload($row['url']),
];

try {
  $response = $fb->post('/me/videos', $data, $_SESSION['facebook_access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();
/*var_dump($graphNode);*/
echo "Your video has succsesfully been uploaded on facebook and will be available soon.<br><br>
<a href='http://localhost/uploadtube/'>Continue to home page</a>"; ?>
</body>
</html>
