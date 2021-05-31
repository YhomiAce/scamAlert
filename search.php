<?php
    include('header.php');
?>



<main role="main"> 
    <script type="text/javascript" src="Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Mvc/Scripts/Helper.js">
</script>

<style>
    #ulPreloadKeyword li{
        cursor: pointer;
    }
</style>
<script type="text/javascript" src="Mvc/Scripts/Helper.js"></script>

<div class="sf_cols">
    <div class="sf_colsIn jumbotron search-container" data-sf-element="Container" data-placeholder-label="Container">

        <div class="container text-center mt-5 mb-3">
            <h1>Search Scam Database</h1>
            <p class="lead">
                
            </p>
        </div>
    <form action="#" method="POST">
        <div class="sf_cols">
            <div class="sf_colsIn container text-center">
                <div class="d-none d-sm-block">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Search for scam" name="searchScam" placeholder="Search for scam" id="txtQueryString" value="" onkeydown="return (event.keyCode!=13);" maxlength="100" />
                        <div class="input-group-append">
                            <input type="submit" name="action" value='Search' class="btn btn-secondary" onclick="Search()">
                            <!-- <button type="button" class="btn btn-secondary" onclick="Search()">Search</button> -->
                        </div>
                    </div>
                    <div id="divPreloadKeyword" style="padding-top:1px;display:none;">
                        <ul id="ulPreloadKeyword" class="form-control" style="list-style-type: none;text-align: left;width:85%;border-radius:1rem;">
                            
                        </ul>
                    </div>
                    <div id="divError" class="alert alert-danger" role="alert" style="width: 62%;margin-top:20px;margin-left: auto;margin-right: auto;display:none;">
                        Searching keyword is required.
                    </div>
                    <div class="justify-content-center mt-4">
                        <div class="btn-group">
                            <select class="btn btn-outline-light text-left mr-4 btn-filter" name="searchBy" id="ddlQueryScam">
                                <option value="All" selected>Search by Scam</option>
                                    <option value="apple-scam" >Apple Scam</option>
                                    <option value="car-rental-scam" >Car Rental Scam</option>
                                    <option value="cold-call-supplier-scam" >Cold Call Supplier Scam</option>
                                    <option value="credit-for-sex-scam" >Credit-for-Sex Scam</option>
                                    <option value="cyber-extortion-scam" >Cyber Extortion Scam</option>
                                    <option value="home-room-rental-scam" >Home/Room Rental Scam</option>
                                    <option value="impersonation-scam" >Impersonation Scam</option>
                                    <option value="inheritance-scam" >Inheritance Scam</option>
                                    <option value="internet-love-scam" >Internet Love Scam</option>
                                    <option value="investment-scam" >Investment Scam</option>
                                    <option value="job-scam" >Job Scam</option>
                                    <option value="kidnap-scam" >Kidnap Scam</option>
                                    <option value="loan-scam" >Loan Scam</option>
                                    <option value="lottery-scam" >Lottery Scam</option>
                                    <option value="money-mule-scam" >Money Mule Scam</option>
                                    <option value="online-purchase-scam" >Online Purchase Scam</option>
                                    <option value="online-travel-vacation-scam" >Online Travel Vacation Scam</option>
                                    <option value="paypal-email-scam" >PayPal Email Scam</option>
                                    <option value="phishing-scam" >Phishing Scam</option>
                                    <option value="scam-using-wechat" >Scam Using WeChat</option>
                                    <option value="social-media-whatsapp-scam" >Social Media Impersonation / Whatsapp Takeover Scam</option>
                                    <option value="software-update-scam" >Software Update Scam</option>
                                    <option value="spoofed-hacked-email-scam" >Spoofed/Hacked Email Scam</option>
                                    <option value="wangiri-scam" >Wangiri Scam</option>
                            </select>
                        </div>
                        <div class="btn-group">
                            <select class="btn btn-outline-light text-left btn-filter" name="searchType" id="ddlQueryType">
                                <option value="All" selected>Search by Type</option>
                                    <option value="BankAccount" >Bank Account</option>
                                    <option value="Telephone" >Contact No.</option>
                                    <option value="Email" >Email</option>
                                    <option value="UserName" >ID/Username</option>
                                    <option value="keywords" >Keywords</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</form>
