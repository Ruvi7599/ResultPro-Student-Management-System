<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us - ResultPro</title>
    <meta name="description" content="Get in touch with ResultPro for any queries or support.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="styleofall.css">
	 <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <!-- Fontawesome icon -->
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  </head>
  <body>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.querySelector("#preloader").style.display = "none";
        }, 1500); 
    });

    window.addEventListener("load", function() {
        setTimeout(function() {
            document.querySelector("#preloader").style.display = "none";
        }, 1500); 
    });
  </script>

   <div id="preloader"></div>
   
    <section class="contact-section">
      <div class="contact-bg">
        <button onclick="history.back()" style="position: absolute; top: 10px; left: 10px; padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">Back</button>
        <h3>Get in Touch with Us</h3>
        <h2>Contact Us</h2>
        <div class="line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class="text">Welcome to the ResultPro contact page. Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions. Feel free to reach out to us through any of the contact methods provided below. We look forward to hearing from you!</p>
      </div>

      <div class="contact-body">
        <div class="contact-info">
          <div>
            <span><i class="fas fa-mobile-alt"></i></span>
            <span>Phone No.</span>
            <span class="text">071-3188200</span>
          </div>
          <div>
            <span><i class="fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class="text">e2145340@bit.uom.lk</span>
          </div>
          <div>
            <span><i class="fas fa-map-marker-alt"></i></span>
            <span>Address</span>
            <span class="text">809/D Isipathana Road, Polonnaruwa, Sri Lanka</span>
          </div>
          <div>
            <span><i class="fas fa-clock"></i></span>
            <span>Working Hours</span>
            <span class="text">Monday - Friday (9:00 AM to 5:00 PM)</span>
          </div>
        </div>

        <div class="contact-form">
          <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="f05ee8f9-bf69-4da4-b9ee-dbcc66950c1c">
			
				<div>
					<input type="text" name="name" required placeholder="Name">
				</div>
				<br><br>
				<div>
					<input type="email" name="email" required placeholder="Email">
				</div>
				<br><br>
				<div>
					<textarea name="message" required placeholder="Enter your message here"></textarea>
				</div>
            <div class="h-captcha" data-captcha="true"></div>
			<br><br>
            <input type="submit" class="send-btn" value="Send Message">
          </form>
          <script src="https://web3forms.com/client/script.js" async defer></script>
          <div>
            <img src="image/contact-png.png" alt="">
          </div>
        </div>
      </div>
      
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.2239380059023!2d79.90075854710416!3d6.79520416503443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245419628cadf%3A0xab7215df17d8039f!2sLibrary%2C%20315%20Bandaranayake%20Mawatha%2C%20Moratuwa%2010400!5e0!3m2!1sen!2slk!4v1717268165312!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="contact-footer">
        <h3>Follow Us</h3>
        <div class="social-links">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
          <a href="#" class="fab fa-youtube"></a>
        </div>
      </div>
    </section>
  </body>
</html>
