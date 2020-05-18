<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		setInterval(function(){
			var date=new Date();
			updateTime(date);
			updateClock(date);
		},1000);


		function updateClock(date){
			var secHand=document.getElementById('sec').style;
			var minHand=document.getElementById('min').style;
			var hrHand=document.getElementById('hr').style;
			secHand.transform="rotate(" + date.getSeconds() * 6 + "deg)";
			minHand.transform="rotate(" + date.getMinutes() * 6 + "deg)";
			hrHand.transform="rotate(" + (date.getHours() * 30 + date.getMinutes() * 0.5) +"deg)";
		}



		function updateTime(date){
			var timeDiv=document.getElementById('time');
			}
		
	</script>
	<link rel="shortcut icon" href="Images/pra.jpg"><title>Banking</title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<section class="main-area">
		<div class="items" style="padding-left: 17px;">
			<img src="images/p.png" style="height:100px;width:100px;">
		</div>
		<div class="items" style="text-align: center;font-size: 17px;width: 450px;padding-top: 40px;background: linear-gradient(to right,#fff,#a12434/*,#ff0000,#fb0094,#0000ff,#00ff00,#ffff00,#ff0000*/);background-repeat: repeat-x;-webkit-text-fill-color:transparent;-webkit-background-clip:text;background-size: 100% 100%;animation: a 5s linear infinite;color:#f6b803;font-family: sans-serif;">
			<h2>PUNJAB NATIONAL BANK</h2>
		</div>
		<div class="items" style="padding-right: 17px;">
			<div  id="clock">
	<div  class="num num1"><div>1</div></div> 
	<div  class="num num2"><div>2</div></div> 
	<div  class="num num3"><div>3</div></div> 
	<div  class="num num4"><div>4</div></div> 
	<div  class="num num5"><div>5</div></div> 
	<div  class="num num6"><div>6</div></div> 
	<div  class="num num7"><div>7</div></div> 
	<div  class="num num8"><div>8</div></div> 
	<div  class="num num9"><div>9</div></div> 
	<div  class="num num10"><div>10</div></div> 
	<div  class="num num11"><div>11</div></div> 
	<div  class="num num12"><div>12</div></div> 
	 <div id="hr"></div>
	 <div id="min"></div>
	 <div id="sec"></div>
</div>
		</div>
	</section>
	<div class="login"></div>
</body>
</html>