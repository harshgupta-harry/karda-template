    <?php 
    
    $id = htmlspecialchars($_GET["id"]);
    include ('./composer/firebase_db.php');
    include ('./config-file.php');
	//template data fetch from firebase
    $projectDetails = $database->getReference('template/userData/featured/data/projects/'.$id)->getValue();
    $headerDetails = $database->getReference('template/userData/header/data')->getValue();
    
    $pageHeading = $projectDetails['title']['text'];
    
    $imageBaseDirectory1 = $imageBaseDirectory.'Project/'.$projectDetails['imageFolderName'];
    $metaTags = $projectDetails['metaTags']['text'];
    $metaDescription = $projectDetails['metaDescription']['text'];
    include 'header3.php';
    $rand = rand();
    ?> 

    <section class="detail-breadcrumb">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-12 col-md-6 wow fadeInLeft" data-wow-delay="0.3s">

                    <h3><?php echo $projectDetails['title']['text']; ?></h3>

                </div>

                <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.3s">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item"><a href="featured-project.html">Project</a></li>

                        <li class="breadcrumb-item active" aria-current="page"><?php echo $projectDetails['title']['text']; ?></li>

                    </ol>

                </div>

            </div>

        </div>

    </section>

    <!-- breadcroumb -->

    <section class="product-details-tab wow fadeInDown" data-wow-delay="0.3s" id="nav-anchor">

        <div class="container">

            <ul class="nav nav-pills">

                <li class="nav-item"><a class="nav-link" href="#description">Description</a></li>

                <li class="nav-item"><a class="nav-link" href="#reraDetails">RERA Details</a></li>

                <li class="nav-item"><a class="nav-link" href="#amenities">Amenities</a></li>

                <li class="nav-item"><a class="nav-link" href="#floorplans">Floor Plans</a></li>

                <li class="nav-item"><a class="nav-link" href="#highlights">Highlights</a></li>

                <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>

                <li class="nav-item"><a class="nav-link" href="#location">Google Map</a></li>

            </ul>

        </div>

    </section>

    <!-- project details tab -->

    <section class="rera-details" id="description">

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-6 wow fadeInLeft" data-wow-delay="0.3s">

                    <p><?php echo $projectDetails['description']['text']; ?></p>
                </div>

                <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.3s">

                    <div class="img-box">

                        
                        <?php if($projectDetails['image']['name']){
                                    echo '<img src="'.$imageBaseDirectory1.'/'.$projectDetails['image']['name'].'?rand='.$rand.'">';
                                } else {
                                    echo '<img src="images/harisiddhi.jpg" class="w-100"> ';
                                } 
                                
                               
                                ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="note wow fadeInUp" data-wow-delay="0.3s" id="reraDetails">

        <div class="container">

            <div class="note-desc">

            <p><?php echo $projectDetails['reraDetails']['text']; ?></p>

            </div>

        </div>

    </section>

    <!-- note -->

    <section class="amenities" id="amenities">

        <div class="container">

            <div class="row">

                <div class="col-12 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="section-title">

                        <h3>Cutting Edge Lifestyle Amenities</h3>

                    </div>

                </div>

            </div>

            <ul class="row">
            <?php $count = count($projectDetails['amenities']);
                if($projectDetails['amenities'][0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {
                        echo '<li class="col-12 col-md-4 col-lg-2 wow fadeInDown" data-wow-delay="0.2s">

                        <div class="card">
    
                            <div class="card-img">';
                                if($projectDetails['amenities'][$i]['image']['name']){
                                    echo '<img src="'.$imageBaseDirectory1.'/'.$projectDetails['amenities'][$i]['image']['name'].'?rand='.$rand.'">';
                                } else {
                                    echo '<img src="images/amenity-icon-1.png">';
                                }
                            echo '</div>
    
                            <div class="card-body">
    
                                <h4>'.$projectDetails['amenities'][$i]['title']['text'].'</h4>
    
                            </div>
    
                        </div>
    
                    </li>';
                    }
                } 
            ?>
                

                

            </ul>

        </div>

    </section>

    <!-- Amenities -->

    <section class="floor-plans" id="floorplans">

        <div class="container">

            <div class="row">

                <div class="col-12 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="section-title">

                        <h3>1 BHK, 2 BHK Floor Plans</h3>

                    </div>

                </div>

            </div>

            <ul class="row" id="lightgallery">

                <?php 
                $count = count($projectDetails['floorPlans']);
                if($projectDetails['floorPlans'][0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {
                        echo '<li class="col-12 col-md-3 mb-4 wow fadeInUp" data-wow-delay="0.3s" data-src="'.$imageBaseDirectory1.'/'.$projectDetails['floorPlans'][$i]['image']['name'].'?rand='.$rand.'">

                        <div class="plan-block">';
    
                        if($projectDetails['floorPlans'][$i]['image']['name']){
                            echo '<img src="'.$imageBaseDirectory1.'/'.$projectDetails['floorPlans'][$i]['image']['name'].'?rand='.$rand.'">';
                        } else {
                            echo '<img src="images/plan1.jpg">';
                        }
                            
    
                        echo '</div>
    
                    </li>';
                    }
                } 
                ?>


            </ul>

        </div>

    </section>

    <!-- floor plans -->

    <section class="location-highlights" id="highlights">

        <div class="container">

            <div class="row">

                <div class="col-12 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="section-title">

                        <h3>Location Highlights</h3>

                    </div>

                </div>

                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">

                    <ul class="highlights">

                    <?php 
                $count = count($projectDetails['locationHighlights']);
                if($projectDetails['locationHighlights'][0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {
                        echo '<li><i class="far fa-check-circle mr-2"></i> '.$projectDetails['locationHighlights'][$i]['title']['text'].'</li>';
                    }
                } 
                ?>
                        


                    </ul>

                </div>

            </div>

        </div>

    </section>

    <!-- Location Highlight -->

    <section class="contact-us" id="contact">

        <div class="container">

            <div class="row">

                <div class="col-12 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="section-title">

                        <h3>Contact Us</h3>

                    </div>

                </div>

                <div class="col-12 col-md-6 wow fadeInLeft" data-wow-delay="0.3s">

                    <h4>Corporate Office</h4>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-map-marker-alt"></i>

                        </div>

                        <div class="media-body">

                        <?php echo '<a>'.$projectDetails['contactUs']['corporateOffice']['location']['text'].'</a>';?>

                        </div>

                    </div>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-phone fa-flip-horizontal"></i>

                        </div>

                        <div class="media-body">
                        <?php echo '<a href="tel:'.$projectDetails['contactUs']['corporateOffice']['contactNumber']['text'].'">'.$projectDetails['contactUs']['corporateOffice']['contactNumber']['text'].'</a>';?>
                            

                        </div>

                    </div>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-envelope"></i>

                        </div>

                        <div class="media-body">
                        <?php echo '<a href="mailto:'.$projectDetails['contactUs']['corporateOffice']['email']['text'].'">'.$projectDetails['contactUs']['corporateOffice']['email']['text'].'</a>';?>
                            

                        </div>

                    </div>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-link"></i>

                        </div>

                        <div class="media-body">
                        <?php echo '<a href="'.$projectDetails['contactUs']['corporateOffice']['website']['text'].'">'.$projectDetails['contactUs']['corporateOffice']['website']['text'].'</a>';?>
                            

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.3s">

                    <h4>Site Office</h4>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-map-marker-alt"></i>

                        </div>

                        <div class="media-body">

                        <?php echo '<a>'.$projectDetails['contactUs']['siteOffice']['location']['text'].'</a>';?>

                        </div>

                    </div>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-phone fa-flip-horizontal"></i>

                        </div>

                        <div class="media-body">

                        <?php echo '<a href="tel:'.$projectDetails['contactUs']['siteOffice']['contactNumber']['text'].'">'.$projectDetails['contactUs']['siteOffice']['contactNumber']['text'].'</a>';?>

                        </div>

                    </div>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-envelope"></i>

                        </div>

                        <div class="media-body">

                        <?php echo '<a href="mailto:'.$projectDetails['contactUs']['siteOffice']['email']['text'].'">'.$projectDetails['contactUs']['siteOffice']['email']['text'].'</a>';?>

                        </div>

                    </div>

                    <div class="media">

                        <div class="media-img">

                            <i class="fas fa-link"></i>

                        </div>

                        <div class="media-body">

                        <?php echo '<a href="'.$projectDetails['contactUs']['siteOffice']['website']['text'].'">'.$projectDetails['contactUs']['siteOffice']['website']['text'].'</a>';?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- contact us -->

    <section class="contact-us" id="location">

        <div class="container">

            <div class="row">

                <div class="col-12 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="section-title">

                        <h3>Contact Us</h3>

                    </div>

                </div>

                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">

                <?php 

echo '<iframe class="map-iframe" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q='.str_replace(",", "", str_replace(" ", "+", $projectDetails['location']['text'])).'&z=14&output=embed" width="90%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';

?>
                    

                </div>

            </div>

        </div>

    </section>

    <!-- contact us map -->

    <?php include 'footer.php';?>