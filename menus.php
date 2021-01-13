
<?php

$headerData = $database->getReference('template/userData/header/data')->getValue();
$bannerData = $database->getReference('template/userData/banner/data/arrayOne/data')->getValue();
$fileName = basename($_SERVER['PHP_SELF']);

?>
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
<div class="container">
                <div class="topbar wow fadeInRight">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-2">
                            <a class="navbar-brand" href="index.php">
                                <img src="images/logo.png" class="w-100">
                            </a>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="topbar-right">
                                <div class="media">
                                    <div class="media-body">
                                        <?php echo '<a href="tel: '.$headerData['contactNumber']['text'].'" class="mobile">'.$headerData['contactNumber']['text'].'</a>'; ?>
                                        <?php echo '<a href="mailto: '.$headerData['email']['text'].'" class="email">'.$headerData['email']['text'].'</a>'; ?>
                                    </div>
                                    <div class="media-img ml-3">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                </div>
                                <div class="stock-price">
                                    <!-- <div class="stock">
                                        <p>BSE - <span id="stock-price-bse"> 37,981.63</spam> <i class="fas fa-caret-up price-up"></i></p>
                                    </div> -->
                                    <div class="stock">
                                        <p>NSE - <span id="stock-price-nse"> 11,227.55</span> <i id="stock-price-nse-icon" class=""></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg wow fadeInLeft">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
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
                    </div>
                </nav>
            </div>