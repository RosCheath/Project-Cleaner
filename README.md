Connect with MongoDB is not working on Laravel 9
UI :
...Soya Find..
Dashborad :
https://colorlib.com/polygon/notika/

Use: MySql is database
 

store image in S3

1,run this in your project

    composer require league/flysystem-aws-s3-v3 "^3.0"

2,create account with amazon S3

3,create puckets and go to permissions

4, -> Block public access (bucket settings)
Off All
5,go to Bucket policy
edit-> input this code

    {
    "Version": "2012-10-17",
    "Statement": [
    {
    "Sid": "PublicReadOnly",
    "Effect": "Allow",
    "Principal": "*",
    "Action": "s3:GetObject",
    "Resource": "arn:aws:s3:::NamePuckets/*"
    }
    ]
    }

6, open project go to .env

    AWS_ACCESS_KEY_ID=Your_ACCESS_KEY_ID
    AWS_SECRET_ACCESS_KEY=Your_SECRET_ACCESS_KEY
    AWS_DEFAULT_REGION=Your_Rigen_S3
    AWS_BUCKET=Your_name_pucket
    AWS_USE_PATH_STYLE_ENDPOINT=false

7, mail notification with database queue
alway run 

    php artisan queue:work

8, use
GitHub - yoeunes/toastr: toastr.js notifications for Laravel and Lumen

    https://github.com/yoeunes/toastr
