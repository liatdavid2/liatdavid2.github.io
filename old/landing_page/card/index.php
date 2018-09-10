<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Club membership cards</title>

		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link type="text/css" rel="stylesheet" href="file:///I|/Atarix_Sites/Barcod/normalize.css"/>
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
				font-family: Arial;
				font-size: 16px;
			}

			#outerContact {
				width: 1000px;
				height: 800px;
				margin: 0 auto;
				background-image: url(images/WEB.png);
				background-repeat: no-repeat;
				position: relative;
			}

			#outerContact h1 {
				top: 342px;
				font-size: 39.26px;
				position: absolute;
				color: #fff;
				font-weight: bold;
				right: 163px;
			}
				#outerContact #phone{
				font-family: Arial;
				font-size:51px;
				color: #000;
				text-align: center;
				position: absolute;
				top: 89px;
				font-weight:550;
				right:310px;
			}
			
			.container{
			   position: relative;
   			 width: 100%;	
			}
			.round1{
			 position: absolute;
   			left:820px;
			top:140px;
    		color:#fff;
			}
		
			.round2{
				 position: absolute;
			left:519px;
			top:157px;
   			 width: 300px;
			}
		
				.round3{
				 position: absolute;
				 left:335px;
			top:145px;
   			 width: 300px;
			}
			.round3 h3, .round2 h3, .round1 h3{
			color:#fff;
			font-size:25.58px;
			text-align:center;
			}
			
			h2.contect_form_headline {
				width: 212px;
				height: 40px;
				top: 93px;
				position: absolute;
				font-size: 1.8em;
				text-align: center;
				color: #d40072;
			}

			#contact_form {
				position: absolute;
				top: 323px;
				left: 0px;
				height: 374px;
				width: 268px;
			}

		
			#Name, #Email, #Phone {
				width: 205px;
				height: 40px;
				-webkit-border-radius: 25px;
				-moz-border-radius: 25px;
				border-radius: 25px;
				background-color: #00b2ec;
				-webkit-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
	-moz-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
	box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				color: #fff;
				font-size: 22.75px;
				font-weight: bold;
				text-align: center;
				border: none;
				font-family: Arial;/*to firefox bug*/
			}

			#Name {

				position: absolute;
				top: 180px;
			}

			#Email {
				position: absolute;
				top: 230px;
			}

			#Phone {

				position: absolute;
				top: 280px;
			}

			#button {
				left: 42px;
				position: absolute;
				top: 292px;
			}

			.submit-button {
				background: none;
				border: none;
				color: #fff;
				font-size: 22px;
				font-weight: bold;
				position: absolute;
				left: 105px;
				top: 57px;
				font-family: Arial;/*to firefox bug*/
			}

			h1 {
				width: 720px;
				position: absolute;
				right: 32px;
				top: 0px;
				color: #ff000c;
				font-size: 3.2em;
				font-weight: bold;
			}
			
	
			#price {
				position: absolute;
				float: right;
				top: 285px;
				right: -20px;
				text-align: right;
				width: 479px;
			}

			#price h1 {
				font-size: 25pt;
				font-style: none;
				color:#00b2ec;
			}
			#price h4 {
				font-size: 19.69px;
				font-style: none;
				color:#9e9fa0;
				position:absolute;
				top:400px;
				right:222px;
			}
			.footer {
				color: #fff;
				font-size: 12px;
				position: absolute;
				right: 400px;
				bottom: 5px;
				width: 128px;
				text-align: left;
			}
			.footer a {
				text-decoration: none;
				color: #fff;
			}
			.footer a:hover {
				color: #bfe5f1;
			}

		</style>

	</head>

	<body>

		<div id="outerContact">

			<h1>כרטיסי חבר מועדון</h1>
			<h4 id="phone">054-814-68-97</h4>
			<div id="contact_form">
			
				<br>
				<h2 class="contect_form_headline"> למימוש הטבה
				<br>מלאו פרטים</h2>
				
						<!-------------------round-blue-live-text---------------------->	
			<div class="container">
			<div class="round1"> <h3>גרפיקה <br>לכרטיס </h3> </div>
			<div class="round2" > <h3> הדפסה</h3> </div>
			<div class="round3" > <h3> קידוד<br>הכרטיס</h3> </div>
			</div>
<!-------------------end-round-blue-live-text---------------------->	
				
				<form>
					<input type="text" onfocus="this.value='';" value="שם מלא" name="Name" id="Name" />
					<input type="email" onfocus="this.value='';" value="מייל "name="Email" id="Email" />
					<input type="tel" onfocus="this.value='';" value="טלפון" name="Phone" id="Phone" />
					<div id="button">
						<input type="submit" name="submit" value="שלח" class="submit-button" />
					</div>
					<!--end midleForm-->
				</form>
			</div>
			
			
			<!--div id="round_container">
			<div class="round_txt" id="#round1"> <h3>גרפיקה <br>לכרטיס </h3> </div>
			<div class="round_txt" id="#round2"> <h3> הדפסה</h3> </div>
			</div--->
			
			<div id="price">
				<h1> והכל רק ב-1.21 ₪ לכרטיס </h1>
				<h4>* בקניית מינימום 5000 יחידות</h4>
			</div>

			<div class="footer">
				<a href="#">@ אתריקס - בניית אתרים</a>
			</div>

		</div>

	</body>

</html>
