<?php
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';
        require 'includes/Exception.php';
        //Define name spaces
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        if(isset($_POST['send']))
        {
            $mail= new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth =true;
            $mail->Username ='agro161316@gmail.com';
            $mail->Password='xsgrlwnvyuuuccib';

            $mail->SMTPSecure ='ssl';
            $mail->Port=467;
            $mail->setFrom('agro161316@gmail.com');
            $mail->addAddress($_POST['email']);
            $mail->isHTML(true);
            $mail->Subject =$_POST['subject'];
            $mail->Body =$_POST['message'];
    
            $mail->send();

            echo "<script>
                  alert('Sent Successfully');
                  document.location.href='pro2.php';
                  </script>";
        }
?>
<html>
<body>
    <form action="pro2.php" class="" method="'post">
        Email:<input type="email" name="email" value=""><br>
        Subject:<input type="text" name="subject" value=""><br>
        Message:<input type="text" name="message" value=""><br>
        <button type="submit" name ="send">Send</button>
    </form>
</body>
</html>
