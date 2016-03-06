<html>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	</head>

	<body> 
		<div class="main">
			<div>Log in to our *SECURE* database</div>
			<div class="form-container"> 
				<form action="" method="post">
					<div class="ui-widget">
						<label for="username">Username: </label>
						<input name="username" type="text" id="username">
					</div>
					<div class="ui-widget">
						<label for="password">Password: </label>
						<input name="password" type="text" id="password">
					</div>
					<div class="submit">
				        <button type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script>
	$(function() {
    	$(" #username ").focus();
    });	
</script>