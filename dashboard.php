<?php include('header.php');?>
	
<?php include('sidebar.php');?>
	

<?php error_reporting(0);?>
<div class="page-container row-fluid">
<div class="page-content">
  <div id="portlet-config" class="modal hide">
    <div class="modal-header">
      <button data-dismiss="modal" class="close" type="button"></button>
      <h3>portlet Settings</h3>
    </div>
    <div class="modal-body">
      <p>Here will be a configuration form</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid"> </div>
    <style>
        
          
          .top:after { content:""; display:block;
      clear: both;
      overflow: hidden;
    }
          
          .top .btn.btn-primary.dropdown-toggle {
      background:#666!important;
    }
          .top > ul {
      float: right;
    }.top li {
        display: inline-block;
    }
    
    .top 	.dropdown-menu > li {
     
    
      color: #000; background-color:#fff;
      display: block;
      box-shadow:0px 0px 1px #ccc;
    }
      
      .top .dropdown-menu{ box-shadow:none; border:none; color:#fff;}
      
      
      .top .dropdown-menu li > a{ color:#000; padding:10px;}
      
      
      .top .dropdown-menu li > a:hover,  .top .dropdown-menu .active > a,  .top .dropdown-menu .active > a:hover {
      background-color: #08c;
      background-image: none;
      color: #fff;
      filter: none;
      text-decoration: none;
    }
    
    .top  h2{ color:#666!important; border-bottom:1px dashed #ccc; padding-bottom:15px; margin-bottom:15px;}
    
    .tiles-footer:after {
      border-color: rgba(0, 0, 0, 0.35) #f7f8fa #f7f8fa rgba(0, 0, 0, 0.35);
      border-style: solid;
      border-top-left-radius: 1px;
      border-width: 5px;
      bottom: 0;
      content: "";
      height: 0;
      margin-bottom: -1px;
      margin-right: 0px;
      position: absolute;
      right: -1px;
      width: 0;
    }
    
    .sections ul{ margin:0px;}
    
    .sections li {
    
      display: block;
      float: left;
      
      margin-right: 6px; margin-bottom:25px;
      width: 24%; border:1px solid #ccc; color:#fff; position:relative;
    }
      
      .sections li:last-child{ margin-right:0px;}
      
     .tiles-body-alt {
      background: #677fa4 none repeat scroll 0 0; padding:5px;
    }
    
    
    
    .text-center2 {
      background: #4b5f7d none repeat scroll 0 0;
      font-size: 50px;
      padding: 45px 20px;
      text-align: center;
    }
      
      .tiles-footer {
      background: #38475d none repeat scroll 0 0; padding:5px;
    }
     
     .main_dashboard_div{ font-family:"arial"!important;}
     
     
     
     
     .green .tiles-body-alt {background:#99d063  none repeat scroll 0 0;}
     
    .green  .text-center2 { background: #85c744  none repeat scroll 0 0;}
     
     .green .tiles-footer { background:#6ca632  none repeat scroll 0 0;}
     
      .orange .tiles-body-alt {background:#f2b257  none repeat scroll 0 0;}
     
    .orange  .text-center2 { background: #efa131  none repeat scroll 0 0;}
     
     .orange .tiles-footer { background:#dc8911  none repeat scroll 0 0;}
     
       .red .tiles-body-alt {background:#eb6d60   none repeat scroll 0 0;}
     
    .red  .text-center2 { background: #e74c3c   none repeat scroll 0 0;}
     
     .red .tiles-footer { background:#d62c1a   none repeat scroll 0 0;}
     
     
     .UserReport{ width:46%;  box-shadow:0px 0px 2px #ccc; margin-top:25px;  padding:15px; float:left; margin-right:32px;}
     
     .reports ul{ margin:0px; margin-top:25px;}
	 
	 .reports li {
  box-shadow: 0 0 1px #ccc;
  display: block;
  float: left;
  margin-right: 25px;
  padding: 0;
  width: 15%;
}
	 
	 
	 
	 .reports li:last-child { margin-right:0px;} 
	 
	 
     .serverload {
  box-shadow: 0 0 1px #ccc;
  margin-top: 30px!important;
  overflow: hidden;
  padding: 15px;
  width: 94%;
  clear: both;
  float: left;
}





.main_dashboard_div .panel-indigo {
  border-color: #9358ac;
  overflow: hidden;
  height: auto;
  clear: both;
  width: 52%;
  padding: 3px;
  float: left;
  box-shadow: 0px 0px 1px #ccc;
  margin-top: 25px;
}

.main_dashboard_div .panel-heading {
  background: dodgerblue;
  padding: 3px 10px;
  color: white;
}


.panel.panel-grape {
  overflow: hidden;
  float: left;
  width: 43%;
  margin-left: 22px;
  margin-top: 26px;
  padding: 5px;
  box-shadow: 0px 0px 1px #ccc;
}
.panel-grape .panel-heading {
  background-color: #7a869c;
  border-color: #7a869c;
  color: #ffffff;
}

.panel-indigo .panel-heading {
  background-color: #9358ac;
  border-color: #9358ac;
  color: #ffffff;
}
.panel-tasks li.item-danger {
  border-left: 2px solid #e73c3c;
}
.panel-tasks li {
  background-color: #f2f3f5;
  border-left: 2px solid #e6e7e8;
  border-radius: 1px;
  display: block;
  margin-bottom: 1px;
  margin-left: 0;
  margin-right: 0;
  padding: 10px;
}

.options.todooptions {
  float: right;
  display: none;
}

.task-description {
  padding: 10px;
}


.panel-tasks.ui-sortable {
  padding: 0px!important;
  margin: 0px!important;
}




.UserReport img{ width:100%; height:100%;}

.UserReport:last-child{ margin-right:0px!important;}


.sections.section22 {
  margin-top: 40px;
}



.top {
  margin-bottom: 32px;
}


.text-top {
  float: left;
  margin-top: -9px;
}


.text-top i{ opacity:0.5;}

@media screen and (max-width:1920px){
	
	
	
	
	
	
	.UserReport { 
  margin-right: 12px;
  width: 44%;
}
	
.reports li {
  height: 145px;
  margin-right: 11px;
}

.text-center2 {

  font-size: 37px;
  padding: 29px 20px;
 
}
	
	
	
	
	.main_dashboard_div .panel-indigo {
 
  width: 51%;
}
	
	
	}





@media screen and (max-width:767px){
	
	
	.sections li {

  width: 302px;
}
	
	
	.UserReport {
  margin-right: 12px;
  width: 43%;
}

.text-center2 {
  font-size: 31px;
  padding: 19px 20px;
}
	
	.main_dashboard_div .panel-indigo {
  margin: 0;
  width: 100%;
}
	
	.panel.panel-grape{ margin:0px!important; float:left; width:98%;}
	
	
	.UserReport {
  margin: 0 0 15px;
  width: 92%;
}

.reports li {
  height: 145px;
  margin-right: 15px;
  width: 30%;
}
	
	
	
	}




@media screen and (max-width:639px){
	
	.sections li {
  width: 100%;
}
	
	}




@media screen and (max-width:480px){
	
	
	
	
	
	.reports li {
  height: 145px;
  margin-right: 16px;
  width: 45%;
}
	
	


	
	}





          </style>
    <div class="main_dashboard_div">
      <div class="top">
        <h2> Dashboard</h2>
        <ul>
          <li>
            
          </li>
          <li>
            
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
      <div class="sections">
        <ul>
          <li class="blue">
            <div class="tiles-body-alt"> 
              <div class="text-center"><span class="text-top"> </span>Current Ride</div>
            </div>
            
            <?php
			$fetch_regetsres_uers=mysqli_query($con,"select * from temp_user_ride ORDER BY id DESC");
			$tot_users=mysqli_num_rows($fetch_regetsres_uers);
			
			?>
            <div class="text-center2"><span class="text-top"></span><a href="current_accepted_rides"><?=$tot_users?></a></div>
           
          </li>
          <!--<li class="green">
            <div class="tiles-body-alt "> 
              <div class="text-center"><span class="text-top"></span> Product Category </div>
            </div>
            <?php
            $fetch_services=mysqli_query($con,"select id from main_category where status=1 ");
			$tot_services=mysqli_num_rows($fetch_services);
			?>
                        <div class="text-center2"><span class="text-top"><i class="fa fa-user "></i></span><?=$tot_services?></div>
           
          </li>-->
          
          
        </ul>
      </div>
      <div class="clearfix"></div>
    
      
<!--
      
    </div>
  </div>
</div>


<script>
var programmingSkills = [
    {
        value: 20,
        label: ' User',
        color: '#3399FF'
    },
    {
        value: 23,
        label: ' Partner',
        color: '#FFC575'
    },
    {
        value: 17,
        label: 'Total Member',
        color: '#99CC00'
    },
    {
        value: 22,
        label: ' Partner Employee',
        color: '#FF3300'
    },
    {
        value: 18,
        label: ' Partner Agency',
        color: '#944DDB'
    },
	
	
];
</script> 
<script src='dashboard/js/snap.svg-min.js'></script> 
<script src="dashboard/js/svg-donut-chart-framework.js"></script> 

<!-- coulmn chart --> 

<script src='dashboard/js/loader.js'></script> 
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMaterial);

function drawMaterial() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');
      data.addColumn('number', 'Energy Level');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Motivation and Energy Level Throughout the Day',
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var material = new google.charts.Bar(document.getElementById('chart_div'));
      material.draw(data, options);
    }
    </script> 

<!-- geo chart --> 

<script type="text/javascript">
      google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 500],
		  ['India', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script> 

<!-- Activities chart --> 

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['INDIA',     80],
          ['BRAZIL',      2],
          ['GERMANY',  2],
          ['CANADA', 2],
          ['U.S.A.',    14]
        ]);

        var options = {
          title: 'Website Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>



	
	
	
<?php include('footer.php');?>