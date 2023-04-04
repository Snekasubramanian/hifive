<?php $file_name = "login";
include('templates/header.php') ?>
<div class="login-page  ">
    <div class="login-ses d-flex-al-jc">
        <div class="col-md-6 col-12">
            <?php include('templates/login-left.php') ?>
        </div>
        <div class="col-md-5 col-12 my-3 px-md-0 px-3  login-content ">
            <div class="form-des mt-5">
                <h3>Reset Password</h3>
                <form action="">
                    <div class="mt-4 password-container">
                        <input type="password" id="myInput" placeholder="New Password " class="form-control">
                        <i class="fa-solid fa-eye" onclick="myFunction()"></i>
                    </div>
                    <div class="mt-4 password-container">
                        <input type="password" id="myInputs" placeholder="Conform Password " class="form-control">
                        <i class="fa-solid fa-eye" onclick="myFunctions()"></i>
                    </div>

                    <div class="mt-4  ">
                        <a href="login.php" class="btn-des btn">Get New Password</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<div class="d-none">
    <?php include('templates/footer.php') ?>
</div>