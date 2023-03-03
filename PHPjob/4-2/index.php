<?php 
require_once("getData.php");
$data= new getData();
$user_data= $data->getUserData();
$post_data= $data->getPostData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php echo $user_data['last_name']; ?></div>
    <div></div>
</body>
</html>