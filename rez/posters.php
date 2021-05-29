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
    <li class="nav-item text-uppercase active show">
    <a class="nav-link" href="posters.html#listing">Posters</a>
    </li>
    <li class="nav-item text-uppercase">
    <a class="nav-link" href="videos.html#listing">Videos</a>
    </li>
</ul>
<div class="tab-content">
<div class="tab-pane lead active">
<p>Be aware. Stay vigilant. Check out the various scams we’ve targeted with our ad campaigns.</p>
</div>
</div>
</div>


</div>


<script type="text/javascript" src="../Mvc/Scripts/Helper.js"></script>

<style>
.button.download {
    top: 41%;
}

.button.download a {
    width: 100%;
    z-index: 1;
    text-align: center;
    text-decoration: underline;
}

.overlay.download {
    position: absolute;
    top: 0;
    left: 15px;
    width: auto;
    height: auto;
    right: 15px;
    bottom: 89px;
    background: rgba(0, 0, 0, 0);
    transition: background 0.5s ease;
}
</style>
<div class="resources-listing container mb-5">

    <div class="d-none d-sm-block">
        <div class="row pb-4">
            <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing 12 of 42 Posters</div>
            <div class="col-lg-7 text-muted">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="filter-year">Filter by:</label>
                        <label class="sr-only">Filter by</label>
                    </div>
                    <div class="col-xs-auto col-md-3">
                        <select class="custom-select mb-2" id="ddlScamType" onchange="ddlPosterOnSelect();">
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
                            <select class="selectpicker custom-select" id="ddlScamType2" onchange="ddlPosterOnSelect2();">
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
    <div class="row text-center" id="divPosterList">
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/beware-of-online-temptations-thumb3547.jpg?Status=Master&amp;sfvrsn=7c13d631_4" alt="Credit For Sex Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/beware-of-online-temptations6420.jpg?Status=Master&amp;sfvrsn=8a231f3_6" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Credit For Sex Scam', '../default-album/posters/beware-of-online-temptations-thumb3547.jpg?Status=Master&amp;sfvrsn=7c13d631_4', '../docs/default-source/default-document-library/posters/beware-of-online-temptations6420.jpg?Status=Master&amp;sfvrsn=8a231f3_6');" href="#">Credit For Sex Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/beware-of-online-charmers-thumbafb6.jpg?Status=Master&amp;sfvrsn=7d053809_4" alt="Internet Love Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/beware-of-online-charmersea41.jpg?Status=Master&amp;sfvrsn=acfd01d9_6" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Internet Love Scam', '../default-album/posters/beware-of-online-charmers-thumbafb6.jpg?Status=Master&amp;sfvrsn=7d053809_4', '../docs/default-source/default-document-library/posters/beware-of-online-charmersea41.jpg?Status=Master&amp;sfvrsn=acfd01d9_6');" href="#">Internet Love Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/beware-of-fake-calls-thumba7e0.jpg?Status=Master&amp;sfvrsn=f5fc2f2f_4" alt="Impersonation Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/beware-of-fake-calls2d65.jpg?Status=Master&amp;sfvrsn=ea58e33a_6" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Impersonation Scam', '../default-album/posters/beware-of-fake-calls-thumba7e0.jpg?Status=Master&amp;sfvrsn=f5fc2f2f_4', '../docs/default-source/default-document-library/posters/beware-of-fake-calls2d65.jpg?Status=Master&amp;sfvrsn=ea58e33a_6');" href="#">Impersonation Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/beware-of-hot-deals-thumb81b3.jpg?Status=Master&amp;sfvrsn=f5400663_4" alt="Online Purchase Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/beware-of-hot-deals92f3.jpg?Status=Master&amp;sfvrsn=b75b6498_6" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Online Purchase Scam', '../default-album/posters/beware-of-hot-deals-thumb81b3.jpg?Status=Master&amp;sfvrsn=f5400663_4', '../docs/default-source/default-document-library/posters/beware-of-hot-deals92f3.jpg?Status=Master&amp;sfvrsn=b75b6498_6');" href="#">Online Purchase Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/beware-of-moneylenders-online-thumb5aee.jpg?Status=Master&amp;sfvrsn=59eb7d59_4" alt="Loan Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/beware-of-moneylenders-onlined05e.jpg?Status=Master&amp;sfvrsn=b875392b_6" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Loan Scam', '../default-album/posters/beware-of-moneylenders-online-thumb5aee.jpg?Status=Master&amp;sfvrsn=59eb7d59_4', '../docs/default-source/default-document-library/posters/beware-of-moneylenders-onlined05e.jpg?Status=Master&amp;sfvrsn=b875392b_6');" href="#">Loan Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/online-purchase-thumb42e5.jpg?Status=Master&amp;sfvrsn=b1e06ce3_0" alt="Online Purchase Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/online-purchaseb774.jpg?Status=Master&amp;sfvrsn=5ba49c64_0" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Online Purchase Scam', '../default-album/posters/online-purchase-thumb42e5.jpg?Status=Master&amp;sfvrsn=b1e06ce3_0', '../docs/default-source/default-document-library/posters/online-purchaseb774.jpg?Status=Master&amp;sfvrsn=5ba49c64_0');" href="#">Online Purchase Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/loan-scam-thumb247d.jpg?Status=Master&amp;sfvrsn=3a89e330_0" alt="Loan Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/loan-scamde55.jpg?Status=Master&amp;sfvrsn=815426a7_0" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Loan Scam', '../default-album/posters/loan-scam-thumb247d.jpg?Status=Master&amp;sfvrsn=3a89e330_0', '../docs/default-source/default-document-library/posters/loan-scamde55.jpg?Status=Master&amp;sfvrsn=815426a7_0');" href="#">Loan Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/impersonation-scam-thumba820.jpg?Status=Master&amp;sfvrsn=401a4aa2_0" alt="Impersonation Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/impersonation-scam15f1.jpg?Status=Master&amp;sfvrsn=13fff1ca_0" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Impersonation Scam', '../default-album/posters/impersonation-scam-thumba820.jpg?Status=Master&amp;sfvrsn=401a4aa2_0', '../docs/default-source/default-document-library/posters/impersonation-scam15f1.jpg?Status=Master&amp;sfvrsn=13fff1ca_0');" href="#">Impersonation Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/credit-4-sex-scam-thumbcbda.jpg?Status=Master&amp;sfvrsn=ad619dab_0" alt="Credit For Sex Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/credit-4-sex-scam5d9e.jpg?Status=Master&amp;sfvrsn=ae017a89_0" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Credit For Sex Scam', '../default-album/posters/credit-4-sex-scam-thumbcbda.jpg?Status=Master&amp;sfvrsn=ad619dab_0', '../docs/default-source/default-document-library/posters/credit-4-sex-scam5d9e.jpg?Status=Master&amp;sfvrsn=ae017a89_0');" href="#">Credit For Sex Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/love-scam-thumb4091.jpg?Status=Master&amp;sfvrsn=cf495369_0" alt="Internet Love Scam">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/18025-ncpc2019-a3-poster_internet-love-scamaed7.pdf?Status=Master&amp;sfvrsn=cebc180b_0" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('Internet Love Scam', '../default-album/posters/love-scam-thumb4091.jpg?Status=Master&amp;sfvrsn=cf495369_0', '../docs/default-source/default-document-library/18025-ncpc2019-a3-poster_internet-love-scamaed7.pdf?Status=Master&amp;sfvrsn=cebc180b_0');" href="#">Internet Love Scam</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/onlinepurchase_20181d0c69383bfd4d1698150c8f9634fad62d8d.jpg?Status=Master&amp;sfvrsn=cd0e96d8_2" alt="All I sell to you are lies">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/onlinepurchase_20184c15.jpg?Status=Master&amp;sfvrsn=92df9b53_2" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('All I sell to you are lies', '../default-album/posters/onlinepurchase_20181d0c69383bfd4d1698150c8f9634fad62d8d.jpg?Status=Master&amp;sfvrsn=cd0e96d8_2', '../docs/default-source/default-document-library/posters/onlinepurchase_20184c15.jpg?Status=Master&amp;sfvrsn=92df9b53_2');" href="#">All I sell to you are lies</a>
                </h5>
            </div>
            <div class="col-sm-3 col-6">
                <div class="img mb-3">
                    <img class="w-100" src="../default-album/posters/internetlovescam_williamposterb669.jpg?Status=Master&amp;sfvrsn=7764cf93_2" alt="I steal your heart, I steal your money">
                    <div class="overlay download"></div>
                    <div class="button download">
                        <a href="../docs/default-source/default-document-library/posters/internetlovescam_williamposter32cd.jpg?Status=Master&amp;sfvrsn=ebccd645_2" role="button" class="close fa-fw select-all fas text-white float-center" download>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <h5>
                    <a class="text-dark" data-toggle="modal" onclick="return showModal('I steal your heart, I steal your money', '../default-album/posters/internetlovescam_williamposterb669.jpg?Status=Master&amp;sfvrsn=7764cf93_2', '../docs/default-source/default-document-library/posters/internetlovescam_williamposter32cd.jpg?Status=Master&amp;sfvrsn=ebccd645_2');" href="#">I steal your heart, I steal your money</a>
                </h5>
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
                    <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('4')">
                        <span aria-hidden="true">❯</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>

        </ul>
    </nav>

