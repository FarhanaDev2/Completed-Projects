<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tangobits is the new way to sell your home. Use the mobile app to market your listing, access interactive help, and hire service providers for assistance.">
    <meta name="author" content="Tangobits Inc.">
    <link rel="icon" href="../../favicon.ico">

    <title>Tangobits - For sale by owner listings and real estate help by pros.</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--<link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles -->
    <link href="./assets/css/styles.css" rel="stylesheet">

    <link href="./assets/css/styles_landing.css" rel="stylesheet">



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-50779969-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<?php


$link =  "//$_SERVER[HTTP_HOST]/";
$remoteURL = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');





 /* for Campaign Monitor use, follow the instruction below:
 /*
 * STEPS TO SET UP CAMPAIGN MONITOR LISTS
 *
 * 1) Create an account in campaign monitor
 * 2) Grab the API Key and List IDs and populate the constants defined below
 * 3) API_KEY is your api key found under account settings in campaign monitor
 * 4)  Use the API key in  assets/php/campaign-monitor-landing.php
 * 5) CM_USER_API_KEY - List Id for the users list   (click the list , click change name/type, grab the API Subscriber List ID)
 *
 * 6) Need to create 4 types of users.
 *     1. for Landing User: use/change  CM_Landing_USER_API_KEY in landing_form-submit.php
 *     2. for Inspection User: use/change  CM_Landing_USER_API_KEY in Inspection_form-submit.php
 *     3. for Realtor User: use/change    CM_Landing_RETAILER_API_KEY in Realtor_form-submit.php
 *     4. for FSBO  User: use/change      CM_Landing_FSBO_API_KEY in FSBO_form-submit.php
 *

 *
 */
?>

<script>

    var remoteURL ='<?php echo $link ?>' ;
    console.log(remoteURL);



</script>



