<?php
echo '<section class="testimonials">

<div class="container">

    <div class="row align-items-center">

        <div class="col-12 col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">

            <div class="section-title">

                <span class="count">04</span>

                <h2><span>Happy</span> Customer</h2>

            </div>

            <div class="test-slider">';
            $count = count($data['testimonials']['data']['arrayOne']['data']);
                if($data['stats']['data']['arrayOne']['data'][0] != 'true'){  
                    for ($i = 0; $i < $count; $i++) {

                echo '<div class="testimonials-desc">

                    <p>'.$data['testimonials']['data']['arrayOne']['data'][$i]['description']['text'].'</p>

                    <h4>- '.$data['testimonials']['data']['arrayOne']['data'][$i]['name']['text'].'</h4>

                </div>';}}

               

            echo '</div>

            <div class="test-arrow">

                <a href="JavaScript:void(0)" class="prev">Prev</a>

                <a href="JavaScript:void(0)" class="next">Next</a>

            </div>

        </div>

        <div class="col-12 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">

            <div class="img-box">

                <img src="images/cust.png" class="w-100">

            </div>

        </div>

    </div>

</div>

</section>'
?>