<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
	<style type="text/css">
		a:hover{
			color: #2ecc71;letter-spacing: 1px;text-decoration: underline;font-size: 1.3em;
		}
		a:active{
			color: #f1c40f;
		}
		a{
			transition: 1s;text-decoration: none;font-size: 1.2em;
		}
		@keyframes a{
			from{
				transform: rotate(0deg);
			}
			to{
				transform: rotate(360deg);
			}
		}
		#a:hover{
			animation: a 3s linear infinite;
		}
	</style>
	<link rel="shortcut icon" href="Images/pra.jpg"><title>Banking</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main>
		<div class="item item1">
			<div id="a">
		<img src="images/p.png" style="height:100px;width:100px;">
		</div>
		</div>
		<div class="item item2"></div>
		<div class="item item3">
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
		<div class="item item4"></div>
		<div class="item item5"></div>
		<div class="item item6"><br>
			<center><h2 style="color:#fff;">WHO YOU ARE</h2>
<br>
<form action="logcode.php" method="post">
	<input list="data" name="select" autofocus style="background:transparent;outline:none;background:pink;;height:30px;width:280px;" placeholder="Please select an item in the list" required>
<datalist id="data" name="select" style="background:transparent;outline:none;background:pink;;height:30px;width:280px;">
<option value="" disabled>--select--</option>
<option>Admin</option>
<option>Employee</option>
<option>Candidate</option>
</datalist><br/><br/>
<input type="email" name="email" required style="background:transparent;outline:none;background:pink;height:30px;width:280px;" placeholder="Enter your Email"><br/><br/>
<input type="password" name="password" required style="background:transparent;outline:none;background:pink;height:30px;width:280px;" placeholder="Enter your password"><br/><br/>
<input type="submit" style="background:transparent;outline:none;background:blue;height:30px;width:280px;color:#fff;cursor: pointer;">
</center>
</form>
<a href="forget.php" align="center">Forget Password</a>
		</div>
		<div class="item"></div>
		<div class="item item7"></div>
		<div class="item item8"></div>
		<div class="item item9">
			<span style="color: brown;font-size: 2em;text-transform: capitalize;background: #f6b701;text-align: center;line-height: 100px;">&copy;Prepared By:Pravin Kumar.</span>
		</div>
	</main>
</body>
</html>