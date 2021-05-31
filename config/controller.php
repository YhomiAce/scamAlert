<?php
    session_start();
    require 'vendor/autoload.php';
    require_once "actions.php";
    require_once "db.php";
    
    

  

// MyMailer('this','stephanyemmitty@gmail.com','i love YOU');






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
        $file1              = testInput($_FILES['file1']['name']);
        $file2              = testInput($_FILES['file2']['name']);
        $file1_size         = testInput($_FILES['file1']['size']);
        $file2_size         = testInput($_FILES['file2']['size']);
        $anonymous          = testInput($_POST['anonymous']);
        $token              = "story-".generate_string($permitted_chars,15);
        
        if(scamExist($conn,$scam_exp) != "Null"){ 
            if($file1_size < 6234061 && $file2_size < 6234061)
            echo displayMessage('danger',uploadPicture('file1','sharedImages/'.$file1)." ( File1 )");
            echo displayMessage('danger',uploadPicture('file2','sharedImages/'.$file2)." ( File2 )");

            if($firstname != "" && $lastname != ""){
                $register = share($conn,$firstname,$lastname,$email,$phone,$first_scam,$scammer_report,$scammer_username,$scammer_contact,
                $scammer_email,$scammer_other_info,
                $money_lost,$policeReport,$scam_exp,$file1,$file2,$anonymous,$token);


                $content  = "
						
						<section style='background-color:#000; padding:10px 25px;color:#fff;'>
						
							<div style='border:2px solid red;padding:30px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif';>
							<h2 style='text-align:center;'>".ucwords(str_replace("-"," ",$scammer_report))."</h2><br>
							<h4 style='text-align:left; font-size:18px; color:#fff;'>Scammer Details:</h4>
                            <h5>Name:".$scammer_username."<br>
                                Email:".$scammer_email."<br>
                                Phone:".$scammer_contact."<br>
                                Also:(".$scammer_other_info.")<br>
                            </h5>
								<h5 style='font-size:15px;font-weight: normal;color:#fff'>
                                        ".$scam_exp."<br><br><br><br><br>
									<a style='background-color:red;color:#fff;font-decoration:none; padding:12px 18px; border-radius:6px' href='#'>ScamAlert</a><br><br><br><br<br>
									</h5><br<br>
								</h5>
								<h3 style='border-bottom:3px solid #fff;width:100px'><br>Regrads from ScamAlert</h2>
							</div>
						</section>
								";



                $allEmails = fetchAllEmail($conn);
                foreach($allEmails as $allEmail){
                    MyMailer('ScamAlert',$allEmail,$content);
                }
                
            }else{
                echo displayMessage('danger','Every field must be filled');
            }
        }else{
            echo displayMessage('danger','Story already exist');
        }
            
    }
    



    if(isset($_POST['action']) && $_POST['action'] === 'Search'){
        $searchScam     = testInput($_POST['searchScam']);
        $searchBy       = testInput($_POST['searchBy']);
        $searchType     = testInput($_POST['searchType']);
        if($searchBy != "" || $searchScam != "" || $searchType != ""){
            $searchScam = searchScam($conn,$searchBy,$searchScam,$searchType);
        }else{
            echo displayMessage('danger','Every field must be filled');
        }
        
    }
    

    


?>