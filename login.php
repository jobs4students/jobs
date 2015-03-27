<?php require_once("../includes/login_session.php"); ?>
<?php require_once("../includes/login_connect.php"); ?>
<?php require_once("../includes/login_functions.php"); ?>
<?php include_once("../includes/templates/login_header.php"); ?>


<div class="login-box">
    
    <div class="login-box-insert">
        
    <form action="login.php" method="post">
        <p>Username:</p> <input type="text" name="username" value="" placeholder="Username"/><br />
        <p>Password:</p> <input type="password" name="password" value="" placeholder="Password" /><br />
        <input type="submit" name="login" class="login login-submit" value="Login" />
    </form>
        
    </div>
    
</div>


<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

<?php include_once("../includes/templates/login_footer.php"); ?>
