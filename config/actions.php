<?php
    require_once "db.php";

    function testInput($data){
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }

        // Message 
        function displayMessage($type,$msg){
            return '<div class="alert alert-'.$type.' alert-dismissible" style="z-index:99999">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong class="text-center">'.$msg.'</strong>
            </div>';
        }

    function  share($conn,$firstname,$lastname,$email,$phone,$first_scam,$scammer_report,$scammer_username,$scammer_contact,
    $scammer_email,$scammer_other_info,
    $money_lost,$policeReport,$scam_exp,$file1,$file2,$anonymous,$token)
    {
        $sql = "INSERT INTO sharestory(firstname,lastname,email,phone,first_scam,scammer_report,scammer_username,scammer_contact,
                scammer_email,scammer_other_info,money_lost,policeReport,scam_exp,file1,file2,anonymous,storyToken)
                
                VALUES(:firstname,:lastname,:email,:phone,:first_scam,:scammer_report,:scammer_username,:scammer_contact,
                :scammer_email,:scammer_other_info,:money_lost,:policeReport,:scam_exp,:file1,:file2,:anonymous,:token)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'firstname'          =>$firstname,
            'lastname'           =>$lastname,
            'email'              =>$email,
            'phone'              =>$phone,

            'first_scam'         =>$first_scam,
            'scammer_report'     =>$scammer_report,
            'scammer_username'   =>$scammer_username,
            'scammer_contact'    =>$scammer_contact,
            'scammer_email'      =>$scammer_email,
            'scammer_other_info' =>$scammer_other_info,
            'money_lost'         =>$money_lost,
            'policeReport'       =>$policeReport,
            'scam_exp'           =>$scam_exp,
            'file1'              =>$file1,
            'file2'              =>$file2,
            'anonymous'          =>$anonymous,
            'token'              =>$token
        ]);
        return true;
    }




    function register($conn,$name,$email)
    {
        $sql = "INSERT INTO subscribers(Name,email) VALUES(:name,:email)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['name'=>$name, 'email'=>$email,]);
        return true;
    }




    function fetchStory($conn,$storyToken)
    {
        $sql = "SELECT firstname,lastname,email,phone,first_scam,scammer_report,scammer_username,scammer_contact,date,
                        scammer_email,scammer_other_info,money_lost,policeReport,scam_exp,file1,file2,anonymous,storyToken
                FROM sharestory 
                WHERE storyToken = :storyToken";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['storyToken'=>$storyToken]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    function fetchAllEmail($conn)
    {
        $sql = "SELECT email FROM subscribers";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }
    


    function fetchId($conn)
    {
        $sql = "SELECT id FROM sharestory";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }

    function fetchAllStories($conn,$id)
    {
        $sql = "SELECT scam_exp,scammer_report,date,storyToken FROM sharestory WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


     // after sorting
     
    if(isset($_POST['sort']))
     {
        
        $sort = $_POST['sort'];
        
        $key = $_POST['key'];
        
        if($sort == 'Latest'){
            $sql = "SELECT id FROM sharestory WHERE scammer_report = :scammer_report ORDER BY date DESC";
        }else{
            $sql = "SELECT id FROM sharestory WHERE scammer_report = :scammer_report ORDER BY date ASC";        
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'scammer_report'    =>$key,
            
            ]);
        $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
        foreach($results as $result){
            $storyIdsDetails     =   fetchAllStories($conn,$result);
        echo '
        <div class="col-md-6">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="card-date text-primary">'.explode(" ",$storyIdsDetails['date'])[0].'</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="../stories/view_story.php?story='.$storyIdsDetails['storyToken'].'">'.$storyIdsDetails['scammer_report'].'</a>
                            </h4>
                            <p class="card-text">'.substr($storyIdsDetails['scam_exp'],0,400).'</p>
                        </div>
                    </div>
                </div>
        ';
        }
     }


    // for type of scam

    function fetchTypeOfScam($conn)
    {
        $sql = "SELECT scammer_report FROM sharestory";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }

    function fetchTypeOfScam_forEach($conn,$scammer_report)
    {
        $sql = "SELECT id FROM sharestory WHERE scammer_report = :scammer_report";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['scammer_report'=>$scammer_report]);
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }

    function fetchAllStorySec($conn,$scammer_report)
    {
        $sql = "SELECT scam_exp,scammer_report,date,storyToken FROM sharestory WHERE scammer_report = :scammer_report";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['scammer_report'=>$scammer_report]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

   



    // check if email exist
    function userExist($conn,$email)
    {
        $sql = "SELECT email FROM subscribers WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    // check if email exist
    function scamExist($conn,$scam_exp)
    {
        $sql = "SELECT email,scam_exp, scammer_report FROM sharestory WHERE scam_exp = :scam_exp";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['scam_exp'=>$scam_exp]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }



    
    function searchScam($conn,$searchBy,$searchScam,$searchType)
    {
        $sql = "SELECT scam_exp,scammer_report,date,storyToken FROM sharestory 
        WHERE scam_exp LIKE ':searchBy' OR scammer_report LIKE ':searchScam' OR scammer_contact LIKE ':searchType'
              OR scammer_other_info LIKE ':searchType' OR scammer_email LIKE ':searchType'";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'searchBy'          =>"%".$searchBy."%",
            'searchScam'        =>"%".$searchScam."%",
            'searchType'        =>"%".$searchType."%"

        ]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }

    




    function afterVerify($conn,$email)
    {
        $sql = 'UPDATE users SET token="" WHERE email=:email';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        return true;
    }


    function uploadPicture($fileInputName,$_newDir){
        $myPath         = $_FILES[ $fileInputName ];
        $fileName       = $_FILES[ $fileInputName ]['name'];
        $fileSize       = $_FILES[ $fileInputName ]['size'];
        $fileTempName   = $_FILES[ $fileInputName ]['tmp_name'];
        $fileType       = $_FILES[ $fileInputName ]['type'];
        $fileError      = $_FILES[ $fileInputName ]['error'];
    
        $fileExt        =   explode('.',$fileName);
        $fileActualExt  =   strtolower(end($fileExt));
      
        $allowed    =   array('jpg','jpeg','png');
        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 6234061){
                    $fileDestination = $_newDir;
                    if($fileDestination){
                      move_uploaded_file($fileTempName,$fileDestination);
                      return "Successfully Uploaded";
                    }else{
                        return "pic not uploaded";
                      }
                }else{
                  return "This file is too big, try with a lesser file size";
                }
            }else{
                return "An error has occured, try again with another file";
            }
        }else{
            return "Note: File not supported";
        }
    }
    


    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }









    // send mail


      
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMPT;
use PHPMailer\PHPMailer\Exception; 
function MyMailer($subject,$to,$message){
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    

    $mail = new PHPMailer();
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.mailtrap.io';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'b5a94aad8ed3d7';               
    $mail->Password   = '02e31b9e82633e';                              
    $mail->Port       = 587;                                   
    

    $mail->SMPTSecure = 'tls';  

    $mail->setFrom('stephanyemmitty@gmail.com', 'Stephen Olayemi');
    $mail->addAddress($to);
    $mail->addReplyTo('stephanyemmitty@gmail.com');

    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    
    if($mail->send()){
        echo 'Message has been sent';

    } else{
        echo  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

?>