<?php $file_name = "recdash";
include('templates/header.php') ?>
<?php include('templates/login-nav.php') ?>
<div class="add-post my-3 w-90">
    <h4>Post a New Job!</h4>
    <form class="mt-3" action="">
        <div class="d-flex flex-wrap">

            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Job Title</label>
                <input type="text" class="form-control" placeholder="Job Title" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">
                    Job Type</label>
                <input type="text" class="form-control" placeholder="Job Type" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="  Email Address" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Mobile</label>
                <input type="number" class="form-control" placeholder="Phone Number" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Categories</label>
                <input type="text" class="form-control" placeholder="Categories" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Designation</label>
                <input type="text" class="form-control" placeholder="Designation" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Salary</label>
                <input type="text" class="form-control" placeholder="Salary" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Qualification</label>
                <input type="text" class="form-control" placeholder="Qualification" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Job Skills</label>
                <input type="text" class="form-control" placeholder="Job Skills" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Application Deadline Date</label>
                <input type="date" class="form-control" placeholder="Job Skills" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">Country </label>
                <input type="text" class="form-control" placeholder="Country" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="">City </label>
                <input type="text" class="form-control" placeholder="City" name="" id="">
            </div>
            <div class="sub_mit ps-2">
              <a href="recurdash.php" class="btn-des">Post Job</a>
            </div>
        </div>
    </form>
</div>
<?php include('templates/footer.php') ?>