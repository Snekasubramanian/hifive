<div class="nav-menu">
    <nav class="navbar navbar-expand-md navbar-light  w-95">
        <a href="index.php" class="navbar-brand ">
            <img src="./assets/img/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center   min-nav " id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scrolls nav_a">

                <li class="nav-item">
                    <a class="nav-link  <?php if ($file_name == "home") {
                                            echo "active";
                                        } ?>" aria-current="page" href="index.php">Home

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if ($file_name == "job") {
                                            echo "active";
                                        } ?>" aria-current="page" href="job.php">Jobs

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if ($file_name == "about") {
                                            echo "active";
                                        } ?>" aria-current="page" href="about.php">About us

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  <?php if ($file_name == "blog") {
                                            echo "active";
                                        } ?>" aria-current="page" href="blog.php">Blog

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if ($file_name == "faq") {
                                            echo "active";
                                        } ?>" aria-current="page" href="faq.php">FAQ's

                    </a>
                </li>
                <li class="nav-item my-md-0 my-2">
                    <a class="btn-des " href="login.php">Login</a>
                </li>
            </ul>

        </div>

    </nav>
</div>