<div class="container search-container-mobile d-block d-sm-none">
    <div class="input-group">
        <input type="text" class="form-control" aria-label="Search for scam" placeholder="Search for scam" id="txtQueryString2" value="" onkeydown="return (event.keyCode!=13);" maxlength="100" />
        <div class="input-group-append">
            <input type="submit" name="action" value='Search' class="btn btn-secondary" onclick="Search()">
            <button type="button" class="btn btn-white" onclick="Search()"><em class="fas fa-search"></em></button>
        </div>
    </div>

    <select class="btn btn-search" id="ddlQueryScam2" style="margin-top:20px;">
        <option value="All" selected>Search by Scam</option>
        <option value="apple-scam" >Apple Scam</option>
        <option value="car-rental-scam" >Car Rental Scam</option>
        <option value="cold-call-supplier-scam" >Cold Call Supplier Scam</option>
        <option value="credit-for-sex-scam" >Credit-for-Sex Scam</option>
        <option value="cyber-extortion-scam" >Cyber Extortion Scam</option>
        <option value="home-room-rental-scam" >Home/Room Rental Scam</option>
        <option value="impersonation-scam" >Impersonation Scam</option>
        <option value="inheritance-scam" >Inheritance Scam</option>
        <option value="internet-love-scam" >Internet Love Scam</option>
        <option value="investment-scam" >Investment Scam</option>
        <option value="job-scam" >Job Scam</option>
        <option value="kidnap-scam" >Kidnap Scam</option>
        <option value="loan-scam" >Loan Scam</option>
        <option value="lottery-scam" >Lottery Scam</option>
        <option value="money-mule-scam" >Money Mule Scam</option>
        <option value="online-purchase-scam" >Online Purchase Scam</option>
        <option value="online-travel-vacation-scam" >Online Travel Vacation Scam</option>
        <option value="paypal-email-scam" >PayPal Email Scam</option>
        <option value="phishing-scam" >Phishing Scam</option>
        <option value="scam-using-wechat" >Scam Using WeChat</option>
        <option value="social-media-whatsapp-scam" >Social Media Impersonation / Whatsapp Takeover Scam</option>
        <option value="software-update-scam" >Software Update Scam</option>
        <option value="spoofed-hacked-email-scam" >Spoofed/Hacked Email Scam</option>
        <option value="wangiri-scam" >Wangiri Scam</option>
    </select>

    <select class="btn btn-search" id="ddlQueryType2" style="margin-top:20px;">
        <option value="All" selected>Search by Type</option>
        <option value="BankAccount" >Bank Account</option>
        <option value="Telephone" >Contact No.</option>
        <option value="Email" >Email|电邮</option>
        <option value="UserName" >ID/Username</option>
        <option value="keywords" >Keywords</option>
    </select>

</div>


<?php print_r($searchScam)."----"?>




