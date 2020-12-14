<?php 
include ('./composer/firebase_db.php');

$headerDetails = $database->getReference('template/userData/header/data')->getValue();

$addBaseTag = true;


$id = htmlspecialchars($_GET["id"]);
$blogDetails = $database->getReference('template/userData/blogs/data/blogs/'.$id)->getValue();
$pageHeading = $blogDetails['title']['text'];
include ('./config-file.php');

include 'header2.php';
$allBlogs = $database->getReference('template/userData/blogs/data/blogs/')->getValue();
$blogCategory = [];

foreach($allBlogs as $name => $value) {
    $blogCategory[$value["category"]["text"]] = $value["category"]["text"];
}

?>

    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog">
                        <div class="blog-img">
                            
                            <?php
                            if($blogDetails['image']['name']){
                                echo '<img src="'.$imageBaseDirectory.$blogDetails['slug']['text'].'/'.$blogDetails['image']['name'].'" class="w-100">';
                            } else {
                                echo '<img src="images/blog1.jpg" class="w-100">';
                            }
                            ?>
                        </div>
                        <div class="blog-details">
                            <div class="share-comment">
                                <a href="#" class="share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="#" class="comments">
                                    <i class="fas fa-comment-alt"></i>
                                    <span class="comments-count">0</span>
                                </a>
                            </div>
                            <div class="blog-content">
                                <span class="blog-date"><?php echo $blogDetails['date']['text']; ?></span>
                                <h2 class="blog-title"><?php echo $blogDetails['title']['text']; ?></h2>
                                <p><?php echo $blogDetails['description']['text']; ?></p>
                                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                <ul>
                                    <li><i class="fas fa-angle-right"></i> Well established Nashik based group Company</li>
                                    <li><i class="fas fa-angle-right"></i> Founded by promoter Mr. Naresh Karda in year 1994</li>
                                    <li><i class="fas fa-angle-right"></i> Incorporated in 2007 as Karda Constructions Private Limited</li>
                                    <li><i class="fas fa-angle-right"></i> Promoter has experience of more than 2 decades in construction industry</li>
                                    <li><i class="fas fa-angle-right"></i> Establish and strengthen brand name as “Hari” brand”</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sidebar">
                        
                        <div class="recent-post">
                            <h4 class="recent-blog-title">Recent Posts</h4>
                            <?php $recentBlogsIndex = 1;
                            foreach($allBlogs as $key => $value) { 
                                if($recentBlogsIndex > 4){
                                break;
                                }

                            echo '<a href="./blog/'.$value['slug']['text'].'" class="media">

                                <div class="media-img">';

                                    
                                    if($value['image']['name']){
                                        echo '<img src="'.$imageBaseDirectory.$value['slug']['text'].'/'.$value['image']['name'].'" class="w-100">';
                                    } else {
                                        echo '<img src="images/post1.jpg" class="w-100">';
                                    }

                                echo '</div>

                                <div class="media-body">

                                    <h4 class="post-title">'.$value['title']['text'].'</h4>

                                    <span class="post-date">'.$value['date']['text'].'</span>

                                </div>

                            </a>';
                            $recentBlogsIndex++;
                            }

                            ?>
                        </div>
                        <div class="post-category">
                            <h4 class="post-category-title">Categories</h4>
                            <ul>
                            <?php
                                    foreach($blogCategory as $key => $value){
                                        echo '<li><a href="./blog?category='.$key.'">'.$value.'</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog -->
    
    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="partners-list">
                        <li><img src="images/axis.png"></li>
                        <li><img src="images/dhfl.png"></li>
                        <li><img src="images/hdfc.png"></li>
                        <li><img src="images/bull.png"></li>
                        <li><img src="images/reli.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="foot-logo">
                        <img src="images/foot-logo.png" class="w-100">
                    </div>
                    <p>KBPL was incorporated under the Companies Act, 1956 as Karda Buildcon Private Limited on 7th January, 2014 in the state of Maharashtra. Its registered office is situated at Shop No. UG 109, Dreams -The Mall, LBS Marg, Bhandup (W), Mumbai - 400078.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Company Profile</a></li>
                        <li><a href="#">Key Person</a></li>
                        <li><a href="#">Vision & Mission</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <ul>
                        <li><a href="#">Ongoing Projects</a></li>
                        <li><a href="#">Upcoming Projects</a></li>
                        <li><a href="#">Completed Projects</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="foot-contact">
                        <h4>Contact Info.</h4>
                        <a href="tel:+91-8554994757" class="mobile">+91-8554994757</a>
                        <a href="mailto:enquirekarda@gmail.com" class="email"> enquirekarda@gmail.com</a>
                        <address>2nd floor ,Gulmohar Status,Mahatma Nagar, samarth Nagar ,Nashik-422005 (M.S),India.</address>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copy">
                        <p>© 2020 Karda Construction. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/1.10.2-jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 20,
            time: 1000
        });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="css/mobile-menu/jquery.meanmenu.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>