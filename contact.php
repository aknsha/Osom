<?php

	error_reporting(0);
	$result="";
	
  if (isset($_POST['submit'])){
	  require 'phpmailer/PHPMailerAutoload.php';
	  $mail = new PhpMailer(true);
	  
	  $mail->Host = 'smtp.gmail.com';
	  $mail->Port = 587;
	  $mail->SMTPAuth = true;
	  $mail->SMTPSecure = 'tls';
	  $mail->Username = 'aakanksha@osomgame.com';
	  $mail->Password = 'Aknsha@Osom';
	  
	  $mail->setFrom($_POST['email'],$_POST['name']);
	  $mail->addAddress('aakankshas75@gmail.com');
	  $mail->addReplyTo($_POST['email'],$_POST['name']);
	  
	  $mail->isHTML(true);
	  $mail->Subject = 'Form Submission: '.$_POST['subject'];
      $mail->Body = '<h3 align=center>Name :'.$_POST['name'].'<br>Email : '.$_POST['email'].'<br>Phone : '.$_POST['phone'].'<br>Message : '.$_POST['message'].'</h3>';
	  
  if(!$mail->send()){
		$result="something went wrong. Please try again.";
  }
	else{
		$result="Thanks ".$_POST['name']." for contacting us.";
	}
  }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Contact Us | OSOM RUMMY</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet/less" type="text/css" href="css/index.less" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/less@3.13" ></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.rcbrand.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        function download() {
            try{
                fbq('trackCustom', 'download', {promotion: 'share_discount_10%'});
            }catch(err){
            console.log(err);
            }
            window.location.href = "https://unionapi.osomgame.com/download.php?appid=23001"
        }
    </script>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="iGYBU2wl"></script>
<section class="contact-banner"></section>    
<!--Menu Bar--> 
<section class="header">
    <div class="container">
        <div class="col-12 col-lg-11 d-none d-lg-flex mx-auto header-top">
            <div class="social-icons">
                <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
				<a href="https://www.facebook.com"><i class="fa fa-instagram"></i></a>
                <a href="https://www.twitter.com/osom_rummy/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-google"></i></a>
            </div>
            <div class="header-top-content">
                <a href="#">&#128383; &nbsp;Support</a>
                <a href="responsible.php">&#10070; &nbsp;Responsible Gaming</a>
            </div>
        </div>
        <nav class="navbar col-12 col-lg-11 mx-auto navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <a href="index.php"><img src="images/logo2.png"></a>
              <button class="navbar-toggler collapsed navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="privacy.php">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="refund.php">Refund Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="privacy.php">Products & Services</a>
                </li>      
                </ul>
            </div>
            <img class="d-none d-lg-block quote" src="images/get_quote.png">
        </div>
      </nav>
</section>
<!-- Menu End-->

    <div class="container-fluid">
        <div class="row">
            <div class="col d-none d-md-block col-md-4 col-lg border-right left-contact-block">
                <div class="enquiry partner-enquiry">
                    <div class="enquiry-head">
                        <h4>Partner Enquiries</h4>
                    </div>
                    <div class="enquiry-content">
                        <img src="images/partner.png">
                        <p>
                            cs@osomgame.com
                            Call us:    
                            +91-9999999999
                        </p>
                    </div>
                </div>
                <div class="enquiry instant-enquiry">
                    <div class="enquiry-head">
                        <h4>Instant Enquiries</h4>
                    </div>
                    <div class="enquiry-content">
                        <img src="images/instant.png">
                        <p>
                            cs@osomgame.com
                            Call us:    
                            +91-9999999999</p>
                    </div>
                </div>
            </div>
            <div class="col-8 col-md-5 col-sm-7 col-lg-5 col-xl-5 mb-3 form">
                
                <h1>Contact Form</h1>
                <form name="contactForm" method="POST">
                    
					<input type="text" name="name" id="name" class="form-control username" placeholder="Enter Name" required>
                    
					<input type="email" name="email" id="email" class="form-control email" placeholder="Enter E-Mail" required>
					
					<input type="phone" name="phone" class="form-control" placeholder="Enter your Phone no." required>
                    
                    <input type="text" name="subject" id="subject" class="form-control mobile" placeholder="Enter Subject"
                  required>
					
					<textarea name="message" id="message" rows="5" class="form-control query" placeholder="Write Your Message"
                  required></textarea>

					<input type="submit" name="submit" value="Send" class="form-control text-light submit-btn" id="sendBtn">

					<h3> <?= $result; ?> </h3>
                </form>
                
            </div>
            <div class="col-lg col-sm col-4 col-md-3 px-0 border-left text-center right-contact-block">
                <div class="border-bottom border-secondary support">
                    <img src="images/support.png">
                    <h4>Contact Support</h4>
                    <p><span style="font-weight: 600;">Email:&nbsp;</span>cs@osomgame.com</p>
                </div>
                <div class="border-bottom border-secondary address">
                    <img src="images/address.png">
                    <h4>Office Address:</h4>
                    <p>A 1/4, DLF 
                       Phase 1, Sector 26A,
                       Gurugram, Haryana
                       122002, India                                 
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- FOOTER START -->
<?php include 'footer.php';?>