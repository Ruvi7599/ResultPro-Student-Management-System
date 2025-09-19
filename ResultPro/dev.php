<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Team Section</title>
	
	<link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	
	<style>
	/* Add this to your style.css file */

.back-button a {
    background-color: purple; /* Change this to the color you desire */
    color: white; /* Text color */
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.back-button a:hover {
    background-color: #d62700; /* Change this to the hover color */
}

	</style>
	
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

    <div class="wrapper">

        <div class="title">
            <h4>Our Developer Team - Group Project</h4>
        </div>

        <div class="card_Container">

            <div class="card">

                <div class="imbBx">
                    <img src="./image/4.jpg" alt="">
                </div>

                <div class="content">
                    <div class="contentBx">
                        <h3>Ruvinda Manoshitha<br><span>E2145211</span><br><span>Front-end Developer</span></h3>
                    </div>
                    <ul class="sci">
                        <li style="--i: 1">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li style="--i: 2">
                            <a href="#"><i class="fa-brands fa-github"></i></a>
                        </li>
                        <li style="--i: 3">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="card">

                <div class="imbBx">
                    <img src="./image/1.jpg" alt="">
                </div>

                <div class="content">
                    <div class="contentBx">
                        <h3>Sithumini Wijayarathne<br><span>E2145398</span><br><span>UI-Designer</span></h3>
                    </div>
                    <ul class="sci">
                        <li style="--i: 1">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li style="--i: 2">
                            <a href="#"><i class="fa-brands fa-github"></i></a>
                        </li>
                        <li style="--i: 3">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="card">

                <div class="imbBx">
                    <img src="./image/2.jpg" alt="">
                </div>

                <div class="content">
                    <div class="contentBx">
                        <h3>Shawn K Deepson<br><span>E2145340</span><br><span>Back-end Developer</span></h3>
                    </div>
                    <ul class="sci">
                        <li style="--i: 1">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li style="--i: 2">
                            <a href="#"><i class="fa-brands fa-github"></i></a>
                        </li>
                        <li style="--i: 3">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            
        </div>
		<center>
			<div class="back-button">
				<a href="index.php" class="btn"><i class="fa-solid fa-arrow-left"></i> Back</a>
			</div>
		</center>
    </div>
	
</body>
</html>