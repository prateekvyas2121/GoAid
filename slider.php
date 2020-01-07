<!-- owl carousel banners start -->
	<div class="slider_div">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <?php
   $fetch=mysqli_query($con,"select * from banner");
  $data=mysqli_num_rows($fetch);
?>
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" id="silder_size_div">
    	 <?php
    for ($i=1; $i <=$data ; $i++) { 
      $get_data=mysqli_fetch_array($fetch);
    
    ?>
    <?php
    if ($i==1)
     {
      ?>
      <div class="item active">
        <img src="images/<?php echo $get_data['banner_img'];?>" alt="Los Angeles">
      </div>
       <?php
        }   
        else
        {
        ?>

      <div class="item">
        <img src="images/<?php echo $get_data['banner_img'];?>" alt="Chicago">
      </div>
      <?php
      }
      ?>
    
    <?php
    }
  ?>
    
      <!-- <div class="item">
        <img src="images/3banner.jpg" alt="New york">
      </div>
    </div> -->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	</div>
</section>
<!-- owl carosal banners end -->
