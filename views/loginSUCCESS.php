<?php

$url = 'https://kvstore.p.rapidapi.com/collections';
$collection_name = 'RapidAPI';
$request_url = 'http://newsapi.org/v2/top-headlines?category=business&country=us&apikey=8e78d3fb179c4f219bb0f4d4145bb303';

$request_url2 = 'http://newsapi.org/v2/Everything?q=boeing&language=en&apikey=8e78d3fb179c4f219bb0f4d4145bb303';

$cssFile = '';

$curl = curl_init($request_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
	'X-RapidAPI-Host:newsapi.org',
	'X-RapidAPI-Key: 8e78d3fb179c4f219bb0f4d4145bb303',
	'Content-Type: application/json'
]);

$responseNews = curl_exec($curl);
curl_close($curl);

$results = json_decode($responseNews, true);

echo "
<!DOCTYPE html>
	<header>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<!-- Latest compiled and minified CSS -->
		<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">

		<!-- jQuery library -->
		<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

		<!-- Popper JS -->
		<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>

		<!-- Latest compiled JavaScript -->
		<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>

		<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/$cssFile\">
	</header>
	<body>
		<nav class=\"navbar navbar-expand-md navbar-light bg-light\">

			<!-- Navbar logo-->
			<a class=\"navbar-brand\" href=\"#\">
				<img src=\"../img/logo.jpg\" width=\"55\" height=\"25\" alt=\"Bulls & Bears\">
			</a>

			<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

				<ul class=\"nav nav-tabs\"  id=\"newsTab\" role=\"tablist\">
					<li class=\"nav-item\">
						<a class=\"nav-link\" href=\"#\"></a>
					</li>
					<li class=\"nav-item\">
						<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" id=\"home-tab\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Top News</a>
					</li>
					<li class=\"nav-item\">
							<a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" id=\"profile-tab\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">FAANGS</a>
					</li>
					<li class=\"nav-item\">
						<a class=\"nav-link\" href=\"#\">S&P 500</a>
					</li>
					<li class=\"nav-item\">
						<a class=\"nav-link\" href=\"#\">DOW JONES</a>
					</li>
					<li class=\"nav-item\">
						<a class=\"nav-link\" href=\"#\">INDUSTRY</a>
					</li>
				</ul>
			</div>

			<ul class=\"form-inline my-2 my-lg-0\">
				<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
					data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
					aria-expanded=\"false\" aria-label=\"Toggle navigation\">
				<span class=\"navbar-toggler-icon\"></span>
				</button>
				<li class=\"nav-item\"><a href=\"#\">Account</a></li>
			</ul>
		</nav>
		<div class=\"container-fluid\">

			<h2>Stock News</h2>
			<hr>

			<div class=\"tab-content\" id=\"myTabContent\">
					<div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
					<table>
						<th>
							<tr>
								<td><b>Date & Time</b></td>
								<td><b>News</b></td>
								<td><b>Author</b></td>
								<td><b>Country</b></td>
								<td><b>Industry</b></td>
							</tr>
						</th>";

					for( $i = 0; $i < 5; $i ++){
						
						$news = $results['articles'][$i]['title'];
						$author = $results['articles'][$i]['author'];
						$url = $results['articles'][$i]['url'];
						$content = $results['articles'][$i]['content'];

						$dateTime = $results['articles'][$i]['publishedAt'];
						$timezone = date_default_timezone_set('America/Chicago');
						$dt = date("D, M d, Y h:i:s a T", strtotime($dateTime));

						echo "<tr>
								<td>$dt<hr></td>
								<td><a href=$url>$news></a></td>
								<td>$author<hr></td>
							  </tr> 
							  ";
					}


					echo "
				</table>
				</div>
			
				<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
				<table>
					<br>
						<th>
							<tr>
								<td><b>Date & Time</b></td>
								<td><b>News</b></td>
								<td><b>Company/Ticker</b></td>
								<td><b>Country</b></td>
								<td><b>Industry</b></td>
							</tr>
						</th>
			
						<tr>
							<td><b>x</b></td>
							<td><b>jkl</b></td>
							<td><b>bnm</b></td>
						</tr> 
					
				</table>
				</div>
			</div>

		</div>

	</body>
</html>
";

?>
