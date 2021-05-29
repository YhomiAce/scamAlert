<?php include('header.php') ?>









 
 
<main role="main"> 

<div id="mainCarousel" data-ride="carousel" class="carousel slide">
	<div>
		<div class="carousel-inner">
			<div class="carousel-item active d-none d-sm-block" style="background-image:url(default-album/homepage-banners/home-banner_r3.jpg)">
				<div class="carousel-caption text-left">
					<h1>Spot the signs.<br />Stop the crimes.</h1>
					<p>Scammers prey on our lack of vigilance and judgement to get us to part with our hard-earned money. When you know how to spot scams, you know how to protect yourself. Here, you'll learn about the different types of scams, the tactics used, and what you should do when you have been targeted. </p>
					<p><a href="https://scamalert.sg/spotthesigns" class="btn btn-primary mr-3 mb-2">Let's get started</a></p>
				</div>
			</div>
			<div class="carousel-item active d-block d-sm-none" style="background-image:url(default-album/homepage-banners/banner-fight-scam-mobile-2020.jpg)">
				<div class="carousel-caption text-center">
					<h1>Spot the signs.<br />Stop the crimes.</h1>
					<p>Scammers prey on our lack of vigilance and judgement to get us to part with our hard-earned money. When you know how to spot scams, you know how to protect yourself. Here, you'll learn about the different types of scams, the tactics used, and what you should do when you have been targeted. </p>
					<p><a href="https://scamalert.sg/spotthesigns" class="btn btn-primary mr-3 mb-2">Let's get started</a></p>
				</div>
			</div>
		</div>
		<!--
		<div class="carousel-pagination">
		<a class="" href="#mainCarousel" role="button" data-slide="prev">
			<em class="chevron left" aria-hidden="true"></em>
			<span class="sr-only">Previous</span>
		</a>
		1 / 3
		<a class="" href="#mainCarousel" role="button" data-slide="next">
			<em class="chevron right" aria-hidden="true"></em>
			<span class="sr-only">Next</span>
		</a>
		</div>
		-->
	</div>
</div><div id="main_C002_Col00" class="sf_colsIn container-fluid quick-search-container" data-sf-element="Container" data-placeholder-label="Container"><div id="main_C005_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container"><div class='sfContentBlock'><h1>Could this be a scam?</h1>
<p>Do you suspect that you are involved in a scam? Search our site to see if there are similar stories that match your circumstances. Search with key words such as ‘online love’, ‘transfer money’ or email addresses, phone numbers, bank account numbers, etc.</p>


</div>


    <script type="text/javascript" src="Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="Mvc/Scripts/Helper.js"></script>

<style>
    #ulPreloadKeyword li {
        cursor: pointer;
    }
</style>

