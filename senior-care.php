<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/child-care.css">
<!-- Custom Banner -->
<section class="custom_banner">
    <div class="container">
        <div class="custom_banner_text">
            <h2>About Us</h2>
            <p>
                <a href="index.php">Home</a>
                <img src="img/inner.png" alt="">
                <a href="about.php">About Us</a>
            </p>
        </div>
    </div>
</section>
<!-- End Here -->
<!-- TEXT SECtion -->
<section class="about_text">
    <div class="container">
        <div class="top_heading text-center">
            <h6 class="blue">Senior Care Form</h6>
            <h4 class="h4">Senior & Special Needs Care</h4>
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
                        <label for="">Full Name *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Full name of client the app;lication is for (Type "same" if you are applying for
                            yourself.) All the next questions should be answer regarding this person*</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Email Address (will be used for your account. Example: Billing, Agreement, etc.)*</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Phone number (best number to commuunicate at)*</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Client's full address including Postal Code *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="for_time check">
                        <h6>Health Condition *</h6>
                        <div class="form_row">
                            <input type="checkbox"  id="tests1" name="check-group" checked>
                            <label for="tests1">Healthy, just old age assistance</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests2" name="check-group">
                            <label for="tests2">Arthritis</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests3" name="check-group">
                            <label for="tests3">Low Bone Mass or Osteporosis / Fall History</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests4" name="check-group">
                            <label for="tests4">Obesity</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests5" name="check-group">
                            <label for="tests5">Vision or Hearing Loss</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests6" name="check-group">
                            <label for="tests6">Cancer</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests7" name="check-group">
                            <label for="tests7">Weak Heart / Previous Heart Attack</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests8" name="check-group">
                            <label for="tests9">Diabetes</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests10" name="check-group">
                            <label for="tests10">Depression</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests11" name="check-group">
                            <label for="tests4">Briefs and Incontinence Pads</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests5" name="check-group">
                            <label for="tests12">Dementia</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests13" name="check-group">
                            <label for="tests13">Respiratory Disease</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests14" name="check-group">
                            <label for="tests5">Influenza or pnuemonia</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests5" name="check-group">
                            <label for="tests14">Oral Health</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests15" name="check-group">
                            <label for="tests15">Requires Lifting Tools</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="tests16" name="check-group">
                            <label for="tests16" class="tests6">Other <input type="text" name="" class="others"
                            id=""></label>
                        </div>
                    </div>
                    <div class="form_row">
                        <label for="">Birth Date *</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="for_time">
                        <h6>Gender</h6>
                        <div class="form_row">
                            <input type="radio" hidden id="test1" name="radio-group" checked>
                            <label for="test1">Male</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="test2" name="radio-group">
                            <label for="test2">Female</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="test3" name="radio-group">
                            <label for="test3">Prefer not to say</label>
                        </div>
                    </div>
                    <div class="for_time">
                        <h6>What type of service do you need *</h6>
                        <div class="form_row">
                            <input type="radio" hidden id="h" name="radio-group" checked>
                            <label for="h">Hourly</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="l" name="radio-group">
                            <label for="l">Live-in</label>
                        </div>
                    </div>
                    <div class="for_time check">
                        <h6>Living Space Details*</h6>
                        <div class="form_row">
                            <input type="checkbox"  id="test1" name="check-group" checked>
                            <label for="test1">Lives Alone</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test2" name="check-group">
                            <label for="test2">Live With Family</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test3" name="check-group">
                            <label for="test3">Residing in a Nursing Home</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test4" name="check-group">
                            <label for="test4">Ground Single Level Home</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test5" name="check-group">
                            <label for="test5">Stairs</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test4" name="check-group">
                            <label for="test4">Elevator</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test6" name="check-group">
                            <label for="test6" class="test6">Other <input type="text" name="" class="others"
                            id=""></label>
                        </div>
                    </div>
                    <div class="form_row">
                        <label for="">Information on who lives with the client if they don't live alone (children, brother, sister, etc.):</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Do you receive services from other agencies? if so which? Will the services end when Arian Homecare starts?</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">What date do you require the service to start from?*</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="form_row">
                        <label for="">Detailed description on hours and schedule you will be needing service:</label>
                        <input type="text" name="" id="" placeholder="Your answer">
                    </div>
                    <div class="for_time check">
                        <h6>Services: *</h6>
                        <div class="form_row">
                            <input type="checkbox"  id="test1" name="check-group" checked>
                            <label for="test1">Showering and Hygiene</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test2" name="check-group">
                            <label for="test2">Home Maintenance and Cleaning</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test3" name="check-group">
                            <label for="test3">Meal Prep and Feeding</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test4" name="check-group">
                            <label for="test4">Toiletting</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test5" name="check-group">
                            <label for="test5">Medication Reminder</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test4" name="check-group">
                            <label for="test4">Companionship and Supervision</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test2" name="check-group">
                            <label for="test2">Rehabilitation</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test3" name="check-group">
                            <label for="test3">Shopping</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test4" name="check-group">
                            <label for="test4">Social Support, Practice Communication</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test5" name="check-group">
                            <label for="test5">Transport</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test6" name="check-group">
                            <label for="test6" class="test6">Other <input type="text" name="" class="others"
                            id=""></label>
                        </div>
                    </div>
                    <div class="for_time">
                        <h6>Do you need the care provider to have driver's license?*</h6>
                        <div class="form_row">
                            <input type="radio" hidden id="y3" name="radio-group" checked>
                            <label for="y3">Yes</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="n3" name="radio-group">
                            <label for="n3">No</label>
                        </div>
                    </div>
                    <div class="for_time">
                        <h6>Do you need the care provider to have a vehicle? *</h6>
                        <div class="form_row">
                            <input type="radio" hidden id="y2" name="radio-group" checked>
                            <label for="y2">Yes</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="n2" name="radio-group">
                            <label for="n2">Maybe</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="n3" name="radio-group">
                            <label for="n3">No</label>
                        </div>
                    </div>
                    <div class="for_time">
                        <h6>Do you have your own vehicle to use for transport? *</h6>
                        <div class="form_row">
                            <input type="radio" hidden id="y1" name="radio-group" checked>
                            <label for="y1">Yes</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="n1" name="radio-group">
                            <label for="n1">No</label>
                        </div>
                    </div>
                    <div class="for_time">
                        <h6>Will you be needing the care provider to schedule and to take you to your appointments? *</h6>
                        <div class="form_row">
                            <input type="radio" hidden id="y" name="radio-group" checked>
                            <label for="y">Yes</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="n" name="radio-group">
                            <label for="n">No</label>
                        </div>
                        <div class="form_row">
                            <input type="radio" hidden id="m" name="radio-group">
                            <label for="m">Maybe</label>
                        </div>
                    </div>
                    <div class="for_time check">
                        <h6>Do you require the care taker to speak fluent: *</h6>
                        <div class="form_row">
                            <input type="checkbox"  id="test1" name="check-group" checked>
                            <label for="test1">Fluent English</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test2" name="check-group">
                            <label for="test2">Fluent English not required</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test3" name="check-group">
                            <label for="test3">Farsi</label>
                        </div>
                        <div class="form_row">
                            <input type="checkbox"  id="test6" name="check-group">
                            <label for="test6" class="test6">Other <input type="text" name="" class="others"
                            id=""></label>
                        </div>
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
                <a href="tel: (778) 7724087">(778) 7724087</a>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT LINKS END -->
<!-- contact Section End Here -->
<?php include 'inc/footer.php'; ?>