<html>
	<head>
		<style type="text/css">
		
		canvas 
		{
			width	: 500px;
			height	: 500px;
			outline	: 1px solid black;
		}

		</style>
	</head>
	<body>

		<canvas id="photo-canvas"></canvas>
		<canvas id="photo-canvas-2"></canvas>
		

		<script src="assets/js/fabric.min.js" ></script>
		<script src="assets/js/photo-canvas.js" ></script>
		<script type="text/javascript" >
			var canvas1 = PhotoCanvas.create("photo-canvas");
			var canvas2 = PhotoCanvas.create("photo-canvas-2");

			console.log( PhotoCanvas.getAllInstances() );
			console.log( canvas1 );
			console.log( canvas2 );

			console.log( canvas2.visible );
			canvas2.destroy();
			console.log( canvas2.visible );
		</script>
	</body>
</html> 