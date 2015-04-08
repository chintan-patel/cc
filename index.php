<html>
	<head>
		<title>PHP Interview Test</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1>PHP Test</h1>
			<div class="well">

			<p>This test's purpose is to demonstrate the understanding and relationship between HTML, Javascript, PHP and HTTP.
			There are 3 files associated with this test, index.php, request.php, and people.csv.  The index.php will serve as the
			as the front end webpage that will be opened in the web browser.  Upon loading, it will send an AJAX to the request.php
			and get all of the people from the csv.  It should load them into the table of index.php.  Buttons on the webpage should
			allow the user to sort the table.  Sorting can be done either server side or client side in javascript.</p>
			</div>

		<h3>Instructions</h3>
		<ol>
			<li>Parse csv with PHP in request.php</li>
			<li>Create object structure using classes, people and person.</li>
			<li>Create method in which takes these objects from the previous step and return them via HTTP</li>
			<li>Use Jquery to request the return from the previous step</li>
			<li>Now these objects are in Java script, fill the HTML with the results</li>
			<li>Add sorting functionality to buttons, serverside or clientside(hint: think this through before choosing) <div class="label label-info">Used Server-Side sorting to make data change dynamic if CSV file changes</div>
			</li>
		</ol>
		<h3>HTML Table</h3>
			<div class="alert"></div>

			<!--
			<button class="btn sort-by" data-sort-by="name">Sort by full name</button>
			<button class="btn sort-by" data-sort-by="firstName">Sort by first name</button>
			-->
			<button class="btn sort-by" data-sort-by="lastName">Sort by last name</button>
			<button class="btn sort-by" data-sort-by="height">Sort by height</button>
			<button class="btn sort-by" data-sort-by="gender">Sort by gender</button>
			<button class="btn sort-by" data-sort-by="birthdate">Sort by birthdate</button>
		<BR><BR>

		<table class="table table-bordered">
			<thead>
				<th class="sort-by" data-sort-by="lastName">Name</th>
				<th class="sort-by" data-sort-by="height">Height</th>
				<th class="sort-by" data-sort-by="gender">Gender</th>
				<th class="sort-by" data-sort-by="birthdate">Birth Date</th>
			</thead>
			<tbody id="result">
				<tr>
					<td></td>
				</tr>
			</tbody>
		</table>
		</div>
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</html>
