<style type="text/css">
/*counter*/
.counter-section
{
  margin: 0px auto;
  /*color: black;*/
  background-color: black;
}
.icon-box
{
    border:1px solid white;
    height: 100px;
    width: 100px;
    margin:20px auto;
    /*transform: rotate(45deg);*/
}
.icon-box .fa
{
    font-size: 40px;
    margin: 25px auto;
    color: #fff;
    /*transform: rotate(-45deg);*/
}
.counter-box p
{
   font-size: 20px;
   color: #fff;
   font-family: 'Montserrat', sans-serif;
}
.counter-box .counter
{
   font-size: 18px;
}
</style>
<!-- counter start -->
<div class="section">
    <div class="container-fluid counter-section">
        <div class="row text-center">
            <div class="col-md-3 counter-box">
                <div class="icon-box">
                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                </div>
                <p class="counter" data-count="1300"></p>
                <p>AMBULANCES</p>
            </div>
            <div class="col-md-3 counter-box">
                <div class="icon-box">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                </div>
                <p class="counter" data-count="1000"></p>
                <p>HOSPITAL CONNECTED</p>
            </div>
            <div class="col-md-3 counter-box">
                <div class="icon-box">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <p class="counter" data-count="15000"></p>
                <p>PATIENTS SERVED</p>
            </div>
            <div class="col-md-3 counter-box">
                <div class="icon-box">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <p class="counter" data-count="15"></p>
                <p>CORPORATE ON BOARD</p>
            </div>
        </div>
    </div>
</div>
<!-- end -->
<!-- counter script start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/jquery.counterup.min.js"></script>
</script>
<script>
    $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 5000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
</script>
<!-- end -->
