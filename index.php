<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
		<link rel="stylesheet" href="./style.css"/>
		<script src="./script.js"></script>
	</head>
	<body>
		<div class="picker-form-container">
			<div class="picker-control">
				<label for="red">Red</label>
				<input type="range"
						 id="red"
						 value="0"
						 min="0"
						 max="255"
						 class="picker">
				<span id="redVal">0</span>
			</div>
			<div class="picker-control">
				<label for="green">Green</label>
				<input type="range"
						 id="green"
						 value="0"
						 min="0"
						 max="255"
						 class="picker">
				<span id="greenVal">0</span>
			</div>
			<div class="picker-control">
				<label for="blue">Blue</label>
				<input type="range"
						 id="blue"
						 value="0"
						 min="0"
						 max="255"
						 class="picker">
				<span id="blueVal">0</span>
			</div>
		</div>

		<div class="color-box-container">
			<div id="color-box"> </div>
		</div>

	</body>
</html>

