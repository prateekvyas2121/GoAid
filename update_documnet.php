<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
    <?php $url="https://www.goaid.in/apps/images/";?>
  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Update Document </h1>
    </div>
    <div class="row">
    
    
    
    <div class="content_innner">
    
    
      
    <form action="" method="post" enctype="multipart/form-data">
    <?php
    include('config.php');
    $row=$_REQUEST['id'];
    $ros=$_REQUEST['mobile'];
     $data=mysqli_fetch_array(mysqli_query($con, "select * from doc where mobile='$ros'")); 
     ?>

     
    <div class="row">
     <div class="form-group col-lg-12">
         <div class="row">
        <div class="form-group col-lg-4">
        <label for="usr"> VT *: </label>
        <input type="file" value="" name="vt" class="form-control"> 
       <tr>
           
           <td>
               
               <img src="<?php echo $url;?>/<?php echo $data['vt'];?>" width="50px;" height="50px;"/></td>
           </tr>
        </div>
        <div class="form-group col-lg-4">
        <label for="usr"> FC *: </label>
        <input type="file" name="fc" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['fc'];?>" width="50px;" height="50px;"/></td></td>
           </tr>
        </div>
        <div class="form-group col-lg-4">
        <label for="usr"> PC *: </label>
        <input type="file" name="pc" class="form-control"> 
       <tr>
           <td>  <img src="<?php echo $url;?>/<?php echo $data['pc'];?>" width="50px;" height="50px;"/></td></td>
           </tr>
        </div>
        </div>
        
        
        <div class="row">
        <div class="form-group col-lg-4">
        <label for="usr"> EC *: </label>
        <input type="file" name="ec" class="form-control"> 
       
           <td><img src="<?php echo $url;?>/<?php echo $data['ec'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        <div class="form-group col-lg-4">
        <label for="usr"> RC1 *: </label>
        <input type="file" name="rc1" class="form-control"> 
       <tr>
           <td>  <img src="<?php echo $url;?>/<?php echo $data['rc1'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
          <div class="form-group col-lg-4">
        <label for="usr"> RC *: </label>
        <input type="file" name="rc" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['rc'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        </div>
       
        
        
        
        <div class="row">
        <div class="form-group col-lg-4">
        <label for="usr"> INS *: </label>
        <input type="file" name="ins" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['ins'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        
        <div class="form-group col-lg-4">
        <label for="usr"> DL *: </label>
        <input type="file" name="dl" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['dl'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
       
        <div class="form-group col-lg-4">
        <label for="usr"> DL1 *: </label>
        <input type="file" name="dl1" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['dl1'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-lg-4">
        <label for="usr"> PV *: </label>
        <input type="file" name="pv" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['pv'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        
        <div class="form-group col-lg-4">
        <label for="usr"> AD *: </label>
        <input type="file" name="ad" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['ad'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        
        <div class="form-group col-lg-4">
        <label for="usr"> AC *: </label>
        <input type="file" name="ac" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['ac'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-lg-4">
        <label for="usr"> Insurance No *: </label>
        <input type="file" name="insurance_no" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['insurance_no'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        
        <div class="form-group col-lg-4">
        <label for="usr"> Insurance Type *: </label>
        <input type="file" name="insurance_type" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['insurance_type'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        
        <div class="form-group col-lg-4">
        <label for="usr"> Insurance photo *: </label>
        <input type="file" name="insurance_photo" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['insurance_photo'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-lg-4">
        <label for="usr"> V1 *: </label>
        <input type="file" name="v1" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['v1'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        
        <div class="form-group col-lg-4">
        <label for="usr"> V2 *: </label>
        <input type="file" name="v2" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['v2'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        
        <div class="form-group col-lg-4">
        <label for="usr">  V3 *: </label>
        <input type="file" name="v3" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['v3'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        </div>
        
        <div class="row">
        <div class="form-group col-lg-4">
        <label for="usr"> V4 *: </label>
        <input type="file" name="v4" class="form-control"> 
       <tr>
           <td> <img src="<?php echo $url;?>/<?php echo $data['v4'];?>" width="50px;" height="50px;"/></td> </td>
           </tr>
        </div>
        </div>
    </div>
</div>  
        

        <button class="btn btn-success" name="update" type="submit"> Update </button>
        <a href="register_driver.php" class="btn btn-primary">Back</a>
      </div>
      


      <?php
          if (isset($_POST['update']))
           {
            extract($_POST);
            include('config/config.php');
            $rowid=$_REQUEST['id'];
            $rowid1=$_REQUEST['mobile'];
            
            $fname=$_FILES['vt']['name'];
            $fname = time().$fname;
            $temp_name=$_FILES['vt']['tmp_name'];
            $path="../apps/images/".$fname;
            move_uploaded_file($temp_name,$path);
            
            $fname1 =$_FILES['pc']['name'];
            $fname1 = time().$fname1;
            $temp_name1=$_FILES['pc']['tmp_name'];
            $path1="../apps/images/".$fname1;
            move_uploaded_file($temp_name1,$path1);
            
            $fname2 =$_FILES['ec']['name'];
            $fname2 = time().$fname2;
            $temp_name2=$_FILES['ec']['tmp_name'];
            $path2="../apps/images/".$fname2;
            move_uploaded_file($temp_name2,$path2);
            
            $fname3 =$_FILES['fc']['name'];
            $fname3 = time().$fname3;
            $temp_name3=$_FILES['fc']['tmp_name'];
            $path3="../apps/images/".$fname3;
            move_uploaded_file($temp_name3,$path3);
            
            $fname4 =$_FILES['rc']['name'];
            $fname4 = time().$fname4;
            $temp_name4=$_FILES['rc']['tmp_name'];
            $path4="../apps/images/".$fname4;
            move_uploaded_file($temp_name4,$path4);
            
            $fname5 =$_FILES['rc1']['name'];
            $fname5 = time().$fname5;
            $temp_name5=$_FILES['rc1']['tmp_name'];
            $path5="../apps/images/".$fname5;
            move_uploaded_file($temp_name5,$path5);
            
            $fname6 =$_FILES['ins']['name'];
            $fname6 = time().$fname6;
            $temp_name6=$_FILES['ins']['tmp_name'];
            $path6="../apps/images/".$fname6;
            move_uploaded_file($temp_name6,$path6);
            
             $fname7 =$_FILES['dl']['name'];
            $fname7 = time().$fname7;
            $temp_name7=$_FILES['dl']['tmp_name'];
            $path7="../apps/images/".$fname7;
            move_uploaded_file($temp_name7,$path7);
            
            $fname8 =$_FILES['dl1']['name'];
            $fname8 = time().$fname8;
            $temp_name8=$_FILES['dl1']['tmp_name'];
            $path8="../apps/images/".$fname8;
            move_uploaded_file($temp_name8,$path8);
            
            $fname9 =$_FILES['pv']['name'];
            $fname9 = time().$fname9;
            $temp_name9=$_FILES['pv']['tmp_name'];
            $path9="../apps/images/".$fname9;
            move_uploaded_file($temp_name9,$path9);
            
            $fname10 =$_FILES['ad']['name'];
            $fname10 = time().$fname10;
            $temp_name10=$_FILES['ad']['tmp_name'];
            $path10="../apps/images/".$fname10;
            move_uploaded_file($temp_name10,$path10);
            
            $fname11 =$_FILES['ac']['name'];
            $fname11 = time().$fname11;
            $temp_name11=$_FILES['ac']['tmp_name'];
            $path11="../apps/images/".$fname11;
            move_uploaded_file($temp_name11,$path11);
            
            $fname12 =$_FILES['insurance_no']['name'];
            $fname12 = time().$fname12;
            $temp_name12=$_FILES['insurance_no']['tmp_name'];
            $path12="../apps/images/".$fname12;
            move_uploaded_file($temp_name12,$path12);
            
            $fname13 =$_FILES['insurance_type']['name'];
            $fname13 = time().$fname12;
            $temp_name13=$_FILES['insurance_type']['tmp_name'];
            $path13="../apps/images/".$fname13;
            move_uploaded_file($temp_name13,$path13);
            
            $fname14 =$_FILES['insurance_photo']['name'];
            $fname14 = time().$fname14;
            $temp_name14=$_FILES['insurance_photo']['tmp_name'];
            $path14="../apps/images/".$fname14;
            move_uploaded_file($temp_name14,$path14);
            
            $fname15 =$_FILES['v1']['name'];
            $fname15 = time().$fname15;
            $temp_name15=$_FILES['v1']['tmp_name'];
            $path15="../apps/images/".$fname15;
            move_uploaded_file($temp_name15,$path15);
            
            $fname16 =$_FILES['v2']['name'];
            $fname16 = time().$fname16;
            $temp_name16=$_FILES['v2']['tmp_name'];
            $path16="../apps/images/".$fname16;
            move_uploaded_file($temp_name16,$path16);
            
            $fname17 =$_FILES['v3']['name'];
            $fname17 = time().$fname17;
            $temp_name17=$_FILES['v3']['tmp_name'];
            $path17="../apps/images/".$fname17;
            move_uploaded_file($temp_name17,$path17);
            
             $fname18 =$_FILES['v4']['name'];
            $fname18 = time().$fname18;
            $temp_name18=$_FILES['v4']['tmp_name'];
            $path18="../apps/images/".$fname18;
            move_uploaded_file($temp_name18,$path18);
            
  $query="update doc set vt='$fname', pc='$fname1', ec='$fname2', fc='$fname3', rc='$fname4', 
 rc1='$fname5', ins='$fname6', dl='$fname7', dl1='$fname8', pv='$fname9', ad='$fname10',
ac='$fname11', insurance_no='$fname12', insurance_type='$fname13', insurance_photo='$fname14', v1= '$fname15', v2= '$fname16',
v3='$fname17', v4= '$fname18' where mobile='$rowid1'"; 
              if (mysqli_query($con,$query))
                 {      
                    ?>
                  <script>
                        window.location='register_driver.php';
                  </script>

                <?php
                  }
                  else
                  {
                    echo "<script> alert('Sorry, Data not Updated')</script>";
                  }
                }
            ?>

       </form>
      
      </div>
     
    </div>
  </div>
  <?php include("footer.php") ?>