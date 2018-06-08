<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Our Love Story</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<style type="text/css">
		@font-face {
			font-family: digit;
			src: url('digital-7_mono.ttf') format("truetype");
		}
	</style>
	<link href="css/default.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/garden.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</head>

<body>
	<div id="mainDiv">
		<div id="content">
			<div id="code">
				<span class="comments">/**</span><br />
				<span class="space"/><span class="comments">* 执子之手,与子偕老</span><br />
				<span class="space"/><span class="comments">* I found three things in this world, the sun ,the moon and you. The sun for the day, the moon for the night, and you forever! </span><br />
				<span class="space"/><span class="comments">*/</span><br />
				Boy i = <span class="keyword">new</span> Boy(<span class="string">"木子李"</span>);<br />
				Girl u = <span class="keyword">new</span> Girl(<span class="string">"林夕梦"</span>);<br />
				<span class="comments">// 2016年07月08日,我向你表白了...Fall in love river. </span><br />
				i.love(u);<br />
				<span class="comments">// 2018年06月07日,They love each other...</span><br />
				i.meet(u);<br />
				<span class="comments">// 我们吵吵闹闹，欢欢喜喜...</span><br />
				i.and(u);<br />
				<span class="comments">// 喜怒哀乐,悲伤离合我们共同面对,我们始终在一起...</span><br />
				i.takeCareOf(u);<br />
				<span class="comments">// The boy can not be separated from the girl...</span><br />
				<span class="comments">// The girl can not be separated from the boy...</span><br />
				<span class="keyword">boolean</span> isHesitate = <span class="keyword">true</span>;<br />
				<span class="keyword">while</span> (isHesitate) {<br />
				<span class="placeholder"/>i.waitFor(u);<br />
				<span class="placeholder"/><span class="comments">// Both wind and snow all over the sky...</span><br />
				<span class="placeholder"/><span class="comments">// You are the most important decision of my life...</span><br />
				<span class="placeholder"/>isHesitate = u.thinkOver();<br />
				}<br />
				<span class="comments">// 玲珑骰子安红豆，入骨相思知不知...</span><br />
				i.marry(u);<br />
				i.liveHappilyWith(u);<br />
			</div>
			<div id="loveHeart">
				<canvas id="garden"></canvas>
				<div id="words">
					<div id="messages">
						死生契阔，与子成说。执子之手，与子偕老。
						<div id="elapseClock"></div>
					</div>
					<div id="loveu">
						Love u forever and ever.<br/>
						<div class="signature">- 最爱你的 Mr.李</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var offsetX = $("#loveHeart").width() / 2;
		var offsetY = $("#loveHeart").height() / 2 - 55;
		var together = new Date();
		together.setFullYear(2016, 7, 07);
		together.setHours(14);
		together.setMinutes(0);
		together.setSeconds(0);
		together.setMilliseconds(0);
		
		if (!document.createElement('canvas').getContext) {
			var msg = document.createElement("div");
			msg.id = "errorMsg";
			msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+"; 
			document.body.appendChild(msg);
			$("#code").css("display", "none")
			$("#copyright").css("position", "absolute");
			$("#copyright").css("bottom", "10px");
		    document.execCommand("stop");
		} else {
			setTimeout(function () {
				startHeartAnimation();
			}, 5000);

			timeElapse(together);
			setInterval(function () {
				timeElapse(together);
			}, 500);

			adjustCodePosition();
			$("#code").typewriter();
		}
	</script>
</body>
</html>
