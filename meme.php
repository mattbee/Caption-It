<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js oldie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js oldie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js oldie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>

	<meta charset=utf-8>
	<title>Caption.it</title>

	<meta name="description" content="">

	<!-- <link rel="stylesheet" href="css/style.css"> -->
	
</head>
<body>

<div id="wrapper">

	<h1>Save your meme</h1>

<!-- <img src="<?php echo $_GET['src']; ?>" /> -->


	<canvas id="meme"></canvas>

	<script type="text/javascript">

	var canvas = document.getElementById('meme');
	canvas.height = <?php echo $_GET['h']; ?>;
	canvas.width = <?php echo $_GET['w']; ?>;

	var context = canvas.getContext('2d');
	var imageObj = new Image();

	imageObj.onload = function() {
		//context.drawImage(imageObj, 0, 0);
	};
	imageObj.src = '<?php echo $_GET['src']; ?>';

	context.font = "40px Impact";
	context.textBaseline = "bottom";
	//context.textAlign = "center";

	context.fillText("<?php echo $_GET['textTop']; ?>", 0, 60);

	</script>


</div>



</body>
</html>