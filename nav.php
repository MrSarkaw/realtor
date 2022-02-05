<!DOCTYPE html>
<head>
  <title>KURDREALTOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

	<style>
		body{
			font-family: "NRT";
			color:white !important;
			background-color: #131313;
		}
		@font-face{
			src: url("fonts/NRT.ttf")
		}
		.lore{
			position: relative;top: 0px;text-align: right;margin-top: 10px;
		}
		.lore:hover{
			transition: .5s;
			animation: 2s jula infinite;
		}
		@keyframes jula{
			50%{
				transform: translateY(10px);
			}
			100%{
				transform: translateY(0px);
			}
		}
		a{
			color: white;
		}
		.modalakan input , textarea{
			width: 100%;
			margin-top: 10px;
			background-color: #131313;
			color:rgba(255,142,0,1.00);
			border:none;
			text-align: center;
			outline: none; 
			border-top: 1px solid white;
			border-bottom-left-radius: 20px ;
			border-bottom-right-radius: 20px ;
			transition: .3s;
			height: 30px;
		}
		.modalakan input:focus , .modalakan textarea:focus{
			border-bottom-left-radius: 0px !important;
			border-bottom-right-radius:0px !important;	
			border-top-left-radius:20px;
			border-top-right-radius:20px;
			border-color:rgba(255,142,0,1.00);
;
		}
		
		body::-webkit-scrollbar{
			width: 10px;
			background-color: #131313;
			
		}
		body::-webkit-scrollbar-thumb{
			width: 5px;
			background-color: rgba(255,142,0,1.00);
			
			
			
		}
		
		#logo {
		float: right;margin-top: 0px;position: absolute;right: 12px;font-size: 23px;
		}
	
		
	
	</style>
	
	
	
	
	
</head>
<body>
<nav class=" container-fulid navbar-inverse">
  <div class="container-fluid header">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="float: left;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand navbar-right" href="index.php" id="logo" ><span style="color:rgba(255,126,0,1.00);">KURD</span><span style="color: white !important">REALTOR</span></a>
		
		
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <center>
		<ul class="nav navbar-nav navbar-left" >
		<!-- ئه‌مه‌ بۆ جوانكارییه‌ ، ته‌نها سه‌ژن بگۆڕه‌ بۆ ئه‌وه‌ی خۆت دت ناوه‌ -->
		<?php
		if(isset($_SESSION["user"])){
			?>
		
		<!-- profile -->

		
		<a href="profile.php"><li> 
			 <img src="userimage/_MG_05400.jpg" style="width: 50px;height: 50px" class="img-circle"> </li></a>
				
			<li class="lore" data-toggle="modal" data-target="#register"> 
			 <h4 style="text-align: center;margin-right: 10px;">
				 <img src="icon/register.png"> دانانی هه‌ژمار</h4></li>
		  <li class="lore" data-toggle="modal" data-target="#login">
			  <h4 style="text-align: center;">
				  <img src="icon/login.png"> چوونه‌ژووره‌وه‌</h4></li></center>
		 </ul>
		 
		<?php
		}
		
		else {
			?>
				<!-- create acc and login -->
	
		<li data-toggle="modal" data-target="#register"> 
			 <img src="userimage/Unknown-person.gif" style="width: 50px;height: 50px" class="img-circle"> </li>
			
			<li class="lore" data-toggle="modal" data-target="#register"> 
			 <h4 style="text-align: center;margin-right: 10px;">
				 <img src="icon/register.png"> دانانی هه‌ژمار</h4></li>
		  <li class="lore" data-toggle="modal" data-target="#login">
			  <h4 style="text-align: center;">
				  <img src="icon/login.png"> چوونه‌ژووره‌وه‌</h4></li></center>
		 </ul>
		
		<?php
		}
		
		?>
    
		    
		
		 
      </ul>
    </div>
  </div>
</nav>



  
<!-- فۆڕمی چوونه‌ ژووره‌وه‌ -->

<div class="fade modal modalakan" id="login">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body" style="text-align: center;color:#131313;background-color: #313131">
		<center>
		
			<img src="icon/loginuser.png" style="" class="">
			<form method="post">
		
				<img src="icon/gmaillog.png" style="width: 40px;height: 40px;">
				<input type="email" name="" placeholder="ئیمه‌یل" style="height: 40px;"><br>
				<img src="icon/password.png" style="width: 40px;height: 40px;">
				<input type="password" name="" placeholder="تێپه‌ڕ وشه‌" style="height: 40px;"><br><br>
				<button class="btn" style="border-none;background-color:rgba(255,142,0,1.00);">چوونه‌ ژوره‌وه‌</button>
					
					</form>
		</center>
			</div>
			
		</div>
	</div>
</div>




<!-- فۆڕمی دانانی هه‌ژمار -->

<div class="fade modal modalakan" id="register">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #131313;color:rgba(255,142,0,1.00);">
				<h4 style="text-align: center">فۆڕمی دروست كردنی هه‌ژمار</h4>
			
			</div>
			
			<div class="modal-body" style="text-align: center;color:#131313;background-color: #313131">
		<center><form method="post">
			<p style="text-align: center;color: white;">وێنه‌ی خۆت</p>
				<input type="file" name=""><br>
				<input type="email" name="" placeholder="ئیمه‌یل"><br>	
				<input type="password" name="" placeholder="تێپه‌ڕ وشه‌"><br>	
				<input type="password" name="" placeholder="دووباره‌ كردنه‌وه‌ی تێپه‌ڕ وشه‌"><br>
				<input type="tell" name="" placeholder="ڕه‌قه‌م ته‌له‌فوون"><br>	
				<textarea name="" style="resize: none;"> كورته‌یه‌ك له‌سه‌ر خۆت</textarea><br>
			<textarea name="" style="resize: none;">شوێنی نیشته‌ جێبوونت بنووسه‌ شار-شه‌قام</textarea>
				<button class="btn btn-info" >دانان</button>
					
					</form>
		</center>
			</div>
			
			<div class="modal-footer" style="background-color: #131313;">
				<button class="btn btn-primary" data-dismiss="modal" >داخستن</button>
			</div>
		</div>
	</div>
</div>


  
</body>
</html>
