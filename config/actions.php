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
    $money_lost,$policeReport,$scam_exp,$file1,$file2,$anonymous)
    {
        $sql = "INSERT INTO sharestory(firstname,lastname,email,phone,first_scam,scammer_report,scammer_username,scammer_contact,
                scammer_email,scammer_other_info,money_lost,policeReport,scam_exp,file1,file2,anonymous) 
                
                VALUES(:firstname,:lastname,:email,:phone,:first_scam,:scammer_report,:scammer_username,:scammer_contact,
                :scammer_email,:scammer_other_info,:money_lost,:policeReport,:scam_exp,:file1,:file2,:anonymous)";

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
            'anonymous'          =>$anonymous
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

    // login existing user
    function login($conn,$email)
    {
        $sql = "SELECT email, password FROM users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // retreiving current users detatil
    function currentUser($conn,$email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // forgot password
    function forgot_password($conn,$token,$email)
    {
        $sql='UPDATE users SET token = :token WHERE email = :email';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['token'=>$token,'email'=>$email]);
        return true;
    }

    //reset password
    function resetPassword($conn,$email,$token)
    {
        $sql = "SELECT id FROM users WHERE email =:email AND token =:token AND token !=''";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['email'=>$email,'token'=>$token]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // Update Password
    function updatePassword($conn,$pass,$email)
    {
        $sql = 'UPDATE users SET token="", password=:pass WHERE email=:email';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['pass'=>$pass,'email'=>$email]);
        return true;
    
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
                if($fileSize > 1000000){
                    $fileDestination = $_newDir;
                    if($fileDestination){
                      move_uploaded_file($fileTempName,$fileDestination);
                      return $fileDestination;
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
            return "Note: File was not changed";
        }
    }
    
?>