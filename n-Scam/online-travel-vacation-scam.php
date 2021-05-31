<?php 
    include('headerN-scam.php');
    $storyIds            = fetchId($conn);
?>


<main role="main"> 



    <script type="text/javascript" src="../Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).prop('title', 'Online Travel Vacation Scam');
        });
    </script>


<div class="sf_colsIn jumbotron bg-white mb-0" data-sf-element="Container" data-placeholder-label="Container">
    <div class="sfContentBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right order-lg-2">
                    <img class="img-fluid" src="../default-album/top-banners/online-travel-vacation-scam9502.png?sfvrsn=8c487846_2" alt="Online Travel Vacation Scam" />
                </div>
                <div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
                    <h1>
                        WHAT IS AN Online Travel Vacation Scam? <br />
                    </h1>
                    <p class="lead"><p>Scammers place online ads for a vacation at outrageously cheap prices. Upon leaving for the trip, victims find that the hotel accommodation and air travel they had paid for were never booked.</p></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="counter">

    <div class="jumbotron bg-light text-center mt-0 mb-5 py-5 d-none d-sm-block">
        <div class="container py-5">
            <ul class="nav nav-tabs justify-content-center mb-2" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-uppercase active" id="content1-tab" data-toggle="tab" href="#content1" role="tab" aria-controls="content1" aria-selected="true">What you should look out for</a>
                </li>
                <li class="nav-item text-uppercase">
                    <a class="nav-link" id="content2-tab" data-toggle="tab" href="#content2" role="tab" aria-controls="content2" aria-selected="false">What you should do</a>
                </li>
            </ul>
            <div class="row no-gutters-border">
                <div class="col-md-3 text-left">
                    <img class="pb-3" src="../default-album/img_advices.png" alt="image_advices" />
                </div>
                <div class="col-md-9">
                    <div class="tab-content mt-5" id="myTabContent">
                        <div id="content1" class="tab-pane fade active" role="tabpanel" aria-labelledby="content1-tab">
                            <input type="checkbox" class="read-more-state" id="post-1" />

                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_Less" style="display:none;">
                                <div><ul>
    <li>Goods or services sold at incredibly low prices. These are often done in bad faith. If it is not a scam per se, there are often unclear terms and conditions attached, which are cause for concern</li>
    <li>If a vendor does not clearly identify themselves with an address or phone number. This often means they are not legitimate</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More">
                                <div> <ul>
    <li>Goods or services sold at incredibly low prices. These are often done in bad faith. If it is not a scam per se, there are often unclear terms and conditions attached, which are cause for concern</li>
    <li>If a vendor does not clearly identify</div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read More</a>
                                </div>
                            </div>

                        </div>
                        <div id="content2" class="tab-pane fade" role="tabpanel" aria-labelledby="content2-tab">
                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less" style="display:none;">
                                <div><ul>
    <li>Check with official sources such as the Singapore Tourism Board (<a href="http://www.stb.gov.sg/" target="_blank">www.stb.gov.sg</a>) if the vendor is an accredited travel agent</li>
    <li>Check with NATAS (<a href="http://www.natas.org.sg/" target="_blank">www.natas.org.sg</a>) for what to look out for when considering a trip</li>
    <li>Be sure to read all the terms and conditions. Avoid offers that require hidden fees or taxes</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More">
                                <div> <ul>
    <li>Check with official sources such as the Singapore Tourism Board (<a href="http://www.stb.gov.sg/" target="_blank">www.stb.gov.sg</a>) if the vendor is an accredited travel agent</li>
    <li>Check with NATAS (<a href="http://www.natas.org.sg/" target="_blank">www.natas.org.sg</a>) for what to look out for when considering a trip</li>
    <li>Be sure to</div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron bg-light text-center mt-0 mb-5 py-5 d-block d-sm-none">
        <h4>What you should look out for</h4>
        <input type="checkbox" class="read-more-state" id="post-3" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_Less2" style="display:none;">
            <div><ul>
    <li>Goods or services sold at incredibly low prices. These are often done in bad faith. If it is not a scam per se, there are often unclear terms and conditions attached, which are cause for concern</li>
    <li>If a vendor does not clearly identify themselves with an address or phone number. This often means they are not legitimate</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More2">
            <div> <ul>
    <li>Goods or services sold at incredibly low prices. These are often done in bad faith. If it is not a scam per se, there are often unclear terms and conditions attached, which are cause for concern</li>
    <li>If a vendor does not clearly identify</div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read More</a>
            </div>
        </div>

        <h4>What you should do</h4>
        <input type="checkbox" class="read-more-state" id="post-4" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less2" style="display:none;">
            <div><ul>
    <li>Check with official sources such as the Singapore Tourism Board (<a href="http://www.stb.gov.sg/" target="_blank">www.stb.gov.sg</a>) if the vendor is an accredited travel agent</li>
    <li>Check with NATAS (<a href="http://www.natas.org.sg/" target="_blank">www.natas.org.sg</a>) for what to look out for when considering a trip</li>
    <li>Be sure to read all the terms and conditions. Avoid offers that require hidden fees or taxes</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More2">
            <div> <ul>
    <li>Check with official sources such as the Singapore Tourism Board (<a href="http://www.stb.gov.sg/" target="_blank">www.stb.gov.sg</a>) if the vendor is an accredited travel agent</li>
    <li>Check with NATAS (<a href="http://www.natas.org.sg/" target="_blank">www.natas.org.sg</a>) for what to look out for when considering a trip</li>
    <li>Be sure to</div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read More</a>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
    var isReadMoreLookOut = true
    var isReadMoreProtect = true

    function ReadMoreLookOut() {
        if (isReadMoreLookOut) {
            isReadMoreLookOut = false;
            $("#MaincontainsLookOutId_More").hide();
            $("#MaincontainsLookOutId_Less").show();
        }
        else {
            isReadMoreLookOut = true;
            $("#MaincontainsLookOutId_Less").hide();
            $("#MaincontainsLookOutId_More").show();
        }
    }

    function ReadMoreProtect() {
        if (isReadMoreProtect) {
            isReadMoreProtect = false;
            $("#MaincontainsProtectId_More").hide();
            $("#MaincontainsProtectId_Less").show();
        }
        else {
            isReadMoreProtect = true;
            $("#MaincontainsProtectId_Less").hide();
            $("#MaincontainsProtectId_More").show();
        }
    }


    var isReadMoreLookOut2 = true
    var isReadMoreProtect2 = true

    function ReadMoreLookOut2() {
        if (isReadMoreLookOut2) {
            isReadMoreLookOut2 = false;
            $("#MaincontainsLookOutId_More2").hide();
            $("#MaincontainsLookOutId_Less2").show();
        }
        else {
            isReadMoreLookOut2 = true;
            $("#MaincontainsLookOutId_Less2").hide();
            $("#MaincontainsLookOutId_More2").show();
        }
    }

    function ReadMoreProtect2() {
        if (isReadMoreProtect2) {
            isReadMoreProtect2 = false;
            $("#MaincontainsProtectId_More2").hide();
            $("#MaincontainsProtectId_Less2").show();
        }
        else {
            isReadMoreProtect2 = true;
            $("#MaincontainsProtectId_Less2").hide();
            $("#MaincontainsProtectId_More2").show();
        }
    }

