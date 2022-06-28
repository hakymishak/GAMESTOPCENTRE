<!DOCTYPE html>
<html>
	<body style="background-color: rgb(232, 227, 244);">
	<head>
    
		<style>
			h1{text-align: center;}
			p{text-align: center;}
			h3{text-align: center;}
			h5{text-align: center;}
			h2{text-align: center;}
		</style>

		<style>
			a:link, a:visited {
  background-color: #606468;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: rgb(0, 0, 0);
}
		</style>

		<div class="h1">
            <center><img src="images1/logo.png" style="width: 300px;height: 200px ;"</center>
			<center><img src="images1/banner.png"style="width: 1150px;height: 300px;"></center>
			<br><br>

			<a href="pages/home.html" target="_blank">H O M E</a>
			<a href="pages/abus.html"_blank">ABOUT US</a>
			<a href="pages/games.html" target="_blank">GAMES</a>
			<a href="pages/cous.html" target="_blank">CONTACT US</a>

			<h2 style="color: rgb(184, 93, 105);">M E M B E R - R E G I S T R A T I O N</h2>
			<center><img src="images1/register1.jpg"</center>
			<center><img src="images1/arrow.png"style="width: 100px;height: 100px;"></center>
        </div>
        <div>
                <h5 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">FILL IN INFORMATION BELOW OVER THE RESPECTIVE BOXES</h5>
        </div>
		<h2 style="font-family: monospace; color:rgb(96, 0, 0);">- PERSONAL DETAILS -</h2>
        <div>
        <form action="#" autocomplete=" off" onsubmit="return validation()">
            <table cellspacing="15" align="center">
                <tr><td><input type="text" id="First Name" placeholder="First Name">
                    <br><span id="namee"></span>
                </td></tr>

				<tr><td><input type="text" id="Last Name" placeholder="Last Name">
                    <br><span id="nnamee"></span>
                </td></tr>


                <tr><td><input type="text" id="Email" placeholder="Email">
                    <br><span id="Emaill"></span>
                </td></tr>

                <tr><td><input type="text" id="Mobilephone" placeholder="Mobile phone">
                    <br><span id="Mobilephonee"></span>
                </td></tr>

                <tr><td><input type="text" id="user" placeholder="Username">
                   <br><span id="userr"></span>
                </td></tr>

                <tr><td><input type="text" id="Pass" placeholder="Password">
                    <br><span id="Passw"></span>
                </td></tr>

                <tr><td><input type="text" id="ConfirmPassw" placeholder="Confirm Password">
                    <br><span id="ConfirmPassword"></span>
                </td></tr>
				
            </table>

		<h2 style="font-family: monospace; color:rgb(96, 0, 0);">- ADDRESS DETAILS -</h2>
			<table cellspacing="15" align="center">

                <tr><td><input type="text" id="Address 1" placeholder="Adress 1">
                    <br><span id="add1"></span>
                </td></tr>

				<tr><td><input type="text" id="Address 2" placeholder="Address 2">
                    <br><span id="add2"></span>
                </td></tr>


                <tr><td><input type="text" id="Postcode" placeholder="Postcode">
                    <br><span id="pc"></span>
                </td></tr>

                <tr><td><input type="text" id="City" placeholder="City">
                    <br><span id="ct"></span>
                </td></tr>


                </td></tr>

                <tr><td><input type="submit" id="btn" placeholder=""></td></tr>
				
        </form>

		
		
        <script type="text/javascript">
            function validation()
            {
                var namee = document.getElementById('First Name').value;
				var nnamee = document.getElementById('Last Name').value;
                var Emaill = document.getElementById('Email').value;
                var Mobilephonee = document.getElementById('Mobilephone').value;
                var user = document.getElementById('user').value;
                var Passw = document.getElementById('Pass').value;
                var ConfirmPassword = document.getElementById('ConfirmPassw').value;

				var add1 = document.getElementById('Address 1').value;
				var add2 = document.getElementById('Address 2').value;
                var pc = document.getElementById('Postcode').value;
                var ct = document.getElementById('City').value;

                
                if(namee == "")
                {
                    document.getElementById('namee').innerHTML="<span style='color: red;'>This section is required</span>";

                }
				if(nnamee == "")
				{
					document.getElementById('nnamee').innerHTML="<span style='color: red;'>This section is required</span>";
				}
                if(Emaill == "")
                {
                    document.getElementById('Emaill').innerHTML="<span style='color: red;'>This section is required</span>";

                }
                if(Mobilephonee == "")
                {
                    document.getElementById('Mobilephonee').innerHTML="<span style='color: red;'>This section is required</span>";
                }
                if(user == "")
                {
                    document.getElementById('userr').innerHTML="<span style='color: red;'>This section is required</span>";
                }
                if(Passw == "")
                {
                    document.getElementById('Passw').innerHTML="<span style='color: red;'>This section is required</span>";

                }
                if(ConfirmPassword == "")
                {
                    document.getElementById('ConfirmPassword').innerHTML="<span style='color: red;'>This section is required</span>";

                }
				if(add1 == "")
                {
                    document.getElementById('add1').innerHTML="<span style='color: red;'>This section is required</span>";

                }
				if(add2 == "")
				{
					document.getElementById('add2').innerHTML="<span style='color: red;'>This section is required</span>";
				}
                if(pc == "")
                {
                    document.getElementById('pc').innerHTML="<span style='color: red;'>This section is required</span>";

                }
                if(ct == "")
                {
                    document.getElementById('ct').innerHTML="<span style='color: red;'>This section is required</span>";
                }


            }
        </script>
        </div>
	</head>

</body>
</html>