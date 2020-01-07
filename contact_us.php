<style type="text/css">
	.contact_map iframe
	{
		padding: 10px;
	}
	@media screen and (min-width: 0px) and (max-width: 375px)
	{
		.contact_map iframe
		{
			width:210px;
			height: 350px;
		}
		.contact_main_left_col
		{
			width: 240px !important;
		}
	}
	@media screen and (min-width: 376px) and (max-width: 800px)

      {
      	.contact_map iframe
		{
			width:500px;
			height: 350px;
		}
      }
	
</style>
<?php include ('header.php');?>

<?php if(!empty($_GET['msg'])){?>
			<style>
			/* The Modal (background) */
			.modal1 {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  padding-top: 100px; /* Location of the box */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* modal1 Content */
			.modal1-content {
			  background-color: #fefefe;
			  margin: auto;
			  padding: 20px;
			  border: 1px solid #888;
			  width: 80%;
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

<!-- start -->
<div class="container-fluid" id="contat_us_pages">

		<div class="col-lg-12 product_single_col">
			<div class="contact_main clearfix">
				<div class="col-lg-12 contact_main_left_col">
					<div class="contact_main_top">
						<h4 style="font-family: 'Montserrat', sans-serif;">Get in touch</h4>
						<hr>
						<p>Support that you needed. happy to help</p>
					</div>
				</div>
				<div class="col-lg-6 contact_main_left_col">
					<div class="contact_main_left">
						<form action="contact.php" method="POST" >
						
							<div class="form-group">
								<input type="text" class="form-control" id="" name="name" placeholder="Name">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="" name="phone" placeholder="Mobile Number">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="" name="company" placeholder="Company Name">
							</div>

							<div class="form-group">
								<textarea name="massage" id="input" class="form-control" placeholder="Comment" rows="3" ></textarea>
							</div>
							
							<div class="contact_submit">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
							
						</form>
					</div>
				</div>
				<div class="col-lg-6 contact_main_left_col" style="height: 400px; width: 400px;">
					<div class="contact_right_address">
					<h4 style="font-family: 'Montserrat', sans-serif;">Contact information</h4>
						<ul>
							<li style="padding: 10px;">
								<span>Address : E-block, Flat no 713, Goyla Dairy, Dwarka Sector-10, Delhi 110075</span>
								
							</li>

							<li style="padding: 10px;">
								<span>Mobile :</span>
							
							</li>

							<li style="padding: 10px;">
								<span>Email :</span>
								support@goaid.in
							</li>
						</ul>
					</div>
				</div>		
				<div class="col-lg-12 contact_map_col">
					<div class="contact_map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.3249167858285!2d77.06079611440622!3d28.590027892755653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b23e86c17a9%3A0x6f9aa70e6759e549!2sblock%2C+Flat+no+713%2C+10%2C+Sector+6+Dwarka%2C+Dwarka%2C+New+Delhi%2C+Delhi+110075!5e0!3m2!1sen!2sin!4v1566390704935!5m2!1sen!2sin" width="850" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>		
			</div>
		</div>

	</div>
</div>

<!-- end -->

<?php include ('footer.php');?>