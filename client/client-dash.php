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
			<h2>Select the type of road</h2>
			<form method="post" action="">
				<select name="roads" id="roads">
					<option value="stateHighway">State Highway</option>
					<option value="district">District Roads</option>
					<option value="villageRoad">Village Roads</option>
				</select>
				<br>
				<div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div id="stateHighway">
                      <select id="exp" name="exp" class="form-control">
                        <option value="1">1 Year</option>
                        <option value="2">2-3 Years</option>
                        <option value="3">3-5 Years</option>
                        <option value="4">6+ Years</option>
                      </select>
                    </div>
                    <div id="district">
                      <select id="team" name="team" class="form-control">
                        <option value="1">Rangers</option>
                        <option value="2">Blazers</option>
                        <option value="3">Mystics</option>
                        <option value="4">United</option>
                        <option value="5">Power</option>
                        <option value="6">Kings</option>
                      </select>
                    </div>
                    <div id="villageRoad">
                      <select id="age" name="age" class="form-control">
                        <option value="1">18-20</option>
                        <option value="2">20-25</option>
                        <option value="3">25-28</option>
                        <option value="4">28+</option>
                      </select>
                    </div>
                    <div id="surname">
                      <input type='text' class='form-control' id='surname' maxlength='1' minlength='1' value='H'>
                    </div>
                  </div>
                </div>
				<br>
				<input type="submit" class="btn btn-primary">
			</form>
		</div>
	</div>
</body>

</html>