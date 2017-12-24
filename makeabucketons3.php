<?php
//copyright 2017 - This code is adapted from Ryan Kronberg AWS-Developer course on Udemy by Ose Micah

/*In this page we create a bucket name "awstest2017bucket" the we create a webpage to show that this bucket has been successfully created, and then we create a link to the webpage to Crete the file "cloudengineeringiscool.txt"
*/
//connection string
include 'interacttoaws.php';

// create a unique bucket name
$bucket = uniqid("awstest2017bucket", true);

// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">HI Cloud Developers!</h1>";
echo "<div align = \"center\"><img src=\"https://s3-us-west-1.amazonaws.com/mikesimpletutorial/images/cloud-network-map.jpg\"></img></div>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket} you can check and confirm this!!</h2>";
echo "<div align=\"center\"><a href=\"makefile.php?bucket=$bucket&key=$key\"> You can click Here to Continue</a></div>";
?>


