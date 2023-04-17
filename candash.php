<?php $file_name = "candash";
include('templates/header.php') ?>
<?php include('templates/login-nav.php') ?>
<div class="my-3 w-95 d-flex-wrap">
    <div class=" col-lg-3 col-md-4 col-12 px-2 my-2">
        <div class="dash-board">
            <div class="d-flex-wrap">
                <div class="col-4  px-2 my-2 text-center">
                    <img src="./assets/img/candidates.png" alt="">
                </div>
                <div class="col-8 px-2 my-2">
                    <h6>
                        Candidate</h6>
                    <p>Designer</p>
                    <!-- <a href="editprofile.php" class="btn-des">Edit Profile</a> -->
                </div>
            </div>
            <ul class="nav nav-pills flex-column" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#dashboard">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#profile">
                        <span class="material-symbols-outlined">
                            manage_accounts
                        </span>
                        Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#job">
                        <span class="material-symbols-outlined">
                            receipt_long
                        </span>

                        My applied</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#shortlist">
                        <span class="material-symbols-outlined">
                            bookmark
                        </span>
                        Shortlist Job
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#meeting">
                        <span class="material-symbols-outlined">
                            video_file
                        </span>
                        Schedule Meeting
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#result">
                        <span class="material-symbols-outlined">
                            fact_check
                        </span>
                        Result
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#subs">
                        <span class="material-symbols-outlined">
                            subscriptions
                        </span>
                        Subscribition
                    </a>
                </li>

            </ul>

        </div>
    </div>
    <div class=" col-lg-9 col-md-8 col-12 px-4 my-2">
        <div class="tab-content">
            <div id="dashboard" class=" tab-pane active">
                <div class="apli-design">
                    <h4>Welcome back! Candidate </h4>
                    <div class="d-flex-wrap my-4 ">
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="apl-count applied-job">
                                <span class="material-symbols-outlined">
                                    business_center
                                </span>
                                <div class="count-des my-2 ps-2">
                                    <h5>08</h5>
                                    <h6>Today Applied Job</h6>
                                </div>
                                <img src="./assets/img/rec.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="apl-count shor-list">
                                <span class="material-symbols-outlined">
                                    bookmark
                                </span>
                                <div class="count-des my-2 ps-2">
                                    <h5>44</h5>
                                    <h6>Today Shortlisted</h6>
                                </div>
                                <img src="./assets/img/rec.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="apl-count inter-job">
                                <span class="material-symbols-outlined">
                                    calendar_month
                                </span>
                                <div class="count-des my-2 ps-2">
                                    <h5>08</h5>
                                    <h6>Today Interview</h6>
                                </div>
                                <img src="./assets/img/rec.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="apl-count reject-list">
                                <span class="material-symbols-outlined">
                                    settings_suggest
                                </span>
                                <div class="count-des my-2 ps-2">
                                    <h5>44</h5>
                                    <h6>Today Shortlisted</h6>
                                </div>
                                <img src="./assets/img/rec.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="profile" class=" tab-pane  ">
                <div class="profile-design">
                    <h4>Profile Settings</h4>
                    <ul class="nav nav-pills  " role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#basic">
                                Basic Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " data-bs-toggle="pill" href="#educations">
                                Education
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " data-bs-toggle="pill" href="#experience">
                                Experience
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " data-bs-toggle="pill" href="#skills">
                                Skills
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="basic" class=" tab-pane active">
                            <div class=" form-design mt-3">
                                <div class="form-des  ">
                                    <h5>Basic Information</h5>
                                    <p>
                                        We recommend at least one education entry. </p>
                                    <form action="">
                                        <div class="d-flex-wrap">
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Full Name </label>
                                                <input type="name" placeholder="Enter your Full Name " class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">E-mail ID </label>
                                                <input type="email" placeholder="Enter your E-mail ID" class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Phone Number</label>
                                                <input type="number" placeholder="Enter your Phone Number" class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Date of Birth </label>
                                                <input type="date" placeholder="Enter your Full Name " class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Gender </label>
                                                <select class="form-select">
                                                    <option>Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Age </label>
                                                <input type="text" placeholder="Enter your Age " class="form-control">

                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Qualification </label>
                                                <input type="text" placeholder="Enter your Qualification " class="form-control">

                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Salary </label>
                                                <input type="text" placeholder="Enter your Expatance Salary " class="form-control">

                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Job Title </label>
                                                <input type="text" placeholder="Enter your Job Title" class="form-control">

                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Location </label>
                                                <input type="text" placeholder="Enter your Location" class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">CV Attachment </label>
                                                <input type="file" placeholder="Enter your Location" class="form-control">
                                            </div>
                                            <div class="mt-4  col-12">
                                                <a href=" " class="btn-des  ">Save Changes</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="educations" class=" tab-pane  ">
                            <div class=" form-design mt-3">
                                <div class="form-des  ">
                                    <h5>Education</h5>
                                    <p>
                                        We recommend at least one education entry. </p>
                                    <form action="">
                                        <div class="d-flex-wrap">
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">University </label>
                                                <input type="name" placeholder="Enter your University " class="form-control">
                                            </div>

                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Level of Education </label>
                                                <select class="form-select">
                                                    <option>Select Level of Education</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>

                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">From </label>
                                                <input type="date" placeholder="Enter your Location" class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">To </label>
                                                <input type="date" placeholder="Enter your Location" class="form-control">
                                            </div>

                                            <div class="mt-4  col-12">
                                                <a href=" " class="btn-des  ">Save Changes</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="experience" class=" tab-pane  ">
                            <div class=" form-design mt-3">
                                <div class="form-des  ">
                                    <h5>Experience</h5>
                                    <p>We recommend at least one experience entry.</p>
                                    <form action="">
                                        <div class="d-flex-wrap">
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">Job Title </label>
                                                <input type="name" placeholder="Enter your Job Title " class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab"> Company </label>
                                                <input type="name" placeholder="Enter your Curent Company " class="form-control">
                                            </div>


                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">From </label>
                                                <input type="date" placeholder="Enter your Location" class="form-control">
                                            </div>
                                            <div class="mt-2 col-md-6 col-12 px-2">
                                                <label for="" class="from-lab">To </label>
                                                <input type="date" placeholder="Enter your Location" class="form-control">
                                            </div>

                                            <div class="mt-4  col-12">
                                                <a href=" " class="btn-des  ">Save Changes</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="skills" class=" tab-pane  ">
                            <div class=" form-design mt-3">
                                <div class="form-des  ">
                                    <h5>Skills </h5>
                                    <p>We recommend at least one experience entry.</p>
                                    <form action="">
                                        <div class="d-flex-wrap">
                                            <div class="mt-2  col-12 px-2">
                                                <label for="" class="from-lab"> Skills </label>
                                                <input type="name" placeholder="Enter your Skills " class="form-control">
                                            </div>


                                            <div class="mt-4  col-12">
                                                <a href=" " class="btn-des  ">Save Changes</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="job" class=" tab-pane  ">
                <div class="apli-design">
                    <h4>Applied Jobs</h4>
                    <div class="d-flex-wrap head-bar my-3">
                        <div class="col-md-6 col-12 ">
                            <div class="job-head">
                                <h6>Job Title</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6>Date </h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Status</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Actions</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-border">
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-6 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>Finance Manager & Health</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>Design</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-2 col-12 px-2 my-2">
                                <div class="job-heads">
                                    <h6>July 20, 2021</h6>
                                </div>
                            </div>
                            <div class="col-sm-2 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6> Pending</h6>
                                </div>
                            </div>
                            <div class="col-sm-2 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="job-applied.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div id="shortlist" class=" tab-pane  ">
                <div class="apli-design">
                    <h4>Shortlist Jobs</h4>
                    <div class="d-flex-wrap head-bar my-3">
                        <div class="col-md-5 col-12 ">
                            <div class="job-head">
                                <h6>Job Title</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6> Posted Date </h6>
                            </div>
                        </div>

                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Status</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Actions</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-border">
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-5 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>Finance Manager & Health</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>Design</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-heads">
                                    <h6>July 20, 2021</h6>
                                </div>
                            </div>
                            <div class="col-sm-2 col-12 px-2 my-2">
                                <div class="job-heads stat-pending">
                                    <h6>Failed</h6>
                                </div>
                            </div>
                            <div class="col-sm-2 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="short-list.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div id="meeting" class=" tab-pane  ">
                <div class="apli-design">
                    <h4>Meetings</h4>
                    <div class="d-flex-wrap my-4 ">
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="meeting-design">
                                <div class="d-flex-al com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>Finance Manager & Health</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-al my-3">

                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            calendar_month
                                        </span>
                                        <h6> 20 june 2023</h6>

                                    </div>
                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            schedule
                                        </span>
                                        <h6> 9.40am-12.00pm</h6>
                                    </div>

                                </div>
                                <div class="d-flex-al my-3">
                                    <div class="icon-det">
                                        <a href="schedule.php" class="d-flex-al">
                                            <span class="material-symbols-outlined">
                                                video_call
                                            </span>
                                            <h6> Interview schedule</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="meeting-design">
                                <div class="d-flex-al com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>Finance Manager & Health</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-al my-3">

                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            calendar_month
                                        </span>
                                        <h6> 20 june 2023</h6>

                                    </div>
                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            schedule
                                        </span>
                                        <h6> 9.40am-12.00pm</h6>
                                    </div>

                                </div>
                                <div class="d-flex-al my-3">
                                    <div class="icon-det">
                                        <a href="schedule.php" class="d-flex-al">
                                            <span class="material-symbols-outlined">
                                                video_call
                                            </span>
                                            <h6> Interview schedule</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="meeting-design">
                                <div class="d-flex-al com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>Finance Manager & Health</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-al my-3">

                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            calendar_month
                                        </span>
                                        <h6> 20 june 2023</h6>

                                    </div>
                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            schedule
                                        </span>
                                        <h6> 9.40am-12.00pm</h6>
                                    </div>

                                </div>
                                <div class="d-flex-al my-3">
                                    <div class="icon-det">
                                        <a href="schedule.php" class="d-flex-al">
                                            <span class="material-symbols-outlined">
                                                video_call
                                            </span>
                                            <h6> Interview schedule</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="meeting-design">
                                <div class="d-flex-al com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>Finance Manager & Health</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-al my-3">

                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            calendar_month
                                        </span>
                                        <h6> 20 june 2023</h6>

                                    </div>
                                    <div class="icon-det d-flex-al">
                                        <span class="material-symbols-outlined">
                                            schedule
                                        </span>
                                        <h6> 9.40am-12.00pm</h6>
                                    </div>

                                </div>
                                <div class="d-flex-al my-3">
                                    <div class="icon-det">
                                        <a href="schedule.php" class="d-flex-al">
                                            <span class="material-symbols-outlined">
                                                video_call
                                            </span>
                                            <h6> Interview schedule</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="result" class="tab-pane">
                <div class="apli-design">
                    <h4>Job Results</h4>
                    <div class="d-flex-wrap head-bar my-3">
                        <div class="col-md-5 col-12 ">
                            <div class="job-head">
                                <h6>Company Name</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="job-head">
                                <h6> Applied on </h6>
                            </div>
                        </div>

                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Status</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Actions</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-border">
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-5 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>Finance Manager & Health Pvt Ltd.</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>Design</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 col-sm-4 col-12 px-2 my-2">
                                <div class="job-heads">
                                    <h6>July 20, 2021</h6>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-12 px-2 my-2">
                                <div class="job-heads stat-selected">
                                    <h6>Selected</h6>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="result-view.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="table-border">
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-5 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">
                                    <div class="col-lg-2  mcol-3 px-2">
                                        <img src="./assets/img/y11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>CustomerLabs Digital Solution</h6>
                                        <div class="d-flex-al op-des">
                                            <span class="material-symbols-outlined">
                                                business_center
                                            </span>
                                            <p>UI/UX Designer</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 col-sm-4 col-12 px-2 my-2">
                                <div class="job-heads">
                                    <h6>July 20, 2021</h6>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-12 px-2 my-2">
                                <div class="job-heads stat-pending">
                                    <h6>Rejected</h6>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="result-view.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div id="subs" class="tab-pane">
                <div class="apli-design">
                    <h4>Subscribition</h4>
                    <div class="my-3 subscr-des d-flex-al">
                        <div class="col-md-6 col-12 px-3 my-2">
                            <img src="./assets/img/app2.png" alt="">
                        </div>
                        <div class="col-md-6 col-12 px-3 my-2">
                            <div class="my-plan">
                                <h5>My plan</h5>
                                <h6>RS. 199 - 23 days</h6>
                                <p>Expires on june 10,2023</p>
                            </div>
                        </div>
                    </div>
                    <h4>View Plans</h4>
                    <div class="my-3 subscr-des d-flex-al">
                        <div class="col-md-4 col-12 px-3 my-2">
                            <div class="plans-des">
                                <p>Plan</p>
                                <h6>₹ 159</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 px-3 my-2">
                            <div class="plans-des">
                                <p>Validate</p>
                                <h6>26 Days</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 px-3 my-2">
                             <a href="" class="btn-des"  data-bs-toggle="modal" data-bs-target="#buynow-pop">Buy Now</a>
                        </div>
                    </div>
                    <div class="my-3 subscr-des d-flex-al">
                        <div class="col-md-4 col-12 px-3 my-2">
                            <div class="plans-des">
                                <p>Plan</p>
                                <h6>₹ 199</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 px-3 my-2">
                            <div class="plans-des">
                                <p>Validate</p>
                                <h6>23 Days</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 px-3 my-2">
                             <a href="" class="btn-des"  data-bs-toggle="modal" data-bs-target="#buynow-pop">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>