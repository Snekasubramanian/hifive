<?php $file_name = "candash";
include('templates/header.php') ?>
<?php include('templates/login-nav.php') ?>
<div class="banner-designs">
    <div class="d-flex-al-jc">
        <div class="col-md-7 col-12 px-3 my-2">
            <div class="featur-job bg-white d-flex-wrap">
                <div class=" col-md-8 col-12 px-2">
                    <div class="d-flex-wrap">
                        <div class="img-bg col-2">
                            <img src="./assets/img/can.png" alt="job-logo">
                        </div>
                        <div class="job-comp px-2 col-8">
                            <h5>Candidate</h5>
                            <p>UI/UX Designer</p>
                        </div>

                    </div>
                </div>
                <div class=" col-md-4 col-12 px-2">
                    <div class="mt-4 text-end ">
                        <a class="btn-des" href="./assets/img/resume.pdf" download> Download CV</a>

                    </div>
                </div>
                <div class="d-flex-al my-3">
                    <div class="icon-det d-flex-al">
                        <span class="material-symbols-outlined">
                            payments
                        </span>
                        <h6> 20k- 27k</h6>
                    </div>
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
            </div>
        </div>

    </div>
</div>
<div class="tab-design  w-95 my-3 ">
    <div class="call-back w-50">
        <h3>Video Call</h3>
        <div class="d-flex-al-jc my-3">
            <span class="material-symbols-outlined">
                video_file
            </span>
            <h6 class="m-0">Interview schedule</h6>
        </div>
        <div class="my-3">
            <a href="https://meet.google.com/kve-pnnk-apf " class="btn-des ">Click Here </a>
        </div>
    </div>
</div>
<?php include('templates/footer.php') ?>