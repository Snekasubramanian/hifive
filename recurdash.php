<?php $file_name = "recdash";
include('templates/header.php') ?>
<?php include('templates/login-nav.php') ?>
<div class="my-3 w-95 d-flex-wrap">
    <div class="   col-md-4 col-12 px-2 my-2">
        <div class="dash-board">
            <div class="d-flex-wrap">
                <div class="col-3  px-2 my-2 text-center">
                    <img src="./assets/img/y11.jpg" alt="">
                </div>
                <div class="col-9 px-2 my-2">
                    <h6>
                        Finance Mangement pvt.ltd</h6>
                    <p>Software</p>
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
                    <a class="nav-link" data-bs-toggle="pill" href="#post">
                        <span class="material-symbols-outlined">
                            manage_accounts
                        </span>
                        Post Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#job">
                        <span class="material-symbols-outlined">
                            receipt_long
                        </span> Applicants
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#shortlist">
                        <span class="material-symbols-outlined">
                            bookmark
                        </span>

                        Shortlist Candidate
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#meeting">
                        <span class="material-symbols-outlined">
                            video_file
                        </span>
                        Interview
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
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#selected">
                        <span class="material-symbols-outlined">
                            group
                        </span>
                        Selected Candidate
                    </a>
                </li>

            </ul>

        </div>
    </div>
    <div class="   col-md-8 col-12 px-4 my-2">
        <div class="tab-content">
            <div id="dashboard" class=" tab-pane active">
                <div class="apli-design">
                    <h4>Welcome back! </h4>
                    <div class="d-flex-wrap my-4 ">
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="apl-count applied-job">
                                <span class="material-symbols-outlined">
                                    business_center
                                </span>
                                <div class="count-des my-2 ps-2">
                                    <h5>08</h5>
                                    <h6> Posted Jobs</h6>
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
                                    <h6> Shortlisted Candidate</h6>
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
            <div id="post" class=" tab-pane ">
                <div class="apli-design">
                    <div class="d-flex-al-jb">
                        <div class="d-flex-al">
                            <h4> Post Jobs</h4>
                            <div class="dropdown px-2">
                                <a class="btn-des   dropdown-toggle" data-bs-toggle="dropdown">
                                    Filter
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 1</a></li>
                                    <li><a class="dropdown-item" href="#">Link 2</a></li>
                                    <li><a class="dropdown-item" href="#">Link 3</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="add-post.php" class="btn-des">+ Add</a>
                    </div>
                    <div class="d-flex-wrap head-bar my-3">
                        <div class="col-md-5 col-12 ">
                            <div class="job-head">
                                <h6>Job Title</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6>Applications </h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Status</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-12  ">
                            <div class="job-head">
                                <h6> Posted</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-border">

                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-5 col-12 px-2 my-2">
                                <div class="recuit-des ">
                                    <div class="d-flex-al mb-2">
                                        <span class="material-symbols-outlined">
                                            business_center
                                        </span>
                                        <h6>sales Executive</h6>
                                    </div>
                                    <p>Marketing & Sales / Remote</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <a href="applicant-details.php">
                                    <div class="job-heads">
                                        <h6>3 Application</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 col-12 px-2 my-2">
                                <div class="rec-status closed-color">
                                    <h6> Closed</h6>
                                </div>
                            </div>
                            <div class="col-sm-2 col-12 px-2 my-2">
                                <div class="rect-status ">
                                    <h6>2023-04-04</h6>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div id="job" class=" tab-pane ">
                <div class="apli-design">
                    <div class="d-flex-al-jb">
                        <h4> Applicants</h4>
                        <div class="dropdown px-2">
                            <a class="btn-des   dropdown-toggle" data-bs-toggle="dropdown">
                                Filter
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                                <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex-wrap head-bar my-3">
                        <div class="col-md-3 col-12 ">
                            <div class="job-head">
                                <h6>ID</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 ">
                            <div class="job-head">
                                <h6>Position</h6>
                            </div>
                        </div>

                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6> Status</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6> Infomation</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-border">
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-3 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">

                                    <div class="  col-9 job-company px-2">
                                        <h6>
                                            #12349</h6>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="d-flex-al op-des">
                                    <span class="material-symbols-outlined">
                                        business_center
                                    </span>
                                    <p>Design</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6 class="text-success"> Approved</h6>
                                    Applied:2023-03-06
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="can-list.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-3 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">
                                    <!-- <div class="   col-3 px-2">
                                        <img src="./assets/img/can.png" alt="">
                                    </div> -->
                                    <div class="  col-9 job-company px-2">
                                        <h6>
                                            #12349</h6>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="d-flex-al op-des">
                                    <span class="material-symbols-outlined">
                                        business_center
                                    </span>
                                    <p>Design</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6 class="text-success"> Approved</h6>
                                    Applied:2023-03-06
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="can-list.php">
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
            <div id="shortlist" class=" tab-pane ">
                <div class="apli-design">
                    <div class="d-flex-al-jb">
                        <h4> Applicants</h4>
                        <div class="dropdown px-2">
                            <a class="btn-des   dropdown-toggle" data-bs-toggle="dropdown">
                                Filter
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                                <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex-wrap head-bar my-3">
                        <div class="col-md-3 col-12 ">
                            <div class="job-head">
                                <h6>ID</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 ">
                            <div class="job-head">
                                <h6>Position</h6>
                            </div>
                        </div>

                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6> Status</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6> Infomation</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-border">
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-3 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">

                                    <div class="  col-9 job-company px-2">
                                        <h6>
                                            #12349</h6>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="d-flex-al op-des">
                                    <span class="material-symbols-outlined">
                                        business_center
                                    </span>
                                    <p>Design</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6 class="text-success"> Approved</h6>
                                    Applied:2023-03-06
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="can-list.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-3 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">
                                    <!-- <div class="   col-3 px-2">
                                        <img src="./assets/img/can.png" alt="">
                                    </div> -->
                                    <div class="  col-9 job-company px-2">
                                        <h6>
                                            #12349</h6>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="d-flex-al op-des">
                                    <span class="material-symbols-outlined">
                                        business_center
                                    </span>
                                    <p>Design</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6 class="text-success"> Approved</h6>
                                    Applied:2023-03-06
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="can-list.php">
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

            <div id="meeting" class="tab-pane">
                <div class="apli-design">
                    <h4>Meetings</h4>
                    <div class="d-flex-wrap my-4 ">
                        <div class="col-md-6 col-12 px-2 my-2">
                            <div class="meeting-design">
                                <div class="d-flex-al com-details">

                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>#12349</h6>
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
                                        <a href="re-schedule.php" class="d-flex-al">
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
                                    <!-- <div class="col-md-3  col-3 px-2">
                                        <img src="./assets/img/can.png" alt="">
                                    </div> -->
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>#12349</h6>
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
                                        <a href="re-schedule.php" class="d-flex-al">
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
                                    <!-- <div class="col-md-3  col-3 px-2">
                                        <img src="./assets/img/can.png" alt="">
                                    </div> -->
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>#12349</h6>
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
                                        <a href="re-schedule.php" class="d-flex-al">
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
                                    <!-- <div class="col-md-3  col-3 px-2">
                                        <img src="./assets/img/can.png" alt="">
                                    </div> -->
                                    <div class="col-md-8 col-9 job-company px-2">
                                        <h6>#12349</h6>
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
                                        <a href="re-schedule.php" class="d-flex-al">
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
                            <a href="" class="btn-des">Buy Now</a>
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
                            <a href="" class="btn-des">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="selected" class=" tab-pane ">

                <div class="apli-design">
                    <h4>Selected Candidate</h4>
                    <div class="d-flex-wrap head-bar my-3">
                        <div class="col-md-3 col-12 ">
                            <div class="job-head">
                                <h6>ID</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 ">
                            <div class="job-head">
                                <h6>Position</h6>
                            </div>
                        </div>

                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6> Status</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-12  ">
                            <div class="job-head">
                                <h6> Infomation</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-border">
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-3 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">

                                    <div class="  col-9 job-company px-2">
                                        <h6>
                                            #12349</h6>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="d-flex-al op-des">
                                    <span class="material-symbols-outlined">
                                        business_center
                                    </span>
                                    <p>Design</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6 class="text-success"> Approved</h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="select-candidate.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-3 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">

                                    <div class="  col-9 job-company px-2">
                                        <h6>
                                            #12349</h6>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="d-flex-al op-des">
                                    <span class="material-symbols-outlined">
                                        business_center
                                    </span>
                                    <p>Design</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6 class="text-success"> Approved</h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="select-candidate.php">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex-al bor-bot my-2">
                            <div class="col-md-3 col-12 px-2 my-2">
                                <div class="d-flex-wrap com-details">

                                    <div class="  col-9 job-company px-2">
                                        <h6>
                                            #12349</h6>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="d-flex-al op-des">
                                    <span class="material-symbols-outlined">
                                        business_center
                                    </span>
                                    <p>Design</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <h6 class="text-success"> Approved</h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 px-2 my-2">
                                <div class="job-status">
                                    <a href="select-candidate.php">
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
        </div>
    </div>
</div>


<?php include('templates/footer.php') ?>