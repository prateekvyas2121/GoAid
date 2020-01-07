<section>
	
	<div class="container">
		<div class="main_rock_starr">
			<div class="col-lg-12 col-md-12 col-sm-12" id="bag_s">
				<div class="col_sdi">
					<div class="col-sm-9">
						<div class="attach_file_div">
							<h1 style="font-family: 'Montserrat', sans-serif;">Attach your Ambulance  with GoAid
							</h1>
							<h6  style="font-family: 'Montserrat', sans-serif;">
							Know about more ways of partnering with GoAid & how each category can help you earn more.
							</h6>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="button_div_send_to_eqr" data-toggle="modal" data-target="#myModal">
							<p style="font-family: 'Montserrat', sans-serif;"><a href="#">
							Send Your Enquiry</a>
							</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- form model start -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body" id="modal_dehli_from">
			<form action="db_partner.php" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="name" class="form-control" id="name" placeholder="Enter name " name="name">
				</div>
				<div class="form-group">
					<label for="number">Mobile No</label>
					<input type="text" class="form-control" id="number" placeholder="Enter number" name="phone">
				</div>
				<div class="form-group">
					<label for="name">City</label>
					<select type="text" class="form-control" id="city" placeholder="Enter City" name="city">
						<option>Select one</option>
						<option>New Delhi</option>
						<option>North Delhi</option>
						<option>North West Delhi</option>
						<option>South West Delhi</option>
						<option>South East Delhi</option>
						<option>Central Delhi</option>
						<option>North East Delhi</option>
						<option>Shahdara</option>
						<option>East Delhi</option>
					</select>
				</div>
				<div class="form-group">
					<label for="name">Select Ambulance Type</label>
					<select type="text" class="form-control" id="ambulance" placeholder="Enter Ambulance" name="ambulance">
						<option>Select one</option>
						<option>TLS</option>
						<option>BLS</option>
						<option>ACLS</option>
						<option>Paediatric Ambulances </option>
						<option>Hearse Van </option>
						<option>Air Ambulance</option>

					</select>
				</div>

				<div class="form-group">
					<label for="name">Vehicel Type</label>
					<select type="text" class="form-control" id="vehicel" placeholder="Enter Vehicel Type" name="vehicel">
						<option>Select one</option>
						<option>Bolero</option>
						<option>Maruti eeco</option>
						<option>Tavera</option>
						<option>Ford Tempo Traveller</option>
						<option>Winger</option>
					</select>
				</div>
		  
				<button type="submit" class="btn btn-default" id="button_dirn">Submit</button>
		  </form>
      </div>
      
    </div>

  </div>
</div>