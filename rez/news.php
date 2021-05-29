<?php include('headerN-scam.php') ?>






<main role="main"> 
<div id="main_C001_Col00" class="sf_colsIn jumbotron" data-sf-element="Container" data-placeholder-label="Container"><div class='sfContentBlock'><div class="container">
<div class="row">
<div class="col-md-6 text-center order-lg-2">
<img class="img-fluid" src="../default-album/top-banners/banner_news.png" alt="banner_news"></div>
<div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
<h1>Talking Point 2018: Who Is Scamming Me? (Part 2)</h1>
<p>Follow Talking Point as it delves deep into the world of phone scams to uncover a web of criminal syndicates, spanning across Asia.<br>
<br>
<a href="https://www.channelnewsasia.com/news/singapore/more-fall-victim-to-bitcoin-scam-video-11207430"></a><a href="https://video.toggle.sg/en/series/talking-point-2018/ep43/763020" target="_blank" class="btn btn-primary" style="font-size: 24px"><span style="font-size: 16px">Read More</span></a></p>
</div>
</div>
</div>


</div>
</div>


<script type="text/javascript" src="../Mvc/Scripts/Helper.js"></script>

<div class="container text-center mt-4 mb-5">
    <h1>Media News</h1>
    <p class="lead text-muted"></p>