</div>



<div class="modal fade" id="PosterModal" tabindex="-1" role="dialog" aria-labelledby="posterLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span class="help-block" id="downloadPDF"></span>
                <h5 class="modal-title" id="posterLongTitle"></h5>
            </div>
            <div class="modal-body text-center" id="posterImage">

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function ddlPosterOnSelect() {
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

    function ddlPosterOnSelect2() {
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


    function showModal(title, image, pdf) {
        title = title.replace("ﮯ", "'");
        $('#posterImage').html('<img class="w-100" src=" ' + image + '" alt=" ' + title + ' " />');
        $('#downloadPDF').html('<a href="' + pdf + '" role="button" class="close fa-fw select-all fas text-primary" download><span aria-hidden="true"></span></a>');
        $("#posterLongTitle").text(title);
        $("#PosterModal").modal("show")

    }


    function FilterAjax(page) {
        // show loading div
        $("#divLoading").show();
        $("#divPosterList").empty();

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
            url: "/resources/posters/GetPosterListAjax/",
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
                $("#divPagingInfo").text("Showing " + currentPageItemsCount + " of " + totalItemsCount + " Posters")


                // generate poster list
                
                var listItemTemplate = '<div class="col-sm-3 col-6">' +
                                            '<div class="img mb-3">' +
                                                '<img class="w-100" src="#image1#" alt="#title1#">' +
                                                    '<div class="overlay download"></div>' +
                                                    '<div class="button download">' +
                                                    '<a href="#pdf1#" role="button" class="close fa-fw select-all fas text-white float-center" download>' +
                                                            '<span aria-hidden="true"></span>' +
                                                    '</a>' +
                                                '</div>' +
                                            '<h5><a class="text-dark" data-toggle="modal" onclick="return showModal(\'#title2#\', \'#image2#\', \'#pdf2#\');" href="#">#title3#</a></h5>' +
                                        '</div></div>';
                var posterList = result.PosterList;
                for (var i = 0; i < posterList.length; i++) {
                    var sPdf = posterList[i].PDF;
                    var sTitle = posterList[i].Title;
                    var sImage = posterList[i].Image;
                    var newItem = $(listItemTemplate.replace("#image1#", sImage).replace("#image2#", sImage).replace("#title1#", sTitle).replace("#title2#", sTitle.replace("ﮯ", "'")).replace("#title3#", sTitle).replace("#pdf1#", sPdf).replace("#pdf2#", sPdf));
                    $("#divPosterList").append(newItem);
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