<?php include('nav.php'); ?>

<link rel="stylesheet" href="css/index.css">

<!-- search -->
<style>
	@media only screen and (max-width:1198px){
		.smallmenu{
			width: 20% !important;position: relative;left: 0px;height: 300px;margin: 0px;margin-top: 10px;
		}
	.smallmenu a img{
		width: 100%;
		height: 220px !important;position: relative;
		
	}
		.posts {
			width: 40%;
			
		}
	}	
	
	
		
		
	
	@media only screen and (max-width:1238px){
	.select {
		position: relative;
		left: 60px; width: 80%;
	}
		.smallmenu{
			width: 30% !important;position: relative;left: 44px;height: 300px;margin: 0px;margin-top: 10px;margin:4px;
		}
	.smallmenu a img{
		width: 100%;
		height: 220px !important;position: relative;
		
	}
		.posts {
			width: 30%;position: relative;left: 30px;margin-left: 10px;
			
		}
		
			@media only screen and (max-width:767px){
	.select {
		position: relative;
		left: 60px; width: 80%;
	}
		.smallmenu{
			width: 50% !important;position: relative;left: 180px;height: 400px;margin: 0px;margin-top: 10px;
		}
	.smallmenu a img{
		width: 100%;
		height: 320px !important;position: relative;
		
	}
		.posts {
			width: 40%;float: left;margin-left: 10px;
			position: relative;left: 50px;
			
		}
		
		
}
	@media only screen and (max-width:600px){
	.select {
		position: relative;
		left: 60px; width: 80%;
	}
		.smallmenu{
			width: 70% !important;position: relative;left: 90px;height: 500px;
		}
	.smallmenu a img{
		width: 100%;
		height: 440px !important;position: relative;
		
	}
		
}
	
.fgv{width: 50px;height: 50px; margin: 5px;transition: .5s}
	.fgv:hover{transform: rotate(360deg)}
	

@media only screen and (max-width:564px){
	.select {
		position: relative;
		left: -6px; width: 100%;
	}
		.smallmenu{
			width: 60% !important;position: relative;left: 110px;height: 360px;
		}
	.smallmenu a img{
		width: 100%;
		height: 300px !important;position: relative;left: 0px;
		
	}
	.posts{
		width: 80%;position: relative;
		left: 50px;margin-left: 0px;
	}
}
	@media only screen and (max-width:414px){
	.select {
		position: relative;
		left: -6px; width: 100%;
	}
		.smallmenu{
			width: 100% !important;position: relative;left: 10px;height: 360px;
		}
	.smallmenu a img{
		width: 100%;
		height: 300px !important;position: relative;left: 0px;
		
	}
	.posts{
		width: 100%;position: relative;
		left: 0px;margin-left: 0px;
	}
}
</style>
<div class="container" style="margin-top: 30px;">
	<div class="col-sm-3">
	<select name="shar" class="select col-sm-12">
		<option value="" >شار دیاری بكه‌</option>
		<option value="">سلێمانی</option>
		<option value="">هه‌ولێر</option>		
		<option value="">كه‌ركووك</option>
		<option value="">هه‌ڵه‌بجه‌</option>
		</select>
	</div>

		<div class="col-sm-3">
	<select name="shar" class="select col-sm-12">
		<option value="" >مه‌تر دیاری بكه‌</option>
		<option value="">200</option>
		<option value="">300</option>		
		<option value="">250</option>
		<option value="">180</option>
		</select>
	</div>

		<div class="col-sm-3">
	<select name="shar" class="select col-sm-12">
		<option value="" 	>ژماره‌ی ژووره‌كان</option>
		<option value="">5</option>
		<option value="">7‌</option>		
		<option value="">4</option>
		<option value="">6</option>
		</select>
	</div>
	
	
</div>


<!-- main list -->

<div class="container-fulid" style="margin-top: 50px;">
	<center><img src="icon/realtor.png" style="width: 50px;height: 50px;"></center>
	<hr>

		<ol>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>خانوو بۆ فرۆشتن</h5>
		<img src="image/housebuy.png" class="col-lg-12" >  </a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>خانوو بۆ كرێ</h5>
		<img src="image/houserent.png" class="col-lg-12" ></a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>شوقه‌ بۆ فرۆشتن</h5> 
		<img src="image/buldingbuy.png" class="col-lg-12" ></a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>شوقه‌ بۆ كرێ</h5>
		<img src="image/buldingrent.png" class="col-lg-12" ></a></li>	
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>باخ و ڤێلا</h5>
		<img src="image/villa.png" class="col-lg-12" ></a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>شوێنی بازرگانی بۆ فرۆشتن</h5>
		<img src="image/buzbuy.png" class="col-lg-12" ></a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>شوێنی بازرگانی بۆ كرێ</h5>
		<img src="image/buzrent.png" class="col-lg-12" ></a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>دوكان بۆ كرێ</h5>
		<img src="image/shopbuy.png" class="col-lg-12" ></a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>دوكان بۆ فرۆشتن</h5>
		<img src="image/shoprent.png" class="col-lg-12" ></a></li>
	<li  class="col-sm-2 smallmenu"><a href="listview.php"> <h5>فرۆشراوه‌كان</h5>
		<img src="image/allsells.png" class="col-lg-12" ></a></li>
	</ol>
	
</div>


<!-- new post -->

<div class="container-fulid">
<div class="col-sm-12" style="margin-top: 60px;">
<hr>
	<h3 style="text-align:center;background-color: rgba(255,142,0,1.00);padding: 10px;border-radius: 10px">نوێترینه‌كان</h3>
	
	<div class="col-sm-3 posts">
		<center><img src="../kurdishgram/user/image/bemnat.png" ></center>
		<h5 id="h5badge">خانوو بۆ فرۆشتن<img src="icon/badge.png"></h5>
		<div class="col-sm-12" style="margin-top: 10px;margin-bottom: 10px;">
			<span style="float: right;">سلێمانی<img src="icon/home-address.png"></span>
		<span> <img src="icon/money-bag.png" style="float: left">60000</span>
		</div>
<h5 style="text-align: center">
	<img src="icon/post.png" style="width: 20px;height: 25px;border-radius: none;">
		sarkaw salar</h5>
		<div class="col-sm-12"><a href="details.php"><h4 id="drezha">درێژه‌</h4></a></div>
	</div>
	<div class="col-sm-3 posts">
		<center><img src="../kurdishgram/user/image/bemnat.png" ></center>
		<h5 id="h5badge">خانوو بۆ فرۆشتن<img src="icon/badge.png"></h5>
		<div class="col-sm-12" style="margin-top: 10px;margin-bottom: 10px;">
			<span style="float: right;">سلێمانی<img src="icon/home-address.png"></span>
		<span> <img src="icon/money-bag.png" style="float: left">60000</span>
		</div>
<h5 style="text-align: center">
	<img src="icon/post.png" style="width: 20px;height: 25px;border-radius: none;">
		sarkaw salar</h5>
		<div class="col-sm-12"><a href="details.php"><h4 id="drezha">درێژه‌</h4></a></div>
	</div>
		<div class="col-sm-3 posts">
		<center><img src="../kurdishgram/user/image/bemnat.png" ></center>
		<h5 id="h5badge">خانوو بۆ فرۆشتن<img src="icon/badge.png"></h5>
		<div class="col-sm-12" style="margin-top: 10px;margin-bottom: 10px;">
			<span style="float: right;">سلێمانی<img src="icon/home-address.png"></span>
		<span> <img src="icon/money-bag.png" style="float: left">60000</span>
		</div>
<h5 style="text-align: center">
	<img src="icon/post.png" style="width: 20px;height: 25px;border-radius: none;">
		sarkaw salar</h5>
		<div class="col-sm-12"><a href="details.php"><h4 id="drezha">درێژه‌</h4></a></div>
	</div>
		<div class="col-sm-3 posts">
		<center><img src="../kurdishgram/user/image/bemnat.png" ></center>
		<h5 id="h5badge">خانوو بۆ فرۆشتن<img src="icon/badge.png"></h5>
		<div class="col-sm-12" style="margin-top: 10px;margin-bottom: 10px;">
			<span style="float: right;">سلێمانی<img src="icon/home-address.png"></span>
		<span> <img src="icon/money-bag.png" style="float: left">60000</span>
		</div>
<h5 style="text-align: center">
	<img src="icon/post.png" style="width: 20px;height: 25px;border-radius: none;">
		sarkaw salar</h5>
		<div class="col-sm-12"><a href="details.php"><h4 id="drezha">درێژه‌</h4></a></div>
	</div>
	
		
	</div>
</div>
	



<!--footer-->
<div class="container-fuild" style="height: 200px;background-color:#1A1A1A;clear: both;margin-top: 10px;">
	<h2 style="text-align: center;"><a href="index.php" ><span style="color:rgba(255,126,0,1.00);">KURD</span><span style="color: white !important">REALTOR</span></a></h2>
	<h4 style="text-align: center;color:rgba(255,126,0,1.00);line-height: 30px; "> یه‌كه‌مین ماڵپه‌ڕی كوردی بۆ فرۆشتن و به‌كرێدانی موڵكه‌كانتان  </h4>
	
	<center>
		<img src="icon/facebook.png" class="fgv"><img src="icon/gmail.png" class="fgv"><img src="icon/viber.png" class="fgv"></center>
	</div>

	

