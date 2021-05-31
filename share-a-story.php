<?php 
    require('config/controller.php');
    include('header.php') 

?>
<main role="main"> 
<div id="main_C002_Col00" class="sf_colsIn bg-dark jumbotron scam-encounter" data-sf-element="Container" data-placeholder-label="Container"><div class='container text-light py-5'><div class="container">
<div class="row">
<div class="col-md-6">
<h1>Share your stories</h1>
<p class="lead">Have you been a victim of scams? It is important to share your stories so that others are aware of these scams. Your story may just put a stop to the scam!</p>
</div>
</div>
</div>


</div>
</div>
<div id="main_C008_Col00" class="sf_colsIn container py-5" data-sf-element="Container" data-placeholder-label="Container"><div class='text-center'><h1>Say No To Scam!</h1>
<p>If you are interested to share, please fill in the form below. Please read our full privacy state before using this form.<br>
Please note that you have to fill in all the fields in the form.</p>


</div><script src='../www.google.com/recaptcha/api.js'></script>

<form action="" method="POST" autocomplete='on' enctype="multipart/form-data">
    <div class="share-story">
        <h4>Personal details (please be assured that this information will not be shown on website)</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name <span class="text-primary">*</span></label>
                <input type="text" name="firstname" class="form-control" id="txtFirstName" />
                <div id="divErrorFirstName" class="invalid-feedback">
                    This field is required.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Last name <span class="text-primary">*</span></label>
                <input type="text" name="lastname" class="form-control" id="txtLastName" />
                <div id="divErrorLastName" class="invalid-feedback">
                    This field is required.
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-3">
                <label for="txtEmail">Email <span class="text-primary">*</span></label>
                <input type="email" name="email" class="form-control" id="txtEmail" />
                <div id="divErrorEmail" class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="txtContactNo">Contact No. (Optional)</label>
                <input type="number" name="phone" class="form-control" id="txtContactNo" />
            </div>
        </div>
        <h4>Scam Details</h4>

        <div class="form-group">
            <label for="ddlScamLocation">1. Where did you first connect with the scammer? <span class="text-primary">*</span></label>
            <select id="ddlScamLocation" name="first_scam" class="form-control">
                <option value="">Please select</option>
                <option value="Phone (Voice)">Phone (Voice)</option>
                <option value="Text Message">Text Message</option>
                <option value="Internet">Internet</option>
                <option value="Email">Email</option>
                <option value="Social Networking / Online Forums">Social Networking / Online Forums</option>
                <option value="Mail">Mail</option>
                <option value="In Person">In Person</option>
                <option value="Fax">Fax</option>
                <option value="Facebook">Facebook</option>
                <optgroup label="Online Shopping Site">
                    <option value="eBay">eBay</option>
                    <option value="Gumtree">Gumtree</option>
                    <option value="Carousell">Carousell</option>
                    <option value="Craiglist">Craiglist</option>
                </optgroup>
            </select>
            <div id="divErrorScamLocation" class="invalid-feedback">
                This field is required.
            </div>
        </div>

        <div class="form-group">
            <label for="ScamType">2. Select the option(s) that best matches the scam you are reporting <span class="text-primary">*</span></label>
            <select id="ddlScamType" class="form-control" name="scammer_report">
                <option value="" selected="selected">Please Select</option>
                    <option value="apple-scam">Apple Scam</option>
                    <option value="car-rental-scam">Car Rental Scam</option>
                    <option value="cold-call-supplier-scam">Cold Call Supplier Scam</option>
                    <option value="credit-for-sex-scam">Credit-for-Sex Scam</option>
                    <option value="cyber-extortion-scam">Cyber Extortion Scam</option>
                    <option value="home-room-rental-scam">Home/Room Rental Scam</option>
                    <option value="impersonation-scam">Impersonation Scam</option>
                    <option value="inheritance-scam">Inheritance Scam</option>
                    <option value="internet-love-scam">Internet Love Scam</option>
                    <option value="investment-scam">Investment Scam</option>
                    <option value="job-scam">Job Scam</option>
                    <option value="kidnap-scam">Kidnap Scam</option>
                    <option value="loan-scam">Loan Scam</option>
                    <option value="lottery-scam">Lottery Scam</option>
                    <option value="money-mule-scam">Money Mule Scam</option>
                    <option value="online-purchase-scam">Online Purchase Scam</option>
                    <option value="online-travel-vacation-scam">Online Travel Vacation Scam</option>
                    <option value="paypal-email-scam">PayPal Email Scam</option>
                    <option value="phishing-scam">Phishing Scam</option>
                    <option value="scam-using-wechat">Scam Using WeChat</option>
                    <option value="social-media-whatsapp-scam">Social Media Impersonation / Whatsapp Takeover Scam</option>
                    <option value="software-update-scam">Software Update Scam</option>
                    <option value="spoofed-hacked-email-scam">Spoofed/Hacked Email Scam</option>
                    <option value="wangiri-scam">Wangiri Scam</option>
            </select>
            <div id="divErrorScamType" class="invalid-feedback">
                This field is required.
            </div>
        </div>

        <div class="form-group">
            <label for="txtScammerIdentity">3. What is the name/username/moniker/company of the scammer? <span class="text-primary">*</span></label>
            <input type="text" class="form-control" name="scammer_username" id="txtScammerIdentity" />
            <div id="divErrorScammerIdentity" class="invalid-feedback">
                This field is required.
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label>4. Any contact Details used by the scammer?</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="number" class="form-control" name="scammer_contact" id="txtScammerContact" placeholder="Contact Number" />
                    <div id="divErrorScammerContact" class="invalid-feedback">
                        This field is required.
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="scammer_email" id="txtScammerEmail" placeholder="Email Address" />
                    <div id="divErrorScammerEmail" class="invalid-feedback">
                        This field is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="txtScammerDetails">5. Any Other Details Given by the scammer?</label>
            <input type="text" class="form-control" name="scammer_other_info" id="txtScammerDetails" placeholder="eg: Bank Account Number" />
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="MoneyLost">6. Any money lost? <span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select id="ddlMoneyLost" class="form-control" onchange="ddlMoneyLostOnChange()">
                        <option value="">Please Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div id="divErrorMoneyLost" class="invalid-feedback">
                        This field is required.
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="money_lost" id="txtLostDetails" placeholder="How much you have lost" style="display:none;"/>
                    <select id="ddlLostDetails" name="money_lost" class="form-control" style="display:none;">
                        <option value="">What did you lose?</option>
                        <option value="Personal information">Personal information</option>
                        <option value="Banking information">Banking information</option>
                        <option value="Commercial information">Commercial information</option>
                        <option value="Nothing">Nothing</option>
                    </select>
                    <div id="divErrorLostDetails" class="invalid-feedback">
                        This field is required.
                    </div>
                </div>
            </div>
            <div id="divMoneyTransferred" class="row mt-3" style="display:none;">
                <div class="col">
                    <select id="ddlMoneyTran" name="money_lost" class="form-control" onchange="ddlMoneyTransferOnChange()">
                        <option value="">Select the option on how the money was transferred</option>
                        <option value="Cash">Cash</option>
                        <option value="Internet Banking">Internet Banking</option>
                        <option value="Over-the-Counter Bank Transfer">Over-the-Counter Bank Transfer</option>
                        <option value="Transfer through Remittance Business">Transfer through Remittance Business</option>
                        <option value="ATM">ATM</option>
                        <option value="Stored Value Cards for eg. ITunes cards">Stored Value Cards for eg. ITunes cards</option>
                        <option value="Online Credits">Online Credits</option>
                        <option value="Others">Others* (Please specify)</option>
                    </select>
                    <input type="text" id="txtMoneyTransferOther" name="money_lost" class="form-control" style="margin-top:20px;" placeholder="Specify on how money was transferred" />
                </div>
                <div id="divErrorMoneyTran" class="invalid-feedback">
                    This field is required.
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="PoliceReport">7. Have you made a report to the police? (Please Select) <span class="text-primary">*</span></label>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="policeReport" id="chkPoliceReportYes" value="Yes" />
                        <label class="form-check-label" for="chkPoliceReportYes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="policeReport" id="chkPoliceReportNo" value="No" />
                        <label class="form-check-label" for="chkPoliceReportNo">No</label>
                    </div>
                </div>
                <div id="divErrorReportToPolice" class="invalid-feedback">
                    This field is required.
                </div>
            </div>
        </div>

        <h4>Briefly Describe Your Experience: <span class="text-primary">*</span></h4>
        <div class="form-group mb-5">
            <label for="description">It is helpful to share: 1) How it happened  2) When it happened  3) How much was lost.</label>
            <textarea class="form-control" id="txtDescription" name="scam_exp" rows="16" placeholder="Limited to 500 Words"></textarea>
            <div id="divErrorDescription" class="invalid-feedback">
                This field is required.
            </div>
        </div>

        <div class="form-group mb-5">
            <label for="fileupload">Please Upload only Jpeg with a file size of not more than 10MB. DO NOT upload obscene or inappropriate pictures.</label><br />

            <input type="file" name="file1" id="fuImage1" class="inputfile inputfile-1" onchange="fileUploadOnChange(this, 'spFileName1')"/>
            <label for="fuImage1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewbox="0 0 20 17">
                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>
                </svg>
                <span>Choose a file&hellip;</span>
            </label>
            <span id="spFileName1"></span>
            <div id="divErrorImage1" class="invalid-feedback">
                This field is required.
            </div>
        </div>

        <div class="form-group mb-5">
            <input type="file" name="file2" id="fuImage2" class="inputfile inputfile-1" onchange="fileUploadOnChange(this, 'spFileName2')"/>
            <label for="fuImage2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewbox="0 0 20 17">
                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>
                </svg>
                <span>Choose a file&hellip;</span>
            </label>
            <span id="spFileName2"></span>
            <div id="divErrorImage2" class="invalid-feedback">
                This field is required.
            </div>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" value="yes" name="anonymous" id="rbAgreeShare1" />
            <label class="form-check-label" for="chkAgreeShare1">
                Yes, I'm willing to share my story to raise awareness of scams. I am happy for the National Crime Prevention Council to contact me to discuss it further.
            </label>
        </div>
        <div class="form-check mb-5">
            <input class="form-check-input" type="radio" name="anonymous" value="no" id="rbAgreeShare2" />
            <label class="form-check-label" for="chkAgreeShare2">
                I am happy for the National Crime Prevention Council to use my story anonymously and do not wish to be contacted.
            </label>
            <div id="divErrorShareStory" class="invalid-feedback">
                This field is required.
            </div>
        </div>
        
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LenbXkUAAAAAARN0JjKWH04Jp_NhYUy3JLUQE_e"></div>
        </div>
        <span id="divServerError" class="invalid-feedback">

        </span>
        <div class="text-center mt-5">
            <input type="submit" name="action" value="Share" class="btn btn-primary mb-2" onclick="ValidateForm()">
            <!-- <button type="button" id="btnSubmit" class="btn btn-primary mb-2" onclick="Submit()">Share</button> -->
            <div class="text-center" id="divLoading" style="display:none;">
                <img src="default-album/evidence/loading.gif" />
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    function ddlMoneyLostOnChange() {
        $("#txtLostDetails").val("");
        $("#ddlLostDetails").val("");
        $("#ddlMoneyTran").val("");

        $("#txtMoneyTransferOther").val("");
        $("#txtMoneyTransferOther").hide();

        var moneyLost = $("#ddlMoneyLost").val();
        if (moneyLost == "Yes")
        {
            $("#txtLostDetails").show();
            $("#ddlLostDetails").hide();

            $("#divMoneyTransferred").show();
        }
        else if(moneyLost == "No")
        {
            $("#txtLostDetails").hide();
            $("#ddlLostDetails").show();

            $("#divMoneyTransferred").hide();
        }
        else
        {
            $("#txtLostDetails").hide();
            $("#ddlLostDetails").hide();

            $("#divMoneyTransferred").hide();
        }

        $("#divErrorLostDetails").hide();
        $("#divErrorMoneyTran").hide();
    }
    function ddlMoneyTransferOnChange() {
        var moneyTran = $("#ddlMoneyTran").val();

        $("#txtMoneyTransferOther").val("");
        if(moneyTran == "Others")
        {
            $("#txtMoneyTransferOther").show();
        }
        else
        {
            $("#txtMoneyTransferOther").hide();
        }

        $("#divErrorMoneyTran").hide();
    }
    function fileUploadOnChange(element,spFileNameId) {
        var fuFile = $(element).get(0).files;
        if(fuFile.length > 0)
        {
            var fileName = fuFile[0].name;
            $("#" + spFileNameId).html("<br>" + fileName);
        }
    }
   

    function CleanText(textOri) {
        var textRes = textOri;

        textRes = textRes.split('<').join('&lt;');
        textRes = textRes.split('>').join('&gt;');

        return textRes;
    }

    function ValidateForm() {
        ResetValidateErrorMessage();
        var result = true;

        var firstName = $("#txtFirstName").val();
        var lastName = $("#txtLastName").val();
        var email = $("#txtEmail").val();
        //var contact = $("#txtContactNo").val();
        var firstConnectWithScammer = $("#ddlScamLocation").val();
        var scamType = $("#ddlScamType").val();
        var scammerIdentity = $("#txtScammerIdentity").val();
        var scammerContact = $("#txtScammerContact").val();
        var scammerEmail = $("#txtScammerEmail").val();
        //var scammerDetail = $("#txtScammerDetails").val();
        var moneyLost = $("#ddlMoneyLost").val();
        var lostDetails = $("#txtLostDetails").val();
        if (moneyLost == "No") lostDetails = $("#ddlLostDetails").val();
        var howMoneyTransfer = $("#ddlMoneyTran").val();
        var howMoneyTransferOther = $("#txtMoneyTransferOther").val();
        var reportToPolice_Yes = $("#chkPoliceReportYes").is(":checked");
        var reportToPolice_No = $("#chkPoliceReportNo").is(":checked");
        var storyDetails = $("#txtDescription").val();
        var image1 = $("#fuImage1").get(0).files;
        var image2 = $("#fuImage2").get(0).files;
        var shareStory_Public = $("#rbAgreeShare1").is(":checked");
        var shareStory_Anonymously = $("#rbAgreeShare2").is(":checked");


        if (firstName == "") { $("#divErrorFirstName").show(); result = false; }
        if (lastName == "") {$("#divErrorLastName").show();result = false; }
        if (email == "") { $("#divErrorEmail").show(); $("#divErrorEmail").text("This field is required."); result = false; }
        else {
            if (!ValidateEmail(email))
            { $("#divErrorEmail").show(); $("#divErrorEmail").text("Invalid email address."); result = false; }
        }
        if (firstConnectWithScammer == "") { $("#divErrorScamLocation").show(); result = false; }
        if (scamType == "") { $("#divErrorScamType").show(); result = false; }
        if (scammerIdentity == "") { $("#divErrorScammerIdentity").show(); result = false; }
        //if (scammerContact == "" && scammerEmail == "") { $("#divErrorScammerContact").show(); $("#divErrorScammerContact").text("Scammer contact no. or email is required."); result = false; }
        if (scammerEmail != "")
        {
            if (!ValidateEmail(scammerEmail))
            { $("#divErrorScammerEmail").show(); $("#divErrorScammerEmail").text("Invalid email address."); result = false; }
        }

        if (moneyLost == "") { $("#divErrorMoneyLost").show(); result = false; }
        else if (moneyLost == "Yes")
        {
            if (lostDetails == "") { $("#divErrorLostDetails").show(); result = false; }
            if (howMoneyTransfer == "") { $("#divErrorMoneyTran").show(); result = false; }
            if (howMoneyTransfer == "Others" && howMoneyTransferOther == "") { $("#divErrorMoneyTran").show(); result = false; }
        }
        else if (moneyLost == "No")
        {
            if (lostDetails == "") { $("#divErrorLostDetails").show(); result = false; }
        }

        if (!reportToPolice_Yes && !reportToPolice_No) { $("#divErrorReportToPolice").show(); result = false; }
        if (storyDetails == "") { $("#divErrorDescription").show(); $("#divErrorDescription").text("This field is required."); result = false; }
        else {
            var len = storyDetails.split(" ").length;
            if(len > 500)
            {
                $("#divErrorDescription").show();
                $("#divErrorDescription").text("Description should less than 500 words.");
                result = false;
            }
        }
        if (image1.length > 0 && image1[0].size > 10000000) {
            $("#divErrorImage1").show(); $("#divErrorImage1").text("Selected file size bigger than 10MB.");
            result = false;
        }
        if (image1.length > 0 && image1[0].name.split(".")[1].toLowerCase() != "jpg" && image1[0].name.split(".")[1].toLowerCase() != "jpeg") {
            $("#divErrorImage1").show(); $("#divErrorImage1").text("Invalid file type.");
            result = false;
        }
        
        if (image2.length > 0 && image2[0].size > 10000000) {
            $("#divErrorImage2").show(); $("#divErrorImage2").text("Selected file size bigger than 10MB.");
            result = false;
        }
        if (image2.length > 0 && image2[0].name.split(".")[1].toLowerCase() != "jpg" && image2[0].name.split(".")[1].toLowerCase() != "jpeg") {
            $("#divErrorImage2").show(); $("#divErrorImage2").text("Invalid file type.");
            result = false;
        }
        
        if (!shareStory_Public && !shareStory_Anonymously) { $("#divErrorShareStory").show(); result = false; }

        return result;
    }
    function ValidateEmail(email) {
        return /^.+@.+\..+$/.test(email);
    }

    function ResetValidateErrorMessage() {
        $("#divErrorFirstName").hide();
        $("#divErrorLastName").hide();
        $("#divErrorEmail").hide(); $("#divErrorEmail").text("");
        $("#divErrorScamLocation").hide();
        $("#divErrorScamType").hide();
        $("#divErrorScammerIdentity").hide();
        $("#divErrorScammerContact").hide(); $("#divErrorScammerContact").text("");
        $("#divErrorScammerEmail").hide(); $("#divErrorScammerEmail").text("");
        $("#divErrorMoneyLost").hide();
        $("#divErrorLostDetails").hide();
        $("#divErrorMoneyTran").hide();
        $("#divErrorReportToPolice").hide();
        $("#divErrorDescription").hide();
        $("#divErrorImage1").hide(); $("#divErrorImage1").text("");
        $("#divErrorImage2").hide(); $("#divErrorImage2").text("");
        $("#divErrorShareStory").hide();
        $("#divServerError").hide(); $("#divServerError").html("");
    }
</script>
</div>
 </main> 







 <?php include('footer.php') ?>