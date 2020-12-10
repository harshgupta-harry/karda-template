<?php 
$pageHeading = 'Projects';
include ('./composer/firebase_db.php');

$headerDetails = $database->getReference('template/userData/header/data')->getValue();

$addBaseTag = false;
include 'header2.php';


$allProjects = $database->getReference('template/userData/featured/data/projects/')->getValue();
$allProjectsBackup = $database->getReference('template/userData/featured/data/projects/')->getValue();

$startLoopAt = 1;
$totalNumberOfProjects = count($allProjects);
$numberOfItemsOnAPage = 9;
$currentPage = 1;
$totalPages = ceil($totalNumberOfProjects/$numberOfItemsOnAPage);



$typeCategory = [];
foreach($allProjectsBackup as $name => $value) {
    $typeCategory[$value["type"]["text"]] = $value["type"]["text"];
}

$statusCategory = [];
foreach($allProjectsBackup as $name => $value) {
    $statusCategory[$value["status"]["text"]] = $value["status"]["text"];
}

$locationCategory = [];
foreach($allProjectsBackup as $name => $value) {
    $locationCategory[$value["location"]["text"]] = $value["location"]["text"];
}

if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// $status = 'all';
// $type = 'all';
// $location = 'all';

$location;
$type;
$status;

if (isset($_GET['location'])) {
    $location = $_GET['location'];
} else {
    $location = 'Select Location';
}

if (isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    $type = 'Select Flat Type';
}

if (isset($_GET['status'])) {
    $status = $_GET['status'];
} else {
    $status = 'Select Status';
}
// function filter($allProjectsBackup, $location, $type, $status, $allProjects, $totalNumberOfProjects, $numberOfItemsOnAPage){
    foreach($allProjectsBackup as $slug => $value) { 
        if($location != 'Select Location' && $value['location']['text'] != $location){
            unset($allProjects[$slug]);
        }
        if($type != 'Select Flat Type' && $value['type']['text'] != $type){
            unset($allProjects[$slug]);
        }
        if($status != 'Select Status' && $value['status']['text'] != $status){
            unset($allProjects[$slug]);
        }
        $totalNumberOfProjects = count($allProjects);
        $totalPages = ceil($totalNumberOfProjects/$numberOfItemsOnAPage);
    }
// }

// filter($allProjectsBackup, $location, $type, $status, $allProjects, $totalNumberOfProjects, $numberOfItemsOnAPage);

