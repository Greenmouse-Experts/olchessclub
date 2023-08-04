<?php

function sendResetEmail($userEmail,$encrypted)
{

    $subject = 'Reset Email';
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Test mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>If you requested to change your password, kindly click on this link</p>
        <a href=http://chess.greenmouseonline.com/member/reset.php?token='.$encrypted.'>Reset Email!</a>
      </div>
    </body>

    </html>';

    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to  = $userEmail;
    // // Mail it
    mail($to, $subject, $body, $headers);
    
}




function sendContactEmail($email,$name,$phone,$message,$subject)
{
  
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact Mail</title>
      <style>
      body{
        background-color:blue;
      }
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
      
        <p> Message received from '. $email.' </p>
        <p>Senders Name '. $name.' </p>
        <p>Senders Phone '. $phone.' </p>
        <h2 style="font-weight:bolder;">Message</h2>
        <p>'. $message.' </p>
      </div>
    </body>
    </html>';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to  = "info@chessclub.com";
    $reply=$email;
    // // Mail it
    $result =mail($to, $subject, $body, $headers);

    if ($result > 0) {
      $_SESSION['message'] = " your message was sent  ";
      header('Location:../contact-us.php');
      die();
    } else {
      $_SESSION['error'] = " Your message  was not sent  ";
      header('Location:../contact-us.php');
      die();
    }
}


function sendNotificationEmail($receipients)
{
    $subject =  "OLCC Admin Notification";
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Notification Mail</title>
      <style>
      body{
        background-color:blue;
      }
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <h2 style="font-weight:bolder;">Notification</h2>
        <p> A new Notification has been sent from OLCC Admin please check your dashboard</p>
      </div>
    </body>
    </html>';

    // Create a message
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to  = $receipients;
    
    // Mail it
    $result =mail($to, $subject, $body, $headers);
}




function emailMembershipCreation($email,$pass) {
    $subject =  "Membership Account created";
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>OLCC Membership Details</title>
      <style>
      body{
        background-color:blue;
      }
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>
  
    <body>
      <div class="wrapper">
        <h2 style="font-weight:bolder;">Notification</h2>
        <p> Admin has created your account you can login using the following details</p>
        <p>Password:'.$pass.'<p>
        <p>Email:'.$email.'<p>
        <p>You can use this link to acess your acount</p>
        <a href=http://chess.greenmouseonline.com/member>Access</a>
  
      </div>
    </body>
    </html>';
  
   // Create a message
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $to  = $email;
   // // Mail it
   $result =mail($to, $subject, $body, $headers);
  }
  

function emailMembershipReg($email,$fname,$lname) {
   $subject =  "Welcome to OLCC";
  $body = "<!DOCTYPE html>
  <html lang=en>
  <head>
    <meta charset=UTF-8>
    <title>OLCC Membership Details</title>
    <style>
    body{
      background-color:blue;
    }
      .wrapper {
        padding: 20px;
        color: #444;
        font-size: 1.3em;
      }
      a {
        background: #592f80;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 5px;
        color: #fff;
      }
    </style>
  </head>

  <body>
    <div class=wrapper>
    <p>Dear .$fname..$lname.,</p>

    <h3>Welcome to Orchid Lekki Chess Club (OLCC)!</h3>
    <p>Thank you for your decision to join Nigeria's leading chess club.</p>
    <p>Being a member of OLCC, offers access to a great environment to play, watch, 
    study, and enjoy chess with others who are interested in the world's greatest board game. 
    Orchid-Lekki Chess club provides enormous resources for your progression as a beginner or a great 
    platform to further master the deep principles as you continue your journey toward becoming a better 
    chess player.</p>
    <p>Please click on this link to login to your membership account, complete your registration and make payment:
    <a href=http://localhost/chess/member>login</a></p>
    <p>Your payment confirmation and will be sent to you via email, after you have made payment. </p>
    
    <p>We look forward to having you on our various platforms and helping you develop your chess.</p>
    

    Regards,
    Management 
    Orchid-Lekki Chess Club 
     

    </div>
  </body>
  </html>";


  // Create a message
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $to  = $email;
   // // Mail it
   $result =mail($to, $subject, $body, $headers);
}



function emailTrainingReg($email,$name,$amount,$duration,$type) {
  $subject =  " OLCC Training ";
  $body = "<!DOCTYPE html>
  <html lang=en>
  <head>
    <meta charset=UTF-8>
    <title>OLCC Membership Details</title>
    <style>
    body{
      background-color:blue;
    }
      .wrapper {
        padding: 20px;
        color: #444;
        font-size: 1.3em;
      }
      a {
        background: #592f80;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 5px;
        color: #fff;
      }
    </style>
  </head>

  <body>
    <div class=wrapper>
    <p>Dear .$name.,</p>

    <h3>Thank you for enrolling for training at our prestigious club.</h3>
    <p>Your training package is detailed below:</p>
    <p>Type: .$type.</p>
    <p>Period: .$duration.</p>
    <p>Amount: .$amount.</p>
    <p>Someone from our Training Team will contact you with details of the class schedule and coach</p>
    <p>We look forward to having you on our various platforms and helping you develop your chess.</p>

    Regards,
    Management 
    Orchid-Lekki Chess Club 
     

    </div>
  </body>
  </html>";

  // Create a message
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $to  = $email;
   // // Mail it
   $result =mail($to, $subject, $body, $headers);
}

function emailMembershipRegPay($email,$fname,$lname,$code,$renewal_date,$renewal_end,$amount,$user_type,$type) {
   $subject =  " Membership Registeration Payment ";
  $body = "<!DOCTYPE html>
  <html lang=en>
  <head>
    <meta charset=UTF-8>
    <title>OLCC Membership Details</title>
    <style>
    body{
      background-color:blue;
    }
      .wrapper {
        padding: 20px;
        color: #444;
        font-size: 1.3em;
      }
      a {
        background: #592f80;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 5px;
        color: #fff;
      }
    </style>
  </head>

  <body>
    <div class=wrapper>
    <p>Dear $fname  $lname,</p>

    <h3>Thank you for completing the membership registration process of our prestigious club.</h3>
    <p>Your membership registration payment is confirmed, with details below:</p>
    <p>OLCC ID No.:$code</p>
    <p>Type: $user_type</p>
    <p>Plan: $type</p> 
    <p>Period:	$renewal_date – $renewal_end</p>
    <p>Amount:	$amount</p>
    <p>Welcome, again, to Nigeria’s leading chess club!</p>
<pre>
    Regards,
    Management 
    Orchid-Lekki Chess Club 
</pre>     

    </div>
  </body>
  </html>";

  // Create a message
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $to  = $email;
   // // Mail it
   $result =mail($to, $subject, $body, $headers);
}