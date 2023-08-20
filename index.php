<?php include('server.php') ?>
<?php 
  session_start(); 
?>
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
<body>
    <!--navbar-->
    <nav class="navbar glass" style="height: 70px;">
        <span style="padding-top: 45px;"><a href="#home"><!--<img class="img2" src=".img/img.jpg" width="40"
            style="margin: -25px -20px">--><h1 class="logo">AGRONOMICS</h1></a></span>
        <ul class="nav-links">
            <li><a href="#home" id="pri" class="active cir_border">Home</a></li>
            <li><a href="#events"  id="sec" class="cir_border">Districts</a></li>
            <li><a href="#explore" id="tri" class="cir_border">Explore</a></li>
            <li><a href="#about" id="quad" class="cir_border">Donations</a></li>
            <!--<li><a href="#contribution" id="quint" class="cir_border">Contributions</a></li>-->
            <li><a href="#contact" id="hex" class="cir_border">Contact Us</a></li>
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

    <!--navbar-->

    <header id="home">
        <div class="header-content">
            <h2  id="quote">Cultivating Ideas for Growth</h2>
            <div class="line"></div>
            <h1 >A NEW AGRI PERSPECTIVE </h1>
            <a href="about.html" class="ctn">Learn more</a>
        </div>
    </header>

    <!--Events-->
    <section class="events" id="events">
        <div class="container">
        <div class="title">
            <h1 class="dark">ANDHRA PRADESH</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <article class="card col">
                <img class="card-img" src="./img/Rayalaseema.avif" width="400" height="500">
                <h4 class="dark">RAYALSEEMA</h4>
                <p class="font-color"> Kurnool, Nandyal, Anantapur, Sri Sathya Sai, YSR, Annamayya, Tirupati and Chittoor districts</p>
                <a href="districts1.html" class="ctn">All Details</a>
            </article>
            <article class="card col">
                <img src="./img/WG.png" width="400" height="500">
                <h4 class="dark">COSTAL ANDHRA</h4>
                <p class="font-color">Nellore,Prakasam,Bapatla,Guntur,
                    Palnadu,Krishna,NTR,Eluru,East Godavari,Konaseema
                     and Kakinada districts</p>
                <a href="districts3.html" class="ctn">All Details</a>
            </article>
            <article class="card col">
                <img src="./img/7.jpg" width="400" height="500">
                <h4 class="dark">UTTAR ANDHRA</h4>
                <p class="font-color">Srikakulam, Parvathipuram Manyam, Vizianagaram, Visakhapatnam, Alluri Sitharama Raju and Anakapalli districts</p>
                <a href="districts2.html" class="ctn">All Details</a>
            </article>
        </div>
        <br>
        <br>
        <br>
        <br>
        <center><a href="districts.php" class="ctn">GET RECOMMENDED</a></center>
    </div>
    </section>
    <!--Events-->

    <!--Explore-->
    <section class="explore" id="explore">
        <div class="explore-content">
            <h1>EXPLORE THE FARM WORLD</h1>
            <div class="line"></div>
            <p ><b>"We have neglected the truth that a good farmer is a craftsman of the highest order, a kind of artist. "-Wendell Berry</br>
                "వ్యవసాయం మనిషికి అత్యంత ఆరోగ్యకరమైన, అత్యంత ఉపయోగకరమైన మరియు గొప్ప ఉపాధి"-జార్జి వాషింగ్టన్</b><br> </p>
            <a href="register.php" class="ctn">Explore more</a>
        </div>
    </section>
    <!--Explore-->

    <!--tours-->
    <section class="tours">
        <div class="container row">
            <div class="col content-col">
                <h1 class="font-color">UPCOMING EVENTS</h1>
                <div class="line"></div>
                <p> 
                    <ul>Anna Expo 2023,Pune,2023-04-05<br>
                    Agri Asia 2023 ,Gandhinagar,2023-09-15<br>
                    Global Natural Farming & Machinery Expo ,Greater Noida,2023-06-02<br>
                    Dairy Tech India 2023,Banglore,2023-08-25
                    </ul><br>
                    and many more loading ...<br>
                 </p>
                <a href="https://www.kisaanhelpline.com/agriculture-events" class="ctn">Learn more</a>
            </div>
            <div class="image-col">
                <div class="image-gallery">
                    <img src="./img/event1.jpg" width="300" height="300"alt="">
                    <img src="./img/event2.jpg" width="300" height="300"alt="">
                    <img src="./img/event3.png" width="300" height="300"alt="">
                    <img src="./img/event4.jpg" width="300" height="300"alt="">
                </div>
            </div>
        </div>
    </section>
    <!--tours-->

    <!-- About -->
    <section id="about">
        <div class="title">
            <h1 class="font-color"><br>Donations</h1>
            <div class="line"></div>
        </div>
        <div id="about_us">
            <div class="boxx">
                <center><p><font color="white" size="6"  >We all should more or less feel priveliged to be at that stage of life where
                     we are at the position to <br>help others.Helping people in need should be considered as a blessing. You might not be able 
                     to solve<br> the whole problem however when we come together "WE" canhelp bring change to the needy. <br>We seek your contributions
                      in doing so, no amount donated in considered less the only thing <br>that matter is HELP. Because as Hellen Keller once said-<br><b>
                      "do so little; together we can do so much"</b>Thank you for helping us in making this society a <br>better place and giving our
                       younger generation a hope for future</p></font></center>
                     <br>
                     <br>
                     <br>
                     <br>

                     <center><a href="donate.html" class="ctn1" >Learn more</a></center>
            </div>
        </div>
      
    </section>
    <!-- About -->

    <!-- contact -->
    <section id="contact">
        <div class="title">
            <h1 class="font-color">Contact Us</h1>
            <div class="line"></div>
        </div>
        <div class="contact_us">
            <form class="cform" action="index.php" method="post">
                <div class="crow-message">
                    <h1 class="color">Send us a message</h1>
                    <div></div>
                </div>
                <div class="crow-in">
                        <input type="text" id="name" name="name" placeholder="Your name" required>
                        <input type="text" id="email" name="email" placeholder="Your Email id" required>
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <select name="country" id="country" required>
                            <option value="India">India</option>
                            <option value="Russia">Russia</option>
                            <option value="usa">USA</option>
                            <option value="Japan">Japan</option>
                            <option value="France">France</option>
                            <option value="Brazil">Brazil</option>
                        </select>
                    </div>
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <textarea type="text" id="remarks" name="remarks" placeholder="Your Remarks....." style="height: 150px;" required></textarea>
                    </div>
                </div>
                <input class="crow-s" type="submit"  name='submit' value="Submit">
