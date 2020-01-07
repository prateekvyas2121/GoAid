<?php include 'header.php' ?>

<?php if(!empty($_GET['msg'])){?>
		<style>
			/* The Modal (background) */
			.modal1 {
			  display: none; /* Hidden by default */
			  position: absolute; /* Stay in place */
			  z-index: 100; /* Sit on top */
			  padding-top: 100px; /* Location of the box */
			  left: 0;
			  top: 1;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  
			 
			}

			/* modal1 Content */
			.modal1-content {
			  background-color: #fefefe;
			  margin: auto;
			  padding: 20px;
			  border: 1px solid #888;
			  width:30%;
			}
			.modal1-content p{
			    text-aline:center;
			}

			/* The Close Button */
			.close {
			  color: #aaaaaa;
			  float: right;
			  font-size: 28px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: #000;
			  text-decoration: none;
			  cursor: pointer;
			}
			</style>

			<!-- The modal1 -->
			<div id="mymodal1" class="modal1">

			  <!-- modal1 content -->
			  <div class="modal1-content">
				<span class="close">&times;</span>
				<p><?php echo $_GET['msg'];?></p>
			  </div>

			</div>

			<script>
			// Get the modal1
			var modal1 = document.getElementById("mymodal1");

			// Get the button that opens the modal1
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal1
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal1 
			onload = function() {
			  modal1.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal1
			span.onclick = function() {
			  modal1.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal1, close it
			window.onclick = function(event) {
			  if (event.target == modal1) {
				modal1.style.display = "none";
			  }
			}
			</script>

<?php }?>

<!-- book ambulance start -->
<?php 
include "book_ambulance.php"
?>
<!-- book ambulance end -->

<div class="clearfix"></div>

<!-- slider start -->
<?php 
include "slider.php"
?>
<!-- slider end -->

<!-- below banner content start -->
<section class="cols_pag_bg">
 <div class="slider_bottom_div_mian">
	<div class="slider_bottom">
	  <h4>THE RIGHT MEDICAL ATTENTION, WHEN YOU URGENTLY NEED IT. <span> <i class="fa fa-mail" aria-hidden="true"></i> support@goaid.in</span></h4>
	  
    </div>
 </div>
</section>
<!-- below banner content end -->
<!--
<section class="about_us_div_style">
	<div class="container">
		
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="about_ud_tittla">
				<h4>About us</h4>
				<img src="images/hr.png">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="images_about_us">
					<div class="img_div">
						<img src="images/aboutus.png">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="tittla_containt_div">
					<h2>What Makes a Solid ‘About Us’ Page?</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					<p>
						editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</p>

				</div>
			</div>

		</div>
	</div>
</section>-->

 <!-- index emergency services start -->
<?php 
include "index_emergency_services.php"
?>
<!-- emergency services end -->

<!-- why goaid start -->
<?php
include "index_whygoaid.php"
?>
<!-- why goaid end -->

<!-- Our Client Section -->
<?php
include "index_client_section.php"
?>
<!-- our client section closed -->

<!-- Download App Section -->
<?php
include "index_download_app.php"
?>
<!-- Downlaod App Section Closed -->

<!-- Testimonials Starts -->
<?php
include "index_testimonial.php"
?>
<!-- Testimonials END -->

<div class="clearfix"></div>

<?php
include "counter_part.php"
?>

<!-- footer section start -->
<?php include 'footer.php' ?>
<!-- footer end -->