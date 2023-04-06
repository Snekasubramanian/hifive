<!-- footer -->
<footer>

    <div class="footer-design d-flex-jb w-95 my-3">
        <div class="  col-md-3 col-12 my-2 px-3">
            <a href="index.php">
                <img src="./assets/img/logo.png" alt="">
            </a>
            <p>Square Way In is the heart of the design community and the best resource to discover and connect with designers and jobs worldwide.</p>
        </div>
        <div class="  col-md-3 col-12 my-2 px-3">
            <h5>Company</h5>
            <div class="d-flex-al">
                <ul>
                    <li>
                        <a href="home.php">Home </a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="product.php">Product</a>
                    </li>
                </ul>
                <ul>

                    <li>
                        <a href="blog.php">blog</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQ's</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="  col-md-3 col-12 my-2 px-3">
            <h5>Apply on the go</h5>
            <p>Get real-time job updates on our App</p>
            <div class="d-flex-wrap play-store">
                <a href=" ">
                    <img src="./assets/img/apple.png " alt="">
                </a>
                <a href=" ">
                    <img src="./assets/img/play.png " alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- login -->
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunctions() {
        var x = document.getElementById("myInputs");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<!-- login end -->
<!-- owl carousel -->
<script>
    $('.owl-pro').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },

            1000: {
                items: 3
            }
        }
    })
</script>
<!-- owl carousel end -->
<!-- pagination -->
<script>
    pageSize = 6;

    showPage = function(page) {
        $(".line-content").hide();
        $(".line-content").each(function(n) {
            if (n >= pageSize * (page - 1) && n < pageSize * page)
                $(this).show();
        });
    }

    showPage(1);

    $("#pagin li a").click(function() {
        $("#pagin li a").removeClass("current");
        $(this).addClass("current");
        showPage(parseInt($(this).text()))
    });
</script>
<script>
    pageSize = 5;

    showPage = function(page) {
        $(".line-contents").hide();
        $(".line-contents").each(function(n) {
            if (n >= pageSize * (page - 1) && n < pageSize * page)
                $(this).show();
        });
    }

    showPage(1);

    $("#pagins li a").click(function() {
        $("#pagins li a").removeClass("currents");
        $(this).addClass("currents");
        showPage(parseInt($(this).text()))
    });
</script>
<!-- pagination end -->
<!-- job apply now modal -->
<div class="modal fade" id="job-pop">
    <div class="modal-dialog modal-dialog-centered  ">
        <div class="modal-content">
            <button type="button" data-bs-dismiss="modal" class="clse_btn">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="modal-body">

                <div class="con_rig">
                    <h4>Send Message</h4>
                    <form class="mt-3" action="">
                        <div class="d-flex flex-wrap">
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Enter your Name" name="" id="">
                            </div>
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Enter your Email" name="" id="">
                            </div>
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Mobile</label>
                                <input type="number" class="form-control" placeholder="Enter your Mobile" name="" id="">
                            </div>
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Upload Resume</label>
                                <input type="file" class="form-control" placeholder="Enter your Mobile" name="" id="">
                            </div>

                            <div class="col-12 px-2 mb-2">
                                <label for="">Message</label>
                                <textarea class="form-control" rows="3" name="address" placeholder="Enter Your Message" id="comment"></textarea>
                            </div>
                            <div class="sub_mit ps-2">
                                <input class="btn-des" type="submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- modal -->
<!-- job apply now modal -->
<div class="modal fade" id="schedule-pop">
    <div class="modal-dialog modal-dialog-centered  ">
        <div class="modal-content">
            <button type="button" data-bs-dismiss="modal" class="clse_btn">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="modal-body">

                <div class="con_rig">
                    <h4>Interview schedule</h4>
                    <form class="mt-3" action="">
                        <div class="d-flex flex-wrap">
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Type</label>
                                <select class="form-select">
                                    <option>Round 1</option>
                                    <option>Round 2</option>
                                    <option>Round 3</option>
                                </select>
                            </div>
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Date</label>
                                <input type="date" class="form-control" placeholder="Enter your Email" name="" id="">
                            </div>
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Time</label>
                                <input type="text" class="form-control" placeholder="12.00 am" name="" id="">
                            </div>
                            <div class="  col-12 px-2 mb-2">
                                <label for="">Time Duration</label>
                                <input type="text" class="form-control" placeholder="Minutes" name="" id="">
                            </div>

                            <div class="col-12 px-2 mb-2">
                                <label for="">Message</label>
                                <textarea class="form-control" rows="3"  placeholder=" Message" id="comment"></textarea>
                            </div>
                            <div class="sub_mit ps-2">
                                <input class="btn-des" type="submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- modal -->