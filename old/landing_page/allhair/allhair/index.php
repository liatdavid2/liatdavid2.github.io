<?php
        require_once 'Mobile_Detect.php';
        $MobDic = new Mobile_Detect();
        if($MobDic->isMobile()){
            if( $MobDic->isTablet() ){}
            else{
                header('Location: mobile1.php');
            }
        }
        $remarketing = '<!-- Google Code for &#1513;&#1497; &#1500;&#1495;&#1490; Conversion Page -->
                        <script type="text/javascript">
                        /* <![CDATA[ */
                        var google_conversion_id = 961549092;
                        var google_conversion_language = "en";
                        var google_conversion_format = "3";
                        var google_conversion_color = "ffffff";
                        var google_conversion_label = "Q0vOCPTswiUQpKbAygM";
                        var google_remarketing_only = false;
                        /* ]]> */
                        </script>
                        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
                        </script>
                        <noscript>
                        <div style="display:inline;">
                        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/961549092/?label=Q0vOCPTswiUQpKbAygM&amp;guid=ON&amp;script=0"/>
                        </div>
                        </noscript>
                        ';
?>
<!DOCTYPE HTML>
<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>all-hair</title>
        
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
                    background-image:url(images/WEB.png);
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
				 position: absolute;

top: 545px;
right: 110px;
color: rgba(255, 255, 255, 1);
font-size: 26.36px;
line-height: 36.25px;
font-weight:600;
right: 105px;
				 } 
			
				   
				 h4.side_bar { 
				  width:212px;
				  height:80px;
				  top:242px;
				  padding:5px;
				  position:absolute;
				 
				  left:38px;
				  text-align:center;
				  
				  font-family: Arial;
					font-size: 28px;
				font-weight: bold;
					color: #000;
				 }  
	

		  #Name ,  #Email, #Phone  {  
				  width:192px; height: 40px;
				 -webkit-border-radius: 19px/20px 20px 19px 19px; 
				 -moz-border-radius: 19px/20px 20px 19px 19px; 
				  border-radius: 19px/20px 20px 19px 19px;
				  background-color: #fff; 
				-webkit-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				 -moz-box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				  box-shadow: inset 1px 2px 7px rgba(0,3,0,.75);
				  
				  padding-right:20px;
				 
				  border:1px solid #fff;
				  
					font-family: Arial;
				font-size: 23px;
				color: #a6a3a3;

				 } 
				
			
				#Name {
					left: 38px;
					position: absolute;
					top:357px;
				}
		  
			 
			  #Email{
				  position: absolute;
				  top:414px;
					left: 38px;
				}
			
							
			#Phone {
				left: 38px;
				position: absolute;
				top:470px;
			}
	 
			#button {
				left:110px;
				position: absolute;
				top:534px;
				}

	    
		   .submit-button {
					  width: 87px; height: 30px;
					 		  
					  font-family: Arial;
					font-size: 28px;
				font-weight: bold;
					color: #fff;
	background:none;
	border:none;
				     }

	
				 ul {
					 position:absolute;
					 top:337px;
					 right:282px;
					 width:405px;
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
				
				 top:459px;
				right: 105px;
				 	font-family: Arial;
	font-weight: bold;
	color: #fff;
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
				width:382px;
				height:102px;
				top:209px;
				right:284px;
				position:absolute;
				color:#46131a;
				 }

	    </style>
        
 </head>

	<body>
            <!---?php if($_GET['t']==1){ echo $remarketing;}?---->
          <div id="outerContact">
          
                       <h1> צור קשר  -  1700-700-155</h1>
          
                                     <h4 class="side_bar">
                                                  למימוש ההטבה
                                                    <br />
                                                   ושיחה עם מומחה
                                                    <br />
                                                    מלאו פרטים
                                       </h4>
                               
                                    <h3>הארכות , מלוי ועיבוי שיער בכול הטכניקות (קראטין,
									<br/>  מדבקות עם שיער,חרוזים,טרייסים ).
									<br/>ניסיון של 20 שנה . שיער טבעי- אירופאי , אסיאתי.</h3>
                                    

               
                     
               
     
               
                            <form method="post" action="send.php">
                             <input type="text" placeholder="שם מלא" name="Name" id="Name" />
                            <input type="email" placeholder="מייל "name="Email" id="Email" />
                            <input type="tel" placeholder="טלפון" name="Phone" id="Phone" />
                            <input type="hidden" name="next" value="index.php?t=1"/>
                            <input type="hidden" name="to" value="liatdavid2@gmail.com"/>
                            <input type="hidden" name="subject" value="מארז מיוחד לראש השנה"/>
                            <div id="button">  
                                  <input type="submit" name="submit" value="שלח" class="submit-button" />     
                             </div> <!--end midleForm-->
                    </form>  
          
                     <div class="footer">@ אתריקס - בניית אתרים</div>
          
          </div>

	</body>

</html>
