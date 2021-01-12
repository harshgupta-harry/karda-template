<?php
$pageHeading = 'Career';
include ('./config-file.php');
$pageName = 'Career';
include 'header2.php';
?>
<section class="career-form">
    <div class="container">
    <div class="row align-items-stretch">
        <div class="col-12 col-md-8 pr-md-0">
            <form class="form-wrap">
                <div class="row">
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="far fa-user"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="fas fa-phone fa-flip-horizontal"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Mobile No.">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="far fa-envelope"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="far fa-file-alt"></i>
                        </div>
                        <input type="file" id="resume" class="form-control">
                        <label for="resume">Resume (doc | docx | pdf)</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="far fa-comment"></i>
                        </div>
                        <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="button">Submit</button>
                </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4 pl-md-0">
            <div class="info">
                <h2>Career Info</h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <ul>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>2nd floor ,Gulmohar Status,Mahatma Nagar,samarth Nagar ,Nashik-422005 </span>
                </li>
                <li>
                    <i class="fas fa-phone fa-flip-horizontal"></i>
                    <a href="tel:+91-8554994757">+91-8554994757</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:enquirekarda@gmail.com">enquirekarda@gmail.com</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- contact form -->
<?php include 'footer.php';?>