</div>
<div class="stories container mb-5 overflow-hide">

    
    <div class="d-none d-sm-block">
        <div class="row pb-4">
            <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing 30 of 564 News</div>
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
        <img src="../default-album/evidence/loading.gif" />
    </div>
    <div class="row no-gutters no-gutters-border" id="divNewsList">
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">26 May 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="http://zaobao.com.sg/news/singapore/story20210526-1149550" target="_blank">留学生坠假公安骗局 父母遭勒索124万 </a>
                            </h4>
                            <p class="card-text">...</p>
                            <a href="http://zaobao.com.sg/news/singapore/story20210526-1149550" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">26 May 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/courts-crime/student-posed-blindfolded-gagged-in-ruse-for-scam" target="_blank">Foreign student in S'pore posed blindfolded, gagged in ruse for China official scam</a>
                            </h4>
                            <p class="card-text">...</p>
                            <a href="https://www.straitstimes.com/singapore/courts-crime/student-posed-blindfolded-gagged-in-ruse-for-scam" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">26 May 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/loan-scam-police-advisory-government-bank-fake-letters-14887704" target="_blank">Police warn of loan scam involving fake letters or emails from banks and government agencies</a>
                            </h4>
                            <p class="card-text">...</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/loan-scam-police-advisory-government-bank-fake-letters-14887704" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">13 May 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.todayonline.com/singapore/police-warn-new-scam-advertising-fake-jobs-e-commerce-platforms" target="_blank">Police warn of new scam advertising fake jobs for e-commerce platforms </a>
                            </h4>
                            <p class="card-text">...</p>
                            <a href="https://www.todayonline.com/singapore/police-warn-new-scam-advertising-fake-jobs-e-commerce-platforms" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">07 May 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/scam-india-oxygen-concentrator-machines-donation-police-spf-14761424?cid=telegram_cna_social_28112017_cna" target="_blank">Police warn of scam involving oxygen machines donation to India amid COVID-19 crisis</a>
                            </h4>
                            <p class="card-text">...</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/scam-india-oxygen-concentrator-machines-donation-police-spf-14761424?cid=telegram_cna_social_28112017_cna" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">27 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/resurgence-of-scam-targeting-bank-customers-who-are-told-their-accounts-have-been" target="_blank">Resurgence of scam targeting bank customers who are told their accounts have been suspended: Police</a>
                            </h4>
                            <p class="card-text">SINGAPORE - A scam where customers receive an SMS message claiming that their bank accounts have been suspended has resurfaced here, the police said on Monday (April 26)....</p>
                            <a href="https://www.straitstimes.com/singapore/resurgence-of-scam-targeting-bank-customers-who-are-told-their-accounts-have-been" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">21 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/courts-crime/more-than-39-million-lost-to-new-government-officials-impersonation-scam-so" target="_blank">More than $3.9 million lost to scammers posing as S'pore High Court, Interpol officers</a>
                            </h4>
                            <p class="card-text">SINGAPORE - More than $3.9 million was lost between January and April to a new type of scam, where con men pose as Singapore High Court or Interpol officials. Targeting English-speaking individuals, scammers&hellip;...</p>
                            <a href="https://www.straitstimes.com/singapore/courts-crime/more-than-39-million-lost-to-new-government-officials-impersonation-scam-so" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">21 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/31-probed-over-china-officials-impersonation-scams-victims-lost-more-than-69-million" target="_blank">31 probed over China officials impersonation scams, victims in S'pore lost more than $6.9 million</a>
                            </h4>
                            <p class="card-text">SINGAPORE - The police are investigating 31 people involved in China officials impersonation scams that caused victims to lose more than $6.9 million. The police said in a statement on Wednesday (April&hellip;...</p>
                            <a href="https://www.straitstimes.com/singapore/31-probed-over-china-officials-impersonation-scams-victims-lost-more-than-69-million" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">17 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://mothership.sg/2021/04/man-woman-arrested-delivery-scam/" target="_blank">Couple in S'pore arrested for allegedly scamming delivery staff by pretending to be customers</a>
                            </h4>
                            <p class="card-text">A couple in Singapore has been arrested for their suspected involvement in a series of cheating cases....</p>
                            <a href="https://mothership.sg/2021/04/man-woman-arrested-delivery-scam/" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">17 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.asiaone.com/singapore/2-crabs-990-man-loses-over-18000-after-falling-scam" target="_blank">2 crabs for $9.90? Man loses over $18,000 after falling for scam</a>
                            </h4>
                            <p class="card-text">The man came across the deal on Instagram on Wednesday (April 14),  he told Lianhe Wanbao . The ad claimed that for just $9.90, customers would receive two crabs with free express delivery, and tacked&hellip;...</p>
                            <a href="https://www.asiaone.com/singapore/2-crabs-990-man-loses-over-18000-after-falling-scam" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">13 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/courts-crime/new-scam-targets-delivery-personnel-from-parcel-and-food-delivery-companies" target="_blank">New scam targets delivery personnel from parcel and food delivery companies in S'pore</a>
                            </h4>
                            <p class="card-text">SINGAPORE - Police have uncovered a new scam in which delivery personnel from parcel and food delivery companies are the targets. Under this scam variant, the victims would first receive a cash-on-delivery&hellip;...</p>
                            <a href="https://www.straitstimes.com/singapore/courts-crime/new-scam-targets-delivery-personnel-from-parcel-and-food-delivery-companies" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">13 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/new-scam-delivery-personnel-paylah-google-pay-14613252" target="_blank">Police warn of new scam targeting delivery personnel</a>
                            </h4>
                            <p class="card-text">SINGAPORE: The police on Tuesday (Apr 13) warned of a new scam targeting delivery personnel from parcel and food delivery companies. In this new method, the victims would first receive a cash-on-delivery&hellip;...</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/new-scam-delivery-personnel-paylah-google-pay-14613252" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">11 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/police-arrest-329-suspected-scammers-money-mules-operation-14595220" target="_blank">Police arrest 329 suspected scammers, money mules in 2-week operation; scam victims lost $9.3m</a>
                            </h4>
                            <p class="card-text">SINGAPORE: Police arrested a total of 329 suspected scammers and money mules in a two-week operation that ended on Friday (Apr 9)....</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/police-arrest-329-suspected-scammers-money-mules-operation-14595220" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">09 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://cna.asia/39VlfxU" target="_blank">Police warn public against unknowingly becoming money mules through scam job advertisements</a>
                            </h4>
                            <p class="card-text">SINGAPORE: The police on Thursday (Apr 8) warned that people could be unknowingly used as money mules in a new trend of scams advertising jobs with high hourly salaries....</p>
                            <a href="https://cna.asia/39VlfxU" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">03 Apr 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://mothership.sg/2021/04/anti-scam-hotline-officer-recover-money/" target="_blank">NCPC anti-scam hotline officer shares how S$6,000 full sum was successfully recovered after scam was reported</a>
                            </h4>
                            <p class="card-text">An admin staff from a Singaporean IT company transferred S$6,000 to an unknown bank account, under the illusion that he was liaising with the authorised supplier for their company....</p>
                            <a href="https://mothership.sg/2021/04/anti-scam-hotline-officer-recover-money/" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">22 Mar 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/courts-crime/fake-police-report-used-by-scammer-selling-electronic-gadgets-on-carousell?fbclid=IwAR3kZ5omYYM_AtJ23SNXXU3YBWfow499ib0GH1Zf1n7FxCu1SVUE5Utop4U" target="_blank">Fake police report used by scammers selling electronic gadgets on Carousell</a>
                            </h4>
                            <p class="card-text">SINGAPORE - The police on Friday (March 19) warned consumers about e-commerce scams involving the sale of electronic gadgets on Carousell where the scammer allegedly claims to offer retail services verified&hellip;...</p>
                            <a href="https://www.straitstimes.com/singapore/courts-crime/fake-police-report-used-by-scammer-selling-electronic-gadgets-on-carousell?fbclid=IwAR3kZ5omYYM_AtJ23SNXXU3YBWfow499ib0GH1Zf1n7FxCu1SVUE5Utop4U" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">11 Mar 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/woman-misappropriated-money-from-companies-fell-in-love-scammer-14375888" target="_blank">Woman jailed for misappropriating S$1.3 million from companies after 'falling in love' with scammer</a>
                            </h4>
                            <p class="card-text">SINGAPORE: Over three months, an accounts manager with access to the bank accounts of two companies misappropriated S$1.3 million that she transferred to a man known only as "Benjamin", whom she had fallen&hellip;...</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/woman-misappropriated-money-from-companies-fell-in-love-scammer-14375888" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">07 Mar 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://mothership.sg/2021/03/spf-whatsapp-takeover-scam/" target="_blank">SPF warns of scammers who take over your friends' WhatsApp accounts to scam you</a>
                            </h4>
                            <p class="card-text">These scammers have gained access to victims' WhatApp accounts after obtaining the six-digit verification code either from the victims directly or through the victims' voicemail accounts, SPF said....</p>
                            <a href="https://mothership.sg/2021/03/spf-whatsapp-takeover-scam/" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">05 Mar 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://pride.kindness.sg/helpers-safe-love-scams/" target="_blank">How can we keep our helpers safe from love scams?</a>
                            </h4>
                            <p class="card-text">Foreign domestic workers look after our families but we sometimes forget that they need care and companionship too. This makes them vulnerable to love scams that can cause them to make bad, even criminal&hellip;...</p>
                            <a href="https://pride.kindness.sg/helpers-safe-love-scams/" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">25 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/ica-warns-of-fake-website-says-no-data-compromised-14277502" target="_blank">ICA warns of fake website, says no data compromised</a>
                            </h4>
                            <p class="card-text">SINGAPORE: The Immigration and Checkpoints Authority (ICA) warned on Thursday (Feb 25) of a fake website mimicking its own. ICA also said no data had been compromised. The fake website (ica-mom.online) looks&hellip;...</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/ica-warns-of-fake-website-says-no-data-compromised-14277502" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">22 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/mindef-police-report-scam-letter-forged-signature-ng-eng-hen-14236348" target="_blank">Police report filed over fake letters bearing Defence Minister's forged signature: MINDEF</a>
                            </h4>
                            <p class="card-text">SINGAPORE: The Ministry of Defence (MINDEF) said on Friday (Feb 19) that it has filed a police report over fake letters bearing the forged signature of Defence Minister Ng Eng Hen....</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/mindef-police-report-scam-letter-forged-signature-ng-eng-hen-14236348" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">22 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/man-charged-in-court-money-laundering-investment-scam-police-14249076" target="_blank">Man arrested for suspected involvement in investment scam</a>
                            </h4>
                            <p class="card-text">SINGAPORE: A 55-year-old man has been arrested for his suspected involvement in a case of investment scam, the police said on Sunday (Feb 21) in a news release....</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/man-charged-in-court-money-laundering-investment-scam-police-14249076" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">18 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/courts-crime/22-police-reports-lodged-after-62000-is-lost-in-phishing-scam-involving-fake" target="_blank">$62,000 lost in fake Singtel e-mail phishing scams, 22 police reports lodged</a>
                            </h4>
                            <p class="card-text">SINGAPORE - Scammers using fake e-mails purportedly from Singtel netted at least $62,000 earlier this week....</p>
                            <a href="https://www.straitstimes.com/singapore/courts-crime/22-police-reports-lodged-after-62000-is-lost-in-phishing-scam-involving-fake" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">18 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.todayonline.com/singapore/nearly-six-fold-rise-unauthorised-online-bank-transactions-2020-phishing-scams-rise-ong-ye" target="_blank">SINGAPORE — The number of unauthorised online bank and card transactions rose almost six times last year from a year ago, reflecting a growing trend in phishing scams. </a>
                            </h4>
                            <p class="card-text">SINGAPORE — The number of unauthorised online bank and card transactions rose almost six times last year from a year ago, reflecting a growing trend in phishing scams....</p>
                            <a href="https://www.todayonline.com/singapore/nearly-six-fold-rise-unauthorised-online-bank-transactions-2020-phishing-scams-rise-ong-ye" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">16 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/scam-victims-can-easily-become-prey-again-poll" target="_blank">Scam victims can easily become prey again: Poll</a>
                            </h4>
                            <p class="card-text">45% of them were repeat victims over 1-year period; many have poor cyber hygiene practices...</p>
                            <a href="https://www.straitstimes.com/singapore/scam-victims-can-easily-become-prey-again-poll" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">09 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/courts-crime/record-number-of-scams-in-2020-pushed-overall-crime-rate-in-spore-to-highest" target="_blank">Record number of scams in 2020 pushed overall crime rate in S'pore to highest in more than 10 years</a>
                            </h4>
                            <p class="card-text">SINGAPORE - The number of scams reported last year hit a record high, climbing 65.1 per cent from 2019, as scammers took more than $201 million from their victims....</p>
                            <a href="https://www.straitstimes.com/singapore/courts-crime/record-number-of-scams-in-2020-pushed-overall-crime-rate-in-spore-to-highest" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">09 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/courts-crime/couple-lost-277k-in-staycation-scam-on-carousell-65-spike-in-scams-in-2020" target="_blank">Couple lost $277k in staycation scam on Carousell; 65% spike in scams in 2020</a>
                            </h4>
                            <p class="card-text">SINGAPORE -The Carousell seller would call the couple at all hours of the day, claiming that he would return their money soon....</p>
                            <a href="https://www.straitstimes.com/singapore/courts-crime/couple-lost-277k-in-staycation-scam-on-carousell-65-spike-in-scams-in-2020" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">08 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.straitstimes.com/singapore/beware-of-bak-kwa-online-scams-ahead-of-cny-police" target="_blank">Beware of bak kwa online scams ahead of CNY: Police</a>
                            </h4>
                            <p class="card-text">Buying sweet-and-salty dried meats has turned into a sour experience for some consumers here, after their online orders failed to materialise. The police have warned the public about online scams involving&hellip;...</p>
                            <a href="https://www.straitstimes.com/singapore/beware-of-bak-kwa-online-scams-ahead-of-cny-police" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">04 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.todayonline.com/singapore/police-urge-public-be-vigilant-against-covid-19-vaccination-scams" target="_blank">Police urge public to be vigilant against Covid-19 vaccination scams </a>
                            </h4>
                            <p class="card-text">SINGAPORE — As more people are scheduled for vaccination against Covid-19, the police are cautioning members of the public to be vigilant when they receive messages on the vaccination exercise to avoid&hellip;...</p>
                            <a href="https://www.todayonline.com/singapore/police-urge-public-be-vigilant-against-covid-19-vaccination-scams" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="card-date text-primary">01 Feb 2021</div>
                            <h4 class="card-title">
                                <a class="text-dark" href="https://www.channelnewsasia.com/news/singapore/woman-jailed-unlicensed-payment-service-bitcoin-14071666?cid=FBcna" target="_blank">Woman jailed for providing unlicensed payment service using Bitcoin</a>
                            </h4>
                            <p class="card-text">SINGAPORE: A woman has been jailed for providing payment services without a licence - the first person to be convicted for such an offence....</p>
                            <a href="https://www.channelnewsasia.com/news/singapore/woman-jailed-unlicensed-payment-service-bitcoin-14071666?cid=FBcna" target="_blank" class="btn btn-primary">Read More</a>
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
            url: "/resources/news/GetNewsListAjax/",
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


                // generate news list
                $("#divNewsList").empty();
                //var listItemTemplate = '<div class="col-md-6"><div class="card"><div class="card-body p-5"><div class="card-date text-primary">#Date#</div><h4 class="card-title"><a class="text-dark" href="#Url#">#Title#</a></h4><p class="card-text">#Description#</p></div></div></div>';
                var listItemTemplate = '<div class="col-md-4"><div class="card p-4"><div class="card-body"><div class="card-date text-primary">#Date#</div><h4 class="card-title"><a class="text-dark" href="#Url#" target="_blank">#Title#</a></h4><p class="card-text">#Description#</p><a href="#Url#" target="_blank" class="btn btn-primary">Read More</a></div></div></div>';
                var newsList = result.NewsList;
                for (var i = 0; i < newsList.length; i++)
                {
                    var sDate = newsList[i].Date;
                    var sTitle = newsList[i].Title;
                    var sDescription = newsList[i].Description;
                    var sUrl = newsList[i].Url;

                    var newItem = $(listItemTemplate.replace("#Date#", sDate).replace("#Url#", sUrl).replace("#Title#", sTitle).replace("#Description#", sDescription).replace("#Url#", sUrl));
                    $("#divNewsList").append(newItem);
                }
                if (newsList.length == 0)
                {
                    $("#divNewsList").append($(`<div class="col-md-12"><div style="padding-left: 15px;"><h2>There are currently no news records.</h2></div></div>`));
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

                var prePagingTemplate = '<li class="page-item"><a class="page-link prev" href="javascript:void(0)" aria-label="Previous" onclick="pagingOnClick(\'#Paging#\')"><span aria-hidden="true">❮</span><span class="sr-only">Previous</span></a></li>';
                var nextPagingTemplate = '<li class="page-item"><a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick(\'#Paging#\')"><span aria-hidden="true">❯</span><span class="sr-only">Next</span></a></li>';
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
</script> </main> 





<?php include('footerN-scam.php') ?>