


<?php 

require('../config/controller.php');
include('headerN-scam.php') 


?>






<main role="main"> 
<div id="main_C001_Col00" class="sf_colsIn jumbotron p-0" data-sf-element="Container" data-placeholder-label="Container">
<div id="individualPledge" data-ride="carousel" class="carousel slide">
	<div class="carousel-inner">
		<!-- 1st slide with no caption -->
		<div class="carousel-item active">
			<img class="img-fluid" src="../default-album/quiz/banner-20200601-005c7d5.jpg?sfvrsn=4b7dbada_2" alt="WhatsApp"/>
		</div>
		<!-- 2nd slide -->
		<div class="carousel-item">
			<a href="https://t.me/ncpcscamalert" target="_blank"><img class="img-fluid" src="../default-album/quiz/banner-telegramdc29.jpg?sfvrsn=e9b03016_2" alt="Telegram"/></a>
		</div>
	</div>
	<!-- Pagination -->
	  <a class="carousel-control-prev" href="#individualPledge" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#individualPledge" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
</div>
</div>
<div class='container text-center'><h1>Individual Pledge</h1>
Please read our full privacy statement before using this form. All fields will need to be filled.


</div>    <script type="text/javascript" src="../ResourcePackages/Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
<script src='../../www.google.com/recaptcha/api.js'></script>


    <div class="blog-details container my-0">
        <div class="alert alert-light show col-lg-9 mx-auto p-5 pb-4 text-dark">
            <h5 class="text-uppercase">I pledge to FIGHT SCAMS by:</h5>
            <br />
            <ul class="pl-3">
                <li>
                    <strong>Staying vigilant</strong><br />
                    get the latest scam updates from NCPC/SPF with ScamAlert
                </li>
                <br />
                <li>
                    <strong>Protecting my loved ones</strong><br />
                    by sharing the latest updates with them
                </li>
            </ul>
            <br />
            <strong class="text-uppercase mt-5">I would like to kept informed of the latest scam news via:</strong>
            <div class="mt-4">
                <input id="rbWhatsapp" type="radio" name="radioButton" onchange="InformTypeOnChange()" class="text-uppercase"/> <b>WhatsApp</b>
                <div id="divWhatsApp" class="mt-4" style="display:none;">
                    <p>To activate the WhatsApp alerts, simply scan the QR code or click on the link below. Provide the info requested and send the message back to 90449916.</p>
                    <p><b><u>Note:</u></b> Please open the link using Safari, Chrome or Internet Explorer. Link does not work with Mozilla Firefox browser.</p>
                    <p>By providing the info via WhatsApp, you are agreeing to our <a target="_blank" href="../terms-of-use.html">Terms of Use</a></p>
                    <img src="../default-album/ncpc-scam-alert-qr-code226e.jpeg?sfvrsn=7be8cff_2" style="width:240px;" />
                    <span style="padding-left:20px;padding-right:20px;">or</span>
                    <a href="https://bit.ly/scamalertsignup" target="_blank">https://bit.ly/scamalertsignup</a>
                </div>
            </div>
            
            <div class="text-uppercase mt-4">
                <input id="rbEmail" type="radio" name="radioButton" onchange="InformTypeOnChange()" /> <b>Email</b>
                <div id="divEmail" class="text-uppercase mt-4" style="display:none;">
                <form action="#" method="POST">
                        <div data-sf-role="form-container">
                            <div class="form-group" data-sf-role="text-field-container">
                                <label>Name <span class="text-primary">*</span></label>
                                <input id="txtName1" name="name" data-sf-role="text-field-input" type="text" name="TextFieldController_0" class="form-control rounded-0" />
                                <span id="spErrorName1" style="color:red;"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm" data-sf-role="text-field-container">
                                <label>Email Address <span class="text-primary">*</span></label>
                                <input id="txtEmail1" name="email" data-sf-role="text-field-input" type="text" pattern="^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$" class="form-control rounded-0" />
                                <span id="spErrorEmail1" style="color:red;"></span>
                            </div>
                            <!--  -->
                        </div>
                        
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LenbXkUAAAAAARN0JjKWH04Jp_NhYUy3JLUQE_e"></div>
                            <span id="spErrorServerValidate" style="color:red;"></span>
                        </div>
                    </div>
                    <div id="divEmailSubmit" class="form-group text-center mb-0" style="display:none;">
                        <input type="submit" class="btn btn-primary" name="action" value="Join The Fight!" onclick="ValidateForm1()">
                        <!-- <a href="javascript:void(0)" class="btn btn-primary" onclick="SubmitForm1()">Join The Fight!</a> -->
                    </div>
                </form>
            </div>
            
        </div>

        <div class="modal fade bd-example-modal-lg" id="thankYouIndividual" tabindex="-1" role="dialog" aria-labelledby="thankYouIndividual" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <!--New individual -->
                        <div id="new-individual" style="display:none;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="text-center pt-5 px-5 pb-4">
                                <h1>Thank you for joining the fight against scams!</h1>
                                <p>Your pledge will go a long way to stop more from getting hurt! Please share this with a friend or loved one so they can protect themselves against scams.</p>
                                <div class="text-center footer py-3 pb-4">
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fab fa-facebook-f"></em></a>
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fab fa-twitter"></em></a>
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fas fa-link"></em></a>
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fab fa-whatsapp"></em></a>
                                </div>
                                <hr />
                                <br />
                                <h4 class="card-title">How much do you know about the latest scams?</h4>
                                <p>Test yourself by taking this <a href="../support/quiz.html">anti-scam quiz</a>, and learn more about how scams work.</p>
                                
                            </div>
                        </div>

                        <!--pledged before individual-->
                        <div id="pledged-individual" style="display:none;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="text-center pt-5 px-5 pb-4">
                                <h1>Thank you for joining the fight against scams!</h1>
                                <p>Our records show that you have already taken the pledge! Please share this with a friend or loved one so they can protect themselves against scams.</p>
                                <div class="text-center footer py-3 pb-4">
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fab fa-facebook-f"></em></a>
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fab fa-twitter"></em></a>
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fas fa-link"></em></a>
                                    <a href="#" target="_blank" class="btn-social btn-xs btn-primary"><em class="fab fa-whatsapp"></em></a>
                                </div>
                                <hr />
                                <br />
                                <h4 class="card-title">How much do you know about the latest scams?</h4>
                                <p>Test yourself by taking this <a href="../support/quiz.html">anti-scam quiz</a>, and learn more about how scams work.</p>
                                <p>For Whatsapp opt in, please click <a href="https://wa.me/6586697252?text=I'm%20interested%20to%20be%20a%20scam%20advocate">here</a> to bookmark our number in Whatsapp.</p>
                                <p><strong>Note:</strong> Please open the link using Safari, Chrome or Internet Explorer. Link will not work in Mozilla Firefox</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function InformTypeOnChange(){
            var rb1 = $("#rbWhatsapp").is(":checked");
            var rb2 = $("#rbEmail").is(":checked");

            ResetValidateInfo();

            if(rb1 == true)
            {
                $("#divWhatsApp").show();
                $("#divEmail").hide();
                $("#divEmailSubmit").hide();
            }
            else if(rb2 == true)
            {
                $("#divWhatsApp").hide();
                $("#divEmail").show();
                $("#divEmailSubmit").show();
            }
        }
        
        function ResetValidateInfo(){
            $("#spErrorName1").text("");
            $("#spErrorEmail1").text("");
            $("#spErrorContactNo1").text("");
            $("#spErrorReceive1").text("");
            $("#spErrorServerValidate").html("");
        }
        function ValidateForm1(){
            var result = true;
            ResetValidateInfo();

            var name = $("#txtName1").val();
            var email = $("#txtEmail1").val();
            //var contact = $("#txtContactNo1").val();
            //var isReceiveByEmail = $("#chkIsReceiveByEmail1").is(":checked");
            //var isReceiveByWhatsapp = $("#chkIsReceiveByWhatsapp1").is(":checked");

            if(name == "")
            {
                $("#spErrorName1").text("Name is required.");
                result = false;
            }

            if(email == "")
            {
                $("#spErrorEmail1").text("Email is required.");
                result = false;
            }
            else if(!IsEmail(email))
            {
                $("#spErrorEmail1").text("Invalid email address.");
                result = false;
            }

            //if(contact == "")
            //{
            //    $("#spErrorContactNo1").text("Contact No. is required.");
            //    result = false;
            //}

            //if(!isReceiveByEmail && !isReceiveByWhatsapp)
            //{
            //    $("#spErrorReceive1").text("Select at least 1 way to receive scam alerts.");
            //    result = false;
            //}

            // todo: google captcha

            return result;
        }
    </script>


