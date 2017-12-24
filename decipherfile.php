<?php
//connection string
include 'interacttoaws.php';

//code to get our bucket and key names
$bucket = $_GET["bucket"];
$key = $_GET["key"];

//code to read the file on S3
$result = $client->getObject(array(
    'Bucket' => $bucket,
    'Key'    => $key
));
$data = $result['Body'];

//HTML to create our webpage
echo "<h2 align=\"center\">The Bucket is $bucket</h2>";
echo "<h2 align=\"center\">The Object's name is $key</h2>";
echo "<h2 align=\"center\">The Data in the object/file is $data</h2>";
echo "<div align = \"center\"><img src=\"https://s3-us-west-1.amazonaws.com/mikesimpletutorial/images/cloudcodes-logo.jpg\"></img></div>";
echo "<div align = \"center\"><a href=\"cleanup.php?bucket=$bucket&key=$key\">Please Click Here To Remove Files & Bucket</a></div>";
?>
