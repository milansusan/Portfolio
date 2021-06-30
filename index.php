
<?php

   include("dbconfig/connection.php");

				if(isset($_POST['register']))
					
				{
//					echo "button clicked";
					$name = $_POST['u_name'];
					$email = $_POST['u_email'];
					$mobile = $_POST['u_mobile'];
					$textarea = $_POST['u_textarea'];
					
					
//					insert database
					
					if($name == '' || $email == '' || $mobile == '' || $textarea == '')
					{
                      
//                     echo "Please fill all fields.";
						header("location:try_again.php");
                     }
					
					else
					{
					
					
					$inser_query = "INSERT INTO stu_180021021518 VALUES(NULL,'$name', '$email', '$mobile', '$textarea');";
					$inser_query_run = mysqli_query($conn, $inser_query);
					
					if($inser_query_run)
					{
//						echo "record added";
						header("location:success.php");
						
					}
					
					
					else
					{
						echo "unable to add record due to:".mysqli_error($conn);
					}
							
					}
					
					
				}

           
				else
				{
					echo "";
				}

            
		   
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width,initial-scale=1.0">
<title>Trifecta INFO</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="image/image_fav_icon-.png">
</head>

<body>
	
	<header class="banner">
		<a id="info"></a>
		<div class="container">
			<input type="checkbox" id="toggler">
			
			<ul class="nav_list menu">
				
				<li class="logo" >
			   <a href="#top" >
				   
				<img src="image/logo.svg">
				</a>
				</li>
			
				<li class="nav_item menu-highlighter "><a href="#myself" class="nav_link">MY&nbsp;SELF</a></li>
			
				<li class="nav_item "><a href="#skills" class="nav_link">SKILLS</a></li>
			
				<li class="nav_item"><a href="#showcase" class="nav_link">SHOWCASE</a></li>
			
				<li class="nav_item"><a href="#contact" class="nav_link">CONTACT</a></li>
			
				<li class="nav_item "><a href="#info" class="nav_link">INFO</a></li>
				
				<li class="hamburger"><label for="toggler">&#9776;</label></li>
				
				
		</ul>
	    <div class="highlighter">
			
			<h1>
				hello!
			</h1>
			<h2>
				<span class="grey-text">I’m </span>MILAN SUSAN RAJ
			</h2>
			<h3>
				An Animator and a Graphic Designer.
				let’s get to know more about
				me and my works

			</h3>
		</div>
		
		
		<div class="down_arrow">
			<a href="#bottom"><img src="image/down.png" ></a>
		</div>
			</div>
	</header>
	
