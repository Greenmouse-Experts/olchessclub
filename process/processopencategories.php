<?php session_start();?>
<?php
include"../includes/dbconnection.php";
?>

<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    
    if(isset($_POST['submit']))
        {
        
        $email = $_POST['email'];
        $registration_id = "OPN".rand(2,12345);

        $sql = "SELECT * FROM open_categories WHERE email='$email'";
        $res = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($res) > 0) {
            ?>
            <script>
            alert("Sorry... Email already taken");
                document.location='../open-categories.php'
            </script>
            <?php
        } else {

            $insert_form = "INSERT INTO `open_categories` VALUES(NULL,'$registration_id','".$_POST['email']."','".$_POST['full_name']."','".$_POST['gender']."','".$_POST['date_of_birth']."','".$_POST['telephone_number']."','".$_POST['fide']."','".$_POST['fi_de']."','".$_POST['chess_club']."','".$_POST['tournament_category']."','".$_POST['I_agree']."','Unpaid')";
            
            $main_query = mysqli_query($conn,$insert_form);

            if($main_query)
            {
            require_once ('../PHPMailer/PHPMailer.php');
            require_once ('../PHPMailer/SMTP.php');
            require_once ('../PHPMailer/Exception.php');
            
            $mail = new PHPMailer();

            //smtp settings
            $mail->isSMTP();
            $mail->Host = "smtp.dreamhost.com";
            $mail->SMTPAuth = true;
            $mail->Username = "support@olchessclub.com";
            $mail->Password = 'olakunle1!';                       
            $mail->SMTPSecure = 'ssl';                           
            $mail->Port = 465;      

            //email settings
            $mail->isHTML(true);

            //send from
            $mail->setFrom('support@olchessclub.com', 'OlchessClub');

            //recipient
            $mail->addAddress("{$_POST['email']}");
            
            //content
            $mail->Subject = 'Comfirmation Mail';
            $mail->Body = <<<EOT

            Thank you for completing your online registration for the National Chess Championship (NCC) 2021.
            <br>
            Your registration details are as follows:
            <br>
            <br>
            Registration ID:		$registration_id
            <br>
            Category:		[ Opens ]
            <br>
            Name:			{$_POST['full_name']}
            <br>
            Gender:		{$_POST['gender']}
            <br>
            FIDE ID:			{$_POST['fi_de']}
            <br>
            Chess Club:		{$_POST['chess_club']}
            <br>
            <br>
            Please note that your registration is incomplete until payment is confirmed.

            Kindly see payment details here: <a href="https://www.olchessclub.com/pay.php">NCC Payment Details</a>

            After making payment, please send evidence via email to info@olchessclub.com or via WhatsApp/SMS to +234 809 660 2599.

            We look forward to welcoming you at the tournament.

            EOT;
            
            if($mail->send()){
                $status = "Success";
                $response = "Email is sent!";
            }else{
                $status = "Failed";
                $response = "Something is wrong: <br>" . $mail->ErrorInfo;
            }

            ?>
            <script>
                alert("Information Captured Successfully! An email has been sent to your Email Address.");
                    document.location='../open-categories.php'
            </script>
            <?php
            
            
            } else {
            ?>
            <script>
                alert("Error Inserting Data!");
                    document.location='../open-categories.php'
            </script>
            <?php
            }

        }
    }
?>