</script>

<style>
    /*#main_C009_Col00 {
        display: none;
    }*/
</style>
<div id="main_C016_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">

<script type="text/javascript" src="../Mvc/Scripts/Helper.js"></script>

<div class="stories overflow-hide">
    <h1 class="text-center pb-4">RELATED SCAM STORIES</h1>
    <p class="lead text-muted"></p>
    <input type="hidden" value="" style="display:none;" />

    
    <div class="d-none d-sm-block">
        <div class="row pb-4">
            <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing 6 of 23 Stories</div>
            <div class="col-lg-7 text-muted">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="filter-year">Filter by:</label>
                        <label class="sr-only">Filter by</label>
                    </div>
                    <div class="col-xs-auto col-md-3">
                        <select class="custom-select mb-2" id="ddlScamType" onchange="ddlScamOnSelect();">
                            <option value="">All Type</option>
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
                                <option value="online-travel-vacation-scam" selected>Online Travel Vacation Scam</option>
                                <option value="paypal-email-scam" >PayPal Email Scam</option>
                                <option value="phishing-scam" >Phishing Scam</option>
                                <option value="scam-using-wechat" >Scam Using WeChat</option>
                                <option value="social-media-whatsapp-scam" >Social Media Impersonation / Whatsapp Takeover Scam</option>
                                <option value="software-update-scam" >Software Update Scam</option>
                                <option value="spoofed-hacked-email-scam" >Spoofed/Hacked Email Scam</option>
                                <option value="wangiri-scam" >Wangiri Scam</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="custom-select mb-2" id="ddlYear" onchange="ddlYearOnSelect();">
                            <option value="">Year</option>
                                <option value="2016" >2016</option>
                                <option value="2017" >2017</option>
                                <option value="2018" >2018</option>
                                <option value="2019" >2019</option>
                                <option value="2020" >2020</option>
                                <option value="2021" >2021</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="sr-only" for="filter-month">Filter by Month</label>
                        <select class="custom-select mb-2" id="ddlMonth" onchange="ddlMonthOnSelect();">
                            <option value="">Month</option>
                                <option value="1" >Jan</option>
                                <option value="2" >Feb</option>
                                <option value="3" >Mar</option>
                                <option value="4" >Apr</option>
                                <option value="5" >May</option>
                                <option value="6" >Jun</option>
                                <option value="7" >Jul</option>
                                <option value="8" >Aug</option>
                                <option value="9" >Sep</option>
                                <option value="10" >Oct</option>
                                <option value="11" >Nov</option>
                                <option value="12" >Dec</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="sort-by">Sort by:</label>
                        <label class="sr-only" for="sort-by">Sort by</label>
                    </div>
                    <div class="col-md-2">
                        <select class="custom-select mb-2" id="ddlSortBy" onchange="ddlSortByOnSelect();">
                                    <option value="Latest" >Latest</option>
                                    <option value="Oldest" >Oldest</option>
                                    <option value="Ascending" >Ascending</option>
                                    <option value="Descending" >Descending</option>

                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-filter d-block d-sm-none mb-3">
        <div class="row">
            <div class="col-6">
                <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown dropdown-toggle" data-toggle="dropdown">
                        Filter by
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <select class="selectpicker custom-select mb-2" id="ddlYear2" onchange="ddlYearOnSelect2();">
                                <option value="">Year</option>
                                    <option value="2016" >2016</option>
                                    <option value="2017" >2017</option>
                                    <option value="2018" >2018</option>
                                    <option value="2019" >2019</option>
                                    <option value="2020" >2020</option>
                                    <option value="2021" >2021</option>
                            </select>
                        </li>
                        <li>
                            <select class="selectpicker custom-select mb-2" id="ddlMonth2" onchange="ddlMonthOnSelect2();">
                                <option value="">Month</option>
                                    <option value="1" >Jan</option>
                                    <option value="2" >Feb</option>
                                    <option value="3" >Mar</option>
                                    <option value="4" >Apr</option>
                                    <option value="5" >May</option>
                                    <option value="6" >Jun</option>
                                    <option value="7" >Jul</option>
                                    <option value="8" >Aug</option>
                                    <option value="9" >Sep</option>
                                    <option value="10" >Oct</option>
                                    <option value="11" >Nov</option>
                                    <option value="12" >Dec</option>
                            </select>
                        </li>
                        <li>
                            <select class="selectpicker custom-select" id="ddlScamType2" onchange="ddlScamOnSelect2();">
                                <option value="">All Type</option>
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
                                    <option value="online-travel-vacation-scam" selected>Online Travel Vacation Scam</option>
                                    <option value="paypal-email-scam" >PayPal Email Scam</option>
                                    <option value="phishing-scam" >Phishing Scam</option>
                                    <option value="scam-using-wechat" >Scam Using WeChat</option>
                                    <option value="social-media-whatsapp-scam" >Social Media Impersonation / Whatsapp Takeover Scam</option>
                                    <option value="software-update-scam" >Software Update Scam</option>
                                    <option value="spoofed-hacked-email-scam" >Spoofed/Hacked Email Scam</option>
                                    <option value="wangiri-scam" >Wangiri Scam</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <select class="custom-select mb-2" id="ddlSortBy2" onchange="ddlSortByOnSelect2();">
                            <option value="Latest" >Latest</option>
                            <option value="Oldest" >Oldest</option>
                            <option value="Ascending" >Ascending</option>
                            <option value="Descending" >Descending</option>

                </select>
            </div>
        </div>
        <div class="results text-muted text-center mt-5 pb-2">Showing 6 of 30 Stories</div>
    </div>

    
    <div class="text-center" id="divLoading" style="display:none;">
        <img src="../default-album/evidence/loading.gif" />
    </div>
    <div class="row no-gutters no-gutters-border" id="divStoryList">
    <?php
        $allTypeIds=fetchTypeOfScam_forEach($conn,'online-travel-vacation-scam');
        rsort($allTypeIds);
        // print_r($allTypeIds)

        foreach($allTypeIds as $allTypeId){
            $storyIdsDetails     =   fetchAll($conn,$allTypeId)
    ?>



                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="card-date text-primary"><?php echo explode(" ",$storyIdsDetails['date'])[0]  ?></div>
                            <h4 class="card-title">
                                <a class="text-dark" href="../stories/view_story.php?story=<?php echo $storyIdsDetails['storyToken']?>"><?php echo $storyIdsDetails['scammer_report']  ?></a>
                            </h4>
                            <p class="card-text"><?php echo substr($storyIdsDetails['scam_exp'],0,400)  ?></p>
                        </div>
                    </div>
                </div>



    <?php
        }
    ?>

    </div>

    
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pt-5 pb-5" id="ulPaging">

            <li class="page-item">
                <a class="page-link prev" href="javascript:void(0)" aria-label="Previous" onclick="pagingOnClick('1')">
                    <span aria-hidden="true">❮</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>



            <li class="page-item active">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('1')">
                    1
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('2')">
                    2
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('3')">
                    3
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('4')">
                    4
                </a>
            </li>

            <li class="page-item">
                <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('4')">
                    <span aria-hidden="true">❯</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        </ul>
    </nav>
