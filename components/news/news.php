<?php

$section = $data["blogs"]["data"];

echo '<section class="news-offers">

<div class="container">

    <div class="section-title wow fadeInDown" data-wow-delay="0.3s">

        <span class="count">05</span>

        <h2><span>News &</span> Offers</h2>

    </div>

    <div class="news-slider wow fadeInUp" data-wow-delay="0.3s">';
    $index = 1;
    foreach($section['blogs'] as $key => $value) {
        if($value['category']['text'] !== 'News & Offers'){
            continue;
        }
        if($index > 6){
            exit;
        }
        
        echo '<div>

        <div class="news-card">

            <div class="card-img">';

                
                if($value['image']['name']){
                    echo '<img src="'.$imageBaseDirectory.'Blog/'.$value['slug']['text'].'/'.$value['image']['name'].'" class="w-100">';
                } else {
                    echo '<img src="images/niketan.jpg" class="w-100">';
                }

            echo '</div>

            <div class="card-body">

                <span class="news-date">'.$value['date']['text'].'</span>

                <h4>'.$value['title']['text'].'</h4>

                <p>'.substr($value['description']['text'], 0, 100).'...</p>

                <a href="./blog/'.$value['slug']['text'].'" class="button">Know More <i class="fas fa-caret-right"></i></a>

            </div>

        </div>

    </div>';
    $index ++;
    }
    

        

    echo '</div>

</div>

</section>';
?>