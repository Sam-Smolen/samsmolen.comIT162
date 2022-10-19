<?php include 'includes/header.php';?>
<h2 class="subheader">We'd love to hear from you!</h2>
<form action="contact.php" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>
<div class="g-recaptcha" data-sitekey="6Lc9dJQiAAAAAKVsvz3Jij4g17f23VfcEIsgbQo8"></div>
<div>
    <input type="submit" value="submit" />
</div>	
</form>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "sam.smolen@icloud.com";  //place your/your client's email address here
        $toName = "Sam Smolen"; //place your client's name here
        $website = "Sam Smolens IT162 Portal";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <script>
        /**
        * requires reCAPTCHA so user doesn't lose form data 
        *
        * https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
        * 
        * In this version, jQuery is required and code will find first form on page and require 
        * the reCAPTCHA for that form using document.forms[0]
        */
    
        function checkRecaptcha() {
            res = $('#g-recaptcha-response').val();
            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }
        $(function() {
            let thisForm = document.forms[0];
            $(thisForm).submit(function(e) {            
                if(!checkRecaptcha()) {
                    alert("Please confirm you are not a robot.");
                    return false;
                }
            });
        }); 
    </script>       <p class="clear-recaptcha"></p>   
<?php include 'includes/footer.php';?>    