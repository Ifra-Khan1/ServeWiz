<?php
include('includes/navebar.php');
include('includes/config.php');

?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/m.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">One call away from your doorstep</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">KEEP THE BEST QUALITY</h1>
                        <a href="appointment.php"
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                        <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">One call away from your doorstep</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">KEEP THE BEST QUALITY</h1>
                        <a href="appointment.php"
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                        <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<!--<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                    <h1 class="display-5 mb-0">The World's Best Hospital That You Can Trust</h1>
                </div>
                <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem
                    sit clita duo justo magna dolore</h4>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                    diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita
                    duo justo et tempor eirmod magna dolore erat amet</p>
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                    </div>
                </div>
                <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make
                    Appointment</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- About End -->
<?php
include('includes/config.php');

if (isset($_POST["submit"])) {
    $name = $_POST["pname"];
    $email = $_POST["pemail"];
    $doctor = $_POST["pdoctor"];
    $specialization = $_POST["pspecialization"];
    $date = $_POST["pday"];
    $time = $_POST["ptime"];
    // print_r($_POST);
    // die();
    $insert = "INSERT INTO `appointment` (`pname`, `pemail`, `pdoctor`, `pspecialization`, `pday`, `ptime`) VALUES ('$name', '$email', '$doctor', '$specialization', '$date', '$time')";
    $connection_insert = mysqli_query($connection, $insert);
    if ($connection_insert) {
        echo "
        <script>
        alert('Your Appointment Sent to Hospital. Once its checked your appointment will be set as per date and time.')
</script>";
        echo '<script> window.location.href="appointmentview.php";</script>';
    } else {
        echo "
        <script>
        alert('Your Appointment not set.')
        </script>";
    }
}


?>
?>

<!-- Appointment Start -->
<div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
    style="margin-top: 90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Agency You Can Trust</h1>
                    <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
                        Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero
                        eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                        Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                    data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Make Appointment</h1>
                    <form method="post" action="appointment.php" class="form-group">
                        <div class="row g-3">
                            <?php
                            $useremail = $_SESSION['useremail'];
                            $fetch3 = "SELECT * FROM `patient` WHERE `email` = '$useremail'";
                            $query = mysqli_query($connection, $fetch3);
                            if (mysqli_num_rows($query) > 0) {
                                while ($row2 = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="pname" class="form-control bg-light border-0"
                                            placeholder="Your Name" value="<?php echo $row2['name'] ?>" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" name="pemail" class="form-control bg-light border-0"
                                            placeholder="Your Email" selected value="<?php echo $row2['email'] ?>"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select name="pdoctor" id="doctorSelect" class="form-select bg-light border-0"
                                            style="height: 55px;">

                                            <option selected>Select A Service Provider</option>
                                            <?php
                                            $fetch1 = "SELECT * FROM `doctors` WHERE `dstatus` = '1'";
                                            $conns1 = mysqli_query($connection, $fetch1);
                                            if (mysqli_num_rows($conns1) > 0) {
                                                while ($row1 = mysqli_fetch_assoc($conns1)) {
                                                    ?>
                                                    <option value="<?php echo $row1['id'] ?>">
                                                        <?php echo $row1['specialization'] ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div>
                                            <input type="text" id="vendorname" name="pspecialization"
                                                class="form-control bg-light border-0" placeholder="Vendorname"
                                                style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date">
                                            <input type="text" id="days" name="pday" class="form-control bg-light border-0"
                                                placeholder="Appointment Date" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time">
                                            <input type="text" id="timing" name="ptime" class="form-control bg-light border-0"
                                                placeholder="Appointment Time" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" name="submit" type="submit">Make
                                            Appointment</button>
                                    </div>
                                    <?php
                                }
                            } ?>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#doctorSelect").change(function () {
            var doctorId = $(this).val();
            $.ajax({
                type: "POST",
                url: "getDoctorDetails.php",
                data: { doctorId: doctorId },
                dataType: "json",
                success: function (data) {
                    $("#vendorname").val(data.doctor);
                    $("#days").val(data.date);
                    $("#timing").val(data.time);
                }
            });
        });
    });
</script>
<!-- Appointment End -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            
            <div class="col-lg-7">
                <div class="section-title mb-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                    <h1 class="display-5 mb-0">We Offer The Best Quality Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/b.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Builder</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/e.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Engineer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/el.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Electrician</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/p.jpeg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">Plumber</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                    <h3 class="text-white mb-3">Make Appointment</h3>
                    <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna
                        stet eirmod</p>
                    <h2 class="text-white mb-0">+012 345 6789</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                <div class="offer-text text-center rounded p-5">
                    <h1 class="display-5 text-white">Save 30% On Your First Hiring</h1>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et
                        at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod diam duo
                        lorem magna sit dolore sed et.</p>
                    <a href="appointment.php" class="btn btn-dark py-3 px-5 me-3">Appointment</a>
                    <a href="" class="btn btn-light py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Pricing Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Pricing Plan</h5>
                    <h1 class="display-5 mb-0">We Offer Fair Prices for All Services</h1>
                </div>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                    diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita
                    duo justo eirmod magna dolore erat amet</p>
                <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Hiring</h5>
                <h1 class="wow fadeInUp" data-wow-delay="0.6s">+012 345 6789</h1>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/pa.jpeg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                style="z-index: 2;">
                                <h2 class="text-primary m-0">$35</h2>
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Painter</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Professional painter</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <a href="appointment.php"
                                class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">hire</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/m.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                style="z-index: 2;">
                                <h2 class="text-primary m-0">$49</h2>
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Mechanic</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Professional Mechanic</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <a href="appointment.php"
                                class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">hire</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/g.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                style="z-index: 2;">
                                <h2 class="text-primary m-0">$99</h2>
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Glazier</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Professional Glazier</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <a href="appointment.php"
                                class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">hire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At
                            lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Client Name</h4>
                    </div>
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At
                            lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Client Name</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title bg-light rounded h-100 p-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Service Provider</h5>
                    <h1 class="display-6 mb-4">Meet Our Certified & Experienced tradepeoples</h1>
                    <a href="appointment.php" class="btn btn-primary py-3 px-5">Appointment</a>
                </div>
            </div>
            <?php
            $fetch = "SELECT * FROM `doctors` WHERE `Dstatus` = '1'";
            $query = mysqli_query($connection, $fetch);
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {

                    ?>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" style="height: 300px;"
                                    src="<?php echo 'doctors/doctorimg/' . $row['Dimage'] ?>" alt="Doctor Image">
                                <!-- <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
        </div> -->
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">
                                    <?php echo $row['Dusername'] ?>
                                </h4>
                                <p class="text-primary mb-0">
                                    <?php echo $row['specialization'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- Team End -->

<?php
include('includes/footer.php');
?>