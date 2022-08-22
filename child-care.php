<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/child-care.css">
<!-- Custom Banner -->
<section class="custom_banner">
    <div class="container">
        <div class="custom_banner_text">
            <h2>Child Care</h2>
            <p>
                <a href="index.php">Home</a>
                <img src="img/inner.png" alt="">
                <a href="about.php">Child Care</a>
            </p>
        </div>
    </div>
</section>
<!-- End Here -->
<!-- TEXT SECtion -->
<section class="about_text">
    <div class="container">
        <div class="top_heading text-center">
            <h6 class="blue">Child Care Form</h6>
            <h4 class="h4">Child Care</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sollicitudin erat vel r <br>
                honcus sollicitudin. Ma dolor sit amet, consectetur adt, consectetur
            </p>
        </div>
    </div>
</section>
<section class="child_care_form">
    <div class="container">
        <div class="col-lg-7 col-md-8 col-sm-12 mx-auto">
            <div class="form_start">
                <form action="" method="POST">
                    <div class="form_row">
                        <label for="">Email *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Signing Parent's Full Name *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Child's First Name and Last Name *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Child's Birth Date ( Month, Day, Year) *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Mom's Contact Info (Email and Cell Phone) *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Dad's Contact Info (Email and Cell Phone ) *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Home Address (Include Postal Code) *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="for_time">
                        <h6>Time</h6>
                        <div class="form_row">
                            <input type="radio" hidden id="test1" name="radio-group" checked>
                            <label for="test1">Mornings</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="test2" name="radio-group">
                            <label for="test2">During the day</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="test3" name="radio-group">
                            <label for="test3">Evening</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="test4" name="radio-group">
                            <label for="test4">Nights</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="test5" name="radio-group">
                            <label for="test5">After Schools</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="test6" name="radio-group">
                            <label for="test6" class="test6">Other <input type="text" name="" class="others" id=""></label>
                        </div>
                    </div>
                    <div class="form_row">
                        <label for="">In Case Of Emergency (Contact Info, Doctors Info, etc) *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Food Allergies, Other Allergies *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Educational, Game Activites, Nap Times *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Additional Notes</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="submit_btn text-right mt-3">
                        <button type="submit" class="btn">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- About Text END Here -->
<!-- CONTACT LINKS -->
<section class="contact_blue_lines">
    <div class="container h-100">
        <div class="contact_us_on">
            <div class="call_us">
                <h6>Call Us</h6>
                <h3>Have any questions? Call us now!</h3>
            </div>
            <div class="contact_info">
                <figure>
                   <img src="img/call.png" alt="">
                </figure>
                <a href="tel">(778) 9271348</a>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT LINKS END -->
<!-- contact Section End Here -->
<?php include 'inc/footer.php'; ?>