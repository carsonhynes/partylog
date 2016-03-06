<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	</head>

	<body>
		<div class="main">
			<div class='date'> <?php echo date("F jS, Y"); ?> </div>
			<div class='beautiful-day'>It's a beautiful day to get lit</div>
			<div class="form-container">
				<form action="submit-party.php" method="post" onsubmit="return validate(this);">
				    <div class="ui-widget">
				        <label for="name">Name: </label>
				        <input name="name" type="text" id="name" class="skipEnter">
				    </div>

					<div class="ui-widget" style="margin-top: 10px;">
						<label for="school">School:</label>
						<select name="school" class="school">
							<option vslue="-">-</option>
							<option value="RPI">RPI</option>
							<option value="Sage">Sage</option>
							<option value="UAlbany">UAlbany</option>
							<option value="Siena">Siena</option>
							<option value="Hudson Valley">Hudson Valley</option>
							<option value="Other">Other</option>
						</select>
					</div>

					<div class="ui-widget" style="margin-top: 10px;">
						<label for="fraternity">Fraternity: </label>
						<select name="fraternity" style="width: 266px;">
							<option value="None">Non-Greek</option>
							<option value="Acacia">Acacia</option>
							<option value="Alpha Chi Rho">Alpha Chi Rho</option>
							<option value="Alpha Epsilon Pi">Alpha Epsilon Pi</option>
							<option value="Alpha Phi Alpha">Alpha Phi Alpha</option>
							<option value="Alpha Sigma Phi">Alpha Sigma Phi</option>
							<option value="Chi Phi">Chi Phi</option>
							<option value="Delta Kappa Epsilon">Delta Kappa Epsilon</option>
							<option value="Delta Phi">Delta Phi</option>
							<option value="Delta Tau Delta">Delta Tau Delta</option>
							<option value="Lambda Chi Alpha">Lambda Chi Alpha</option>
							<option value="Lambda Upsilon Lambda">Lambda Upsilon Lambda</option>
							<option value="Phi Gamma Delta">Phi Gamma Delta</option>
							<option value="Phi Iota Alpha">Phi Iota Alpha</option>
							<option value="Phi Kappa Tau">Phi Kappa Tau</option>
							<option value="Phi Kappa Theta">Phi Kappa Theta</option>
							<option value="Phi Mu Delta">Phi Mu Delta</option>
							<option value="Phi Sigma Kappa">Phi Sigma Kappa</option>
							<option value="Pi Delta Psi">Pi Delta Psi</option>
							<option value="Pi Kappa Alpha">Pi Kappa Alpha</option>
							<option value="Pi Kappa Phi">Pi Kappa Phi</option>
							<option value="Pi Lambda Phi">Pi Lambda Phi</option>
							<option value="Psi Upsilon">Psi Upsilon</option>
							<option value="RSE">RSE</option>
							<option value="Sigma Alpha Epsilon">Sigma Alpha Epsilon</option>
							<option value="Sigma Chi">Sigma Chi</option>
							<option value="Sigma Phi Epsilon">Sigma Phi Epsilon</option>
							<option value="Tau Epsilon Phi">Tau Epsilon Phi</option>
							<option value="Theta Chi">Theta Chi</option>
							<option value="Theta Xi">Theta Xi</option>
							<option value="Zeta Psi">Zeta Psi</option>
						</select>
					</div>

					<div class="roundedOne">
						<input type="checkbox" value="Over" id="roundedOne" name="over" />
						<label for="roundedOne"></label>
					</div>

					<div class="submit">
				        <button type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="list.js"></script>
<script>
    $(function() {
    	$(" #name ").focus();
        $( "#name" ).autocomplete({
            source: names
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(".skipEnter").keypress(function(event) {
            if(event.keyCode == 13) {
                var textboxes = $("input.skipEnter");
                var currentBoxNumber = textboxes.index(this);

                if (textboxes[currentBoxNumber + 1] != null) {
                    var nextBox = textboxes[currentBoxNumber + 1];
                    nextBox.focus();
                    nextBox.select();
                    event.preventDefault();
                    return false;
                }
            }
        });
    });

    function validate(formObj) {
        if (formObj.name.value == "") {
            alert("You must enter a name");
            formObj.name.focus();
            return false;
        }

        if (formObj.school.value == "-") {
            alert("You must select a school");
            formObj.school.focus();
            return false;
        }

        return true;
    }
</script>

</html>