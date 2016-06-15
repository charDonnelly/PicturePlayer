<!doctype html>
<!--
LOOMA php code file
Filename: xxx.php
Description:

Programmer name:
Email:
Owner: VillageTech Solutions (villagetechsolutions.org)
Date:
Revision: Looma 2.0.x

Comments:
-->

<?php $page_title = 'Looma - put page title here';
include ('includes/header.php');
/*OPTIONAL*/ include ('includes/mongo-connect.php');
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author"  content="Skip">
    <meta name="project" content="Looma">
    <meta name="owner"   content="villagetechsolutions.org">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"> <!-- uses latest IE rendering engine-->
    <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script>  <![endif]-->


    <title> Looma - - page title here </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">     <!-- Bootstrap CSS still needed ?? [but dont neet the JS]-->
    <link rel="stylesheet" href="css/looma.css">        	 <!-- Looma CSS -->
    <link rel="stylesheet" href="css/looma-theme-looma.css">        	 <!-- Looma CSS -->
</head>

<body>
<div id="main-container-horizontal">

    <img src="images/logos/LoomaLogoTransparent.png" class="looma-logo" width="75%"/>
    <h1>This is looma-template.php</h1>

</div>

<?php
/*include either, but not both, of toolbar.php or toolbar-vertical.php*/
include ('includes/toolbar.php');
/*include ('includes/toolbar-vertical.php'); */
include ('includes/js-includes.php');
?>


<!-- This is a comment - code goes here -->






<script src="js/jquery.js">          </script>      <!-- jQuery -->
<script src="js/looma-utilities.js"> </script>      <!-- Looma utility functions -->
<script src="js/looma.js">           </script>      <!-- Looma common page functions -->
</body>