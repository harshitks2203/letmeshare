<!DOCTYPE html>
<html>
<head>  
	<title>Let me Share</title>
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery-2.2.0.js"></script>
	  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" >
	<script>
		
	
		$(window).scroll(function(){
			/*if($(window).scrollTop()<200 && $(window).scrollTop()>150)
			{
				window.scrollBy(0,200);
			}
			else if($(window).scrollTop()>250 && $(window).scrollTop()<300)
			{
				window.scrollBy(0,-350);
			}*/
			if($(window).scrollTop()>70)
			{
				$(".card").css("margin-left","0");
				$(".card").css("margin-top","0%");
				$(".card").css("width","100%");
				$(".card").css("top","0");
				$(".card img").css("width","20%");
				$(".card").css("position","fixed");
				$("body").css("margin-top","250px");
				
				
			}
			if($(window).scrollTop()<20)
			{
				$(".card").css("margin-left","20%");
				$(".card").css("margin-top","5%");
				$(".card").css("width","60%");
				$(".card").css("position","relative");
				$("body").css("margin-top","0px");
				$(".card img").css("width","30%");
			}
		});
		function insert()
		{
			var msg=document.getElementById('inp').value;
			document.getElementById('inp').value="";
			$.post('submit.php',{msg:msg,state:'1'},function (data)
			{
				getit();
			});
		}
		function getit()
		{
			$.post('submit.php',{msg:'',state:''},function (data)
			{
				document.getElementById("card1").innerHTML=data;
			});
		}
	</script>

</head>

<body onload="javascript:update()">
	<div class="card" z-default='20'>
    <br>
       <div id="form">
			<img src="images/logo1.png">
		    <div class="group">  
				<input type="text" required placeholder="Enter link here" onkeypress="if(event.keyCode == 13)insert();" name="inp" id="inp" style=" height: 40px;" autofocus>
				<button onclick="insert()" class="btn"><span>Post It </span></button>
		    </div>
			
		   
				
	    </div>
    </div>
    <div id="card1" z-default='20'>
	Loading Chat...
    </div>

</body>
</html>






 