<div class="sfContentBlock">
    <div class="d-none d-sm-block">
        <div class="input-group">
            <input type="text" id="txtQueryString" class="form-control" aria-label="search for scam" placeholder="search for scam" maxlength="100" />
            <div class="input-group-append">
                <select class="btn btn-search" id="ddlQueryType">
                    <option value="All" selected>Search by Type</option>
                        <option value="BankAccount">Bank Account</option>
                        <option value="Telephone">Contact No.</option>
                        <option value="Email">Email</option>
                        <option value="UserName">ID/Username</option>
                        <option value="keywords">Keywords</option>
                </select>
                <button type="button" class="btn btn-primary" onclick="Search()">Search</button>
            </div>
            <div id="divError" class="alert alert-danger" role="alert" style="width: 62%;margin-top:20px;margin-left: auto;margin-right: auto;display:none;">
                Searching keyword is required.
            </div>
        </div>
        <div id="divPreloadKeyword" style="padding-top:1px;display:none;">
            <ul id="ulPreloadKeyword" class="form-control" style="list-style-type: none;text-align: left;width:85%;border-radius:1rem;"></ul>
        </div>
    </div>
    <div class="d-block d-sm-none">
        <div class="input-group">
            <input type="text" id="txtQueryString2" class="form-control" aria-label="search for scam" placeholder="search for scam" maxlength="100" />
            <div class="input-group-append">
                <button type="button" class="btn btn-white"><em class="fas fa-search"></em></button>
            </div>
            <select class="btn btn-search" id="ddlQueryType2" style="margin-top:20px;">
                <option value="All" selected>Search by Type</option>
                    <option value="BankAccount">Bank Account</option>
                    <option value="Telephone">Contact No.</option>
                    <option value="Email">Email</option>
                    <option value="UserName">ID/Username</option>
                    <option value="keywords">Keywords</option>
            </select>
            <div id="divError2" class="alert alert-danger" role="alert" style="width: 62%;margin-top:20px;margin-left: auto;margin-right: auto;display:none;">
                Searching keyword is required.
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function Search() {
        var queryString = $("#txtQueryString").val();
        var queryScam = "All";
        var queryType = $("#ddlQueryType").val();
        if (IsMobileModel()) {
            queryString = $("#txtQueryString2").val();
            queryScam = "All";
            queryType = $("#ddlQueryType2").val();
        }

        if (queryString != "") {
            $("#divError").hide();
            $("#divError2").hide();
            window.location = "/search/" + btoa(queryString) + "/" + queryScam + "/" + queryType;
        }
        else {
            if (!IsMobileModel()) $("#divError").show();
            else $("#divError2").show();
            return false;
        }
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
</div>

</div>
<div id="main_C011_Col00" class="sf_colsIn container top-5-container d-none" data-sf-element="Container" data-placeholder-label="Container"><div class="row" data-sf-element="Row">
    <div id="main_C012_Col00" class="sf_colsIn col-lg-6" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class="row" data-sf-element="Row">
    <div id="main_C056_Col00" class="sf_colsIn col-sm-6 mb-5" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class='sfContentBlock'><h2 class="text-capitalize mb-0">Top 5 Scams Types <br>
(Jan-May 2020)</h2>


</div>
    </div>
    <div id="main_C056_Col01" class="sf_colsIn col-sm-6 mb-5" data-sf-element="Column 2" data-placeholder-label="Column 2"><div class='sfContentBlock'><a href="scam-details/online-purchase-scam.html" class="d-block" target="_blank"><img src="default-album/top-5/jan-may-2020/icn-scam-001196b.png?sfvrsn=538f7a79_4" alt="icn-scam-001" class="img-fluid" data-displaymode="Original" title="icn-scam-001"></a>


</div>
    </div>
</div>
<div class="row" data-sf-element="Row">
    <div id="main_C059_Col00" class="sf_colsIn col-sm-6 mb-5" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class='sfContentBlock'><a href="scam-details/loan-scam.html" class="d-block" target="_blank"><img src="default-album/top-5/jan-may-2020/icn-scam-002c2d0.png?sfvrsn=fa7da271_4" alt="icn-scam-002" class="img-fluid" data-displaymode="Original" title="icn-scam-002"></a>


</div>
    </div>
    <div id="main_C059_Col01" class="sf_colsIn col-sm-6 mb-5" data-sf-element="Column 2" data-placeholder-label="Column 2"><div class='sfContentBlock'><a href="scam-details/internet-love-scam.html" class="d-block" target="_blank"><img src="default-album/top-5/jan-may-2020/icn-scam-003eb21.png?sfvrsn=b40f261d_4" alt="icn-scam-003" class="img-fluid" data-displaymode="Original" title="icn-scam-003"></a>


</div>
    </div>
</div>
<div class="row" data-sf-element="Row">
    <div id="main_C062_Col00" class="sf_colsIn col-sm-6 mb-5" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class='sfContentBlock'><a href="scam-details/credit-for-sex-scam.html" class="d-block" target="_blank"><img src="default-album/top-5/jan-may-2020/icn-scam-004b24b.png?sfvrsn=d1516ee3_4" alt="icn-scam-004" class="img-fluid" data-displaymode="Original" title="icn-scam-004"></a>


</div>
    </div>
    <div id="main_C062_Col01" class="sf_colsIn col-sm-6 mb-5" data-sf-element="Column 2" data-placeholder-label="Column 2"><div class='sfContentBlock'><a href="scam-details/impersonation-scam.html" class="d-block" target="_blank"><img src="default-album/top-5/jan-may-2020/icn-scam-0051901.png?sfvrsn=1208b785_4" alt="icn-scam-005" class="img-fluid" data-displaymode="Original" title="icn-scam-005"></a>


</div>
    </div>
</div>
<div class='btn-learn-more'><a href="types-of-scams.html" title="Click to go to the Type of Scams page" class="btn btn-primary text-white">Learn More</a>


</div>
    </div>
    <div id="main_C012_Col01" class="sf_colsIn col-lg-6" data-sf-element="Column 2" data-placeholder-label="Column 2">
<h1 class="heading">Did you know?</h1>
<div id="didYouKnow" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	  <img class="img-fluid" src="default-album/did-you-know-carousel/jan-may-2020/scam-002.jpg" alt="China Officials Impersonation Scam (2020)"/>
    </div>
    <div class="carousel-item">
	  <img class="img-fluid" src="default-album/did-you-know-carousel/jan-may-2020/scam-003.jpg" alt="Credit-for-Sex Scam (2020)"/>
    </div>
    <div class="carousel-item">
	  <img class="img-fluid" src="default-album/did-you-know-carousel/jan-may-2020/scam-004.jpg" alt="E-commerce Scam (2020)"/>
    </div>
    <div class="carousel-item">
	  <img class="img-fluid" src="default-album/did-you-know-carousel/jan-may-2020/scam-005.jpg" alt="Top Types Scammed"/>
    </div>
    <div class="carousel-item">
	  <img class="img-fluid" src="default-album/did-you-know-carousel/jan-may-2020/scam-006.jpg" alt="Internet Love Scam (2020)"/>
    </div>
  </div>
  <a class="carousel-control-prev" href="#didYouKnow" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#didYouKnow" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
</div>

</div>
<div id="main_C008_Col00" class="sf_colsIn container-fluid latest-highlights-container" data-sf-element="Container" data-placeholder-label="Container"><div id="main_C015_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container"><div class='sfContentBlock'><h2>Latest Highlights</h2>


</div><div class="row" data-sf-element="Row">
    <div id="main_C031_Col00" class="sf_colsIn col-md-4" data-sf-element="Column 1" data-placeholder-label="Column 1">

<div class="latest-highlights-content">
    <h4>Scam Stories</h4>
    <ul class="list-group">

            <li class="list-group-item">
                <div class="small text-primary">Phishing Scam, Impersonation Scam</div>
                <h6><a href="stories-details/Story-26May2021161220PM.html">Scammer used quarantine to threaten me</a></h6>
            </li>
            <li class="list-group-item">
                <div class="small text-primary">Phishing Scam, Impersonation Scam</div>
                <h6><a href="stories-details/Story-26May2021132323PM.html">Call from "DBS" turned out to be a fake</a></h6>
            </li>
            <li class="list-group-item">
                <div class="small text-primary">Phishing Scam, Impersonation Scam</div>
                <h6><a href="stories-details/Story-24May2021164644PM.html">Look out for the + prefix. If it's there, it's most likely a scam</a></h6>
            </li>

    </ul>
    <a href="stories.html">See All Stories</a>
</div>

    </div>
    <div id="main_C031_Col01" class="sf_colsIn col-md-4" data-sf-element="Column 2" data-placeholder-label="Column 2">

<div class="latest-highlights-content">
    <h4>What’s in the news</h4>
    <ul class="list-group">

            <li class="list-group-item">
                <div class="small text-primary">26 May 2021</div>
                <h6><a href="http://zaobao.com.sg/news/singapore/story20210526-1149550">留学生坠假公安骗局 父母遭勒索124万 </a></h6>
            </li>
            <li class="list-group-item">
                <div class="small text-primary">26 May 2021</div>
                <h6><a href="https://www.straitstimes.com/singapore/courts-crime/student-posed-blindfolded-gagged-in-ruse-for-scam">Foreign student in S'pore posed blindfolded, gagged in ruse for China official scam</a></h6>
            </li>
            <li class="list-group-item">
                <div class="small text-primary">26 May 2021</div>
                <h6><a href="https://www.channelnewsasia.com/news/singapore/loan-scam-police-advisory-government-bank-fake-letters-14887704">Police warn of loan scam involving fake letters or emails from banks and government agencies</a></h6>
            </li>

    </ul>
    <a href="resources/news.html">See All News</a>
</div>
    </div>
    <div id="main_C031_Col02" class="sf_colsIn col-md-4" data-sf-element="Column 3" data-placeholder-label="Column 3">
    </div>
</div>

</div>

</div>
<div id="main_C048_Col00" class="sf_colsIn container-fluid" data-sf-element="Container" data-placeholder-label="Container"><div id="main_C051_Col00" class="sf_colsIn container facebook-container" data-sf-element="Container" data-placeholder-label="Container"><div class="row" data-sf-element="Row">
    <div id="main_C068_Col00" class="sf_colsIn col-md-6" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class='sfContentBlock'><h2>ScamShield – The Scam Messages and Calls Filtering App</h2>
<p>Scammers often initiate contact with potential scam victims through Short Message Services (SMSes) or phone calls. Fight scam messages and calls by getting ScamShield.</p>
<p>ScamShield actively works in the background to filter scam messages and calls from numbers used in illegal activities. Find out more about the app at <a href="https://www.scamshield.org.sg/"></a><a href="https://www.scamshield.sg/" target="_blank">www.scamshield.org.sg</a>.</p>
<p>Download ScamShield app now.</p>


</div><div class="row" data-sf-element="Row">
    <div id="main_C071_Col00" class="sf_colsIn col-md-3" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class='icon-scamshield'>


</div>
    </div>
    <div id="main_C071_Col01" class="sf_colsIn col-md-9" data-sf-element="Column 2" data-placeholder-label="Column 2"><div class='pt-3'><h4>Scamshield</h4>
<p>Available on IOS now.</p>


</div>
    </div>
</div>
<div class='mt-5'><a class="img-fluid" href="https://apps.apple.com/sg/app/scamshield/id1497144087" target="_blank"><img src="default-album/scamshield-downloade9d6.png?sfvrsn=cfd77a36_2" data-displaymode="Original" alt="scamshield-download" title="scamshield-download"></a>


</div>
    </div>
    <div id="main_C068_Col01" class="sf_colsIn col-md-6" data-sf-element="Column 2" data-placeholder-label="Column 2"><div class="row" data-sf-element="Row">
    <div id="main_C069_Col00" class="sf_colsIn col-md-8" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class='pb-2'><h2>#Letsfightscams</h2>
Facebook Feed


</div>
    </div>
    <div id="main_C069_Col01" class="sf_colsIn col-md-4" data-sf-element="Column 2" data-placeholder-label="Column 2"><div class='text-right mb-5'><a href="https://www.facebook.com/ncpc.sg" target="_blank" class="btn btn-outline-primary">See More</a>


</div>
    </div>
</div>

<!DOCTYPE html>
<html>
<head>
<style>
.center {
  margin: auto;
  text-align: center;
  padding: 10px;
}
</style>
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=660573773973802&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
<div class="center"><div class="fb-page" data-href="https://www.facebook.com/ncpc.sg" data-tabs="timeline" data-width="750" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/ncpc.sg" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ncpc.sg">National Crime Prevention Council (Singapore)</a></blockquote></div>

    </div>
</div>

</div>

</div>
<div id="main_C075_Col00" class="sf_colsIn container-fluid our-resources-container" data-sf-element="Container" data-placeholder-label="Container"><div id="main_C017_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container"><div class='text-center pb-5'><h2>Our Resources</h2>
<span class="lead">
Improve your awareness of the many types of scams and learn how you can prevent getting caught in one<br>
The full list of SPF Police news releases, including scams, can be found at <a href="https://www.police.gov.sg/Media-Room/News"></a><a href="https://www.police.gov.sg/Media-Room/News">here</a>.<br>
</span>


</div>
<div class="container resources-listing">
<div class="row py-3">
<div class="col-md-4 mb-5">
<div class="card">
<img alt="" class="card-img-top" src="default-album/blogs/thumbnails/credit-card72c2.png?Status=Temp&amp;sfvrsn=90835eb0_2"href="#"></a>
<div class="card-body">
<h4 class="card-title">
  <a class="text-dark" href="resources/blog-details/unauthorised-transactions-using-stolen-credit-debit-cards-and-credit-debit-card-information.html">Unauthorised Transactions</a>
</h4>
<div class="small text-muted">
<a class="text-primary" href="resources/blog.html">Blog</a> | 06 Apr 2020</div>
</div>
</div>
</div>
<div class="col-md-4 mb-5">
<div class="card">
<img alt="" class="card-img-top" src="default-album/home-page_video-resource/how-do-you-meet-the-right-onec182.png?Status=Temp&amp;sfvrsn=3fd668cf_2" />
<div class="card-body">
<h4 class="card-title"><a class="text-dark" data-toggle="modal" data-target="#video-VztwMVHUSaE" href="https://youtu.be/yWAL2o3Ypss">NCPC Anti-Scam Commercial 2020 - Is This True Love?</a>
</h4>
<div class="small text-muted"><a class="text-primary" href="resources/videos.html">Videos</a> | 20 Nov 2020</div>
</div>
</div>
</div>
<div class="col-md-4 mb-5">
<div class="card">
<img alt="" class="card-img-top" src="default-album/home-posters.jpg" />
<div class="card-body">
<h4 class="card-title">
<a class="text-dark" data-toggle="modal" data-target="#poster-2" href="#">Your shopping playground. Their perfect prey ground</a>
</h4>
<div class="small text-muted"><a class="text-primary" href="resources/posters.html">Posters</a>&nbsp;| 24 Dec 2018</div>
</div>
</div>
</div>
</div>
<div class="modal fade bd-example-modal-lg" id="video-VztwMVHUSaE" tabindex="-1" role="dialog" aria-labelledby="videoLongTitle" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h5 class="modal-title" id="videoLongTitle">Is this true love?</h5>
</div>
<div class="modal-body">
<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yWAL2o3Ypss?rel=0" allow="encrypted-media"></iframe>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="poster-2" tabindex="-1" role="dialog" aria-labelledby="posterLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<a href="docs/default-source/default-document-library/posters/online-purchase.jpg" role="button" class="close fa-fw select-all fas text-primary" download>
<span aria-hidden="true"></span>
</a>
<h5 class="modal-title" id="posterLongTitle">Your shopping playground. Their perfect prey ground</h5>
</div>
<div class="modal-body text-center">
<img class="w-100" src="docs/default-source/default-document-library/posters/online-purchase.jpg" alt="image desc" />
</div>
</div>
</div>
</div>
<div class="text-center mt-3">
<a href="resources/blog/index.html" title="Click to view more Resources" class="btn btn-primary" sfref="[f669d9a7-009d-4d83-ddaa-000000000002]9b83f1aa-9297-4642-b298-943d0f043e8a">View More</a></div></div>
</div>

</div>
<div id="main_C028_Col00" class="sf_colsIn container-fluid bg-dark scam-encounter py-5" data-sf-element="Container" data-placeholder-label="Container"><div class='container text-center text-light py-5'><h1>Have you encountered a scam?</h1>
<span class="lead">Share your stories. Help create awareness.</span><br>
<a href="share-a-story.html" class="btn btn-primary mt-4">Share Your Story</a>


</div>
</div>
<div id="main_C034_Col00" class="sf_colsIn container-fluid bg-light" data-sf-element="Container" data-placeholder-label="Container"><div class="row" data-sf-element="Row">
    <div id="main_C035_Col00" class="sf_colsIn col-md-6 pr-0 py-5 border-right border-white" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class='container text-center py-5'><h1>Think you stand a chance<br>
against scammers?</h1>
<a class="btn btn-outline-primary mt-4" href="scam-iq-quiz.html" target="_blank">Find Out More</a>


</div>
    </div>
    <div id="main_C035_Col01" class="sf_colsIn col-md-6 pl-0 py-5" data-sf-element="Column 2" data-placeholder-label="Column 2"><div class='container text-center py-5'><h1>Given a Malaysian Bank Account?</h1>
<span class="lead">Check the Malaysian account here.</span><br>
<button type="button" class="btn btn-outline-primary mt-4" data-toggle="modal" data-target="#checkMalaysianAcct">Check Now</button>



</div>
<!-- Modal -->
<div class="modal fade text-dark" id="checkMalaysianAcct" role="dialog" aria-labelledby="checkMalaysianAcct" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 class="text-center">Check Malaysian Bank Account</h2>
		<div class="form-group">
			<label for="firstName">Copy and paste the link below into browser.</label>
			<input type="text" class="form-control" id="foo" value="http://ccid.rmp.gov.my/semakmule/" disabled="disabled">
		</div>
		<div class="modal-footer">
			<div class="text-center">
			    <button class="btn btn-primary" id="copy-btn">Copy URL Link</button>
			  </div>	
		</div>
      </div>
    </div>
  </div>
</div>

    </div>
</div>

</div>
 </main>
 

































<?php include('footer.php') ?>