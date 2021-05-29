<?php include('headerN-scam.php') ?>








<main role="main"> 
<div id="main_C001_Col00" class="sf_colsIn jumbotron mb-0" data-sf-element="Container" data-placeholder-label="Container"><div class='container'><div class="row">
<div class="col-md-6 text-right order-lg-2">
<img class="img-fluid" src="../default-album/top-banners/banner_resources.png" alt="banner_resources"></div>
<div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
<h1>Resources</h1>
<p class="lead">Improve your awareness of the many types of scams and learn how you can prevent getting caught in one.</p>
</div>
</div>


</div>
</div>

<div id="listing" class="mb-5 pb-4">&nbsp;</div><div class='resources container'><div class="counter text-center pb-5">
<ul class="nav nav-tabs justify-content-center">
    <li class="nav-item text-uppercase">
    <a class="nav-link" href="blog.html#listing">Blog</a>
    </li>
    <li class="nav-item text-uppercase">
    <a class="nav-link" href="posters.html#listing">Posters</a>
    </li>
    <li class="nav-item text-uppercase active show">
    <a class="nav-link" href="videos.html#listing">Videos</a>
    </li>
</ul>
<div class="tab-content">
<div class="tab-pane lead active">
<p>Watch these videos to find out more about how scams work and what to look out for.</p>
</div>
</div>
</div>


</div>


<script type="text/javascript" src="../Mvc/Scripts/Helper.js"></script>

