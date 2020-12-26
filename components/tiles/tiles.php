<?php
$section = $database->getReference('template/userData/tiles/data/arrayOne/data')->getValue();
//$section = $data["tiles"]['data'];
echo '<section class="project-by-city wow fadeInUp" data-wow-delay="0.3s">

<div class="container">

    <div class="row">

        <div class="col-12 col-md-10 offset-md-1">

            <div class="project-block">

                <h2 class="project-block-title">Project by city</h2>

                <div class="city-wrap">';

                $count = count($section);
                if($section[0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {
                        echo '<a href="#" class="city-name">'.$section[$i]['title']['text'].'</a>';
                    }
                }   
                

                echo '</div>

            </div>

        </div>

    </div>

</div>

</section>';
?>