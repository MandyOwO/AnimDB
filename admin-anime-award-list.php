<html>
<head>
<title>Anime Award List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/list-anime-awards.js"></script>
</head>

<?php require_once('connection.php'); ?>

<style>

h4 {
  font-family: papyrus, fantasy;
    font-size: 40px;    
}

h5 {
  font-family: papyrus, fantasy;
    font-size: 30px;
}
</style>


<body>

<div class="container-fluid mt-3 mb-3">
	<h4>Anime Awards</h4>
	<div>
		<table id="table-anime_award" class="table table-bordered table-striped">
			<thead>
				<tr>
					
					<th>Anime_award_id</th>
					<th>Anime_award_name</th>
				</tr>
			</thead>
		</table>
		<br>
		<br>
		<br>
		<li><a href="admin-index.php">Go Home</a></li>
	</div>
</div>

</body>
</html>