<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRONOMICS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="im/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<style>
      body {
        font-family: Arial, sans-serif;
        background-color: black;
      }
      form {
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        padding: 20px;
        max-width: 600px;
        margin: 20px auto;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input[type="text"],
      input[type="email"],
      input[type="number"] {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        box-sizing: border-box;
        margin-bottom: 20px;
        font-size: 16px;
      }
      input[type="submit"] {
    background: #fc036b;
        color: white;
        padding: 10px 50px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 15px;
      }
      input[type="submit"]:hover {
        background-color:white ;
      }
input[type=text] {
  width: 50%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: black;
    background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;</style>

<body>
    <!--navbar-->
    <nav class="navbar glass" style="height: 70px;">
        <span style="padding-top: 45px;"><a href="#home"><h1 class="logo">AGRONOMICS</h1></a></span>
        <ul class="nav-links">
            <li><a href="index.php" id="pri" class="active cir_border">Home</a></li>
            <li><a href="index.php"  id="sec" class="cir_border">Districts</a></li>
            <li><a href="index.php" id="tri" class="cir_border">Explore</a></li>
            <li><a href="index.php" id="quad" class="cir_border">Donations</a></li>
            <!--<li><a href="#contribution" id="quint" class="cir_border">Contributions</a></li>-->
            <li><a href="index.php" id="hex" class="cir_border">Contact Us</a></li>
            <li><div>
                <input type="checkbox" class="checkbox dark" id="checkbox">
              <label for="checkbox" class="label">
                <i class="fa fa-moon-o"></i>
                <i class='fa fa-sun-o'></i>
                <div class='ball'>
              </label>
            </div></li>
        </ul>
        <img src="d1.jpg" alt="" class="menu-btn">
    </nav>
   
<section id="about">
    <div class="title">
    <h1 class="font-color"><br>Let Us Help In Finding Your Best Crop</h1>
    <br>
        <div class="line"></div>
    </div>
    <br>
    <br>
    <style>
		.slideshow {
			position: relative;
			height: 400px;
			width: 600px;
			margin: auto;
		}
		.slideshow img {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			object-fit: cover;
			opacity: 0;
			transition: opacity 1s ease-in-out;
		}
		.slideshow img.active {
			opacity: 1;
		}
		.slideshow img:first-child {
			opacity: 1;
		}
		.slideshow .prev,
		.slideshow .next {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			font-size: 2rem;
			font-weight: bold;
			color: white;
			cursor: pointer;
		}
		.slideshow .prev {
			left: 10px;
		}
		.slideshow .next {
			right: 10px;
		}
	</style>

	<div class="slideshow">
		<img class="active" src="./img/a1.jpg">
		<img src="img/a2.jpg">
		<img src="./img/about.jpg">
		<img src="./img/d5.jpg">
		<img src="./img/d6.jpg">
		<div class="prev">&#10094;</div>
		<div class="next">&#10095;</div>
	</div>

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("slideshow")[0].getElementsByTagName("img");
			for (i = 0; i < slides.length; i++) {
				slides[i].classList.remove("active");
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}
			slides[slideIndex-1].classList.add("active");
			setTimeout(showSlides, 5000); // Change image every 5 seconds
		}

		var prevBtn = document.getElementsByClassName("prev")[0];
		var nextBtn = document.getElementsByClassName("next")[0];
		prevBtn.addEventListener("click", function(){
			slideIndex--;
			showSlides();
		});
		nextBtn.addEventListener("click", function(){
			slideIndex++;
			showSlides();
		});
	</script>



     
        <br>

    <div style="text-align:center; animation-name: fadeInUp; animation-duration: 1s;">
  <p style="font-size:20px">The human body needs different nutrients such as vitamins, carbohydrates, proteins, fats, and minerals for its proper functioning.</p>
  <br>
  <p style="font-size:20px">Similarly, the soil of the crop also has several factors to consider which plant can grow the best, including:</p>
  <br>
  <p style="font-size:20px">
    Nitrogen Levels<br>
    Phosphorous Levels<br>
    Potassium Levels<br>
    Temperature Levels<br>
    Humidity Levels<br>
    Ph Levels<br>
    Rainfall Levels<br>
  </p>
  <br>
  <br>
  <br>
  <p style="font-size:20px">
    Enter your soil levels below and we'll suggest the best crop for your soil:
  </p>
</div> 
<style>
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 40px, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}
</style>
    <br>
    <div class="line"></div>
<div>
    <form action="exploremoresearch.php" method="POST">
      <label for="nitrogen">Nitrogen:</label>
      <input type="number" name="n" id="nitrogen" step="0.0001" required>

      <label for="phosphorous">Phosphorous:</label>
      <input type="number" name="p" id="phosphorous" step="0.0001" required>

      <label for="potassium">Potassium:</label>
      <input type="number" name="k" id="potassium" step="0.0001" required>

      <label for="temperature">Temperature:</label>
      <input type="number" name="t" id="temperature" step="0.0001" required>

      <label for="humidity">Humidity:</label>
      <input type="number" name="h" id="humidity"  step="0.0001"required>

      <label for="ph">pH:</label>
      <input type="number" name="ph" id="ph" step="0.0001" required>

      <label for="rainfall">Rainfall:</label>
      <input type="number" name="r" id="rainfall"  step="0.0001"required>

      <center><input type="submit" value="Submit"></center>
    </form>
  </body>
</html>

<?php 
    include('errors.php');

    $nitro = isset($_POST['n']) ? $_POST['n'] : '';
    $phospo = isset($_POST['p']) ? $_POST['p'] : '';
    $potash = isset($_POST['k']) ? $_POST['k'] : '';
    $temp = isset($_POST['t']) ? $_POST['t'] : '';
    $humid = isset($_POST['h']) ? $_POST['h'] : '';
    $ph1 = isset($_POST['ph']) ? $_POST['ph'] : '';
    $rainf = isset($_POST['r']) ? $_POST['r'] : '';

    $input_data = array($nitro, $phospo, $potash, $temp, $humid, $ph1, $rainf);

    // Validate input data
    foreach ($input_data as $input) {
        if (empty($input)) {
            die();
        }
    }
  

    // Sanitize input data
    $input_data = array_map('escapeshellarg', $input_data);

    // Call the Python script and pass the input data as command line arguments
    $output = exec("python code/prediction.py " . implode(" ", $input_data));


    if (!empty($output)) {
        //echo $output;
        echo "<script type='text/javascript'> alert(' Your Crop Recommendation is a as follows : .$output.');</script>";
    }
?>


    </div>
    <div id="about_us">
        <div class="boxx">
        </div>
    </div>
</section>
   
    <section class="footer">
        <span>Created By Kishore,Khushi,Priya  | &#169 2023</span>
        <div class="social">
            <li>
                <!--<a href="https://pritam-sarbajna-portfolio.netlify.app/" target="_blank" rel="noreferrer"><i class="fa fa-globe"></i></a>-->
                <a href="https://github.com/priyasekhar13" target="_blank" rel="noreferrer"><i class="fa fa-github"></i></a>
                <a href="https://www.linkedin.com/in/devipriya-bogala/" target="_blank" rel="noreferrer"><i class="fa fa-linkedin-square"></i></a>
            </li>
        </div>
    </section>
    <!--footer-->

    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
