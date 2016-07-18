<?php
    $to = 'ronniedcaldwell@gmail.com';
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: ronniedcaldwell@gmail.com\r\n";
    $nameChk = FALSE;
    $emailChk = FALSE;
    $messageChk = FALSE;
    $subjectChk = FALSE;
    $errName = '';
    $errEmail = '';
    $errMessage = '';
    $errSubject = '';

    // Check if name has been entered
    if (empty($_POST['name'])) {
        $errName = 'Please enter your name';
        $nameChk = TRUE;
    }

    // Check if email has been entered and is valid
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
        $emailChk = TRUE;
    }

    //Check if message has been entered
    if (empty($_POST['message'])) {
        $errMessage = 'Please enter your message';
        $messageChk = TRUE;
    }    
    //Check if subject has been entered
    if (empty($_POST['subject'])) {
        $errSubject = 'Please enter your subject';
        $subjectChk = TRUE;
    }

    $body = "From: $name\nEmail: $email\nMessage:\n $message";

    if ($nameChk == FALSE && $emailChk == FALSE && $messageChk == FALSE && $subjectChk == FALSE) {
        if (mail($to, $subject, $body, $headers)) {
            $output = '<div class="alert alert-success" role="alert">Your email was sent! </div>';
        } 
        else {
            $output = "<div class='alert alert-danger' role='alert'>There was an error with your email! <br>$errSubject<br>$errEmail<br>$errName<br>$errMessage</div>";
        }
    } 
    else {
            $output = "<div class='alert alert-danger' role='alert'>There was an error with your email! <br>$errSubject<br>$errEmail<br>$errName<br>$errMessage</div>";
        }
    
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
      
    <title>Goodman Breen | Contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <!-- Goodman Breen stylesheet -->
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
      
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
      
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="20">
      <div class="container">
          <img style="height:125px; padding-top: 25px; padding-bottom: 25px;" class="responsive center-block" src="./assets/images/gbNavy.png">
          <nav class="navbar">
            <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navCollapse">
                      <ul class="nav navbar-nav">
                        <li><a class="navItems" href="/goodmanbreen-gh/index.html">The Firm <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle navItems" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              Attorneys <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="/goodmanbreen-gh/dorothybreen.html">Dorothy M. Breen</a></li>
                            <li><a href="/goodmanbreen-gh/kennethgoodman.html">Kenneth D. Goodman</a></li>
                            <li><a href="/goodmanbreen-gh/amandagoodman.html">Amanda Leigh Goodman</a></li>
                          </ul>
                        </li>
                        <li><a class="navItems" href="/goodmanbreen-gh/estateplanning.html">Estate Planning</a></li>
                        <li><a class="navItems" href="/goodmanbreen-gh/estateandtrust.html">Estate and Trust Administration</a></li>
                        <li><a class="navItems" href="/goodmanbreen-gh/incometax.html">Income Tax</a></li>
                        <li><a class="navItems" href="/goodmanbreen-gh/contact.html">Contact </a></li>
                        <li><a class="navItems" href="/goodmanbreen-gh/firmlocation.html">Location</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
          </nav>
      </div>
      
      <div class="container">
          <h2>Contact</h2>
      </div>
      
      <div class="container" id="contact">
        <form class="form-horizontal" role="form" method="post" action="contact.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Subject</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="4" name="message"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="human" class="col-sm-2 control-label">1 + 1 = ?</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn">
                </div>
            </div>
        </form> 
        <?php echo $output; ?>
      </div>
      <div class="container">
        <div class="row footer">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <p>&copy; 2016 Goodman Breen</p>
            </div>            
            <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center;">              
                <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 3838 Tamiami Trail North, Suite 300</p>
                <p style="padding-left:1.3em"> Naples, Florida 34103</p>
            </div>            
            <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:right;">
                <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 239-403-3000</p>
                <p><span class="glyphicon glyphicon-print" aria-hidden="true"></span> 239-403-0010</p>
            </div>
        </div>
      </div>
      
  </body>
</html>