<!-- Need an Ambulance Start -->
<section>
    <div class="from_div">
        <h4>Easy-- Fast-- Reliable</h4>
        <div class="header_tittla_form">
            <h1>Need an Ambulance?</h1>
        </div>
        <div class="from_header_from">

            <div class="from_div_style">

                <form action="db_need_ambulance.php" method="post">
                    <div class="form-group">
                        <?php //echo $_GET['msg']; ?>
                            </br>
                            <button class="btun_desingas"><a style="color:white;" href="https://play.google.com/store/apps/details?id=com.rnd.goaid_partner">Already Have An account?</a></button>
                            <br>
                            <input type="text" name="pickup_location" placeholder="Pickup Location" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="drop_location" placeholder="Drop Location" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="patient_name" placeholder="Patient's Name" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="mobile" placeholder="Mobile no" required>
                    </div>

                    <p>I agree with Terms and Conditions <a href="termsforuse.php"> Read More</a></p>
                    <button class="btun_desing">Submit</button>
                </form>
                <form action="need_ambulance_verify_otp.php" method="post">
                    <div class="form-group">
                        <input type="text" name="otp" placeholder="Enter Otp" required />
                        </br>
                        <button class="btun_desing">Verify Otp</button>
                    </div>
                    <div class="how_to_need">
                        <p><a href="https://www.youtube.com/watch?v=3ObOyrBbK-g" target="_blank">How To Book</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
<!-- need an ambulance end -->
