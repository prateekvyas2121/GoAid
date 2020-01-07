
<?php include("header.php") ?>
<?php include("sidebar.php") ?>




<div id="page-wrapper">
<div class="row">
  
    <h1 class="page-header">First Add 
    <a class="btn btn-success pull-right" href="add_first_add.php">Add New  <i class="fa fa-plus"></i></a>
    </h1>
 
</div>
<div class="row">

<div class="form-group "> 
<label>Records per page</label>
<select class="form-control" style="display:inline-block; width:100px;">
<option value="10" selected="selected">10</option>
<option value="20">20</option>
<option value="80">80</option>
<option value="All">All</option>
</select> 

</div>
<div class="table-responsive">

  <table class="table table-bordered table-hover ">
    <thead>
      <tr>
        <th> <input class="group-checkable" data-set="#sample_1 .checkboxes" type="checkbox"></th>
        <th>S.N.</th>
        <th>Main Title </th> 
        <th>Image </th> 
         
        <th>Description </th>
          
        <th>Edit/Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
                                    $counter=0;
										$lists=mysqli_query($con, "select * from first_add order by id DESC") or die(mysqli_error());
											if(mysqli_num_rows($lists))
											while($get_list=mysqli_fetch_array($lists))
											{
												$counter++;
									?>
      <tr class="record">
        <td><input class="group-checkable"  type="checkbox"></td>
        <td><?php echo $counter ;?></td>       
       <td><?php echo $get_list['main_title'];?></td>
       
       
       <td><img src="../images/first_add-images/<?php echo $get_list['image'];?>" style="width: 100px; height:70px;" /></td>

       <td><?php echo substr($get_list['description'],0,100)."...";?></td>
        
         
         
        <td>
        <!-- 
        <p class="m"><a class="statusbutton" style="cursor:pointer" id="<?php echo $get_list['id'];?>">
        
         <?php if($get_list['status']==1){ ?> 
   <i class="fa fa-check" aria-hidden="true"></i>Active
      <?php }else{ ?>
     <i class="fa fa-remove"></i>Deactive
       <?php }?> -->         
       
    </a></p>

        <!-- <p class="m"> <a href="edit_first_add.php?id=<?php echo $get_list['id'];?>"> <i class="fa fa-edit"> Edit</i></a></p> -->
        <!-- <p class="m"> <a href="delete_package.php?id=<?php echo $get_list['id'];?>"> <i class="fa fa-trash"> Delete</i></a></p> -->
        <p class="m"><a  style="cursor:pointer" href="edit_first_add.php?id=<?php echo $get_list['id'];?>"> <i class="fa fa-trash"> Edit</i></a></p>
       <p class="m"><a class="delbutton" style="cursor:pointer" id="<?php echo $get_list['id'];?>"> <i class="fa fa-trash"> Delete</i></a></p>
        
        </td>
     <?php } ?>
      </tr>
     
    </tbody>
  </table>

</div>

</div>
</div>




  <script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {
 $.ajax({
   type: "GET",
   url: "delete_first_add.php",
   data: info,
   success: function(){
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");
 }

return false;
});
});
</script> 


<!-- <script type="text/javascript">
$(function() {
$(".statusbutton").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'id=' + del_id;
 
 $.ajax({
   type: "GET",
   url: "ajax/status/status_credit_card.php",
   data: info,
    success: function(response){
		if(response<1)
			alert('Successfully Un Approved');
		else
			alert('Successfully Approved');
                   window.location.reload();                }
 });
return false;
});
});
</script>  -->

<?php include("footer.php") ?>