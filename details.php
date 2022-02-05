<!DOCTYPE html>
<?php include("nav.php") ?>
<link href="css/postview.css" rel="stylesheet">




<style>
	.slide{
		border:2px solid rgba(255,142,0,1.00);border-radius: 20px;
	}
	.slide .img img {
		height: 400px;position: relative;left: 180px;margin: 10px;background-color: #414141;border-radius: 20px;
	}
	
	
	@media only screen and (max-width:414px){
		.slide .img img {
		height: 280px;position: relative;left: 0px;
	}
	}
	h4{
		text-align: center;line-height: 45px !important;
	}
	.details div {
		margin-top: 16px;border-bottom: 1px solid white;border-radius: 5px;transition: .4s;
				border-top: 1px solid #131313;

	}
	.details div:hover{
		border-bottom: 1px solid #131313;
		border-top: 1px solid rgba(255,142,0,1.00);
		color: rgba(255,142,0,1.00);

	}
	
	
	@media only screen and (max-width:1200px){
		.details div {
			width: 100% ;
		}
		.slide .img img {
		position: relative;left: 130px;
	}
	}
	
	@media only screen and (max-width:768px){
		
		.slide .img img {
		position: relative;left: 100px;
	}
	}	
	
	@media only screen and (max-width:600px){
		
		.slide .img img {
		position: relative;left: 50px;
	}
	}
	
	@media only screen and (max-width:414px){
		
		.slide .img img {
		position: relative;left: 0px;
	}
	}
	
	.map {
		height: 300px;background-color: #414141;border-radius: 40px;
		border-bottom: 1px solid orange;
		border-top: 1px solid orange;margin-bottom: 20px;
	}
</style>



<!--wenakan
به‌ شێوه‌ی سڵاید دام ناون ....-->	
<h4 style="text-align: center;color:rgba(255,142,0,1.00)">وێنه‌ی ‌موڵكه‌كه‌‌</h4>

<div class="container  " >
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
     
			<div class="item active img" >
			
        <img src="posts/67135607_2476371325755542_141678405511003825_n.jpg" class="col-sm-8">
        
      </div>	
		
			
		<div class="item img">
			
        <img src="posts/xanw_bo_kre.jpg" class="col-sm-8">
        
      </div>
		
		<div class="item img">
			
        <img src="posts/70913972_2971684746235226_5366685816741429248_n.jpg" class="col-sm-8">
        
      </div>
		
	 </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" 
	   style="border-radius: 20px;">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"
	   style="border-radius: 20px;">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

	</div>
	</div>
	
	<hr>

<!--map-->
<div class="col-sm-3">
	
	<div class="col-sm-12" id="c6"><h5>‌‌<img src="icon/home-address.png">ناونیشان : قڕگه‌ نزیك نه‌خۆشخانه‌ی شۆڕش </h5></div>
	
	<!--shwene map-->
	<div class="map col-sm-12">
	
	</div>

	
	
</div>


<!--details-->
<div class="col-sm-9 details">
<div class="col-sm-4"><h4>نرخ: $200 <img src="icon/money-bag.png"></h4></div>
<div class="col-sm-4"><h4>رووبه‌ر: 200 <img src="icon/parquet.png"></h4></div>
<div class="col-sm-4"><h4>‌بۆ كرێ <img src="icon/deal.png"></h4></div>
<div class="col-sm-4"><h4>‌موڵك : خانوو <img src="icon/real-estate.png"></h4></div><div class="col-sm-4"><h4>‌ژماره‌ی گه‌رماو: 2 <img src="icon/bathtub.png"></h4></div>
<div class="col-sm-4"><h4>‌ ژماره‌ی ژووری خه‌وتن : 3 <img src="icon/bedtime.png"></h4></div>
<div class="col-sm-4"><h4>‌گه‌راج : 1 <img src="icon/automobile.png"></h4></div>
<div class="col-sm-4"><h4>‌‌شار : سلێمانی <img src="icon/home-address.png"></h4></div>

<div class="col-sm-4"><h4><a href="ownerprofile.php">خاوه‌ن : سه‌ركاو سالار</a> <img src="icon/man.png"></h4></div>
<div class="col-sm-12"><h4>ژماره‌ مۆبایل : 07501262833 <img src="icon/smartphone.png"></h4></div>
</div>

	<hr>



<div class="container-fuild" style="height: 200px;background-color:#1A1A1A;clear: both;margin-top: 10px;">
	<h2 style="text-align: center;"><a href="index.php" ><span style="color:rgba(255,126,0,1.00);">KURD</span><span style="color: white !important">REALTOR</span></a></h2>
	<h4 style="text-align: center;color:rgba(255,126,0,1.00);line-height: 30px; "> یه‌كه‌مین ماڵپه‌ڕی كوردی بۆ فرۆشتن و به‌كرێدانی موڵكه‌كانتان  </h4>
	
	<center>
		<img src="icon/facebook.png" class="fgv"><img src="icon/gmail.png" class="fgv"><img src="icon/viber.png" class="fgv"></center>
	</div>

	
