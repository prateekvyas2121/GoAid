<?php include 'header.php' ?>
<style>
	.mian_first_add_div_box{
    background-color: #ffffff;
    padding: 10px;
    box-shadow: 1px 1px 16px -9px #434343;
    margin-bottom: 10%;
    border-radius: 10px;
    margin-top: 5px;
    height:250px;
	} 
.col_images_div_bolg img{
width: 100%;
height:125px;
border-radius: 19px;
	}
	.modal-body img{

    width: 80%;
    height: 441px;
    margin: auto;
    text-align: center;
    display: flex;

	}

	 ul li{
	 	float: left;
	 }
</style>
<section class="header-top_first_add">
	<div  class="header-button_div_Add">
		<img src="images/add.jpg">
	</div>
</section>


<section>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="fix_conta_div">
                <h2>First Aid</h2>

                <div class="fix_box_first_add" style="margin-top: 5%">
                    <?php
                   include('config/config.php');
              $query=mysqli_query($con,"select * from first_add");
                  $count=mysqli_num_rows($query);
                  if ($count>0)
                 {
                  $counter=0;
                  while ($get=mysqli_fetch_array($query))
                   {
                  ?>
                        <div class="col-lg-3 col-md-3">
                            <div class="mian_first_add_div_box">
                                <div class="col_images_div_bolg">
                                    <img src="images/first_add-images/<?php echo $get['image'];?>">
                                </div>
                                <div class="tittal_div_style">
                                    <h4><?php echo $get['main_title'];?></h4>
                                </div>
                                <div class="viwe_more_button_div">
                                    <p><a href="modal.php?id=<?php echo $get['id'];?>">View More</a></p>
                                </div>
                            </div>
                        </div>
                        <?php 
        }
      }
      ?>

                </div>
            </div>
        </div>
    </div>
</section>





<!-- </section> -->

<?php include 'footer.php' ?>