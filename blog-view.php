<?php $file_name = "blog";
include('templates/header.php') ?>
<?php include('templates/navbar.php') ?>
<div class="  blog-page my-3 w-95">
    <div class="title-design text-center">
        <h2> Our Blogs</h2>
        <p>Fresh job related news content posted each day.</p>
    </div>
    <div class="d-flex-wrap blog-view">
        <div class="col-md-8 col-12 px-3 my-2">
            <img src="./assets/img/blog2.jpg" alt="blog" class="w-100">
            <div class="d-flex-al my-3 date-color">
                <span class="material-symbols-outlined">
                    calendar_month
                </span>
                <h6>April 26, 2023</h6>
            </div>
            <h3>5 Tips For Your Job Interviews</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna.
            </p>
        </div>
        <div class="col-md-4 col-12 px-3 my-2">
            <div class="post-sticky">
                <div class="sidebar-blog">
                    <h4>Latest Blogs</h4>
                    <div class="d-flex-al my-2 border-design">
                        <div class="col-5 pe-2">
                            <img src="./assets/img/blog.jpg" alt="" />
                        </div>
                        <div class="col-7 ps-2">
                            <a href="blog-view.php">
                                <h5>5 Tips For Your Job Interviews</h5>
                                <div class="d-flex-al my-3 date-color">
                                    <span class="material-symbols-outlined">
                                        calendar_month
                                    </span>
                                    <h6>April 26, 2023</h6>
                                </div>

                            </a>

                        </div>
                    </div>
                    <div class="d-flex-al my-2 border-design">
                        <div class="col-5 pe-2">
                            <img src="./assets/img/blog.jpg" alt="" />
                        </div>
                        <div class="col-7 ps-2">
                            <a href="blog-view.php">
                                <h5>5 Tips For Your Job Interviews</h5>
                                <div class="d-flex-al my-3 date-color">
                                    <span class="material-symbols-outlined">
                                        calendar_month
                                    </span>
                                    <h6>April 26, 2023</h6>
                                </div>

                            </a>

                        </div>
                    </div>
                    <div class="d-flex-al my-2 border-design">
                        <div class="col-5 pe-2">
                            <img src="./assets/img/blog.jpg" alt="" />
                        </div>
                        <div class="col-7 ps-2">
                            <a href="blog-view.php">
                                <h5>5 Tips For Your Job Interviews</h5>
                                <div class="d-flex-al my-3 date-color">
                                    <span class="material-symbols-outlined">
                                        calendar_month
                                    </span>
                                    <h6>April 26, 2023</h6>
                                </div>

                            </a>

                        </div>
                    </div>
                </div>
                <div class="bl_en my-3 ">
                    <h5>Grow your career with us!</h5>
                    <div class="re_ser my-3">
                        <a href=" " data-bs-toggle="modal" data-bs-target="#job-pop" class="btn-des">Enroll now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('templates/footer.php') ?>