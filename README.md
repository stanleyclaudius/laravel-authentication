## Website Features

**Laravel Authentication** is a laravel website that create for someone wish to create app using laravel with full authentication feature. We provide a mostly complete authentication include:

- Login and Register
- Account Verification When Register Via Email
- Forget Password
- Secure Website
- Main Page (After Login Page)


## Pre-requisite that you must know

- Command Prompt basic including how to stop a running command (CTRL + C), changind directory (cd **file_location**)
- Database Knowledge
- Laravel Basic
- HTML, CSS, JS

## Setup Guide After Clone

1. Open your clone result project at your code editor, then create a new file name **.env** at your root folder or in this project, the root folder is **laravel-authentication**, if you don't change the folder name, then you can make a new file at that folder name **.env**.

2. After creating **.env** file, you can open **.env.example** file at your clone result project, then copy everything to the **.env** file that you created before.

3. After copying everything to your **.env** file, you should change value of your database setting, by changing **DB_CONNECTION**, **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME**, and **DB_PASSWORD** value to your database configuration. At default state, the database configuration from your copy result from **.env.example** file, will assumed that you used **MySQL** database, if you use **MySQL** database, then you only need to change (at your **.env** file) **DB_DATABASE** value become your **DATABASE NAME FOR THIS PROJECT**, **DB_USERNAME** value become your **DATABASE USERNAME**, and **DB_PASSWORD** value become your **DATABASE PASSWORD**. If you use other database beside **MySQL**, then you should change every database configuration at **.env** file.

4. Note that .env file may not contain space as a value, e.g. DB_DATABASE=MY DATABASE, this will error because .env file may not contain space at value, if you wish to use space then you should use a quotation mark between the value for example DB_DATABASE="MY DATABASE" or without space.

5. Because this project include verification code when user register, so this project require your email username and password. I will assume your **.env** file has email configuration already, in this case you can choose whether you want to use **GMAIL** send mail feature or **Mailtrap** feature or other mail service. **Mailtrap** is a fake email service, that can send your message to other people email from **Mailtrap Email** without sending to real email.

6. As default, your **.env** file mail configuration will use **Mailtrap** service, let's say you want to use **Mailtrap** service, so the first step if you choose **Mailtrap** service is you should go to [mailtrap.io](https://mailtrap.io) then Sign Up account, after that you should login and then click **New Project** button, then setting your project according to mailtrap instruction. After everything done, You will see an inboxes that contains your project name that you created before then click it. After that you will see **SMTP Settings** menu, then choose the Integrations to **Laravel**, then replace your email configuration at **.env** file become your configuration that you got from [mailtrap.io](https://mailtrap.io) (If you need more detail for configuring **Mailtrap**, scroll down and copy the configuration to your **.env** file) then continue to step 7.

7. Because this project is made for **Educational Purpose** then i recommend using **Mailtrap** as your mail service to get a safer mail service for your email. It's only my personal opinion, if you wish to use **GMAIL** as your mail service, then you can check the configuration at below.

8. Now the configuration is done, so next thing is you need to create a database for this project using your prefer database service, the database name should be the same as the **DB_DATABASE value** at your **.env** file that you create at step 3.

9. Now we need to install all package using composer, write `composer install` at your **Command Prompt** or **Terminal** at root folder of this project, in this project the root folder is **laravel-authentication** if you don't change it

10. After create database for this project, now you should create the table, in **Laravel**, there is a function call artisan, so all you need to do to create the table is open up your **Command Prompt** at your laptop  or if you use mac than open **Terminal**, after you open it, change the current directory to your project location until the root file, in this case, the root file is **laravel-authentication**, so you just need to change your directory until **laravel-authentication**, after that you need to write `php artisan migrate` at your **Command Prompt** or your **Terminal**.

11. Now your application is ready to use, type `php artisan serve` at your command prompt or terminal then open in your browser, and the url will be `127.0.0.1:8000`.

12. FYI : This project is created using Boostrap 4.5 framework.

## Mailtrap Configuration
Before using Mailtrap, please sign up and then register and add click **New Project** button and follow the Mailtrap instruction. Read step 6 for more detail setting up **Mailtrap** account, below just contains Mailtrap configration at your **.env** file:
KEY | VALUE
--- | -----
MAIL_MAILER | smtp
MAIL_HOST | smtp.mailtrap.io
MAIL_PORT | 2525
MAIL_USERNAME | YOUR_USERNAME_YOU_GOT_BY_CLICK_INTEGRATIONS_TO_LARAVEL_AT_SMTP_SETTINGS
MAIL_PASSWORD | YOUR_PASSWORD_YOU_GOT_BY_CLICK_INTEGRATIONS_TO_LARAVEL_AT_SMTP_SETTINGS
MAIL_ENCRYPTION | tls
MAIL_FROM_ADDRESS | EMAIL_ADDRESS_YOU_WANT_TO_USE_FOR_SENDING_EMAIL
MAIL_FROM_NAME | BRAND_NAME_YOU_WANT_TO_USE_FOR_SENDING_EMAIL

## GMAIL Configuration
I don't recommend using GMAIL SMTP for deploying for website, because you should change some configuration in your google email, that can harm your email secure, but if for **Educational Purpose** it'll be fine, but for deploying website, I recommend using google API for sending mail instead of SMTP. I will show the configuration for GMAIL SMTP below:
KEY | VALUE
--- | -----
MAIL_MAILER | smtp
MAIL_HOST | smtp.googlemail.com
MAIL_PORT | 465
MAIL_USERNAME | YOUR_EMAIL_ADDRESS
MAIL_PASSWORD | YOUR_EMAIL_PASSWORD
MAIL_ENCRYPTION | ssl
MAIL_FROM_ADDRESS | EMAIL_ADDRESS_YOU_WANT_TO_USE_FOR_SENDING_EMAIL
MAIL_FROM_NAME | NAME_YOU_WANT_TO_USE_FOR_SENDING_EMAIL

After changing your email configuration at your **.env** file, now you need to change your setting at your GMAIL account:
1. Open your gmail account, [mail.google.com](https://mail.google.com).
2. On the right side, you will see your profile picture, click it, then choose **Manage your Google Account** button.
3. Then you will got a bunch of menu at left side, now you choose the **Security** menu.
4. After choosing **Security** menu, scroll down and look for **Less secure app access**, then click **Turn on access (not recommended)**, by default it's off, but if you want to use GMAIL service for this project, then you should turn it on.
5. After above step is done, then you can use GMAIL service already for this project.

## Project purpose
This project is created for **Educational Purpose**, but if you want to deploy this project as your online shop, it can, but i recommend using google API for sending mail rather than google SMTP, because google API is more safer than using SMTP for deploying website. You can use **Mailtrap** for your mail service too, but it's fake email service, so it's not send to real email. But it's personal choice what you wan to use, I personally recommend using **Mailtrap** for safer purpose if you only want to use this project as educational purpose, if you want to use this project as your real shop website, then I recommend using **GMAIL API** for your project.

## Thank You
Thanks for cloning this project, if you wish to add new feature or fixed some bug that you found, you can create a pull request for me in this project. Thanks for your time looking at this project. Stay Code Stay Awesome!