<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Awesome Games- About Us</title>
<link rel="icon" 
      type="image/png" 
      href="gamesfolder/assassin_s_creed_unity_icon_v1__256x256__by_youknowwho77-d81o1aw.png">
<style>
.main{height:697px;width:1364px;background:#000000;margin:0 auto}
.mid{height:704px;width:1364px;background:#000000;margin:0 auto}
.heading{height:550px;width:1200px;font-family:Microsoft Sans Serif;color:white;position:relative;top:-1355px;left:50px;margin:0 auto;font-size:30px;background:rgba(0,0,0,0.5);line-height:30px;padding-top:10px}
.content{height:500px;width:1300px;background:white;position:relative;top:50px;left:30px}
.first{height:100px;width:1200px;margin:0 auto;position:relative;top:50px;}
.mid2{height:700px;width:100px;background:rgba(0,0,0,0.7);position:relative;top:4px;left:298px;color:white;font-size:20px;border-right:3px solid white;border-left:3px solid white;margin-top:0}
.mid3{height:704px;width:300px;background:#212121;position:relative;top:-700px;left:-2px;display:block;;margin-top:0}
.m{height:704px;width:400px;position:relative;top:-708px;left:-299px}
.list{height:200px;width:200px;position:relative;top:252px;margin-top:0;list-style:none;line-height:30px}
.item{font-size:20px;color:#999;font-family:Microsoft Sans Serif}
.log{height:40px;width:220px;border:2px solid #06F;border-radius:20px;position:relative;top:-1387px;left:1080px;background:white;text-align:center;font-family:Microsoft Sans Serif;color:#06F;font-size:18px;line-height:40px;overflow:hidden}

</style>
</head>
<?php session_start();
	if(isset($_POST["txt"])){
		session_destroy();
		
	}
	/*Here we are using !isset to check whether value is entered in login or not */
	if(!isset($_SESSION["myname"])){
		header("Location: login.php");
	}
?>

<body style="margin-top:0;margin-left:0;margin-right:0;background:#000">
<div class="main"><div class="mid"><img src="Sydney Night Lights.jpg" style="height:700px;width:1364px"/>
<div class="m">
<div class="mid2" onClick="fn()"><img src="xbox_360.ico" style="height:64px;width:64px;position:relative;top:300px;left:18px"/><style>.jssora02l, .jssora02r, .jssora02ldn, .jssora02rdn, #abc
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora02l { background-position: -3px -33px; }
            .jssora02r { background-position: -63px -33px; }
            .jssora02l:hover { background-position: -123px -33px; }
            .jssora02r:hover { background-position: -183px -33px; }
            .jssora02ldn { background-position: -243px -33px; }
            .jssora02rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <!--<span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 60px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora02r"  style="width: 55px; height: 55px; top: 60px; right: 8px;left:23px"></span>
        </div>
        <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery-1.11.3.min - Copy.js"></script>
<script type="text/javascript" src="jssor.core.js"></script>
    <script type="text/javascript" src="jssor.utils.js"></script>
    <script type="text/javascript" src="jssor.slider.js"></script>

        <script>
		var st=true;
        $(document).ready(function() {
				
				$(".mid2").click(function(){
					if(st){
						$(".mid3").show(0,function(){$(".m").animate({left:'1px'},500);});	
				        $(".heading").fadeOut(200); 
                    st=false;
				}
			else {
				st=true;
                      $(".m").animate({left:'-299px'},500,function(){$(".mid3").css('display','none');});
					  $(".heading").fadeIn(1000);
				    
				}	
			});
		});
        </script>
        <script>b=true;
		var i=0;
		var j=0;
		function fn(){ 
		   
		if(b){//document.getElementsByClassName("mid2")[0].style.left="299px";
		//document.getElementsByClassName("heading")[0].style.display="none";
		t=setInterval(function() {ro()},20);
		function ro(){
			i=i+10;
			if(i>180){clearInterval(t);
			    i=0;  }
			else{
		document.getElementsByClassName("jssora02r")[0].style.transform="rotate("+i+"deg)";}}
		b=false;}
		else { 
	          t1=setInterval(function() {ro1()},10);
		function ro1(){
			j=j+10;
			if(j>360){clearInterval(t1);
			    j=0;  }
			else{
		document.getElementsByClassName("jssora02r")[0].style.transform="rotate("+j+"deg)";}}
			//document.getElementsByClassName("heading")[0].style.display="block";
		//document.getElementsByClassName("mid2")[0].style.left="-1px";
		b=true;
		}}
        </script>
        <script>
		c=true;
        function fn1(){
			if(c){document.getElementById("1").style.color="white";
			c=false; }
			else {document.getElementById("1").style.color="#999";
			c=true;  }
			}
			function fn2(){
			if(c){document.getElementById("2").style.color="white";
			c=false; }
			else {document.getElementById("2").style.color="#999";
			c=true;  }
			}
			function fn3(){
			if(c){document.getElementById("4").style.color="white";
			c=false; }
			else {document.getElementById("4").style.color="#999";
			c=true;  }
			}
			function fn4(){
			if(c){document.getElementById("5").style.color="white";
			c=false; }
			else {document.getElementById("5").style.color="#999";
			c=true;  }
			}
			function fn5(){
			if(c){document.getElementById("0").style.color="white";
			c=false; }
			else {document.getElementById("0").style.color="#999";
			c=true;  }
			}
			function fnx(){
			if(c){document.getElementById("x").style.color="white";
			c=false; }
			else {document.getElementById("x").style.color="#999";
			c=true;  }}
        </script>
             <script>
	$(document).ready(function() {
        $("#x").click(function(){
			var txt1=document.getElementById("x").value;
			$.ajax({type:"POST", url: " ",data:{txt:txt1}, success: function(result){
        window.location = "login.php";}}); }); });

	
</script>

        
        
        
        <div class="mid3"><ul class="list"><li class="item" style="color:#999"><a id="0" href="AwesomeGames.php" style="text-decoration:none;color:#999" onMouseOver="fn5()" onMouseOut="fn5()">HOME</a></li><li class="item"><a href="games.php" id="1" style="margin-top:0;margin-bottom:0;text-decoration:none;color:#999" onMouseOver="fn1()" onMouseOut="fn1()">GAMES</a></li><li class="item"><a href="myfavourites.php" id="2" style="margin-top:0;margin-bottom:0;text-decoration:none;color:#999" onMouseOver="fn2()" onMouseOut="fn2()">MY FAVOURITES</a></li><li class="item"><a href="aboutus.php" id="3" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white ">ABOUT US</a></li><li class="item"><a href="contact.php" id="4" style="margin-top:0;margin-bottom:0;text-decoration:none;color:#999" onMouseOver="fn3()" onMouseOut="fn3()" >CONTACT US</a></li><li class="item"><a href="support.php" id="5" style="margin-top:0;margin-bottom:0;text-decoration:none;color:#999" onMouseOver="fn4()" onMouseOut="fn4()" >SUPPORT</a></li><form><li class="item" id="x" style="margin-top:0;margin-bottom:0;text-decoration:none;color:#999;cursor:pointer" onMouseOver="fnx()" onMouseOut="fnx()" value="logout">LOG OUT</li></form></ul></div>
        
       </div> <div class="log" style="text-decoration:none;color:#06F">Hi, <?php echo $_SESSION["myname"];?> </div>
       <div class="heading"><p style="margin:0 auto;margin-left:25px">About Us</p><!--<img src="C360_2015-04-29-23-05-31-987.jpg" style="height:200px;width:130px;position:relative;top:-20px;left:1020px"/>-->
       <pre style="margin:0 auto;margin-left:120px;font-size:25px;font-family:Microsoft Sans Serif;margin-top:130px">Hi, my name is Shubham Tiwari.I am pursuing B.Tech in IT from Galgotias College
of Engg. and Techonology. This website is designed and created by me. This website
will keep you upadated with the upcoming and best games of present time. You can 
download games from here and if you face any problem in downloading or installing 
game, I am here to help you, just comment on the support page and I will try to sort out 
your problems. </pre>
       
       </div>
       </div>
  
       </div>
       </div>
       </body>
       </html>
