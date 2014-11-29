<!doctype html>
<html>
	<head>
		<title>Bar Chart</title>
		<script src="{{ URL::asset('Chart.js') }}"></script>
		<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
		<style>
			canvas{
			}
		</style>
	</head>
	<body>
		<canvas id="canvas" height="450" width="600"></canvas>


	<script>

		var barChartData = {
			labels : ["Robbi ({{ Calon::find(1)->suara }} suara)","Imad ({{ Calon::find(2)->suara }} suara)","Narto ({{ Calon::find(3)->suara }} suara)"],
			datasets : [
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					data : [{{ Calon::find(1)->suara }},{{ Calon::find(2)->suara }},{{ Calon::find(3)->suara }}]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);
	
	</script>
        <a href="{{ URL::asset('generatePassword') }}">Generate Password</a>
        <a href="{{ URL::asset('endSession') }}">End Session</a>
	</body>
</html>