</div>

<script type="text/javascript">
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
        $("#divStoryList").empty();

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

        if (scamType == "") scamType = "";
        if (year == "") year = "";
        if (month == "") month = "";
        if (sortBy == "") sortBy = txt_Latest;

        $.ajax({
            type: "POST",
            url: "/scam-details/GetStoryListAjax/",
            data: {
                scamType: scamType,
                year: year,
                month: month,
                page: paging,
                sortBy: sortBy
            },
            success: function (data) {
                var result = JSON.parse(data.result);

                // update paging info
                var currentPageItemsCount = result.CurrentPageItemsCount;
                var totalItemsCount = result.TotalItemsCount;
                $("#divPagingInfo").text("Showing " + currentPageItemsCount + " of " + totalItemsCount + " Stories")


                // generate story list
                var listItemTemplate = '<div class="col-md-6"><div class="card"><div class="card-body p-5"><div class="card-date text-primary">#Date#</div><h4 class="card-title"><a class="text-dark" href="#Url#">#Title#</a></h4><p class="card-text">#Description#</p></div></div></div>';
                var storyList = result.StoryList;
                for (var i = 0; i < storyList.length; i++) {
                    var sDate = storyList[i].Date;
                    var sTitle = storyList[i].Title;
                    var sDescription = storyList[i].Description;
                    var sUrl = storyList[i].Url;

                    var newItem = $(listItemTemplate.replace("#Date#", sDate).replace("#Url#", sUrl).replace("#Title#", sTitle).replace("#Description#", sDescription));
                    $("#divStoryList").append(newItem);
                }
                if (storyList.length == 0) {
                    $("#divStoryList").append($(`<div class="col-md-12"><div style="padding-left: 15px;"><h2>There are currently no stories submitted.</h2></div></div>`));
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
</script>

</div>
<div id="main_C025_Col00" class="sf_colsIn bg-dark  scam-encounter py-5" data-sf-element="Container" data-placeholder-label="Container"><div class='container text-center text-light py-5'><h1>Have you encountered a scam?</h1>
<span class="lead">Share your stories. Help create awareness.</span><br>
<a href="../share-a-story.html" class="btn btn-primary mt-4">Share Your Story</a>


</div>
</div>
 </main>
 







 <?php include('footerN-scam.php') ?>