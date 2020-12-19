<?php
include ('./config-file.php');
include ('./composer/firebase_db.php');
$allRecentBlogs = $database->getReference('template/userData/blogs/data/blogs/')->orderByChild('title/text')->limitToFirst(2)->getValue();
?>
<div class="recent-post">

    <h2 class="recent-blog-title">Recent Event</h2>

    <?php $recentBlogsIndex = 1;
    foreach($allRecentBlogs as $key => $value) { 
    if($recentBlogsIndex > 4){
    break;
    }
    echo '<a href="./blog/'.$value['slug']['text'].'" class="media">

    <div class="media-img">';
    if($value['image']['name']){
        echo '<img src="'.$imageBaseDirectory.'Blog/'.$value['slug']['text'].'/'.$value['image']['name'].'" class="w-100">';
    } else {
        echo '<img src="images/post1.jpg" class="w-100" />';
    }
        

    echo '</div>

    <div class="media-body">

        <h4 class="post-title">'.$value['title']['text'].'</h4>

        <span class="post-date">'.$value['date']['text'].'</span>
    </div>

    </a>';
}
    ?>


    <a href="./blog.php" type="button" class="button red">View All Events</a>

</div>