<script type="text/javascript">
    $(function () {
        $('#thankYouIndividual').on('hidden.bs.modal', function () {
            window.location = "../index.html";  // once the thank you popup close, redirect back to home page.
        })

        $('#thankYouOrganisation').on('hidden.bs.modal', function () {
            window.location = "../index.html";  // once the thank you popup close, redirect back to home page.
        })
    });

    function OrgNameChange() {
        var orgName = $("#txtOrgName2").val();
        if(orgName.length >= 2)
        {
            $.ajax({
                type: "POST",
                url: "/fight/individual-pledge/GetOrganisationListAjax/",
                data: {
                    orgNameStartStr: orgName
                },
                success: function (data) {
                    $("#ulOrgList").empty();
                    var result = JSON.parse(data.result);
                    if(result.length > 0)
                    {
                        $("#ulOrgList").show();

                        var optionTemplate = `<li onclick="SelectOrgName('#OrgName#')">#OrgName#</li>`;
                        for(i = 0;i<result.length;i++)
                        {
                            var newOption = $(optionTemplate.replace("#OrgName#",result[i]).replace("#OrgName#",result[i]));

                            $("#ulOrgList").append(newOption);
                        }
                    }
                    else
                    {
                        $("#ulOrgList").hide();
                    }
                },
                error: function (error) {
                    $("#ulOrgList").hide();
                    console.log(error.data);
                }
            });
        }
    };

    function SelectOrgName(orgName){
        $("#ulOrgList").hide();
        $("#txtOrgName2").val(orgName);
    }

    function IsEmail(email)
    {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script> </main> 







<?php include('footerN-scam.php') ?>