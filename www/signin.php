<?php
    include('topmenu.php');
?>
<html>
<head>
<style> 
body{
    background-image:url('/images/blured-bg-5.png');
    background-repeat : no-repeat;
    background-size : cover;
      }
#LOG{
    width: 10%;
    height: 10%;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;
}
.button:hover
{
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#dfbf91', endColorstr='#dfd691',GradientType=0);
    background-color: yellow;
}

.button:active
{
    position: relative;
    top: 100px;
}
#scle {text-align: center;
		font-size: 3em;
		color : #336666;}
    body {
    background-color: black;
   
}
#scle1 {text-align: center;
		font-size: 6em;
		color : #9AB2E8;
    font-weight: bold;
    font-style: italic;
    {
    
   
}
</style>

</head>
    <body>

  
    
    <form action="validateuser.php" method="post">
    
    <table border="0" cellspacing="1" cellpadding="3">
    
    <div id = scle1>Login</div>
    <label></label>
    <div>
    </div>
    <div id = scle>
    <label  for="exampleInputEmail1" style="color: #E8B69A" >Email address</label>
    <form action="validateuser.php" method="post">
    </div>
  <div id = scle>
    <input type="email" class="form-group" id="exampleInputEmail1" placeholder="Email" name="emailaddress" style="border: 3px #0000FF solid">
  </div>
  
  <div id = scle>
  <label for="exampleInputPassword1" style="color: #E8B69A">Password</label>
  </div>
  <div id = scle class="form-group">
    
    <input type="password" class="form-group" id="exampleInputPassword1" placeholder="Password" name="password"style="border: 3px #0000FF solid">
  </div>  
  <div id = scle type="p0">
  <button id = "LOG" type="submit" class="btn">Login</button> &nbsp &nbsp & &nbsp &nbsp <button id = "LOG" type="submit" class="btn">Signup</button>
  </div>
</form>
</html>