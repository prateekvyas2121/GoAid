<?php include 'header.php'?>



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
<!-- make money earn respect css -->
<style type="text/css">

	.captain_img
	{
		text-align: center;
		margin-top: 200px;
	}
	.captain_head1
	{
		text-align: left;
		margin-top: 80px;
		margin-bottom: 30px;
	}
	.captain_p
	{
		font-size: 18px;
		text-align: left;
		line-height: 1.5;
		margin-bottom: 20px;

	}
	.btn {
    display: inline-block;
    height: 48px;
    white-space: nowrap;
    color: #010101;
    text-decoration: none;
    font-size: 16px;
    font-weight: 400;
    line-height: 46px;
    text-transform: uppercase;
    text-align: center;
    padding: 0 28px;
    border: none;
    border-radius: 3px;
    background-color: #fff;
    vertical-align: middle;
    margin: 10px 10px 10px 0;
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-mask-image: -webkit-radial-gradient(circle,#fff 100%,#000 100%);
    -webkit-transition: all .3s;
    transition: all .3s;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
</style>
<!-- make money earn respect css end -->

<!-- partner banner start -->
<?php
include "partner_banner.php"
?>
<!-- partner banner end -->

<!-- make money section start -->
<?php
include "partner_make_money.php"
?>
<!-- make money section end -->

<!-- <div class="captain_main" style="height: 500px;">
	<div class="container captain_row">
		<div class="row captain_goaid">
			<div class="col-md-6 captain_img">
				<img src="images/fav.png">
			</div>
			<div class="col-md-6 captain_head">
				<h1 class="captain_head1">Be a GoAidian</h1>
				<p class="captain_p">Join GoAid's growing fleet.</p>
				<p class="captain_p">
				    Do you ride a ambulance and would like to earn some money
			        with it too?
			    </p>
			    <p class="captain_p">
			    	Offer rides through GoAid to cut your costs by a great deal and join the last mile commute revolution.
			    </p>
			    <p class="captain_p">
			    	You can offer rides whenever you want without any restrictions.
			    </p>
			    <p class="captain_p">
			    	You're your own boss!
			    </p>
			    <a id="open-modal" href="#" data-toggle="modal" style="color:blue" data-target="#signin-page" data-modal-form="sign-up" class="btn btn-flat btn-danger waves-effect waves-danger">Register here</a>
			</div>
		</div>
	</div>
</div>
 -->




<!-- partner download app start -->
<?php
include "partner_download_app.php"
?>
<!-- partner download part end -->


<!-- partner attach form start -->
<?php
include "partner_attach_form.php"
?>
<!-- model end -->
<!-- partner attached form end -->

<!-- css model open -->
<style type="text/css">
  #modal_dehli_from{
    padding: 20px;

  }
  #modal_dehli_from{
    background: #ec1019;
    color: white;
    width: 100%;
    border-radius: 0;
    border: navajowhite;
    padding: 12px;
  }
#button_dirn{
    background: black;
    width: 29%;
    border-radius: 0;
    border: navajowhite;
    color: white;
}
</style>
<!-- css model closed-->

<!-- footer start -->
<?php include 'footer.php' ?>
<!-- footer end -->