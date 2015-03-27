
<?php include_once("../includes/templates/header.php"); ?>
<?php include_once("../public/home_nav.php"); ?>
    
 <div id="typer">jobs4students</div>
              
     
     <div id="buttons">
        <button class="btns" onclick="window.location.href='signup_index.php'">Sign Up</button> 
        <button class="btns" onclick="window.location.href='login_index.php'">Log In</button>
     </div>
     
        <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
        <script src='js/jquery.typer.js'></script>
        <script>
            var win = $(window),
                jobs4students = $('#typer');

            jobs4students.typer(['<i>Hello....</i>', 'This is <span>our</span> group website.', 'Welcome to jobs<span>4</span>students']);

            // unneeded...
            win.resize(function(){
                var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

                jobs4students.css({
                    fontSize: fontSize * .3 + 'px'
                });
            }).resize();
        </script>  
</div>



        

<?php include_once("../includes/templates/footer.php"); ?>
