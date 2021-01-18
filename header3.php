<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php   if(isset($metaDescription)){
                echo '<meta name="description" content="'.$metaDescription.'">';
            }
            if(isset($metaTags)){
                echo '<meta name="keywords" content="'.$metaTags.'">';
            }
            $rand = rand();
    ?>
    <!-- Bootstrap CSS -->
    <base href='../' />
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
</head>

<body>
    <!--- Responsive Menu:Begin -->
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
        <!-- header -->
        <div class="social-links">
            <div class="social-title">Social Media</div>
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <!-- header -->
        <div class="product-detail-banner wow fadeInDown" data-wow-delay="0.3s">
            <?php 
                $count = count($projectDetails['banner']);
                if($projectDetails['banner'][0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {
                        echo '
            <div>

                <div class="img-box">';
                    if($projectDetails['banner'][$i]['image']['name']){
                        echo '<img src="'.$imageBaseDirectory1.'/'.$projectDetails['banner'][$i]['image']['name'].'?rand='.$rand.'" class="w-100">';
                    } else {
                        echo '<img src="images/banner.jpg" class="w-100">';
                    }
                    

                echo '</div>

                <div class="banner-content">

                    <div class="container">

                        <div class="row align-items-center">

                            <div class="col-12 col-md-3">

                                <span class="regi-no">Registration No: <a href="'.$projectDetails['reraDetails']['reraLink'].'" target="_blank">'.$projectDetails['reraDetails']['reraNumber'].'</a></span>

                                <span class="rera-reg"><i class="far fa-check-circle"></i>RERA Registered</span>

                            </div>

                            <div class="col-12 col-md-5">

                                <h4>'.$projectDetails['title']['text'].'</h4>

                                <p>'.$projectDetails['location']['text'].'</p>

                            </div>

                            <div class="col-12 col-md-4 text-xl-right">

                                <a class="button enquiry" data-id="'.$projectDetails['slug']['text'].'" data-property-name="'.$projectDetails['title']['text'].'" data-toggle="modal" data-target="#quickInquery">Quick enquiry <i class="fas fa-caret-right"></i></a>';
								
								if($projectDetails['brochure']['text']){
									echo '<a href="#" class="button brouchure" data-id="'.$projectDetails['slug']['text'].'" data-toggle="modal" data-target="#ebrouchure">Request E-Brouchure <i class="fas fa-caret-right"></i></a>';
								}
								
                            echo '</div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    } 
    ?>
        </div>
        <div class="banner-arrow">
            <a href="JavaScript:void(0)" class="prev">Prev</a>
            <a href="JavaScript:void(0)" class="next">Next</a>
        </div>
    </section>
    <!-- banner -->