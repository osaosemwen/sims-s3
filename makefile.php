<?php

//Copyright 2018 Adapted from udemy-ryan AWS Developer course by Ose Micah


//Connection string
include 'interacttoaws.php';

/*
Folders in amazon s3 are called Buckets while the Files are called "objects" and are stored in buckets (Folders). In this file
we create an object called cloudengineeringiscool.txt that contains the data 
'Hi there cloud engineering is quite cool!'
and we upload/put it into our newly created bucket.
*/

//get the bucket name/foldername
$bucket = $_GET["bucket"];

//create the file name
$key = 'cloudengineeringiscool.txt';

//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "Hi there cloud engineering is quite cool!"
));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded/pushed to $bucket</h2>";
echo "<div align = \"center\"><img src=\"https://s3-us-west-1.amazonaws.com/mikesimpletutorial/images/cloud-network-map.jpg"></img></div>";
echo "<div align = \"center\"><a href=\"decipherfile.php?bucket=$bucket&key=$key\">Click Here To Read Your File</a></div>";
?>
