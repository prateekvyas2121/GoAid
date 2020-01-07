<?php 
include 'header.php';
?>

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

<!-- corporate banner start -->
<?php
include "corporate_banner.php"
?>
<!-- corporate banner end -->

<!-- how it work start -->
<?php
include "corporate_how_it_work.php"
?>
<!-- how it works end -->

<!-- safety standard start -->
<?php 
include "corporate_safety_standard.php"
?>
<!-- safety standard end -->

<div class="clearfix"></div>

<!-- corporate signup page start -->
<?php
include "corporate_signup.php"
?>
<!-- corporate signup page end -->


<div class="clearfix"></div>


<!-- footer start -->
<?php include 'footer.php' ?>
<!-- closed -->