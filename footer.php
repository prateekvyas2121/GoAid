<!-- Footer css -->
<style type="text/css">
	.footer-text
	{
		color: #999;
		line-height: 25px;
		font-family: 'Montserrat', sans-serif;
	}
	.footer-head1 .footer-head
	{
		color: #fff;
	}
	.footer-head1
	{
		font-size: 18px;
	}
	.footer-top
	{
		background-color: #111;
		padding: 40px 0;
	}
	.segment-one .footer-head
	{
		font-family: Courgette;
		color: #fff;
		letter-spacing: 3px;
		margin: 10px 0;
		padding-top: 35px;
		font-family: 'Montserrat', sans-serif;
	}
	.segment-two .footer-head1
	{
     color: #fff;
     font-family: poppins;
     text-transform: uppercase;
     text-align: left;
     font-family: 'Montserrat', sans-serif;
	}
	.segment-two .footer-head1:before
	{
		content: '|';
		color: #c65039;
		padding-right: 10px;
	}
	.segment-two ul
	{
		margin: 0px;
		padding: 0px;
		list-style: none;
	}
	.segment-two ul li
	{
		border-bottom: 1px solid rgba(255,255,255,0.3);
		line-height: 40px;
	}
	.segment-two ul li a
	{
		color: #999;
		text-decoration: none;
	}
	.segment-three .footer-head1
	{
		color: #fff;
		font-family: poppins;
		text-transform: uppercase;
		text-align: left;
		font-family: 'Montserrat', sans-serif;
	}
	.segment-three .footer-head1:before
	{
		content: '|';
		color: #c65039;
		padding-right: 10px;
	}
	.segment-three a
	{
		background: #494848;
		width: 40px;
		height: 40px;
		display: inline-block;
		border-radius: 50%;
	}
	.segment-three a i
	{
		font-size: 20px;
		color: #fff;
		padding: 10px 12px;
	}
	.segment-four .footer-head1
	{
		color: #fff;
		font-family: poppins;
		text-transform: uppercase;
		text-align: left;
		font-family: 'Montserrat', sans-serif;
	}
	.segment-four .footer-head1:before
	{
		content: '|';
		color: #c65039;
		padding-right: 10px;
	}
    .segment-four ul
	{
		margin: 0px;
		padding: 0px;
		list-style: none;
	}
	.segment-four ul li
	{
		border-bottom: 1px solid rgba(255,255,255,0.3);
		line-height: 40px;
	}
	.segment-four ul li a
	{
		color: #999;
		text-decoration: none;
	}
	/*responsive*/
	@media screen and (min-width: 448px)
	{
		.segment-two .footer-head1
		{
			margin-top: 50px;
		}
		.segment-three .footer-head1
		{
			margin-top: 50px;
		}
		.segment-four .footer-head1
		{
			margin-top: 50px;
		}
	}

</style>
<!-- footer css end -->


<!-- <section>
	

	<div class="col-sm-12" id="cont_value">
		<div class="col-sm-3">
			<div class="totatl_contting_num counter" data-count="1300">
			0
			</div>
			<div class="tittkla_name">
				<h2>Ambulances</h2>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="totatl_contting_num counter" data-count="1000">
				0
			</div>
			<div class="tittkla_name">
				<h2>Hospitals Connected</h2>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="totatl_contting_num counter" data-count="15000">
				0
			</div>
			<div class="tittkla_name" >
				<h2>Patients Served</h2>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="totatl_contting_num counter" data-count="15">
				0
			</div>
			<div class="tittkla_name">
				<h2>Corporates on Board</h2>
			</div>
		</div>
	</div>
	
</div>
<script type="text/javascript">
	$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 1000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
</script>
</section> -->
<!-- footer section start -->
<footer>
	<div class="footer-top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 segment-one">
					<h3 class="footer-head">GOAID</h3>
					<p class="footer-text">Goaid is india’s leading company in providing trustworthy Ambulance services. We are now available in top 18+ cities of India, Delhi, Pune, Jaipur, Ahemdabad, Bhopal, Lukhnow & Mumbai
				    </p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 segment-two">
					<h2 class="footer-head1">Explore Goaid</h3>
					<ul>
						<li><a href="goAid_Corporate.php">Corporate Packages</a></li>
						<li><a href="partner_goaid.php">Partner With Us</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<li><a href="contact_us.php">Contact Us</a></li>
						<li><a href="private_policy.php">Privacy Policy</a></li>
						<li><a href="booking_ambulance.php">How to Book Ambulances</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 segment-four">
                	<h2 class="footer-head1">Popular OutStations </h2>
                	<ul>
						<li><a href="#">Delhi NCR</a></li>
						<li><a href="#">Ahmedabad</a></li>
						<li><a href="#">Jaipur</a></li>
					</ul>
                </div>
				<div class="col-md-3 col-sm-6 col-xs-12 segment-three">
					<h2 class="footer-head1">Contact Us</h2>
					<p class="footer-text">E-block, Flat no 713, Goyla Dairy, 
					   Dwarka Sector-10, Delhi 110075
					</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-google"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_footer_div">
        <h5 style="font-family: 'Montserrat', sans-serif !important;">© Goaid.in All Rights Reserved 2019</h5>

        <div class="footer_trem_and_condication">
            <ul>
                <li><a href="partner_policy.php" style="font-family: 'Montserrat', sans-serif !important;">Partner With Us Policies</a></li> |
                <li><a href="termsforpartners.php" style="font-family: 'Montserrat', sans-serif !important;">Terms for partners</a></li> |
                <li><a href="termsforuse.php" style="font-family: 'Montserrat', sans-serif !important;">Terms of Use</a></li>

            </ul>
        </div>
    </div>
</footer>