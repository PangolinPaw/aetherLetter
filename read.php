<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<?php include "includes/head.php"; ?>

	<title>Aether Letter | Read</title>
</head>
<body>
	<div class="container">

		<?php include "includes/nav.php" ?>

		<div class="row" style="margin-top: 1em">
			<div class="col-md-12">
				<h5>Received letters</h5>
				<table class="table">
					<thead>
						<tr>
						<th scope="col"></th>
						<th scope="col">Regarding</th>
						<th scope="col">Sender</th>
						<th scope="col">Description</th>
						<th scope="col">Postage date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row" class="icon_cell"><img src="media/closed.png"></td>
							<td>On dreaming</td>
							<td>Dr. Barrow</td>
							<td>A little battered, but nothing too bad</td>
							<td>13th of May</td>
						</tr>
						<tr>
							<td scope="row" class="icon_cell"><img src="media/opened.png"></td>
							<td>On dreaming</td>
							<td>Lady Gray</td>
							<td></td>
							<td>7th of May</td>
						</tr>
						<tr>
							<td scope="row" class="icon_cell"><img src="media/opened.png"></td>
							<td>A walk in the woods</td>
							<td>Ms. Ford</td>
							<td>The envelope is water-stained and appears to have been opened before it arrived.</td>
							<td>5th of May</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->

	<?php include "includes/javascript.php"; ?>
</body>
</html>