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
	textPosition = <?php echo $_GET['w']; ?> / 2;

	var context = canvas.getContext('2d');

	var imageObj = new Image();

	// Try https://developer.mozilla.org/en-US/docs/Code_snippets/Canvas

	imageObj.onload = function() {
		context.drawImage(imageObj, 0, 0);

		context.font = "50px Impact";
		context.lineWidth = '5';
		context.strokeStyle = 'white';
		context.textBaseline = "top";
		context.textAlign = "center";

		context.strokeText("<?php echo $_GET['textTop']; ?>".toUpperCase(), textPosition, 10);
		context.fillText("<?php echo $_GET['textTop']; ?>".toUpperCase(), textPosition, 10);

		//context.textBaseline = "baseline";

		context.strokeText("<?php echo $_GET['textBottom']; ?>".toUpperCase(), textPosition, <?php echo $_GET['h']; ?> - 60);
		context.fillText("<?php echo $_GET['textBottom']; ?>".toUpperCase(), textPosition, <?php echo $_GET['h']; ?> - 60);
	};
	imageObj.src = "http://localhost/internal/bookmarklet/image.php?src=<?php echo $_GET['src']; ?>&w=<?php echo $_GET['w']; ?>&h=<?php echo $_GET['h']; ?>";



	// save canvas image as data url (png format by default)
	var dataURL = canvas.toDataURL();

	// set canvasImg image src to dataURL
	// so it can be saved as an image
	document.getElementById('canvasImg').src = dataURL;
	
	

	</script>


</div>



</body>
</html>