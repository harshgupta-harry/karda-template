<?php

$section = $data["featured"]["data"];

echo '<section class="featured-projects">

<div class="container">

    <div class="row">

        <div class="col-12 wow fadeInDown" data-wow-delay="0.3s">

            <div class="section-title">

                <span class="count">01</span>

                <h2><span>Featured</span> Project</h2>

            </div>

        </div>';

        
        
            foreach($section['projects'] as $key => $value) {
                echo '<div class="col-12 col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">

                <div class="featured-project">
    
                    <div class="featured-project-img">';
                        if($value['image']['name']){
                            echo '<img src="'.$imageBaseDirectory.$value['slug']['text'].'/'.$value['image']['name'].'" class="w-100">';
                        } else {
                            echo '<img src="images/harisiddhi.jpg" class="w-100">';
                        }
    
                    echo '</div>
    
                    <div class="featured-project-info">
    
                        <span class="flat-type">'.$value['type']['text'].'</span>
    
                        <h3 class="property-name">'.$value['title']['text'].'</h3>
    
                        <span class="location"><i class="fas fa-map-marker-alt"></i> '.$value['location']['text'].'</span>
    
                        <span class="area-reg">'.$value['reraDetails']['reraNumber'].'</span>
    
                        <a href="projects/'.$value['slug']['text'].'" class="button red">READ MORE <i class="fas fa-caret-right"></i></a>
    
                         <a class="button grey enquiry" data-toggle="modal" data-target="#quickInquery">ENQUIRY</a>
    
                    </div>
    
                </div>
    
            </div>';
            
            }
        
          
        

        
    echo '</div>

</div>

</section>';
?>