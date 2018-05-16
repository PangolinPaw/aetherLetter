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
				<h5>Draft letters</h5>
				<table class="table">
					<thead>
						<tr>
						<th scope="col"></th>
						<th scope="col">Regarding</th>
						<th scope="col">Recipients</th>
						<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row" class="icon_cell"><img src="media/draft.png""></td>
							<td>On dreaming</td>
							<td>Rev. Hall</td>
							<td>Edit</td>
						</tr>
					</tbody>
				</table>
				<div style="float: right;">
					<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#newLetter">
						New letter
					</button>
				</div>
			</div>
			<div class="col-md-12">
				<h5>Sent letters</h5>
				<table class="table">
					<thead>
						<tr>
						<th scope="col"></th>
						<th scope="col">Regarding</th>
						<th scope="col">Recipients</th>
						<th scope="col">Postage date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row" class="icon_cell"><img src="media/closed.png""></td>
							<td>On dreaming</td>
							<td>Dr. Barrow</td>
							<td>14th of May</td>
						</tr>
						<tr>
							<td scope="row" class="icon_cell"><img src="media/closed.png"></td>
							<td>A walk in the woods</td>
							<td>Ms. Ford</td>
							<td>11th of May</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->

	<?php include "includes/javascript.php"; ?>
</body>
</html>