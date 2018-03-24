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


### Serverless Application converting text to mp3

I currently deployed a serverless Text to Audio application using Polly on AWS. Its quite cool, using S3, Lambda functions, DynamoDB, APIs, SNS, and S3 buckets.
here is the link: ``` https://s3.amazonaws.com/osespractice-polly-website2018/index.html ```. The process for this application can be seen in the figure saved on this link: ``` http://osepracticesydneycloudfrontdist.s3-website-ap-southeast-2.amazonaws.com/ ```.

alternatively:

![text_to_mp3](https://user-images.githubusercontent.com/17884787/37859880-74ced456-2ef1-11e8-857f-2ec7c6360986.jpg)

WHen I connect this to Alexa, I would create its repository. 
Thanks!!