<div class="resources-listing container mb-5">

    
    <div class="d-none d-sm-block">
        <div class="row pb-4">
            <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing 12 of 57 Videos</div>
            <div class="col-lg-7 text-muted">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="filter-year">Filter by:</label>
                        <label class="sr-only">Filter by</label>
                    </div>
                    <div class="col-xs-auto col-md-3">
                        <select class="custom-select mb-2" id="ddlScamType" onchange="ddlVideoOnSelect();">
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
                            <select class="selectpicker custom-select" id="ddlScamType2" onchange="ddlVideoOnSelect2();">
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
                                    <option value="online-travel-vacation-scam" >Online Travel Vacation Scam</option>
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
    <div class="row text-center" id="divVideoList">
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Spot the Signs. Stop the Crimes", "https://www.youtube.com/embed/yWAL2o3Ypss?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/yWAL2o3Ypss/maxresdefault.jpg" alt="Spot the Signs. Stop the Crimes">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Spot the Signs. Stop the Crimes", "https://www.youtube.com/embed/yWAL2o3Ypss?rel=0");' href="#">
                    <h5>
                        Spot the Signs. Stop the Crimes
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Beware of Loan Scams!", "https://www.youtube.com/embed/pFWmKlOSZTQ?rel=0");' href="#">
                    <img class="w-100 my-3" src="../efault-album/videos/loanscamthumbnail612a.png?Status=Master&amp;sfvrsn=608f0ceb_2" alt="Beware of Loan Scams!">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Beware of Loan Scams!", "https://www.youtube.com/embed/pFWmKlOSZTQ?rel=0");' href="#">
                    <h5>
                        Beware of Loan Scams!
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("The Straits Times | The Big Story: Fraud schemes using celebs, reputable brands to lure victims ", "https://www.youtube.com/embed/EXKuIzSWzMo?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/EXKuIzSWzMo/maxresdefault.jpg" alt="The Straits Times | The Big Story: Fraud schemes using celebs, reputable brands to lure victims ">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("The Straits Times | The Big Story: Fraud schemes using celebs, reputable brands to lure victims ", "https://www.youtube.com/embed/EXKuIzSWzMo?rel=0");' href="#">
                    <h5>
                        The Straits Times | The Big Story: Fraud schemes using celebs, reputable brands to lure victims 
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Beware of MOH Impersonation Scam", "https://www.youtube.com/embed/mylqRCpAfNw?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/mylqRCpAfNw/maxresdefault.jpg" alt="Beware of MOH Impersonation Scam">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Beware of MOH Impersonation Scam", "https://www.youtube.com/embed/mylqRCpAfNw?rel=0");' href="#">
                    <h5>
                        Beware of MOH Impersonation Scam
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Beware of Impersonation Phone Scam", "https://www.youtube.com/embed/vipsCZ8UbTM?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/vipsCZ8UbTM/maxresdefault.jpg" alt="Beware of Impersonation Phone Scam">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Beware of Impersonation Phone Scam", "https://www.youtube.com/embed/vipsCZ8UbTM?rel=0");' href="#">
                    <h5>
                        Beware of Impersonation Phone Scam
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Tech Support Scam Part 2", "https://www.youtube.com/embed/kRnst43UDx4?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/kRnst43UDx4/maxresdefault.jpg" alt="Tech Support Scam Part 2">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Tech Support Scam Part 2", "https://www.youtube.com/embed/kRnst43UDx4?rel=0");' href="#">
                    <h5>
                        Tech Support Scam Part 2
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Check out our Zodiac predictions (Love) in the year of the Metal Rat", "https://www.youtube.com/embed/5DeD0FIZzmA?rel=0");' href="#">
                    <img class="w-100 my-3" src="../default-album/videos/thumbnail-cnyb317.jpg?Status=Master&amp;sfvrsn=8ffebdeb_0" alt="Check out our Zodiac predictions (Love) in the year of the Metal Rat">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Check out our Zodiac predictions (Love) in the year of the Metal Rat", "https://www.youtube.com/embed/5DeD0FIZzmA?rel=0");' href="#">
                    <h5>
                        Check out our Zodiac predictions (Love) in the year of the Metal Rat
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Check out our Zodiac predictions in the year of the Metal Rat!", "https://www.youtube.com/embed/G7eRrv8V9bQ?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/G7eRrv8V9bQ/maxresdefault.jpg" alt="Check out our Zodiac predictions in the year of the Metal Rat!">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Check out our Zodiac predictions in the year of the Metal Rat!", "https://www.youtube.com/embed/G7eRrv8V9bQ?rel=0");' href="#">
                    <h5>
                        Check out our Zodiac predictions in the year of the Metal Rat!
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Is this really from my bank?", "https://www.youtube.com/embed/WZo_U3Vr_B8?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/WZo_U3Vr_B8/maxresdefault.jpg" alt="Is this really from my bank?">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Is this really from my bank?", "https://www.youtube.com/embed/WZo_U3Vr_B8?rel=0");' href="#">
                    <h5>
                        Is this really from my bank?
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Donﮯt fall prey to DHL Impersonation Phone scam", "https://www.youtube.com/embed/uR2BiVlLZXA?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/uR2BiVlLZXA/maxresdefault.jpg" alt="Don't fall prey to DHL Impersonation Phone scam">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Donﮯt fall prey to DHL Impersonation Phone scam", "https://www.youtube.com/embed/uR2BiVlLZXA?rel=0");' href="#">
                    <h5>
                        Don't fall prey to DHL Impersonation Phone scam
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("Changi Airport Millionaire Lottery Scam", "https://www.youtube.com/embed/lpqNslwaSOw?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/lpqNslwaSOw/maxresdefault.jpg" alt="Changi Airport Millionaire Lottery Scam">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("Changi Airport Millionaire Lottery Scam", "https://www.youtube.com/embed/lpqNslwaSOw?rel=0");' href="#">
                    <h5>
                        Changi Airport Millionaire Lottery Scam
                    </h5>
                </a>
            </div>
            <div class="col-md-4">
                <a class="text-dark" data-toggle="modal" onclick='showModal("SingTel Impersonation Tech Scam", "https://www.youtube.com/embed/kEgcYUr38RM?rel=0");' href="#">
                    <img class="w-100 my-3" src="../../img.youtube.com/vi/kEgcYUr38RM/maxresdefault.jpg" alt="SingTel Impersonation Tech Scam">
                </a>
                <a class="text-dark" data-toggle="modal" onclick='showModal("SingTel Impersonation Tech Scam", "https://www.youtube.com/embed/kEgcYUr38RM?rel=0");' href="#">
                    <h5>
                        SingTel Impersonation Tech Scam
                    </h5>
                </a>
            </div>
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
                    <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('5')">
                        5
                    </a>
                </li>

                <li class="page-item">
                    <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('5')">
                        <span aria-hidden="true">❯</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>

        </ul>
    </nav>
</div>


<div class="modal fade bd-example-modal-lg" id="VideoModal" tabindex="-1" role="dialog" aria-labelledby="videoLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="videoLongTitle"></h5>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9" id="ytIframe">

                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    function ddlVideoOnSelect() {
        FilterAjax();
    }
    function ddlYearOnSelect() {
        FilterAjax();
    }
    function ddlMonthOnSelect() {
        FilterAjax();
    }
    function ddlSortByOnSelect() {
        FilterAjax();
    }
    function pagingOnClick(page) {
        FilterAjax(page);
    }

    function ddlVideoOnSelect2() {
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

    function showModal(title, ytUrl) {
        title = title.replace("ﮯ", "'");
        $("#videoLongTitle").text(title);
        $('#ytIframe').html(' <iframe class="embed-responsive-item"  src="' + ytUrl + '" allow="encrypted-media" allowfullscreen></iframe>');
        $("#VideoModal").modal("show");

    }


    function FilterAjax(page) {
        // show loading div
        $("#divLoading").show();
        $("#divVideoList").empty();

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
        if (sortBy == "") sortBy = "Latest";

        $.ajax({
            type: "POST",
            url: "/resources/videos/GetVideoListAjax/",
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
                $("#divPagingInfo").text("Showing " + currentPageItemsCount + " of " + totalItemsCount + " Videos")


                // generate
                

                //var listItemTemplate = '<div class="col-md-4"><img class="w-100 my-3" src="#thumbnail#" alt="#title1#"> <h5><a class="text-dark" onclick="showModal(\'#title2#\', \'#url#\');" href="#listing">#title3#</a></h5></div>';
                var listItemTemplate = `<div class="col-md-4">
                                            <a class="text-dark" onclick="showModal(\'#title2#\', \'#url#\');" href="#listing">
                                                <img class="w-100 my-3" src="#thumbnail#" alt="#title1#">
                                            </a>
                                            <a class="text-dark" onclick="showModal(\'#title2#\', \'#url#\');" href="#listing">
                                                <h5>#title3#</h5>
                                            </a>
                                        </div>`;

                var videoList = result.VideoList;
                for (var i = 0; i < videoList.length; i++) {
                    var sThumbnail = videoList[i].Thumbnail;
                    var sTitle = videoList[i].Title;
                    var sId = videoList[i].YtID;
                    var sUrl = videoList[i].YtUrl;

                    var newItem = $(listItemTemplate.replace("#thumbnail#", sThumbnail).replace("#title1#", sTitle)
                        .replace("#title2#", sTitle.replace("ﮯ", "'")).replace("#title2#", sTitle.replace("ﮯ", "'"))
                        .replace("#title3#", sTitle)
                        .replace("#url#", sUrl).replace("#url#", sUrl));
                    $("#divVideoList").append(newItem);

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
 </main> 
 






 <?php include('footerN-scam.php') ?>