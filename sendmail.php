<?php

function sendResetEmail($userEmail, $encrypted)
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
        <p>Thank you for signing up on our site. Please click on the link below to verify your account</p>
        <a href=http://chess.greenmouseonline.com/member/reset.php?token=' . $encrypted . '>Reset Email!</a>
      </div>
    </body>

    </html>';


  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $to  = $userEmail;
  // // Mail it
  mail($to, $subject, $body, $headers);
}




function sendContactEmail($senderemail, $sendername, $senderphone, $sendermessage, $subject)
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
      
        <p> Message received from ' . $senderemail . ' </p>
        <p>Senders Name ' . $sendername . ' </p>
        <p>Senders Phone ' . $senderphone . ' </p>
        <h2 style="font-weight:bolder;">Message</h2>
        <p>' . $sendermessage . ' </p>
      </div>
    </body>
    </html>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $to  = "";
  // // Mail it
  $result = mail($to, $subject, $body, $headers);

  if ($result > 0) {
    $_SESSION['message'] = " your message was sent  ";
    header('Location:../contact.php');
    die();
  } else {
    $_SESSION['error'] = " Your message  was not sent  ";
    header('Location:../contact.php');
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
  // // Mail it
  $result = mail($to, $subject, $body, $headers);
}




function emailMembershipCreation($email, $pass)
{
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
        <p>Password:' . $pass . '<p>
        <p>Email:' . $email . '<p>
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
  $result = mail($to, $subject, $body, $headers);
}
