<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Wow</title>

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

				color: #0fa14a;
				font-size: 31.54px;
				position: absolute;
				top: 169px;
				width: 100%;
				position: absolute;
				right: 0px;
				font-weight: bold;
				font-weight:bolder;
				text-align: center;
			}
			#outerContact h3{
				width: 100%;
				height: 27px;
				position: absolute;
				left: 5px;
				text-align: center;
				color:#fff;
				font-size:18px;
				top:160px;
			}
			#center_info {
				width:283px;
				height:68px;
				position:absolute;
				top:65px;
				right:21px;
				
			}
			#center_info h1{
				
				font-size:19px;
				color:#f1cb3d;
				line-height:19.1px;
			}
			
			#Name, #Email, #Phone {
				width: 282px;
				height: 29px;
				-webkit-border-radius: 15px 14px 14px 15px/15px 15px 14px 14px;
				-moz-border-radius: 15px 14px 14px 15px/15px 15px 14px 14px;
				border-radius: 15px 14px 14px 15px/15px 15px 14px 14px;
				background-color: #f1cb3d;
				-webkit-box-shadow: inset 1px 2px 2px rgba(36,36,37,.75);
				-moz-box-shadow: inset 1px 2px 2px rgba(36,36,37,.75);
				box-shadow: inset 1px 2px 2px rgba(36,36,37,.75);
				border: 1px solid #ccc;
				border: solid 1px #fff;
				color: #0fa14a;
				padding-right: 8px;
				font-size: 16.52px;
				border: none;
				font-weight: bold;
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
				top:445px;
				width: 55px;
				height: 23px;
				-webkit-border-radius: 12px/11px 11px 12px 12px;
				-moz-border-radius: 12px/11px 11px 12px 12px;
				border-radius: 12px/11px 11px 12px 12px;
				background-color: #0fa14a;
				border: none;
				color: #fff;
				font-weight: bold;
			}
		</style>

	</head>

	<body>

		<div id="outerContact">

			<h3> יובל כהן : 054-814-68-97</h3>

			<h1>חגיגה ברזילאית</h1>

			<div id="center_info">
                                      <h1>
                                      חגיגה ברזילאית הכוללת מתופפי 
										<br>
										בטוקדה ורקדניות ברזילאיות,
										<br>
										כולל מופע קפוארה.    
                  </h1>
                    </div>

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

	</body>

</html>
