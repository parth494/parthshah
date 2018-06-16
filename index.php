<?php
$mailsend = false;
$namecheck = false;
$emailcheck = false;
if(isset($_POST['submit'])) {
    if($_POST['email'] == ""){
      $emailcheck = true;
    }
    if($_POST['name'] == ""){
      $namecheck = true;
    }
    if(!$emailcheck && !$namecheck){
      require("class.phpmailer.php");
      $email = $_POST['email'];
      $subject = "Thank you for your message!";
      $message = "Hello! I've received your message. Thank you for visiting my website. I shall get back to you soon!\n\nRegards,\nParth";
      $message = nl2br($message);
      $mail = new PHPMailer;
      //$mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPSecure = 'tls';
      $mail->SMTPAuth = true;
      $mail->Username = "<gmailid>";
      $mail->Password = "<gmailpassword>";
      $mail->setFrom("<gmailid>", "Parth Shah");
      $mail->addAddress($email);
      $mail->Subject = $subject;
      $mail->msgHTML($message);
      if (!$mail->send()) {
      $error = "Mailer Error: " . $mail->ErrorInfo;
      }
      else {
      $mailsend = true;
      //echo '<center><div class="subheading mb-5">Thank you for your message!</div></center>';
      }

      $email = '<gmailid>';
      $subject = "New message from " . $_POST['name'];
      $message = "Name: " . $_POST['name'] . "\nEmail address: " . $_POST['email'] . "\nMessage: " . $_POST['message'];
      $message = nl2br($message);
      $mail = new PHPMailer;
      //$mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPSecure = 'tls';
      $mail->SMTPAuth = true;
      $mail->Username = "<gmailid>";
      $mail->Password = "<gmailpassword>";
      $mail->setFrom($_POST['email'], $_POST['name']);
      $mail->addAddress($email);
      $mail->Subject = $subject;
      $mail->msgHTML($message);
      if (!$mail->send()) {
      $error = "Mailer Error: " . $mail->ErrorInfo;
      }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parth Shah</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicon-master/devicon.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Parth Shah</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards &amp; Recognition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#extracurriculars">Organizations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact Me</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Parth
            <span class="text-primary">Shah</span>
          </h1>
          <div class="subheading mb-5">403, Deepjyot · Kastur Park, Borivli(W), Mumbai - 92 · (+91) 9699588024 ·
            <a href="mailto:name@email.com">parth49411@gmail.com</a>
          </div>
          <p class="mb-5">
            Hello! I am currently pursuing my Master's in Computer Science from NYU Tandon School of Engineering.
            I have an experience of 3 years working in the gaming, health wellness and finance industry.
          </p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/parth494/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/parth494" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/parth494" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/parth49411/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Experience</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Freelance Platform Engineer</h3>
              <div class="subheading mb-3">Tapcube Studios</div>
              <p>
                <ul class="fa-ul mb-0">
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Responsible for setting up the technology infrastructure on AWS. Services installed include NodeJS, MongoDB and NGINX
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Developed various API's for business using NodeJS and MongoDB
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Integrated Paytm and Razorpay with the android applicaion
                  </li>
                </ul>
              </p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">April 2018 - Present</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Software Engineer - Backend</h3>
              <div class="subheading mb-3">Checkapp Healthcare Technology Pvt. Ltd.</div>
              <p>
                <ul class="fa-ul mb-0">
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Designed an application to consume messages from Apache Kafka and send it to a third-party API to create Laboratory orders
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Implemented various business requirements using NodeJS, MongoDB, Redis, Solr and Apache Kafka
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Successfully migrated six NodeJS applications from AWS DynamoDB to MongoDB
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Developed an internal tool to send production failures over email and staging failures on a Slack channel
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Created shell scripts and cron jobs for monitoring NodeJS applications and services.
                  </li>
                </ul>
              </p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">June 2017 - March 2018</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Technology Analyst</h3>
              <div class="subheading mb-3">JP Morgan Chase & Co.</div>
              <p>
                <ul class="fa-ul mb-0">
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Was responsible for enhancing the ETL process of Point of Sale Application by adding new rules using Ab-initio, Teradata and Unix
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Designed the Job Requisition portal using Spring MVC as a part of the Innovation program
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Developed a dashboard to monitor health of real-time trading applications using Java Spring
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Successfully migrated an internal Marketing application from Struts 2 to Spring 3
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Redesigned the task of retrieving the lost records during the real-time process by making an Ab-initio graph and thus saved the manual effort done by the Support team
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Upgraded 56 jobs by migrating them to Control-M which helped the Support team monitor the processes efficiently
                  </li>
                </ul>
              </p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">July 2015 - June 2017</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">PHP Intern</h3>
              <div class="subheading mb-3">Bombil Media</div>
              <p>
                <ul class="fa-ul mb-0">
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Designed PHP web services for an internal employee communication application, “SmartChat”
                  </li>
                  <li>
                    <i class="fa-li fa fa-circle text-warning"></i>
                    Created the Admin panel for managing the users, groups and their relationships.
                  </li>
                </ul>
              </p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">May 2014 - June 2014</span>
            </div>
          </div>

        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">NYU Tandon School of Engineering</h3>
              <div class="subheading mb-3">Master of Science, Computer Science</div>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2018 - Present</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Dwarkadas J. Sanghvi College of Engineering</h3>
              <div class="subheading mb-3">Bachelor of Engineering, Information Technology</div>
              <p>GPA: 69.3%</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2011 - May 2015</span>
            </div>
          </div>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicon-java-plain-wordmark"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-php-plain"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-javascript-plain"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-c-plain-wordmark"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-cplusplus-plain-wordmark"></i>
            </li>
          </ul>
          <div class="subheading mb-3">Databases</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicon-mongodb-plain-wordmark"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-mysql-plain-wordmark"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-redis-plain-wordmark"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-oracle-plain"></i>
            </li>
          </ul>
          <div class="subheading mb-3">Tools &amp; Frameworks</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicon-nodejs-plain"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-amazonwebservices-plain"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-bootstrap-plain-wordmark"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-git-plain"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicon-nginx-plain"></i>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="projects">
        <div class="my-auto">
          <h2 class="mb-5">Projects</h2>
          COMING SOON...
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Awards &amp; Recognition</h2>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - Technology Analyst Program Training Project - 2015
            </li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Stephen Hawking - Technology Analyst Program - 2015
            </li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Spot Award - DR Event - 2016
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="extracurriculars">
        <div class="my-auto">
          <h2 class="mb-5">Organizations</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Co-ViceChair Person</h3>
              <div class="subheading mb-3">Association for Computing Machinery(ACM)</div>
              <p>
                Organised events like PHP workshop and Microsoft Azure seminar. Also managed the Technical team responsible for making the website and an android application for ACM
              </p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2013 - May 2014</span>
            </div>
          </div>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Infotech Head of Department</h3>
              <div class="subheading mb-3">Trinity</div>
              <p>
              Led a team of four to develop the college festival’s website and Android application. Apart from team management, I created an online quiz competition in PHP and MySQL, which used CAPTCHA to avoid spam from hackers
              </p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2013 - May 2014</span>
            </div>
          </div>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Co-Webmaster</h3>
              <div class="subheading mb-3">Association for Computing Machinery(ACM)</div>
              <p>
                Developed a Blog module in PHP and implemented parallax scrolling using HTML for my college ACM website
              </p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2012 - May 2013</span>
            </div>
          </div>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="contact">
        <div class="my-auto">
          <h2 class="mb-5">Contact Me</h2>
          <?php
          if($mailsend){
          ?>
          <div class="subheading mb-5 custommessage">Thank you for your message!</div>
          <?php
          }
          $custom = "Required Fields: ";
          if($namecheck){
            $custom = $custom . "Name and ";
          }
          if ($emailcheck) {
            $custom = $custom . "Email";
          }
          if($namecheck || $emailcheck){
          echo("<div class='subheading mb-5 custommessage'>".$custom."</div>");
          }
          ?>
          <form action="#contact" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="message">Message(Optional):</label>
              <textarea class="form-control" name="message" id="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
