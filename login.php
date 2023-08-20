
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRONOMICS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="im/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>

<body>
    <!--navbar-->
    <nav class="navbar glass" style="height: 70px;">
        <span style="padding-top: 45px;"><a href="#home"><!--<img class="img2" src=".img/img.jpg" width="40"
            style="margin: -25px -20px">--><h1 class="logo">AGRONOMICS</h1></a></span>
        <ul class="nav-links">
            <li><a href="index.html" id="pri" class="active cir_border">Home</a></li>
            <li><a href="index.html"  id="sec" class="cir_border">Districts</a></li>
            <li><a href="register.php" id="tri" class="cir_border">Explore</a></li>
            <li><a href="donate.html" id="quad" class="cir_border">Donations</a></li>
            <!--<li><a href="#contribution" id="quint" class="cir_border">Contributions</a></li>-->
            <li><a href="index.html" id="hex" class="cir_border">Contact Us</a></li>
            <li><div>
                <input type="checkbox" class="checkbox dark" id="checkbox">
              <label for="checkbox" class="label">
                <i class="fa fa-moon-o"></i>
                <i class='fa fa-sun-o'></i>
                <div class='ball'>
              </label>
            </div></li>
        </ul>
        <img src="./img/menu-btn.png" alt="" class="menu-btn">
    </nav>
    <br>
	<br>
    <section id="about">
	<div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php');
     include('server.php');?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" placeholder="username" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password"  placeholder="password" name="password">
  	</div>
	<br>
  	<div class="input-group">
  		<center><button type="submit" class="btn" name="login_user">Login</button></center>
  	</div>
	<br>
  	<p>
  		<font color="black" ><b>Not yet a member? <br>
</font><a href="register.php">Sign up</a></b>
  	</p>
  </form>    
  <?php
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] ="You are now logged in";
        header('location: exploremoresearch.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }
  ?>
>      
  <script>
                function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>      
            
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
