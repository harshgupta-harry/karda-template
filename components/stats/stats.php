<?php

echo '<section class="company-work">

<div class="container">

    <ul class="row">';

    $count = count($data['stats']['data']['arrayOne']['data']);
                if($data['stats']['data']['arrayOne']['data'][0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {

        echo '<li class="col-12 col-md-4">

            <div class="work-block">

                <div class="work-icon">';
                    if($data['stats']['data']['arrayOne']['data'][$i]['image']['name']){
                        echo '<img src="'.$data['stats']['data']['arrayOne']['data'][$i]['image']['name'].'">';
                    } else {
                        echo '<img src="images/projects.png">';
                    }

                echo '</div>

                <span class="work-title">'.$data['stats']['data']['arrayOne']['data'][$i]['title']['text'].'</span>

                <h3 class="work-count"><span class="counter">'.$data['stats']['data']['arrayOne']['data'][$i]['count']['text'].'</span><span>+</span></h3>

            </div>

        </li>';}}

        

    echo '</ul>

</div>

</section>';
?>