</form>
            <div class="cbox">
                <div>
                    <p class="cbox-message">Prefer some other way ?<br>Reach us by using the details given below</p>
                <div class="cbox-line"></div>
                </div>
                <div class="c_boxx">
                    <a href="mailto:abc@gmail.com"><i class="fa fa-envelope"></i>
                        Mail: agro161316@gmail.com
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="tel:+91-12345-67890"><i class="fa fa-phone"></i>
                        Phone: (+91) 93905-31236
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="https://www.google.com/maps/d/viewer?mid=1noBVYcQB6Lw1ui3l2_QGZ3JC7KE&hl=en_US&ll=16.54092650608682%2C81.52212750000001&z=17"><i class="fa fa-map-marker"></i>
                        Location: Bhimavaram,Andhra Pradesh,India
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    error_reporting(0);
	//Include required PHPMailer files
	include('server.php');
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
	//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['submit']))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $country=$_POST["country"];
        $remarks=$_POST["remarks"];

        $query="insert into remarks values('$name','$email','$country','$remarks')";
        $data=mysqli_query($db ,$query);

        //Create instance of PHPMailer
        $mail = new PHPMailer();
        
        //Set mailer to use smtp
        $mail->isSMTP();

        //Define smtp host
        $mail->Host = "smtp.gmail.com";

        //Enable smtp authentication
        $mail->SMTPAuth = true;

        //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";

        //Port to connect smtp
        $mail->Port =587;

        //Set gmail username
        $mail->Username = "agro161316@gmail.com";

        //Set gmail password
        $mail->Password = "xsgrlwnvyuuuccib";

        //Set sender email
        $mail->setFrom('agro161316@gmail.com','Agronomics');

        //Enable HTML
        $mail->addAddress($email);
        $mail->addReplyTo($email);
        
        //Content
        $mail->isHTML(true);
        $mail->Subject = "Thank you for your remarks..";
        $mail->Body='Hey..  '.$name.',We appreciate your concern towards us and our website Thank you for your remarks ,We would definitely consider your words and get back to you . Thank you ';

        if ( $mail->send() ) {
            echo "<script>alert('Email Sent..!')</script>";
        }
        else{
            echo "<script>alert('Message could not be sent. Mailer Error:')</script>";
        }
    }

	//Closing smtp connection
	$mail->smtpClose();
?>  
    <!-- contact  -->
    <!-- up scroll -->
    <i class="fa fa-chevron-up" onclick="topFunction()" id="upbtn"></i>
    <!-- end -->
    <!--footer-->
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
