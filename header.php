
<?php
$headerData = $database->getReference('template/userData/header/data')->getValue();
$bannerData = $database->getReference('template/userData/banner/data/arrayOne/data')->getValue();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/mobile-menu/meanmenu.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/lightgallery.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Karda Constructions</title>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDHhVYjE4DAtknooTdbYZkJbp0r6OfcZJ8" type="text/javascript"></script>
    <script type ="text/javascript">
        window.onload = fetch("http://api.marketstack.com/v1/eod?access_key=1be780d25fa658f3388de17c0431bb54&symbols=KARDA.XNSE")
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            console.log(myJson?.data[0]?.adj_close, 'dcsc');
            document.getElementById("stock-price-nse").innerHTML = myJson?.data[0]?.open;
            if(myJson?.data[0]?.close < myJson?.data[0]?.open){
                document.getElementById("stock-price-nse-icon").classList.toggle('fas')
                document.getElementById("stock-price-nse-icon").classList.toggle('fa-caret-down')
                document.getElementById("stock-price-nse-icon").classList.toggle('price-down')
            } else {
                document.getElementById("stock-price-nse-icon").classList.toggle('fas')
                document.getElementById("stock-price-nse-icon").classList.toggle('fa-caret-up')
                document.getElementById("stock-price-nse-icon").classList.toggle('price-up')
            }
        })
        .catch(function (error) {
            console.log("Error: " + error);
        });

        // window.onload = fetch("http://api.marketstack.com/v1/eod?access_key=1be780d25fa658f3388de17c0431bb54&symbols=KARDA.XBOM")
        // .then(function (response) {
        //     return response.json();
        // })
        // .then(function (myJson) {
        //     console.log(myJson?.data[0]?.adj_close, 'dcsc');
        //     document.getElementById("stock-price-bse").innerHTML = myJson?.data[0]?.adj_close;
        // })
        // .catch(function (error) {
        //     console.log("Error: " + error);
        // });
    </script>
    
</head>

<body>
    <a href="index.php" class="mobile-logo d-lg-none"><img src="images/logo.png"></a>
    <div class="responsive-menu">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="featured-project.php">Projects</a>
                    <ul>
                        <li><a href="featured-project.php?status=Ongoing">Ongoing Projects</a></li>
                        <li><a href="featured-project.php?status=Upcoming">Upcoming Projects</a></li>
                        <li><a href="featured-project.php?status=Completed">Completed Projects</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Corporate</a>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="directors.php">Directors</a></li>
                        <li><a href="key-person.php">Key Person</a></li>
                        <li><a href="vision-mission.php">Vision &amp; Mission</a></li>
                        <li><a href="media.php">Media</a></li>
                        <li><a href="awards.php">Awards</a></li>
                        <li><a href="event.php">Event</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Investors</a>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">Financials &amp; Filings</a>
                            <ul>
                                <li><a href="annual-report.php">Anual Report</a></li>
                                <li><a href="quarterly-results.php">Quarterly Results &amp; Reports</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Shareholder's Services</a>
                            <ul>
                                <li><a href="http://kardaconstruction.com/uploads/investors-master/1506408537Final set of MOA &amp; AOA-KCL.pdf" target="_blank">Memoramdum of Association &amp; Articles of Associations</a></li>
                                <li><a href="shareholding-pattern.php">Shareholding Pattern</a></li>
                                <li><a href="investor-contact.php">Investor Contact</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://kardaconstruction.com/uploads/investors-master/1510049328Corporate G P.pdf" target="_blank">Corporate Governance</a>
                            <ul>
                                <li><a href="http://kardaconstruction.com/uploads/investors-master/1530942738Constitution of Committes.pdf" target="_blank">Board Composition</a></li>
                                <li>
                                    <a href="http://kardaconstruction.com/uploads/investors-master/1506407770CSR POLICY-KCL.docx" target="_blank">Corporate Governance Policies</a>
                                    <ul>
                                        <li><a href="http://kardaconstruction.com/uploads/investors-master/1528357531CSR POLICY-KCL.pdf" target="_blank">Corporate Social Responsibility Policy</a></li>
                                        <li><a href="http://kardaconstruction.com/uploads/investors-master/nomination-and-remuneration-policy.pdf" target="_blank">Nomination and Remuneration Policy</a></li>
                                        <li><a href="http://kardaconstruction.com/uploads/investors-master/1510048036Whistel-Blower-Policy.pdf" target="_blank">Whistle Blower Policy</a></li>
                                        <li><a href="http://kardaconstruction.com/uploads/investors-master/1510138076RELATED PARTY TRANSACTION POLICY.pdf" target="_blank">Related Party Transaction Policy</a></li>
                                        <li><a href="http://kardaconstruction.com/uploads/investors-master/1510049408INSIDER TRADING POLICY.pdf" target="_blank">Insider Trading Policy</a></li>
                                        <li><a href="http://kardaconstruction.com/uploads/investors-master/1551247762code of conduct.pdf" target="_blank">Code Of Conduct</a></li>
                                        <li><a href="http://kardaconstruction.com/uploads/investors-master/1510224444materiality Policy.pdf" target="_blank">Materiality Policy</a></li>
                                    </ul>
                                </li>
                                <li><a href="governance-report.php">Corporate Governance Report</a></li>
                                <li><a href="familiarization-programme-of-independent-directors.php">Familiarization programme of independent directors</a></li>
                                <li><a href="notice.php"> Notice</a></li>
                            </ul>
                        </li>
                        <li><a href="ipo.php">IPO</a></li>
                        <li><a href="announcements.php">Announcements</a></li>
                        <li><a href="postal-ballot.php">Postal Ballot</a></li>
                    </ul>
                </li>
                <li><a href="infra-govt-contracts.php">Infra. &amp; Govt. Contracts</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="career.php">Careers</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <!-- Responsive Menu:End -->
    <section class="banner">
        <div class="header d-none d-lg-block">
            <?php include "menus.php"; ?>
		</div>
        <div class="social-links">
            <div class="social-title">Social Media</div>
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="banner-slider wow fadeInDown">
            <?php 
                $count = count($bannerData);
                if($bannerData[0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {
echo '<div>

    <div class="img-box">';
        if($bannerData[$i]['image']['name']){
            $rand = rand();
          echo '<img src="'.$imageBaseDirectory.$bannerData[$i]['image']['name'].'?rand='.$rand.' class="w-100">';
          
        } else {
          echo '<img src="images/banner.jpg" class="w-100">';
        }

    echo '</div>

    <div class="banner-content">

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-8 offset-md-1">

                <span class="launching">'.$bannerData[$i]['subTitle']['text'].'</span>

                    <h1><strong>'.$bannerData[$i]['title']['text'].'</strong></h1>

                    <h2>'.$bannerData[$i]['description']['text'].'</h2>

                    <a href="'.$bannerData[$i]['buttonOne']['link']['text'].'" class="button">View project <i class="fas fa-caret-right"></i></a>

                </div>

            </div>

        </div>

    </div>

</div>';}} ?>
        </div>
        <div class="banner-arrow">
            <a href="JavaScript:void(0)" class="prev">Prev</a>
            <a href="JavaScript:void(0)" class="next">Next</a>
        </div>
    </section>