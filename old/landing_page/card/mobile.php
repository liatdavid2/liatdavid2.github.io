<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Club membership cards</title>

		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link type="text/css" rel="stylesheet" href="normalize.css"/>
		<style type="text/css">
			.clearfix:before, .clearfix:after {
				content: "";
				display: table;
			}
			.clearfix:after {
				clear: both;
			}
			.floatLeft {
				float: left;
			}
			.floatRight {
				float: right;
			}

			a img {
				border: 0 none;
			}
			a {
				text-decoration: none;
			}

			* {
				margin: 0;
				padding: 0;
			}
			article, aside, figure, footer, header, nav, section {
				display: block;
			}

			body {
				direction: rtl;
				text-decoration: none;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 14px;
			}

			#outerContact {
				width: 320px;
				height: 480px;
				margin: 0 auto;
				position: relative;
				background-image: url(images/mobile.png);
				background-repeat: no-repeat;
			}

			#outerContact h1 {

				color: #fff;
				font-size: 25.51px;
				position: absolute;
				top: 121px;
	
				position: absolute;
				right: 30px;
				font-weight: bold;
				font-weight:bolder;
				text-align: center;
			}
			h3{
				width: 100%;
				height: 25px;
				position: absolute;
				right: 50px;
				text-align: center;
				color:#000;
				font-weight:bold;
				font-size:25.2px;
				top:25px;
			}
			
			.container{
			   position: relative;
   			 width: 100%;	
			}
			.round1{
			 position: absolute;
   			right:-22px;
			top:180px;
    		color:#fff;
			}
		
			.round2{
				 position: absolute;
				 top:192px;
   			right:  -39px;
   			 width: 300px;
			}
		
				.round3{
				 position: absolute;
				 top:183px;
   			left:-50px;
   			 width: 300px;
			}
			.round3 h3, .round2 h3, .round1 h3{
			color:#fff;
			font-size:14.97px;
			}
			#center_info {
				width:283px;
				height:68px;
				position:absolute;
				top:65px;
				right:21px;
				
			}
			#center_info h1{
				
				font-size:18.55px;
				color:#00b2ec;
				position:absolute;
				top:195px;
				right:37px;
			}
			#center_info h4{
				
				font-size:11.53px;
				color:#9e9fa0;
				position:absolute;
				top:240px;
				right:60px;
			}
			#Name, #Email, #Phone {
				width: 282px;
				height: 29px;
				-webkit-border-radius: 15px 14px 14px 15px/15px 15px 14px 14px;
				-moz-border-radius: 15px 14px 14px 15px/15px 15px 14px 14px;
				border-radius: 15px 14px 14px 15px/15px 15px 14px 14px;
				background-color: #00b2ec;
				-webkit-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
	-moz-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
	box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				color: #fff;
				border: solid 1px #fff;
		
				padding-right: 8px;
				font-size: 16.52px;
				border: none;
				font-weight:100;
			}

			#Name {
				top:330px;
				right: 16px;
				position: absolute;
				
			}

			#Email {
				position: absolute;
				right: 16px;
				top:370px;
			}

			#Phone {
				right: 16px;
				position: absolute;
			top:410px;
			}

			.submit-button {
				right: 130px;
				position: absolute;
				top:443px;
				width: 55px;
				height: 23px;
			
				border: none;
				color: #fff;
				font-weight: bold;
				background:none;
			}
		</style>

	</head>

	<body>

		<div id="outerContact">

			<h3>054-814-68-97</h3>

			<h1>כרטיסי חבר מועדון</h1>

		<!-------------------round-blue-live-text---------------------->	
			<div class="container">
			<div class="round1"> <h3>גרפיקה <br>לכרטיס </h3> </div>
			<div class="round2" > <h3> הדפסה</h3> </div>
			<div class="round3" > <h3> קידוד<br>הכרטיס</h3> </div>
			</div>
<!-------------------end-round-blue-live-text---------------------->	

			<div id="center_info">
                                      <h1> והכל רק ב1.21 ₪ לכרטיס </h1>
                                       <h4>* בקניית מינימום 5000 יחידות</h4>
              </div>
	<!-------------------contact form--------------------->	
			<form>
				<input type="text" onfocus="this.value='';" value="שם מלא" name="Name" id="Name" />
				<input type="email" onfocus="this.value='';" value="אימייל "name="Email" id="Email" />
				<input type="tel" onfocus="this.value='';" value="טלפון" name="Phone" id="Phone" />
				<div id="button">
					<input type="submit" name="submit" value="שלח" class="submit-button" />
				</div>
				<!--end contact form---->
			</form>
		</div>

	</body>

</html>