<script type="text/javascript">


    function Search() {
        var queryString = $("#txtQueryString").val();
        var queryScam = $("#ddlQueryScam").val();
        var queryType = $("#ddlQueryType").val();
        if (IsMobileModel()) {
            queryString = $("#txtQueryString2").val();
            queryScam = $("#ddlQueryScam2").val();
            queryType = $("#ddlQueryType2").val();
        }

        if (queryString != "") {
            $("#divError").hide();

            window.location = "/search/" + btoa(queryString) + "/" + queryScam + "/" + queryType;
        }
        else {
            $("#divError").show();
            return false;
        }
    }

    function ddlScamOnSelect() {
        FilterAjax("");
    }
    function ddlYearOnSelect() {
        FilterAjax("");
    }
    function ddlMonthOnSelect() {
        FilterAjax("");
    }
    function ddlSortByOnSelect() {
        FilterAjax("");
    }
    function pagingOnClick(page) {
        FilterAjax(page);
    }

    function ddlScamOnSelect2() {
        FilterAjax("");
    }
    function ddlYearOnSelect2() {
        FilterAjax("");
    }
    function ddlMonthOnSelect2() {
        FilterAjax("");
    }
    function ddlSortByOnSelect2() {
        FilterAjax("");
    }

    function FilterAjax(page) {
        // show loading div
        $("#divLoading").show();
        $("#divResultList").empty();

        var urlParamArr = $(location).attr("href").split("search/index.html")[1].split("index.html");
        var queryString = urlParamArr[0];
        var queryScam = urlParamArr[1];
        var queryType = urlParamArr[2];
        var scamType = $("#ddlScamType").val();
        var year = $("#ddlYear").val();
        var month = $("#ddlMonth").val();
        var sortBy = $("#ddlSortBy").val();
        if (IsMobileModel()) {
            scamType = $("#ddlScamType2").val();
            year = $("#ddlYear2").val();
            month = $("#ddlMonth2").val();
            sortBy = $("#ddlSortBy2").val();
        }
        var paging = page;
        if (paging == "") paging = "1";

        if (scamType == "") scamType = "_All";
        if (year == "") year = "_All";
        if (month == "") month = "_All";
        if (sortBy == "") sortBy = "Latest";

        $.ajax({
            type: "GET",
            //url: "/search/GetSearchResultListAjax/",
            url: "/search/" +
                queryString + "/" +
                queryScam + "/" +
                queryType + "/" +
                scamType + "/" +
                year + "/" +
                month + "/" +
                paging + "/" +
                sortBy,
            data:{},
            //data: {
            //    queryString_P: queryString,
            //    queryScam_P: queryScam,
            //    queryType_P: queryType,
            //    scamType_P: scamType,
            //    year_P: year,
            //    month_P: month,
            //    page_P: paging,
            //    sortBy_P: sortBy
            //},
            success: function (data) {
                console.log(data)
                //alert("response: "+data.result);

                var result = JSON.parse(data.result);

                // update paging info
                var currentPageItemsCount = result.CurrentPageItemsCount;
                var totalItemsCount = result.TotalItemsCount;
                $("#divPagingInfo").text("Showing " + currentPageItemsCount + " of " + totalItemsCount + " Results")


                // generate story list

                var listItemTemplate = `
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="card-date text-primary">#Date#</div>
                            <h5 class="card-title">
                                <a class ="text-dark" href="#Url#" target="_blank">#Title#</a>
                            </h5>
                            <p class="card-text">
                                #Description#
                            </p>
                        </div>
                    </div>
                </div>`;

                var resultList = result.SearchResultList;
                for (var i = 0; i < resultList.length; i++) {
                    var sDate = resultList[i].DateStr;
                    var sTitle = resultList[i].Title;
                    var sDescription = resultList[i].Description;
                    var sUrl = resultList[i].Url;

                    var newItem = $(listItemTemplate.replace("#Date#", sDate).replace("#Url#", sUrl).replace("#Title#", sTitle).replace("#Description#", sDescription));
                    $("#divResultList").append(newItem);
                }
                if (resultList.length == 0) {
                    $("#divResultList").append($(`<div class="col-md-12"><div style="padding-left: 15px;"><h2>No records.</h2></div></div>`));
                }


                // generate paging
                $("#ulPaging").empty();
                var currentPage = result.CurrentPage * 1;
                var totalPage = result.TotalPage * 1;
                var startPage = 1;
                if (totalPage > 5) {
                    if (currentPage > 3) {
                        startPage = currentPage - 2;
                    }
                    if (startPage + 4 > totalPage) {
                        startPage = totalPage - 4;
                    }
                }
                var liClass = "page-item";
                var liClassActive = "page-item active";

                var prePagingTemplate = '<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous" onclick="pagingOnClick(\'#Paging#\')"><span aria-hidden="true">❮</span><span class="sr-only">Previous</span></a></li>';
                var nextPagingTemplate = '<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick(\'#Paging#\')"><span aria-hidden="true">❯</span><span class="sr-only">Next</span></a></li>';
                var pagingTemplate = '<li class="#ActiveClass#"><a class="page-link" href="javascript:void(0)" onclick="pagingOnClick(\'#Paging#\')">#Paging#</a></li>';

                if (currentPage - 5 > 0) {
                    var newRow = $(prePagingTemplate.replace("#Paging#", (currentPage - 5) + ""));
                    $("#ulPaging").append(newRow);
                }
                else {
                    var newRow = $(prePagingTemplate.replace("#Paging#", "1"));
                    $("#ulPaging").append(newRow);
                }
                for (var j = startPage; j <= (startPage + 4 > totalPage ? totalPage : startPage + 4) ; j++) {
                    var newRowStr = pagingTemplate.replace("#Paging#", j + "").replace("#Paging#", j + "");

                    if (j == currentPage) { newRowStr = newRowStr.replace("#ActiveClass#", liClassActive); }
                    else { newRowStr = newRowStr.replace("#ActiveClass#", liClass); }

                    var newRow = $(newRowStr);
                    $("#ulPaging").append(newRow);
                }
                if (currentPage + 5 <= totalPage) {
                    var newRow = $(nextPagingTemplate.replace("#Paging#", (currentPage + 5) + ""));
                    $("#ulPaging").append(newRow);
                } else {
                    var newRow = $(nextPagingTemplate.replace("#Paging#", totalPage + ""));
                    $("#ulPaging").append(newRow);
                }

                // hide loading div
                $("#divLoading").hide();
            },
            error: function (error) {
                alert(error.data);

                // hide loading div
                $("#divLoading").hide();
            }
        });
    }


    // pre-load keyword suggest
    var typingTimer;                //timer identifier
    var doneTypingInterval = 1000;  //time in ms (1 seconds)
    //on keyup, start the countdown
    $('#txtQueryString').keyup(function () {
        clearTimeout(typingTimer);
        if ($('#txtQueryString').val()) {
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        }
    });
    //user is "finished typing," do something
    function doneTyping() {
        var queryString = $('#txtQueryString').val();
        $("#divPreloadKeyword").hide();
        $("#ulPreloadKeyword").empty();

        $.ajax({
            type: "POST",
            url: "/search/GetSuggestKeywordAjax/",
            data: {
                queryString: queryString
            },
            success: function (data) {
                var result = data.result;
                if (result.length == 0) return;

                $("#ulPreloadKeyword").append($(result));
                $("#divPreloadKeyword").show();
            },
            error: function (error) {
                console.log(error.data);
            }
        });
    }
    function SuggestKeywordOnClick(keyword) {
        $('#txtQueryString').val(keyword);
        $("#divPreloadKeyword").hide();
        $("#ulPreloadKeyword").empty();
        Search();
    }
</script>
 </main>












 <?php include('footer.php') ?>