<?php $file_name = "home";
include('templates/header.php') ?>
<?php include('templates/navbar.php') ?>
<div class="banner-design">
    <div class="d-flex-al">
        <div class="col-md-6 col-12 px-3 my-2">
            <div class="baner-left">
                <h6>BEST JOBS PLACE</h6>
                <h1>The Easiest Way to Get Your New Job</h1>
                <p>Each month, more than 3 million job seekers turn to website in their search for work, making over
                    140,000 applications every single day</p>
                <div class="search-container my-3">
                    <form action="">
                        <div class="sea d-flex">
                            <!-- <select class="form-control form-select" name="branch" required>
                                <option selected disabled>Location</option>
                                <option value="Trichy">Trichy</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Madurai">Madurai</option>
                            </select> -->
                            <div id="searchform">
                                <input type="text" id="search-bar" autocomplete="off" type="text" class="form-control" placeholder="Job title" />
                                <ul class="output" style="display: none"></ul>
                                <button class="btn-sea d-sm-block d-none" type="submit">
                                    Find Now
                                </button>
                                <button class="btn-sea d-sm-none d-block" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 px-3 my-2">
            <div class="banr-right">
                <img src="./assets/img/banners.png" alt="banners">
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- job featured -->
<div class="my-4 w-95">
    <div class="title-design text-center">
        <h2>Recent Jobs</h2>
        <p>The #1 Job Board for Hiring Creative Professionals</p>
    </div>
    <div class="owl-carousel owl-theme owl-pro my-3">
        <div class="item">
            <div class="featur-job">
                <div class="d-flex-al">
                    <div class="img-bg">
                        <img src="./assets/img/job-logo.png" alt="job-logo">
                    </div>
                    <div class="job-comp px-2">
                        <h5>Software Engineering</h5>
                        <p>Software Pvt.Ltd.</p>
                    </div>
                </div>
                <div class="d-flex-al my-3">
                    <div class="icon-det d-flex-al">
                        <span class="material-symbols-outlined">
                            schedule
                        </span>
                        <h6> 8 months ago</h6>
                    </div>
                    <div class="icon-det d-flex-al">
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                        <h6> Chennai</h6>
                    </div>
                </div>
                <div class="skils-det">
                    <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim
                        id
                        est laborum. Seden utem perspiciatis undesieu omnis iste natus error…</p>
                    <h5>Skills</h5>
                    <ul class="d-flex-al">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JaveScript</li>
                        <li>bootstrap</li>
                    </ul>
                </div>
                <div class="mt-4  ">
                    <a href="jobdetails.php" class="btn-des">Apply Now</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- job featured end -->

<!-- find job -->
<div class="my-3 w-95 find-job d-flex-al">
    <div class="col-md-6 col-12 px-3 my-2">
        <div class="find-img">
            <img src="./assets/img/find.png" alt="">
        </div>
    </div>
    <div class="col-md-6 col-12 px-3 my-2">
        <div class="find-content">
            <h6>Find jobs</h6>
            <h2>Create free count and start apply your dream job today</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy.
            </p>
            <div class="mt-4  ">
                <a href="job.php" class="btn-des"> Explore More</a>
            </div>
        </div>
    </div>
</div>
<!-- find job end -->
<!-- blog design  -->
<div class="my-4  blog-bg">
    <div class="w-95">
        <div class="title-design text-center">
            <h2>Recent News Articles</h2>
            <p>Fresh job related news content posted each day.</p>
        </div>
        <div class="owl-carousel owl-theme owl-pro my-3 ">
            <div class="item">
                <div class="cou_card">
                    <div class="cou_img">
                        <img src="./assets/img/blog2.jpg" alt="" />
                    </div>
                    <div class="d-flex-al my-3">
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                        <h6>April 26, 2023</h6>
                    </div>

                    <h5>5 Tips For Your Job Interviews</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna.
                    </p>
                    <div class="  text-center my-2 ">
                        <a class="btn-des" href="blog-view.php">View more</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="cou_card">
                    <div class="cou_img">
                        <img src="./assets/img/blog.jpg" alt="" />
                    </div>
                    <div class="d-flex-al my-3">
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                        <h6>April 26, 2023</h6>
                    </div>

                    <h5>5 Tips For Your Job Interviews</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna.
                    </p>
                    <div class="  text-center my-2 ">
                        <a class="btn-des" href="blog-view.php">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog design  end -->
<!-- Recruiting? -->
<div class="d-flex-al my-3 w-90 ">
    <div class="col-md-6 col-12 px-2 my-2 ">
        <div class="d-flex-ae requit-bg">
            <div class="col-md-6 col-12 p-3 my-2">
                <div class="rec-cont">
                    <h5>Candidate?</h5>
                    <p>Advertise your jobs to millions of monthly users and search 15.8 million CVs in our database.</p>
                    <div class="mt-4  ">
                        <a href="login.php" class="btn-des"> Start Candidate Now</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12 ps-3  ">
                <div class="rec-conts">
                    <img src="./assets/img/rec.png" alt="Recruiting">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12 px-2 my-2">
        <div class="d-flex-ae  requit-bg">
            <div class="col-md-6 col-12 p-3 my-2">
                <div class="rec-cont">
                    <h5>Recruiting?</h5>
                    <p>Advertise your jobs to millions of monthly users and search 15.8 million CVs in our database.</p>
                    <div class="mt-4  ">
                        <a href="login.php" class="btn-des"> Start Recruiting Now</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12 ps-3  ">
                <div class="rec-conts">
                    <img src="./assets/img/rec.png" alt="Recruiting">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recruiting end -->
<?php include('templates/footer.php') ?>