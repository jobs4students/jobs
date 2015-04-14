<?php require_once("../includes/signup_connect.php"); ?>
<?php require_once("../includes/signup_functions.php"); ?>
<?php include_once("../includes/templates/contactheader.php"); ?>
<?php include_once("../public/contact_nav.php"); ?>
<?php

    if(isset($_POST["btnContactUs"])) {
        $name = ucfirst($_POST["name"]);
        $email_address = ucfirst($_POST["email_address"]);
        $phone_number = ucfirst($_POST["phone_number"]);
        $message = ucfirst($_POST["message"]);

        $query = "INSERT INTO contact (name, email_address, phone_number, message) VALUES ('{$name}', '{$email_address}', '{$phone_number}', '{$message}');";

        $result = mysqli_query($connection, $query);

        if($result) {
            redirectTo("contact_index.php");
        }

    }
?>


<div id="header4">
    <div class="my-container">
    
    <img src="">
       
        
</div>
           
        </div>    
     

    


<div id="map-canvas"></div>
    
						
		<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form" action="contact_index.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" name='name' />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email_address" placeholder="Enter email" name='email_address' required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="Phone">
                                Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="Phone" class="form-control" id="phone_number" name="phone_number" placeholder="Phone" required="required" /></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs" name='btnContactUs'>
                            Send Message</button> 
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="details">
				<h5>Details</h5>
				
				<address>
				  <strong>Jobs4students, Inc.</strong><br>
				  1234 Bournemouth, Wallisdown, Dorset<br>
				  England, BH00 100<br>
				  <abbr title="Phone">01202 000000
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">email.name@example.com</a>
				</address>	
								
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->



   

  
  



<?php include_once("../includes/templates/footer.php"); ?>





</html>
