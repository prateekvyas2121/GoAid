<?php include 'header.php' ?>

<style>
	.sub_tital_images img{
		width: 100%;
		height: auto;
	}

	.modal_div_style_first{
		background: white;
    padding: 14px;
    /* border: 1px solid; */
    margin-top: 10%;
    margin-bottom: 10%;
    box-shadow: 1px 1px 21px -8px;
	}
	#padding_maring_syf{
		padding: 0px;
	}
</style>
<section>
	<?php
                   include('config/config.php');
                   $row=$_REQUEST['id'];
              $query=mysqli_query($con,"select * from first_add where id=$row");
                  $count=mysqli_num_rows($query);
                  if ($count>0)
                 {
                  $counter=0;
                  while ($get=mysqli_fetch_array($query))
                   {
                  ?>
	<div class="modaltab">
		<div class="container">
			<div class="col-lg-12 col-md-12">
				<div class="modal_div_style">
					<div class="col-md-2"></div>
					<div class="col-md-8 col-sm-8" id="padding_maring_syf">
						<div class="modal_div_style_first">
							<div class="modal_first">
								<div class="sub_tital_images">
									<h4><?php echo $get['main_title'];?></h4>
									<br>
									<img src="images/first_add-images/<?php echo $get['image'];?>">
								</div>
								<div class="tital_text_div">
									<p><?php echo $get['description'];?></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-2"></div>

				</div>
			</div>
		</div>
	</div>
	<?php 
        }
      }
      ?>
</section>
<?php include 'footer.php' ?>