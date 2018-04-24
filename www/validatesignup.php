<html>
    <head>
    <style> 
body{
    background-color : #7492FF;
   
      }
</style>
        <script language="JavaScript" type="text/JavaScript" src="checkform.js"></script>
        <style> 
    body{
    background-image:url('/images/wvaq_bg.jpg');
    background-repeat : no-repeat;
    background-size : cover;
      }
    #scle {text-align: center;
		font-size: 3em;
		color : #DFD691;}
    body {
    background-color: black;
   
    }
    #LOG{
    width: 30%;
    height: 30%;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;
}
#LOG1{
    width: 20%;
    height: 20%;
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
    </style> 
    </head>
    <body>
        <form action="addcustomer.php" method="post" onsubmit="return validate(this);">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td id = scle colspan="2" align="center">Enter your information</td>
                </tr>

                <tr>
                    <td id = scle>Email Address: </td>
                    <td><input size="20" type="text" name="emailaddress" ><span id="emailmsg"></span></td>
                </tr>

                <tr>
                    <td id = scle>Password: </td>
                    <td><input size="20" type="password" name="password" ><span id="passwdmsg"></span></td>
                </tr>

                <tr>
                    <td id = scle>ReType Password: </td>
                    <td><input size="20" type="password" name="repassword"><span id="repasswdmsg"></span></td>
                </tr>

                <tr>
                    <td id = scle>Complete Name </td>
                    <td><input size="50" type="text" name="complete_name" ><span id="usrmsg"></span></td>
                </tr>

                <tr>
                    <td id = scle>Address: </td>
                    <td><input size="80" type="text" name="address1"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input size="80" type="text" name="address2"></td>
                </tr>

                <tr>
                    <td id = scle>City: </td><td><input size="30" type="text" name="city"></td>
                </tr>

                <tr>
                    <td id = scle>State: </td><td><input size="30" type="text" name="state"></td>
                </tr>

                <tr>
                    <td id = scle>Country: </td><td><input size="30" type="text" name="country"></td>
                </tr>

                <tr>
                    <td id = scle>Zip Code: </td><td><input size="20" type="text" name="zipcode"></td>
                </tr>

                <tr>
                    <td id = scle>Phone No: </td><td><input size="30" type="text" name="phone_no"></td>
                </tr>

                <tr>
                    <td><input id = LOG type="submit" name="submit" value="Submit"></td>
                    <td><input id = LOG1 type="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
    </body>
</html>