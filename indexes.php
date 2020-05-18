<html>
<head>
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
<style>
*{
	padding: 0;margin:0;
}
#a
{
height:100px;width:100px;float:left;color:white;text-align:center;
}
@keyframes golu
{
0%{transform:rotate(0deg);}
100%{transform:rotate(360deg);}
}
#a:hover{
	animation:golu 2s linear infinite;
}
		:root{
		--size:100px;
		}
		#clock{
			width: var(--size);height: var(--size);background: #ccc;
			border: 1px solid #000;border-radius: 50%;box-shadow: 0 0 10px 0 #000;
			position: relative;float: right;font-size: 10px;
		}
		.num{
			height: 100%;position: absolute;left: calc(50% - 0.5em);
		}
		.num div {
			width: 1em;line-height: 2em;color: brown;text-align: center;vertical-align: middle;
		}
		.num1{
			transform: rotate(30deg);
		}
		.num1 div{
			transform: rotate(-30deg);
		}
.num2{
			transform: rotate(60deg);
		}
		.num2 div{
			transform: rotate(-60deg);
		}
		.num3{
			transform: rotate(90deg);
		}
		.num3 div{
			transform: rotate(-90deg);
		}
		.num4{
			transform: rotate(120deg);
		}
		.num4 div{
			transform: rotate(-120deg);
		}
		.num5{
			transform: rotate(150deg);
		}
		.num5 div{
			transform: rotate(-150deg);
		}
		.num6{
			transform: rotate(180deg);
		}
		.num6 div{
			transform: rotate(-180deg);
		}
		.num7{
			transform: rotate(210deg);
		}
		.num7 div{
			transform: rotate(-210deg);
		}
		.num8{
			transform: rotate(240deg);
		}
		.num8 div{
			transform: rotate(-240deg);
		}
		.num9{
			transform: rotate(270deg);
		}
		.num9 div{
			transform: rotate(-270deg);
		}
		.num10{
			transform: rotate(300deg);
		}
		.num10 div{
			transform: rotate(-300deg);
		}
		.num11{
			transform: rotate(330deg);
		}
		.num11 div{
			transform: rotate(-330deg);
		}
		.num12{
			transform: rotate(360deg);
		}
		.num12 div{
			transform: rotate(-360deg);
		}
		#sec{
			width: 1px;height: 50%;background: black;transform-origin: 50% 80%;
			position: absolute;top: 10%;left: 50%;
		}
		#min{
			width: 3px;height: 40%;background: blue;transform-origin: 50% 80%;
			position: absolute;top: 18%;left: 50%;margin-left: -1px;
		}
		#hr{
			width: 5px;height: 30%;background: red;transform-origin: 50% 80%;
			position: absolute;top: 25%;left: 50%;margin-left: -2px;
		}
		#as{
			width: 100px;height: 20px;background: #8080ff;border-radius: 20px;cursor: pointer;color: #fff;
		}
		@keyframes a{
			0%{
				background-position: 0px;
			}
			100%{
				background-position: 900px;
			}
		}
		.center{
			position: absolute;top: 55%;left: 50%;transform: translate(-50%,-50%);width: 230px;
			height: 230px;box-sizing: border-box;
		}
		.circle1{
			width: 100%;height: 100%;border-radius: 50%;border-style: solid;border-width: 5px;
			border:5px dotted pink;border-color: #f1c40f #e74c3c #9b59b6 #2ecc71;
			box-sizing: border-box;animation:  a1 5s linear infinite;background: brown;
		}
		.circle2{
			width: calc(100% - 10px);height: calc(100% - 10px);border-radius: 50%;
			position: absolute;box-sizing: border-box;background: tomato;
			top: 5px;left: 5px;text-align: center;font-family: sans-serif;
		}
		@keyframes a1{
			0%{
				transform: rotate(0deg);
			}
			100%{
				transform: rotate(360deg);
			}
		}
		a{
			color:#9b59b6;
		}
		a:active{
			color:blue;
		}
		
		a:hover{
			color:#2ecc71;
		}
		input:focus{
			border: 1px solid green;box-shadow: 0 0 4px blue;background: pink;
		}
</style>
</head>
<body style="background: tomato;background-size: 100% 100%">
<div  style="height:calc(100%-5px);width:calc(100%-5px);background:#808080;">
<div style="height:100px;width:100%;background-color:#ccc;">
<div id="a">
<img src="images/p.png" style="height:100px;width:100px;">
</div>
<div style="height:100px;width:100%;background: #ff0080;line-height: 100px;text-align: center;font-size: 2em;color: blue;font-family: sans-serif;border: none;box-shadow: 0.5px 0.5px 30px black;margin-top: 5px;background: url(images/pk.jpg);background-size: 100% 100%">
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
<br/><br/><br/>
<div style="height:400px;width:400px;box-shadow:0.5px 0.5px 33px #000;border-radius:50px 0px 50px 0px;background: brown; margin:0px auto;">
<div class="center">
		<div class="circle1"></div>
		<div class="circle2"><br><br/>
			<form action="logcode.php" method="post"><br>
<center><span style="color: #fff;">
Who You Are </span>: <input list="data" size="8" placeholder="select" autofocus name="select" style="border:none;border-bottom: 1px solid #808080;background: transparent;outline: none;" required>
<datalist id="data" name="select"  style="border:none;border-bottom: 1px solid #808080;background: transparent;outline: none;" required>
<option value="">--select--</option>
<option>Admin</option>
<option>Employee</option>
<option>Candidate</option>
</datalist><br/><br/>
<input type="email" name="email" style="border:none;border-bottom: 1px solid #808080;background: transparent;outline: none;color: #fff;" placeholder="Enter Your Email" required="true"></br/><br/>
<input type="password" name="password" style="border:none;border-bottom: 1px solid #808080;background: transparent;outline: none;" placeholder="Enter Your Password" required="true"><br/><br/>
<input type="submit" id="as" value="login"/>
</center>
</form>
<div style="position: relative;top:5px;"><a href="forget.php">Forget Password</a></div>
		</div>
	</div>
</div>
<br/>
</div>
<span style="color: brown;font-size: 2em;text-transform: capitalize;height: 50px;width: 100%;background: #f6b701;position: absolute;top:607px;text-align: center;line-height: 50px;">&copy;Prepared By:Pravin Kumar.</span>
</body>