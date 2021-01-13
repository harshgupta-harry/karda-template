<?php
$rand = rand();
$pageHeading = 'Blogs';
include ('./composer/firebase_db.php');

$headerDetails = $database->getReference('template/userData/header/data')->getValue();

// $addBaseTag = false;
include ('./config-file.php');
$pageName = 'Blogs';
include 'header2.php';

$allBlogs = $database->getReference('template/userData/blogs/data/blogs/')->getValue();
$allBlogsBackup = $allBlogs;

$startLoopAt = 1;

$totalNumberOfBlogs = count($allBlogs);

$numberOfItemsOnAPage = 3;
$currentPage = 1;
$totalPages = ceil($totalNumberOfBlogs/$numberOfItemsOnAPage);

$blogCategory = [];


    foreach($allBlogsBackup as $name => $value) {
        $blogCategory[$value["category"]["text"]] = $value["category"]["text"];

}
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

if (isset($_GET['category'])) {
    $selectedBlogCategory = $_GET['category'];
    foreach($allBlogsBackup as $key => $value){
        if($selectedBlogCategory != $value['category']['text']){
            unset($allBlogs[$key]);
        }
    }
}

?>

    <section class="blog-section">

        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-8">


                    <?php

                $index = 1;

                foreach($allBlogs as $key => $value) {
                    if($index <= ($currentPage*$numberOfItemsOnAPage)-$numberOfItemsOnAPage){

                        $index++;
                        continue;
                    }
                    if($index > $currentPage*$numberOfItemsOnAPage){

                        break;
                    }
                    echo '<div class="blog wow fadeInLeft" data-wow-delay="0.3s">

                        <div class="blog-img">';


                            if($value['image']['name']){
                                echo '<img src="'.$imageBaseDirectory.'Blog/'.$value['imageFolderName'].'/'.$value['image']['name'].'?rand='.$rand.'" class="w-100">';
                            } else {
                                echo '<img src="images/blog1.jpg" class="w-100">';
                            }

                        echo '</div>

                        <div class="blog-details">

                            <div class="blog-content">

                                <span class="blog-date">'.$value['date']['text'].'</span>

                                <h2 class="blog-title">'.$value['title']['text'].'</h2>

                                <p>'.substr($value['description']['text'], 0, 200).'...</p>

                                <a href="./blog/'.$value['slug']['text'].'" class="button">Know More</a>

                            </div>

                        </div>

                    </div>';
                    $index++;

            }
                ?>
            </div>
            <div class="col-12 col-lg-4">
    <div class="sidebar">
                        <div class="recent-post wow fadeInRight" data-wow-delay="0.3s">

                            <h4 class="recent-blog-title">Recent Posts</h4>

                        <?php $recentBlogsIndex = 1;
                            foreach($allBlogs as $key => $value) {
                                if($recentBlogsIndex > 4){
                                break;
                                }

                            echo '<a href="./blog/'.$value['slug']['text'].'" class="media">

                                <div class="media-img">';


                                    if($value['image']['name']){
                                        echo '<img src="'.$imageBaseDirectory.'Blog/'.$value['imageFolderName'].'/'.$value['image']['name'].'?rand='.$rand.'" class="w-100">';
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

                        <div class="post-category wow fadeInRight" data-wow-delay="0.3s">

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

    <section class="pagination-block wow fadeInDown" data-wow-delay="0.3s">

        <div class="container">

            <hr />

        </div>

        <div class="container">


            <ul class="pagination">



                <?php
                $previousPage;
                if($currentPage > 1){
                    $previousPage = $currentPage - 1;
                } else {
                    $previousPage = $currentPage;
                }
                    if($currentPage > 1 ){
                        echo '<li class="page-item">';
                        echo '<a class="page-link" href="./blog.php?page='.$previousPage.'">';
                        echo '<i class="fas fa-angle-left"></i></a></li>';
                    }
                ?>
                <?php
                $nextPage;
                if($currentPage < ceil($totalNumberOfBlogs/$numberOfItemsOnAPage)){
                    $nextPage = $currentPage + 1;
                } else {
                    $nextPage = $currentPage;
                }

                for($i=1; $i<=ceil($totalNumberOfBlogs/$numberOfItemsOnAPage); $i++){

                    if($i == $currentPage){
                        echo '<li class="page-item"><a class="page-link active" href="javaScript:void(0)">'.$i.'</a></li>';
                    } else {
                        echo '<li class="page-item"><a class="page-link" href="./blog.php?page='.$i.'">'.$i.'</a></li>';
                    }
                }
                 ?>


<?php
if($currentPage < $totalPages){

echo '<li class="page-item">

                     <a class="page-link" href="./blog.php?page='.$nextPage.'">

                        <i class="fas fa-angle-right"></i>

                    </a>

                </li>';
}
                ?>

            </ul>


            <div class="page-number">

                <?php echo 'page '.$currentPage.' of '.$totalPages; ?>

            </div>

        </div>

    </section>

<?php include 'footer.php';?>