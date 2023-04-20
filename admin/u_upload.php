
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Upload</title>
</head>
<body>
  <a href="../index.html"><h2 style="background-color: pink; text-align:center; text-decoration: none;">package Station</h2></a>
<?php

$dir = "uploads/"; // directory path
$files = scandir($dir);

echo "<div style='white-space: nowrap;'>"; // wrap images in a container element

$count = 0;
foreach($files as $file) {
  if($file !== "." && $file !== ".." && !is_dir($dir.$file)) {
    echo "<img src='".$dir.$file."' alt='".$file."' style='width: 250px; margin: 20px; padding: 5px; display: inline-block;'>"; // set image width to 100px
    $count++;
    if($count % 5 == 0) { // add line break after every 5th image
      echo "<br>";
    }
  }
}

echo "</div>"; // close container element

?>
    
</body>
</html>