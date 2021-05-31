<?php
    include('../config/controller.php');
    $storyToken = $_GET['story'];
    $result = fetchStory($conn,$storyToken);

    include('headerN-scam.php');
?>

<main role="main"> 

<div class="sf_colsIn" data-sf-element="Container" data-placeholder-label="Container">
    <div class="sf_colsIn jumbotron bg-dark" data-sf-element="Container" data-placeholder-label="Container">
        <div class="text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1><?php echo $result['first_scam']."  (".$result['scammer_report']." )"  ?></h1>
                        <p class="lead"><?php echo ($result['anonymous'] == 'yes') ? ucwords(strtolower($result['firstname']))." ".ucwords(strtolower($result['lastname'])) : ""  ?>  | <?php echo explode(" ",$result['date'])[0]  ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12 mt-3 mb-5">
            
                    <a class="text-primary" href="../n-Scam/<?php echo $result['scammer_report'] ?>.php"><?php echo $result['scammer_report'] ?></a>


            <div class="lead">
            <?php echo $result['scam_exp']  ?> <br />
<br />
<?php echo ($result['anonymous'] == 'yes') ? ucwords(strtolower($result['firstname']))." ".ucwords(strtolower($result['lastname'])) : ""  ?><br />
<br />
<br />
            </div>
            <div class="evidence pt-3" id="evidence">


            </div>
        </div>


        <div class="col-lg-4 col-md-12 mb-5">
            <div class="card card-higher">
                <div class="card-body py-5 text-center footer px-4">
                    <strong class="h5 text-dark">Scam Details</strong>
                    <p class="lead">
                        Name:  <?php echo ucwords($result['scammer_username'])  ?><br />
                        Contact:  <?php echo ucwords($result['scammer_contact'])  ?><br>
                        Email : <?php echo ucwords($result['scammer_email'])  ?> <br>
                        Also: (<?php echo ucwords($result['scammer_other_info'])  ?>)
                    </p>
                    <hr />
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox"
                         data-title=<?php echo ucwords($result['scammer_report'])  ?>
                         data-description="Since 1st August 2018, i am getting numerous calls from this +370 numbers . I have not pick up or called this number because its checked coming from Lithuania country which never makes sense since i don't&hellip;..."
                         data-media=""
                         data-url="http://www.scamalert.sg/stories-details/Story-01Aug2018230136PM"

                         addthis:title=<?php echo ucwords($result['scammer_report'])  ?>
                         addthis:description="Since 1st August 2018, i am getting numerous calls from this +370 numbers . I have not pick up or called this number because its checked coming from Lithuania country which never makes sense since i don't&hellip;..."
                         addthis:media=""
                         addthis:url="http://www.scamalert.sg/stories-details/Story-01Aug2018230136PM"

                         og:title=<?php echo ucwords($result['scammer_report'])  ?>
                         og:description="Since 1st August 2018, i am getting numerous calls from this +370 numbers . I have not pick up or called this number because its checked coming from Lithuania country which never makes sense since i don't&hellip;..."
                         og:media=""
                         og:url="http://www.scamalert.sg/stories-details/Story-01Aug2018230136PM"
                         og:site_name="Scam Alert"
                         ></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.title = <?php echo ucwords($result['scammer_report'])  ?>
</script><div class="jumbotron my-0" data-sf-element="Row">
    <div id="main_C013_Col00" class="sf_colsIn container" data-sf-element="Column 1" data-placeholder-label="Column 1">

    <div class="container text-center mb-4">
        <h1>Related Stories</h1>
        <p class="lead text-muted"></p>
    </div>
    <div class="sfContentBlock">
        <div class="container">
            <div class="row">

                    <div class="col-md-4">
                        <div class="card p-2">
                            <div class="card-body">
                                <div class="card-date text-primary">01 Aug 2018</div>
                                <h4 class="card-title">
                                    <a class="text-dark" href="Story-14Mar2018135948PM.html">I received a call from 62788112 on my mobile</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2">
                            <div class="card-body">
                                <div class="card-date text-primary">01 Aug 2018</div>
                                <h4 class="card-title">
                                    <a class="text-dark" href="Story-12Jan2018130606PM.html">Receiving calls recently from the number +41799779623 originating  from switzerland, suspect it could be related to Wangiri scam</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2">
                            <div class="card-body">
                                <div class="card-date text-primary">01 Aug 2018</div>
                                <h4 class="card-title">
                                    <a class="text-dark" href="Story-15Dec2016104910AM.html">I have received a miss call and a VM from +65 68543000</a>
                                </h4>
                            </div>
                        </div>
                    </div>


                <div class="col-md-12 text-center mt-4">
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
    </div>


    </div>
</div>
 </main> 





<?php include('footerN-scam.php') ?>