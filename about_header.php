<?php include_once("../includes/session.php"); ?>
<html>
    <head>


        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css/maincomponent.css">
        <link rel="stylesheet" type="text/css" href="css/defaultstyle.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/footer_grid.css">
        <link rel="stylesheet" type="text/css" href="css/footer_layout.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<script src="js/modernizr.custom.js"></script>

    <div class="logoutmessage">
        <?php if(isset($_SESSION["username"])) { ?>
            <div class="logout"><p>Welcome, <?php echo $_SESSION["username"]; ?> <a href ="logout.php">Log out</a></p></div>
        <?php } ?></div>


    </head>
    <body>
