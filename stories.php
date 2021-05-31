<?php 
    include('config/controller.php');
    include('header.php');

    $storyIds            = fetchId($conn);

?>



<main role="main"> 
<div id="main_C001_Col00" class="sf_colsIn jumbotron" data-sf-element="Container" data-placeholder-label="Container"><div class='sfContentBlock'><div class="container">
<div class="row">
<div class="col-md-6 text-center order-lg-2">
<img class="img-fluid" src="default-album/top-banners/banner_stories.png" alt="banner stories"></div>
<div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
<h1>I won $50K in a lucky draw that I didn't participate</h1>
I received a call from this +966 55 236 9019 with a name ‘Starhub Company’ telling me that I won $50,000 dollars<br>
<br>
<a href="stories-details/Story-04Apr2019140039PM.html">&nbsp;Read More&nbsp;</a></div>
</div>
</div>


</div>
</div>
<div id="main_C003_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">

<script type="text/javascript" src="Mvc/Scripts/Helper.js"></script>

<div class="stories overflow-hide">
    <h1 class="text-center pb-4">Scam Stories</h1>
    <p class="lead text-muted"></p>
    <input type="hidden" value="6d90680a-3a74-427c-804a-82f00c6f1806<br />" style="display:none;" />

    
    <div class="d-none d-sm-block">
        <div class="row pb-4">
            <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing 6 of 5237 Stories</div>
            <div class="col-lg-7 text-muted">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="sort-by">Sort by:</label>
                        <label class="sr-only" for="sort-by">Sort by</label>
                    </div>
                    <div class="col-md-2">
                        <select class="custom-select mb-2" id="ddlSortBy" onchange="ddlSortByOnSelect();">
                                <option value="Latest" >Latest</option>
                                <option value="Oldest" >Oldest</option>
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
        <img src="default-album/evidence/loading.gif" />
    </div>
    <div class="row no-gutters no-gutters-border" id="divStoryList">
    
    <?php
        foreach($storyIds as $id){
            $storyIdsDetails     =   fetchAllStories($conn,$id)
    ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="card-date text-primary"><?php echo explode(" ",$storyIdsDetails['date'])[0]  ?></div>
                        <h4 class="card-title">
                            <a class="text-dark" href="stories/view_story.php?story=<?php echo $storyIdsDetails['storyToken']  ?>"><?php echo $storyIdsDetails['scammer_report']  ?></a>
                        </h4>
                        <p class="card-text"><?php echo substr($storyIdsDetails['scam_exp'],0,400)  ?>&hellip;...</p>
                    </div>
                </div>
            </div>

            <?php
        }
            ?>
    </div>

    
    <div class="row no-gutters no-gutters-border" id="showdivStoryList"></div>


    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pt-5 pb-5" id="ulPaging">

            <li class="page-item">
                <a class="page-link prev" href="javascript:void(0)" aria-label="Previous" onclick="pagingOnClick('1')">
                    <span aria-hidden="true">❮</span>
                    <span class="sr-only">Previous</span>
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
    function ddlSortByOnSelect() {
        FilterAjax("");
    }
    function ddlSortByOnSelect2() {
        FilterAjax("");
    }

    function FilterAjax() {
        // show loading div
        $("#divLoading").show();
        $("#divStoryList").empty();
        
        var sortValue  =  $('#ddlSortBy').val()
        var search     =   "job-scam"
        $.ajax({
            url: "config/actions.php",
            method:"POST",
            data: {
                sort:sortValue,
                key:search
            },
            success: function(data){
                $('#showdivStoryList').html(data)
                $("#divLoading").hide();
            }
        })
        
    }
</script>

</div>
 </main> 
 

 <?php include('footer.php') ?>