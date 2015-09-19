<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Languages</title>

		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body class="nl-blurred">
		<div class="container demo-1">
			<header>
				<h1>Natural Language Form <span>ws</span></h1>	
			</header>
			<div class="main clearfix">
				<form id="nl-form" class="nl-form">
					I want to learn
					<select>
						<option value="1" selected>language</option>
						<option value="2">Indian</option>
						<option value="3">French</option>
						<option value="4">Japanese</option>
						<option value="2">Italian</option>
					</select>
					<br />I currently know
					<select>
						<option value="1" selected>language</option>
						<option value="2">Indian</option>
						<option value="3">French</option>
						<option value="4">Japanese</option>
						<option value="2">Italian</option>
					</select>
					something
					<br /> 
					<select>
						<option value="1" selected>language</option>
						<option value="2">Indian</option>
						<option value="3">French</option>
						<option value="4">Japanese</option>
						<option value="2">Italian</option>
					</select>
					in <input type="text" value="" placeholder="any city" data-subline="For example: <em>Los Angeles</em> or <em>New York</em>"/>
					<div class="nl-submit-wrap">
						<button class="nl-submit" type="submit">Lets go!</button>
					</div>
				</form>
			</div>
		</div><!-- /container -->
		<script src="{{asset('/js/nlform.js')}}"></script>
	</body>
</html>