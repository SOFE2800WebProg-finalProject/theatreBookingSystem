<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
	<meta charset="utf-8"></meta>
	<link type="text/css" rel="stylesheet" href="css_Theme/mainTheme.css">
</head>
	
<body>
<div class="included">

<!-- ___ Display on Webpage _________________________________________________________________________________________ -->
	<table class="mainPageTable">
		
	<!-- Genre Menu -->
		<tr class="menu">
			<td id="filterMenu" rowspan=5>
				<br><br>
				<b>GENRE: </b><br>
				<form method="POST" action="">
					<input type="radio" name='checkSelect[]' value="All">			<label>All</label>		<br>
					<input type="radio" name='checkSelect[]' value="Action">		<label>Action</label>	<br>
					<input type="radio" name='checkSelect[]' value="Adventure">		<label>Adventure</label><br>
					<input type="radio" name='checkSelect[]' value="Comedy">		<label>Comedy</label>	<br>
					<input type="radio" name='checkSelect[]' value="Drama">			<label>Drama</label>	<br>
					<input type="radio" name='checkSelect[]' value="Fantasy">		<label>Fantasy</label>	<br>
					<input type="radio" name='checkSelect[]' value="Horror">		<label>Horror</label>	<br>
					<input type="radio" name='checkSelect[]' value="Mystery">		<label>Mystery</label>	<br>
					<input type="radio" name='checkSelect[]' value="Romance">		<label>Romance</label>	<br>
					<input type="radio" name='checkSelect[]' value="Sci-Fi">		<label>Sci-Fi</label>	<br>
					<input type="radio" name='checkSelect[]' value="Thriller">		<label>Thriller</label>	<br>
					<input type="submit" value="Filter" name="submit">
				</form></br>
				
				<!-- Genre Menu (Selection Output Text)-->
				<div id="SelectedGenera" style="border: solid black medium;">
					<?php include "../LocateMovies/LocateMovie_Functions.php"?>
				</div>

			</td>
		</tr>

	<!-- Browse Movies Header -->
		<tr>
			<th><h1>Browse Movies</h1></th>
		</tr>

	<!-- Output Movie Poster & Information Block -->
		<tr>
			<td class="movieBlock">
				<div>
					<?php require "../LocateMovies/LocateMovie_db.php"; ?>
				</div>
				<br>
			</td>
		</tr>

	</table>

</div>

</body>
</html>