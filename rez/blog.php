<?php include('headerN-scam.php') ?>








<main role="main"> 
<div id="main_C001_Col00" class="sf_colsIn jumbotron mb-0" data-sf-element="Container" data-placeholder-label="Container"><div class='container'><div class="row">
<div class="col-md-6 text-right order-lg-2">
<img class="img-fluid" src="../default-album/top-banners/banner_resources.png" alt="banner_resources"></div>
<div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
<h1>Resources</h1>
<p class="lead">Improve your awareness of the many types of scams and learn how you can prevent getting caught in one.<br>
If you wish to read SPF's media releases, please visit this <a href="https://www.police.gov.sg/Media-Room/News" target="_blank">webpage</a>.</p>
</div>
</div>


</div>
</div>

<div id="listing" class="mb-5 pb-4">&nbsp;</div><div class='resources container'><div class="counter text-center pb-5">
<ul class="nav nav-tabs justify-content-center">
    <li class="nav-item text-uppercase active show">
    <a class="nav-link" href="blog.html#listing">Blog</a>
    </li>
    <li class="nav-item text-uppercase">
    <a class="nav-link" href="posters.html#listing">Posters</a>
    </li>
    <li class="nav-item text-uppercase">
    <a class="nav-link" href="videos.html#listing">Videos</a>
    </li>
</ul>
<div class="tab-content">
<div class="tab-pane lead active">
<p>Check out the various educational article to stay vigilant against scams.</p>
</div>
</div>
</div>


</div>


<script type="text/javascript" src="../Mvc/Scripts/Helper.js"></script>

<div class="resources-listing container mb-5">

    
    <div class="d-none d-sm-block">
        <div class="row pb-4">
            <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing 9 of 68 Blogs</div>
            <div class="col-lg-7 text-muted">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="filter-year">Filter by:</label>
                        <label class="sr-only">Filter by</label>
                    </div>
                    <div class="col-xs-auto col-md-3">
                        <select class="custom-select mb-2" id="ddlScamType" onchange="ddlBlogOnSelect();">
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
                            <select class="selectpicker custom-select" id="ddlScamType2" onchange="ddlBlogOnSelect2();">
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
    <div class="row py-3" id="divBlogList">
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/thumbnails/untitled-design-(1)78eb.png?sfvrsn=228c1a7a_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/beware-of-phishing-smses.html">Beware of Phishing SMSes</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 21 Oct 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/copy-of-copy-of-copy-of-beware-of-phishing-messagesa85c.png?sfvrsn=319293e8_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/phishing-scams-involving-fake-advertising-campaigns-and-lucky-draw-from-banks.html">Phishing Scams Involving Fake Advertising Campaigns and Lucky Draw From Banks</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 20 Oct 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/h43bdc.jpg?sfvrsn=932d0d0a_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/beware-of-cyber-extortion%21.html">Beware of Cyber Extortion!</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 23 Jun 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/copy-of-copy-of-copy-of-beware-of-phishing-messagesa85c.png?sfvrsn=319293e8_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/re-emergence-of-purchase-order-scam.html">Re-emergence of Purchase Order Scam </a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 22 Jun 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/know-that-i-love-you-to-the-moo-and-back%2175aa.png?sfvrsn=7c09862c_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/cases-of-internet-love-scam-increased-in-the-first-quarter-of-2020.html">Cases of Internet Love scam increased in the first quarter of 2020</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 22 May 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/copy-of-copy-of-copy-of-beware-of-phishing-messagesa85c.png?sfvrsn=319293e8_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/beware-of-work-from-home-offers-that-are-actually-%27money-mule-recruitment-advertisements.html">Beware of Work-From-Home Offers That Are Actually 'Money Mule" Recruitment Advertisements</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 04 May 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/copy-of-copy-of-copy-of-beware-of-phishing-messagesa85c.png?sfvrsn=319293e8_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/don%27t-fall-for-china-impersonation-scam.html">Don't fall for China Impersonation Scam</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 13 Apr 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/copy-of-copy-of-copy-of-beware-of-phishing-messagesa85c.png?sfvrsn=319293e8_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/at-least-%244.html">At least $4.5m lost to Impersonation Scams</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 13 Apr 2020</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img alt="" class="card-img-top" src="../default-album/blogs/investigation37b8.png?sfvrsn=653aac18_0" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark" href="blog-details/11-women-investigated-for-offences-under-the-new-payment-services-act-2019-(1).html">11 Women Investigated For Offences under the New Payment Services Act 2019 (1)</a>
                        </h4>
                        <div class="small text-muted"><span class="text-primary">Blog</span> | 09 Apr 2020</div>
                    </div>
                </div>
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
                    <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('6')">
                        <span aria-hidden="true">❯</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>

        </ul>
    </nav>

</div>





<script type="text/javascript">
    function ddlBlogOnSelect() {
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

    function ddlBlogOnSelect2() {
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
        $("#divBlogList").empty();

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
            url: "/resources/blog/GetBlogListAjax/",
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
                $("#divPagingInfo").text("Showing " + currentPageItemsCount + " of " + totalItemsCount + " Articles")


                // generate story list
                

                var listItemTemplate = '<div class="col-md-4"><div class="card"><img alt="" class="card-img-top" src="#image#" /> ' +
                                         '<div class="card-body">' +
                                             '<h4 class="card-title">' +
                                                '<a class="text-dark" href="#url#">#title#</a>' +
                                             '</h4>' +
                                             '<div class="small text-muted"><span class="text-primary">Blog</span> | #date#</div>' +
                                          '</div>' +
                                        '</div>' +
                                      '</div>';
                var blogList = result.BlogList;
                for (var i = 0; i < blogList.length; i++) {
                    var sDate = blogList[i].Date;
                    var sTitle = blogList[i].Title;
                    var sUrl = blogList[i].Url;
                    var sImage = blogList[i].Image;
                    var newItem = $(listItemTemplate.replace("#date#", sDate).replace("#url#", sUrl).replace("#title#", sTitle).replace("#image#", sImage));
                    $("#divBlogList").append(newItem);
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