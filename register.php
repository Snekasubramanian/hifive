<?php $file_name = "login";
include('templates/header.php') ?>
<div class="login-page  ">
    <div class="login-ses d-flex-al-jc">
        <div class="col-md-6 col-12">
            <?php include('templates/login-left.php') ?>
        </div>
        <div class="col-md-5 col-12 my-3 px-md-0 px-3">
            <div class="login-content">
                <h3>Register Now</h3>
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#candidate">
                            <img src="./assets/img/candidate.png" alt="candidate">
                            Candidate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#recruiter">
                            <img src="./assets/img/recruiter.png" alt="recruiter">
                            Recruiter</a>
                    </li>
                </ul>
                <div class="tab-content my-3">
                    <div id="candidate" class="  tab-pane active">
                        <?php include('templates/candidate-reg.php') ?> 
                    </div>
                    <div id="recruiter" class="  tab-pane  ">
                        <?php include('templates/recruiter-reg.php') ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="d-none">
    <?php include('templates/footer.php') ?>
</div>