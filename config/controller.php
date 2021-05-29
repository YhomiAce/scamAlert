<?php
    session_start();
    require_once "actions.php";
    require_once "db.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require '../vendor/autoload.php';

    // enrolling for subscription
    $mail = new PHPMailer(true);

    if(isset($_POST['action']) && $_POST['action'] === 'Join The Fight!'){
        print_r($_POST['name']);
        $name = testInput($_POST['name']);
        $email = testInput($_POST['email']);
        if(userExist($conn,$email) == Null){
            if($name != "" || $email != ""){
                $register = register($conn,$name,$email);
            }else{
                echo displayMessage('danger','Every field must be filled');
            }
        }else{
            echo displayMessage('danger','email exist');
        }
            
    }



    if(isset($_POST['action']) && $_POST['action'] === 'Share'){
        $firstname          = testInput($_POST['firstname']);
        $lastname           = testInput($_POST['lastname']);
        $email              = testInput($_POST['email']);
        $phone              = testInput($_POST['phone']);

        $first_scam         = testInput($_POST['first_scam']);
        $scammer_report     = testInput($_POST['scammer_report']);
        $scammer_username   = testInput($_POST['scammer_username']);
        $scammer_contact    = testInput($_POST['scammer_contact']);
        $scammer_email      = testInput($_POST['scammer_email']);
        $scammer_other_info = testInput($_POST['scammer_other_info']);
        $money_lost         = testInput($_POST['money_lost']);
        $policeReport       = testInput($_POST['policeReport']);
        $scam_exp           = testInput($_POST['scam_exp']);
        $file1              = testInput($_POST['file1']);
        $file2              = testInput($_POST['file2']);
        $anonymous          = testInput($_POST['anonymous']);
        

        // uploadPicture('file1','sharedImages/'.$file1);
        if(scamExist($conn,$scam_exp) == Null){
            if($firstname != "" || $lastname != ""){
                $register = share($conn,$firstname,$lastname,$email,$phone,$first_scam,$scammer_report,$scammer_username,$scammer_contact,
                $scammer_email,$scammer_other_info,
                $money_lost,$policeReport,$scam_exp,$file1,$file2,$anonymous);
            }else{
                echo displayMessage('danger','Every field must be filled');
            }
        }else{
            echo displayMessage('danger','Story already exist');
        }
            
    }
    // handle login
    if(isset($_POST['action']) && $_POST['action'] === 'login'){
        print_r($_POST);
        $email = testInput(($_POST['username']));
        $pass = testInput(($_POST['login-password']));

        $loggedInUser = login($conn,$email);
        if($loggedInUser != null){
            if(password_verify($pass,$loggedInUser['password'])){
                if(!empty($_POST['rem'])){
                    setcookie('email',$email,time()+(30*24*60*60),'/');
                    setcookie('password',$pass,time()+(30*24*60*60),'/');
                }else{
                    setcookie('email','',1,'/');
                    setcookie('password','',1,'/');
                }
                echo 'login';
                $_SESSION['user'] = $email;
            }else{
                echo displayMessage('danger','Password is incorrect');
            }
        }else{
            echo displayMessage('danger','User not found!');
        }
    }

    // forgot password
    if(isset($_POST['action']) && $_POST['action'] === 'forgot'){
        $email = $user->testInput($_POST['email']);
        $userFound = $user->currentUser($email);
        // if($userFound != null){
        //     $token =uniqid();
        //     $token = str_shuffle($token);
        //     $user->forgot_password($token,$email);
        //     // try{
        //     //     $mail->isSMTP();
        //     //     $mail->Host = 'smtp.gmail.com';
        //     //     $mail->SMTPAuth = true;
        //     //     $mail->Username   = Database::USERNAME;                    
        //     //     $mail->Password   = Database::PASSWORD;                              
        //     //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        //     //     $mail->Port       = 587;

        //     //     $mail->setFrom(Database::USERNAME,'Xpress Website');
        //     //     $mail->addAddress($email);

        //     //     $mail->isHTML(true);
        //     //     $mail->Subject = 'Reset Password';
        //     //     $mail->Body = '<h3>Click the link below to reset your password. <br>
        //     //         <a href="http://localhost/Work%20Folder/particle/reset-pass.php?email='.$email.'&token='.$token.'">Click here to Reset Password</a>
        //     //         <br>Regards<br>Xpress Website</h3>';
        //     //     $mail->send();
        //     //     echo $user->displayMessage('success','A resest link has been sent to your email!');

        //     // }catch(Exception $e){
        //     //     echo $user->displayMessage('danger','Oops something went wrong! please try again');
        //     // }
        // }else{
        //     echo $user->displayMessage('warning','This Email is not registered!');
        // }
    }

?>