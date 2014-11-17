<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Coding Example</title>
</head>
<body>
	
	<!-- Video -->
	<video id="videoToTranscribe" width="640" height="480" controls>
		<source src="big_buck_bunny_1080p_stereo.ogg" type="video/ogg"></source>				
	</video>
	<!-- End Video -->
	
	<div id="displayTime"></div>
	
	<!-- Video Related Scripts -->
	<script>
	
		// Get our video element
		var vidToTranscribe = document.getElementById("videoToTranscribe");
		
		// Variable To Hold Current Video Time
		var currentTime;
		
		// Function to get current video time in seconds (rounded) and display to displayTime div
		function ourCurrentTime(){
			currentTime = vidToTranscribe.currentTime;
			document.getElementById("displayTime").innerHTML = Math.round(currentTime);
			setTimeout(ourCurrentTime, 1000);
		}		
		
		ourCurrentTime();
		
	</script>
	<!-- End Video Related -->
	
</body>
</html>