<!--	section 1-->
	<a id="myself"></a>
	<a id="bottom"></a>
	<section class="sec_1_myself">
	<div class="container">
		<h2 class="header_text" >
		        MY SELF
              </h2>
		<div class="row">
			
          <div class="col">
			  
			  <img src="image/my self.png">
			  
			</div>
			
			<div class="col">
			  <p class="para_light">
				  I am Milan, an aspiring animator, currently pursuing
				  graduation in animation and graphic design.
				  I am building my expertise on Digital illustrations, 
				  3D modelling and 2D animations.
				  
				  <br>
				  <br>
		
			  
				  Being a team player, I strive to bring out the best in me,
				  both in work and by expressing my views without hesitation 
				  through constant communication. I am confident of my skills and 
				  leadership abilities in taking myself and 
				  my team forward against the challenges that may arise.
				</p>
			</div>
		</div>
	</div>	
	</section>
	<a id="skills"></a>
	<section class="slider"> 
		<div class="skills">
		<div class="container">
	<div class="sec_2_qulifi" >
	
		<h2 class="header_text">
		       qualification
              </h2>
		<div class="row">
			
			 <div class="col">
			  <div class=" circle">
				  <div class="circle_text">
				  <h2>
						  2018
					  <br>
						  PRESENT
					  </h2>
				  
				 </div>
				 </div>
			<div class="circle_para">
			  <p class="para_dark">
				 B.A ANIMATION AND GRAPHIC DESIGN
				  
				  <br>
				  
				  Yeldo Mar Baselios College
				  
				  <br>
				  
				  Kothamangalam,Ernakulam
				  
			  </p>
				</div>
            </div>
		
		
	
			 <div class="col">
				 
			  <div class=" circle">
				  <div class="circle_text">
				  <h2 >
						  2017
					 <br>
					  
						  2018
					  </h2>
				  
				 
				 </div>
				 </div>
				<div class="circle_para">
			  <p class="para_dark">
				 12th
				  
				 <br>
				  
				 St. Vincent Pallotti Central School
				  
				   <br>
				  
				  Ollukkara,Thrissur
				  
			  </p>
				 </div>
            </div>
		
			 <div class="col">
			  <div class=" circle">
				  <div class="circle_text">
				  <h2>
						  2015
					<br>
						  2016
					  </h2>
				  </div>
				 
				 </div>
				<div class="circle_para">
			  <p class="para_dark">
				 10th
				  
				  <br>
				  
				  St. Joseph's Convent Senior Secondary
				  E.M School
				  
				   <br>
				  
				  Pulluvazhy,Ernakulam
				  
			  </p>
				 </div>
            </div>
		</div>
		</div>
			<div class="sec_2_skills">
			<h2 class="header_text">
		      EXPERTISE
              </h2>
			<div class="row">
				<div class="col">
					<img src="image/skills (4).png">
					<div class="line line_1">92%</div>
					<img src="image/skills (5).png">
					<div class="line line_2">92%</div>
					<img src="image/skills (1).png">
					<div class="line line_3">80%</div>
					<img src="image/skills (2).png">
					<div class="line line_4">75%</div>
					<img src="image/skills (3).png">
					<div class="line line_5">70%</div>
				</div>
			</div>
		</div>
	</div>
		</div>
		
		</section>
	<a id="showcase"></a>
	<section class="sec_3_showcase">
		<div class="container">
			<h2 class="header_text">
					SHOWCASE
				</h2>
			<div class="row">
				
				<div class="col">
				    <div class="show_widget_img">
						<a href="2d.html">
						<img src="image/show (1).png">
						<h2 class="Show_widget_head">2D</h2>
							</a>
					</div>
					
					<div class="show_widget_para">
						 <p class="para_light">
				  Illusion of movement is created when individual drawings
							 are sequenced together over time
						</p>
					</div>	
					</div>
		
				
				<div class="col">
					 <div class="show_widget_img">
						<a href="3d.html">
						<img src="image/show (2).png">
						<h2 class="Show_widget_head">3D</h2>
							</a>
					</div>
					
					<div class="show_widget_para">
						 <p class="para_light">
				            In 3D computer graphics, 3D modeling is the 
							 process of developing a mathematical 
							 representation of any surface of an 
							 object in three dimensions via specialized software
						</p>
						</div>
					</div>
				
				<div class="col">
				   <div class="show_widget_img">
					   <a href="digital.html">
						<img src="image/show (3).png">
						<h2 class="Show_widget_head">DIGITAL</h2>
						   </a>
					</div>
					<div class="show_widget_para">
						 <p class="para_light">
				             Digital illustration or computer illustration is 
							 the use of digital tools to produce images under the
							 direct manipulation of the artist, usually through a 
							 pointing device such as a tablet or a mouse.
						</p>
					</div>	
			</div>
					</div>
			</div>
		
	
	</section>
	
<!--	CONTACT SECTION-->
	<a id="contact"></a>
	<section class=" sec_4_contact">
		<div class="container">
			<h2 class="header_text">
						CONTACT
					</h2>
			<div class="row">
				<div class="col">
					
						<h3>
						THANK YOU
					</h3>
					
					
					<p class="para_light">
						So, this is the place where you can send feedback 
						about my page and my works. You can Email me or call me,
						Hence I could improve my works
						<br>
						<br>
                        Thank you for watching my page
						
					</p>
					
					
						<h4>
						E.mail
					</h4>
					
					<p class="para_dark">
						 <a href="#" class="contact_link">milanjoe99@gmail.com
						</a>
					</p>
					
					
					
						<h4>
						Mobile
					</h4>
					
					<p class="para_dark">
						<a href="#" class="contact_link">+91 80864 70310
						</a>
						 
					</p>
					</div>
				
					
				<div class="col">
					<h3>
						FEEDBACK
					</h3>
					<form action ="" method="post">
						<input type="text"
							   placeholder="Enter your Name" name="u_name">
						
						<input type="text"
							   placeholder="Enter your Email" name="u_email">
						
						<input type="text" placeholder="Enter your Mobile" name="u_mobile">
						
						<textarea placeholder="Message me" name="u_textarea"></textarea>
						
						<input type="submit" name="register" value="SEND">
						<input type="reset" name="cancel">
					</form>
					
				
				</div>
		</div>
		</div>
					
		</section>
	
<!--	SECTION 2-->
	
	
	
	<footer class="footer">
		<div class="container footerspace">
			<div class="row">
				<div class="col">
					<p class="para_dark">
					All Rights Reserved © 2020 
						<img src="image/footer icon.png">
						trifecta
						</p>
					
				</div>
				
				<div class="col">
					<div class="soc_icon">
						<img src="image/soc (1).png">
						<img src="image/soc (2).png">
						<img src="image/soc (3).png">
					</div>
				</div>
			</div>
		</div>
</footer>
	
</body>
</html>
