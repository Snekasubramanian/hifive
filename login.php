<?php $file_name = "login";
include('templates/header.php') ?>
<div class="login-page  ">
    <div class="login-ses d-flex-al-jc">
        <div class="col-md-6 col-12">
            <?php include ('templates/login-left.php')?>
        </div>
        <div class="col-md-5 col-12 my-3 px-md-0 px-3">
            <div class="login-content">
                <h3>Login</h3>
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
                        <div class="form-des mt-5">
                            <form action="">
                                <div class="mt-4">
                                    <input type="email" placeholder="E-mail ID" class="form-control">
                                </div>
                                <div class="mt-4 password-container">
                                    <input type="password" id="myInput" placeholder="Password..." class="form-control">
                                    <i class="fa-solid fa-eye" onclick="myFunction()"></i>
                                </div>
                                <div class="mt-4">
                                    <h6> <a href="forgot.php">Forgot Password ?</a></h6>
                                </div>
                                <div class="mt-4  ">
                                    <a href=" candash.php" class="btn-des btn">Continue</a>
                                </div>
                                <div class="mt-4">
                                    <h6>Don't have an account ? <a href="register.php">Register Now</a></h6>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="recruiter" class="  tab-pane  ">
                        <div class="form-des mt-5">
                            <form action="">
                                <div class="mt-4">
                                    <input type="email" placeholder=" Recruiter e-mail ID" class="form-control">
                                </div>
                                <div class="mt-4 password-container">
                                    <input type="password" id="myInput" placeholder="Password..." class="form-control">
                                    <i class="fa-solid fa-eye" onclick="myFunction()"></i>
                                </div>
                                <div class="mt-4">
                                    <h6> <a href="forgot.php">Forgot Password ?</a></h6>
                                </div>
                                <div class="mt-4  ">
                                    <a href="recurdash.php" class="btn-des btn">Continue</a>
                                </div>
                                <div class="mt-4">
                                    <h6>Don't have an account ? <a href="register.php">Register Now</a></h6>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<div class="d-none">
    <?php include('templates/footer.php') ?>
</div>