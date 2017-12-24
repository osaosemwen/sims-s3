# sims-s3
This is a test repository, hence its a working progress!!
I have created comments in some of the codes


To use this repo properly, first download the file sim-s3butstrap.sh. This file redirects you to this repo. when you are commisioning your Ec2 instance on AWS, you will need to give an AWS Ec2-s3 admin roles, through the IAM, such that,one can make use of ec2 to have access through CLI to s3. I will create a new repo to show how to do this bit. its quite simple.
Next on the same page click on the advanced option tab. copy the content of the file you downloaded, and paste it in the window that opens. 
Go ahead downloading commisioning your Ec2 instance, give it a security group, a tag, access key etc. then launch your instance.
WHen the instance is completely launched, use the copy the instance public IP adress to the clip board, and paste in a newly opened window, adding test.php. forexample 
145.21.34.90/test.php. the bash script you copied, would have assisted you in doing the following tasks:
 - Install apache2.4, php5.6 and git
 - start the apache service
 - make sure its always on.
 - change the directory to /var/www/html 
 - then download this repo to the folder.
