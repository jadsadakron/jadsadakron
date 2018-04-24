<?php
	include('topmenu.php');
?>
<head>
    <style>
       
	   body{
    	background-image:url('/images/Wiki-background.jpg');
    	background-repeat : no-repeat;
    	background-size : cover;
      }
	  #p1{
        text-align: center;
		font-size: 3em;
		color : #45009B;
		background : #429B85;
		background-size: cover
      }
      #img_smartphone{
       
	   height: 500px;
	   width: 1000px;
	   display: table-cell;
	   vertical-align: middle;
	 }
	 #img_smartphone img{
	   height: 400px;
	   margin: auto auto;
	   display: block;
	 }
	  #img_labtop{
       
        height: 500px;
        width: 900px;
        display: table-cell;
        vertical-align: middle;
      }
      #img_labtop img{
        height: 450px;
        margin: auto auto;
        display: block;
      }
	 
    </style>
</head>
<body>
			<br>
			<div id="p1">Present Product</div>
			<br><br><br><br>
			<div id="img_smartphone">
			<a href="itemlist.php?category=CellPhone">
			<br>
			<br>
			<br>
			<br>
			<img src="images/56724.png" />
			<br>
			<br>
			<br>
			<img src="images/453240.png" />
			</a>
    		</div>
			<div id="img_labtop">
			<a href="itemlist.php?category=Laptop">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<img src="images/45324.png"/>
			<br>
			<br>
			<br>
			<img src="images/45345.png"/>
			</a>
    		</div>


			
	
		<!-- <span id="crossfade">
			<a href="itemlist.php?category=CellPhone">
			<img class="bottom" src="images/logo.jpeg" style="max-width:350px;max-height:350px;width:auto; height:auto;" />
			<img class="top" src="images/MicromaxKnight2E471.jpg" style="max-width:350px;max-height:350px;width: auto;height: auto;" /></a>
		</span> -->

		<!-- <span id="crossfade">
			<a href="itemlist.php?category=CellPhone">
			<img class="bottom" src="images/MicrosoftLumia640XL.jpg" style="max-width:350px;max-height:350px;width:auto; height: auto;" />
			<img class="top" src="images/XperiaT3White.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" /></a>
		</span>
		<span id="crossfade">
			<a href="itemlist.php?category=Laptop">
			<img class="bottom" src="images/DellVostro153558.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" />
			<img class="top" src="images/HPProbook6570.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" /></a>
		</span>	 -->
	</body>
	
</html>