<?php
$data = $database->getReference('template/userData/stats/data/arrayOne/data')->getValue();
echo '<section class="company-work">

<div class="container-fluid">

    <ul class="row">';

    $count = count($data);
                if($data[0] != 'true'){
                    for ($i = 0; $i < $count; $i++) {

        echo '<li class="col-12 col-md-6 col-lg">

            <div class="work-block">

                <div class="work-icon">';
                    if($data[$i]['image']['name']){
                        $rand = rand();
                        echo '<img src="'.$imageBaseDirectory.$data[$i]['image']['name'].'?rand='.$rand.'">';
                    } else {
                        echo '<img src="images/projects.png">';
                    }

                echo '</div>

                <span class="work-title">'.$data[$i]['title']['text'].'</span>

                <h3 class="work-count"><span class="counter">'.$data[$i]['count']['text'].'</span><span>+</span></h3>

            </div>

        </li>';}}



    echo '</ul>

</div>

</section>';
?>