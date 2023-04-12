<?php $file_name = "recdash";
include('templates/header.php') ?>
<?php include('templates/login-nav.php') ?>
<div class="add-post my-3 w-90">
    <h4>Post a New Job!</h4>
    <form class="mt-3" action="">
        <div class="d-flex flex-wrap">

            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Opening for </label>
                <select class="form-select">
                    <option>Select Work shift</option>
                    <option>Job </option>
                    <option>Internship</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Designation</label>
                <input type="text" class="form-control" placeholder="Enter your Designation" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Industry</label>
                <input type="text" class="form-control" placeholder="Enter your Industry" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab"> Educational Qualification</label>
                <select class="form-select">
                    <option>Select Qualification</option>
                    <option>10th </option>
                    <option>12th</option>
                    <option>Diploma</option>
                    <option>Degree</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Educational Institute</label>
                <input type="text" class="form-control" placeholder="Enter your Institute name" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Specific certifications / licences</label>
                <input type="text" class="form-control" placeholder="Enter certification or licenses" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Gender </label>
                <select class="form-select">
                    <option>Gender</option>
                    <option>Male </option>
                    <option>Female</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Age requirement</label>
                <input type="text" class="form-control" placeholder="Enter your Age" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Experience in years </label>
                <select class="form-select">
                    <option>Select Experience</option>
                    <option>0-1 years </option>
                    <option>1-2 years</option>
                    <option>2-3 years </option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Job Location </label>
                <select class="form-select">
                    <option>Select Location</option>
                    <option>Chennai </option>
                    <option>Madurai</option>
                    <option>Erode </option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Preferred Working Mode </label>
                <select class="form-select">
                    <option>Select working mode</option>
                    <option>Work from home  </option>
                    <option>On-Site</option>
                    <option>Hybrid</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Salary Expectation (minimum) </label>
                <select class="form-select">
                    <option>Select Salary</option>
                    <option>25k - 30k month  </option>
                    <option>30k - 35k month</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Does the position involve travelling locally?</label>
                <select class="form-select">
                    <option>Choose</option>
                    <option>Yes  </option>
                    <option>No</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Does the position involve travelling within the country?</label>
                <select class="form-select">
                    <option>Choose</option>
                    <option>Yes  </option>
                    <option>No</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Does the position involve travelling internationally?</label>
                <select class="form-select">
                    <option>Choose</option>
                    <option>Yes  </option>
                    <option>No</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Expected joining date</label>
                <input type="text" class="form-control" placeholder="Enter your joining date" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Preferred work shift</label>
                <select class="form-select">
                    <option>Select Work Shift</option>
                    <option>Day Shift  </option>
                    <option>Night Shift</option>
                    <option>Any</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Work Hours</label>
                <input type="text" class="form-control" placeholder="Enter your max work hours" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Flexible work hour?</label>
                <select class="form-select">
                    <option>Select Flexible Hours</option>
                    <option>Yes  </option>
                    <option>No</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Does this profile have longer work hours?</label>
                <select class="form-select">
                    <option>Choose</option>
                    <option>Yes  </option>
                    <option>No</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Special consideration for military veterans?</label>
                <select class="form-select">
                    <option>Choose</option>
                    <option>Yes  </option>
                    <option>No</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">Accepting applications till?</label>
                <select class="form-select">
                    <option>Choose</option>
                    <option>Yes  </option>
                    <option>No</option>
                </select>
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Name of company</label>
                <input type="text" class="form-control" placeholder="Enter your company name" name="" id="">
            </div>
            <div class="  col-md-6 col-12 px-2 mb-3">
                <label for="" class="from-lab">
                    Email</label>
                <input type="text" class="form-control" placeholder="Enter your Email" name="" id="">
            </div>
           

        </div>
    </form>
</div>
<?php include('templates/footer.php') ?>