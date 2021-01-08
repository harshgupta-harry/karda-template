<?php

$section = $database->getReference('template/userData/featured/data/projects/')->orderByChild('title/text')->limitToFirst(4)->getValue();

// $section = $data["featured"]["data"];

echo '<section class="featured-projects">

<div class="container">

    <div class="row">

        <div class="col-12 wow fadeInDown" data-wow-delay="0.3s">

            <div class="section-title">

                <span class="count">01</span>

                <h2><span>Featured</span> Project</h2>

            </div>

        </div>';


            $index = 1;
            foreach($section as $key => $value) {
                if($index > 6){
                    exit;
                }
                echo '<div class="col-12 col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">

                <div class="featured-project">

                    <div class="featured-project-img">';
                        if($value['image']['name']){
                            $rand = rand();
                            echo '<img src="'.$imageBaseDirectory.'Project/'.$value['slug']['text'].'/'.$value['image']['name'].'?rand='.$rand.'" class="w-100">';
                        } else {
                            echo '<img src="images/harisiddhi.jpg" class="w-100">';
                        }

                    echo '</div>

                    <div class="featured-project-info">

                        <span class="flat-type"><i class="fas fa-map-marker-alt"></i> '.$value['location']['text'].'</span>

                        <h3 class="property-name">'.$value['title']['text'].'</h3>

                        <span class="location">'.$value['type']['text'].'</span>

                        <a href="'.$value['reraDetails']['reraLink'].'" target="_blank"><span class="area-reg">'.$value['reraDetails']['reraNumber'].'</span><a>

                        <a href="projects/'.$value['slug']['text'].'" class="button red">READ MORE <i class="fas fa-caret-right"></i></a>

                        <a class="button grey enquiry" data-id="'.$value['slug']['text'].'" data-toggle="modal" data-target="#quickInquery">ENQUIRY</a>

                    </div>

                </div>

            </div>';
            $index ++;
            }





    echo '</div>

</div>

</section>';
?>