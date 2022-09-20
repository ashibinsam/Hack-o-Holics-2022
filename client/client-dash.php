<?php

include '../libs/load.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XCoders</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

	<?php
    
    if (Database::getConnection()) {
        echo "done";
    } else {
        echo "something wrong";
    }


  ?>
	<div class="c-dash">
		<div style="text-align:center" class="road-type">
			<h2 id="heading-text">Select the type of Road</h2>
			<form method="post" action="">
				<select name="roads" id="roads" required>
        <option value="">None</option>
					<option value="stateHighway">State Highway</option>
					<option value="district">District Roads</option>
					<option value="villageRoad">Village Roads</option>
				</select>
        <br>
        <!-- state highway -->
        
        <div id="stateHighway">
          <select id="exp" name="exp" >
            <option value="1">SH1</option>
            <option value="2">SH2</option>
            <option value="3">SH3</option>
            <option value="4">SH4</option>
          </select>
        </div>
        

        <!-- District -->

        <div id="district">
          <select id="team" name="team">
            <option value="1">DR1</option>
            <option value="2">DR</option>
            <option value="3">DR3</option>
            <option value="4">DR4</option>
            <option value="5">DR5</option>
            <option value="6">DR6</option>
          </select>
        </div>
        

        <!-- Village Road -->

        <div id="villageRoad">
          <select id="age" name="age">
            <option value="1">VR1</option>
            <option value="2">VR2</option>
            <option value="3">VR3</option>
            <option value="4">VR4</option>
          </select>
        </div>
        
        <input type="number" id="damage" placeholder="Damage Depth in feet" required /><br><br>
				<input type="submit" class="btn btn-primary">
			</form>
		</div>
	</div>
</body>
<script src="script.js"></script>

</html>