?>


    <section class="find-place">

        <div class="container">

            <div class="row">

                <div class="col-12">

                <?php echo '<form class="find-place-block wow fadeInDown" data-wow-delay="0.3s" action="./featured-project" method="post">

                        <h2 class="find-place-title">Find Your Place</h2>

                        <div class="row">

                            <div class="col-md-3 mb-3">

                                <select class="custom-select" name="status">
                                <option selected value="'.$status.'">'.$status.'</option>';

                                foreach($statusCategory as $name => $value) {
                                    echo '<option value="'.$value.'">'.$name.'</option>';
                                }
                                    

                                echo '</select>

                            </div>

                            <div class="col-md-3 mb-3">

                                <select class="custom-select" name="type">

                                    <option selected value="'.$type.'">'.$type.'</option>';
                                    foreach($typeCategory as $name => $value) {
                                        echo '<option value="'.$value.'">'.$name.'</option>';
                                    }

                                echo '</select>

                            </div>

                            <div class="col-md-3 mb-3">

                                <select class="custom-select" name="location">

                                    <option selected value="'.$location.'">'.$location.'</option>';

                                    foreach($locationCategory as $name => $value) {
                                        echo '<option value="'.$value.'">'.$name.'</option>';
                                    }

                                echo '</select>

                            </div>

                            <div class="col-md-3 mb-3">

                                <button type="submit" name="submit" class="button red mr-0">Search Property</button>

                            </div>

                        </div>';
                        
                            if(isset($_POST['submit'])){
                                $location=$_POST['location'];
                                $type=$_POST['type'];
                                $status=$_POST['status'];
                                echo "<script> location.href='http://localhost/karda-template/featured-project?location=".$location."&type=".$type."&status=".$status."'; </script>";
                                // if($location == 'all' && $type == 'all' && $status == 'all'){
                                    
                                //     $allProjects = $database->getReference('template/userData/featured/data/projects/')->getValue();
                                //     $totalNumberOfProjects = count($allProjects);
                                //     $totalPages = ceil($totalNumberOfProjects/$numberOfItemsOnAPage);
                                // } else{
                                //     foreach($allProjectsBackup as $slug => $value) { 
                                //         if($location != 'all' && $value['location']['text'] != $location){
                                //             unset($allProjects[$slug]);
                                //         }
                                //         if($type != 'all' && $value['type']['text'] != $type){
                                //             unset($allProjects[$slug]);
                                //         }
                                //         if($status != 'all' && $value['status']['text'] != $status){
                                //             unset($allProjects[$slug]);
                                //         }
                                //         $totalNumberOfProjects = count($allProjects);
                                //         $totalPages = ceil($totalNumberOfProjects/$numberOfItemsOnAPage);
                                //     }
                                    
                                // }
                            } 
                            
                    echo '</form>'; ?>

                </div>

            </div>

        </div>

    </section>

    <!-- city wrap -->

    <section class="inner-featured-projects">

        <div class="container">

            <div class="row">

                <?php
                
                $index = 1;
                foreach($allProjects as $key => $value) { 
                    if($index <= ($currentPage*$numberOfItemsOnAPage)-$numberOfItemsOnAPage){
                        
                        $index++;
                        continue;
                    }
                    if($index > $currentPage*$numberOfItemsOnAPage){
                        
                        break;
                    }
                    
                echo '<div class="col-12 col-sm-6 col-lg-4 wow fadeInDown" data-wow-delay="0.3s">

                    <div class="inner-featured-project">

                        <div class="featured-project-img">';

                        if($value['image']['name']){
                            echo '<img src="'.$value['image']['name'].'" class="w-100">';
                        } else {
                            echo '<img src="images/harisiddhi.jpg" class="w-100">';
                        }
                            

                        echo '</div>

                        <div class="inner-featured-project-info">

                            <span class="flat-type">'.$value['type']['text'].'</span>

                            <h3 class="property-name">'.$value['title']['text'].'</h3>

                            <span class="location"><i class="fas fa-map-marker-alt"></i> '.$value['location']['text'].'</span>

                            <span class="area-reg">RERA Registration No. : '.$value['reraDetails']['reraNumber'].'</span>

                            <a href="projects/'.$value['slug']['text'].'" class="button red">READ MORE <i class="fas fa-caret-right"></i></a>

                            <a href="#" class="button grey mr-0">Enquiry</a>

                        </div>

                    </div>

                </div>';
                $index++;
                } ?>

                

            </div>

        </div>

    </section>

    <!-- Featured Project -->

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
                        echo '<a class="page-link" href="./featured-project.php?page='.$previousPage.'">';
                        echo '<i class="fas fa-angle-left"></i></a></li>';
                    }
                ?>

                <?php
                $nextPage;
                if($currentPage < ceil($totalNumberOfProjects/$numberOfItemsOnAPage)){
                    $nextPage = $currentPage + 1;
                } else {
                    $nextPage = $currentPage;
                }
                 
                for($i=1; $i<=ceil($totalNumberOfProjects/$numberOfItemsOnAPage); $i++){
                    
                    if($i == $currentPage){
                        echo '<li class="page-item"><a class="page-link active" href="javaScript:void(0)">'.$i.'</a></li>';
                    } else {
                        echo '<li class="page-item"><a class="page-link" href="./featured-project.php?page='.$i.'">'.$i.'</a></li>';
                    }
                }
                 ?>

                
                <?php
if($currentPage < $totalPages){
    
echo '<li class="page-item">

                     <a class="page-link" href="./featured-project.php?page='.$nextPage.'">

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