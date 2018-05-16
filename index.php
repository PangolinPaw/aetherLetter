<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<?php include "includes/head.php"; ?>

	<title>Aether Letter | Home</title>
</head>
<body>
	<div class="container">

		<?php include "includes/nav.php" ?>

		<div class="row" style="margin-top: 1em">
			<div class="col-md-8">
				<h5>My correspondence</h5>
				<table class="table">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Subject</th>
						<th scope="col">Letters</th>
						<th scope="col">Addressees</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>On dreaming</td>
							<td><abbr title="Sent" class="initialism">2</abbr> / <abbr title="Received" class="initialism">5</abbr></td>
							<td>Dr. Barrow, Lady Grey and 1 other.</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>A walk in the woods</td>
							<td><abbr title="Sent" class="initialism">13</abbr> / <abbr title="Received" class="initialism">9</abbr></td>
							<td>Prof. Milne, Ms. Ford and 4 others.</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Recent events</h5>

						<h6 class="card-subtitle mb-2 text-muted">A walk in the woods</h5>
						<p class="card-text">You received a letter from Dr. Barrow on the 13th of May. <a href="#">Read it.</a></p>

						<h6 class="card-subtitle mb-2 text-muted">On dreaming</h5>
						<p class="card-text">Your letter to Ms. Ford was delivered on the 13th of May.</p>

						<h6 class="card-subtitle mb-2 text-muted">On dreaming</h5>
						<p class="card-text">A letter from Prof. Milne is on it's way, it should arrive around the 17th of May.</p>
					</div>
				</div>

			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->

	<?php include "includes/javascript.php"; ?>
</body>
</html>