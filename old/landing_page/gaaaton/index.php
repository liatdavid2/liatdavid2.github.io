<?php
        require_once 'Mobile_Detect.php';
        $MobDic = new Mobile_Detect();
        if($MobDic->isMobile()){
            if( $MobDic->isTablet() ){}
            else{
                header('Location: mobile1.php');
            }
        }
        
        $remarketing = '<!-- Google Code for &#1502;&#1512;&#1499;&#1494; &#1502;&#1489;&#1511;&#1512;&#1497;&#1501; Conversion Page -->
                        <script type="text/javascript">
                        /* <![CDATA[ */
                        var google_conversion_id = 961549092;
                        var google_conversion_language = "en";
                        var google_conversion_format = "3";
                        var google_conversion_color = "ffffff";
                        var google_conversion_label = "m0_xCITrwiUQpKbAygM";
                        var google_remarketing_only = false;
                        /* ]]> */
                        </script>
                        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
                        </script>
                        <noscript>
                        <div style="display:inline;">
                        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/961549092/?label=m0_xCITrwiUQpKbAygM&amp;guid=ON&amp;script=0"/>
                        </div>
                        </noscript>
                        ';        
?>
<!DOCTYPE HTML>
<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>gaaton</title>
        
            <!--[if IE]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
       
         <link type="text/css" rel="stylesheet" href="file:///I|/Atarix_Sites/Barcod/normalize.css"/>
        <style type="text/css">
         
                .clearfix:before,.clearfix:after {content:""; display:table;}
                .clearfix:after {clear:both;}
                .floatLeft { float:left;}
                .floatRight{float:right;}
                
                 a img { border:0 none; }
                 a {text-decoration:none;}
                    
            * {
                margin:0;
                padding:0;
            }
           
		    article, aside, figure, footer, header, nav, section { display: block; }
            
            body {
                    direction:rtl;
                    text-decoration:none;
                    font-family:Arial, Helvetica, sans-serif;
                    font-size: 16px;
                    }
                 
            #outerContact { 
                    width:1000px;
                    height:785px;
                    margin:0 auto;
                    background-image: url(images/back_web.png);
                    background-repeat:no-repeat;
					position:relative;
                    }
          
				  
		    h2.black_pass { 
			    	width: 387px; height: 44px;
				    top:99px;
				    right:32px;
				    position:absolute;
				     color:#000;
				     font-size:2.3em;
			       }
		        
		
			h3 {
				   position:absolute;
				   width:650px;
				   top:427px;
				   right:35px;
				   color:#46131a;
				   font-size:19px;
				 } 
			
				   
				 h4.side_bar { 
				  width:212px;
				  height:80px;
				  top:150px;
				  padding:5px;
				  position:absolute;
				  font-size:1.2em;
				  left:38px;
				  text-align:center;
				  line-height:1.7em;
				  color:#fff;
				 }  
	

		  #Name ,  #Email, #Phone  {  
				  width:168px; height: 36px;
				 -webkit-border-radius: 19px/20px 20px 19px 19px; 
				 -moz-border-radius: 19px/20px 20px 19px 19px; 
				  border-radius: 19px/20px 20px 19px 19px;
				  background-color: #fff; 
				-webkit-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				 -moz-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				  box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				  color:#a6a3a3;
				  padding-right:20px;
				  font-size:18px;
				  border:1px solid #fff;
				 } 
				
			
				#Name {
					left: 50px;
					position: absolute;
					top:360px;
				}
		  
			 
			  #Email{
				  position: absolute;
				  top:418px;
					left:50px;
				}
			
							
			#Phone {
				left: 50px;
				position: absolute;
				top:476px;
			}
	 
			#button {
				left:110px;
				position: absolute;
				top:645px;
				}

	    
		   .submit-button {
					  width: 72px; height: 30px;
					 -webkit-border-radius: 19px/20px 20px 19px 19px; 
					 -moz-border-radius: 19px/20px 20px 19px 19px; 
					  border-radius: 19px/20px 20px 19px 19px;
					  background-color: #fff; 
					  border:1px solid  #fff;
					  color:#3e0f15;
					  font-size:22px;
					  font-weight:normal;
				     }

	
				 ul {
					 position:absolute;
					 top:558px;
					 right:25px;
					 width:650px;
					 height:164px;
					 border-top:1px solid #a1161e;
					  list-style-type: square;
					  }
				
				
				  ul  li { 
				   color:#a1161e;
				   margin-right:15px;
				   padding-top:7px;}	  

				  ul  li a { 
				   color:#a1161e;
				   line-height:1.8em;
				   font-size:20px;
				   font-weight:normal;
			      }

			  
			  h1 { 
				 width:600px;
				 position:absolute;
				 right:260px;
				 top:20px;
				 color:#fff;
				 font-size:42px;
				 font-weight:bold;
			  }
			
			
			.pic_right {
				width: ;
				height:;
				position:absolute;
				right:16px;
				bottom:16px;
			   }	 
			  
			.pic_left {
				width: ;
				height:;
				position:absolute;
				right:309px;
				bottom:16px;
			   }	 
			  
			 
			 .footer {
				color: #fff;
				font-size:12px;
				position: absolute;
				right: 400px;
				bottom: 4px;
				width:128px;
				text-align:left;
				}
		
				h2 img {  
				float:left;
				width:31px;
				height:34px;
				margin-left:30px;
				}
				
				p { 
				width:650px;
				top:462px;
				right:35px;
				position:absolute;
				color:#46131a;
				 }
				 
				 
				 
				 .video_button {
					 width:99px;
					 height:99px;
					 position:absolute;
					 top:215px;
					 right:396px;
					 
					  } 

	    </style>
        
 </head>

	<body>
            <?php if($_GET['t']==1){ echo $remarketing;}?>
          <div id="outerContact">
          
                       <h1>ביקור במרכז המבקרים</h1>
                       
                       <a class="video_button" href="https://www.youtube.com/watch?v=RmQrwBtYfkU" target="_blank"><img src="images/video_button.png" width="99" height="99"></a>
          
                                     <h4 class="side_bar">
                                                  בואו למרכז המבקרים שלנו ותהנו מחוויה בלתי רגילה
                                                    <br />
                                                    חייגו עכשיו 052-8698051
                                                    <br />
                                                    או מלאו את הפרטים ונשוב אליכם
       
                                       </h4>
                                       
                                       
                                       
                               
                                    <h3>ביקור במרכז המבקרים של שיכר </h3>
                                    
                                    <p>הנכם מוזמנים לביקור מפנק ביקב שלנו, שיכר הכפר יקבל את פניכם עם הסבר קצר על הקיבוץ,
                                    הליך הפקת השיכרים, טעימות, סרטון הסבר וחוויה יוצאת מן הכלל</p>

               
                        <ul>
                                <li> <a href="#">ביקור במרכז אורך כשעה אחת.</a></li>
                                <li> <a href="#">לקבוצות וליחידים המבקרים באזור הגליל המערבי</a></li>
                                <li>  <a href="#">טעימת שיכרים מופלאים ועשרים בטעם</a></li>
                                <li> <a href="#">חוויה גלילית אמתית</a></li>
                       
                        </ul>
               
     
               
                            <form method="post" action="send.php">
                             <input type="text" placeholder="שם מלא" name="Name" id="Name" />
                            <input type="email" placeholder="מייל "name="Email" id="Email" />
                            <input type="tel" placeholder="טלפון" name="Phone" id="Phone" />
                            <input type="hidden" name="next" value="indexB.php?t=1"/>
                            <input type="hidden" name="to" value="dovbrav@gmail.com"/>
                            <input type="hidden" name="subject" value="ביקור במרכז המבקרים"/>
                            <div id="button">  
                                  <input type="submit" name="submit" value="שלח" class="submit-button" />     
                             </div> <!--end midleForm-->
                    </form>  
          
                     <div class="footer">@ אתריקס - בניית אתרים</div>
          
          </div>

	</body>

</html>
