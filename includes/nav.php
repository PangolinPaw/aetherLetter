<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Aether Letter</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			<a class="nav-link" href="index.php">My correspondence <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Letters
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="read.php">Read</a>
					<a class="dropdown-item" href="write.php">Write</a>
				</div>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</button>
		</form>
	</div>
</nav>

<!-- Modals (popups) -->
<div class="modal fade" id="newLetter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Compose new letter</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="saveLetter" method="post">
					<div class="form-group">
						<label for="recipients">Recipient(s)</label>
						<input type="text" class="form-control" id="recipients" name="recipients" placeholder="Recipient names" aria-describedby="recipientsHelp">
						<small id="recipientsHelp" class="form-text text-muted">List each recipient's <em>full name</em>, separated by a semi-colon ( ; )</small>
					</div>
					<div class="form-group">
						<label for="description">Physical description</label>
						<input type="text" name="description" class="form-control" id="description" placeholder="Optional description" aria-describedby="descriptionHelp">
						<small id="descriptionHelp" class="form-text text-muted">Optional description of this letter and/or enevelope</small>
					</div>
					<div class="form-group">
						<label for="body">Letter body</label>
						<textarea class="form-control" id="body" name="body" rows=10></textarea>
					</div>
					<input type="hidden" name="saveType" id="saveType" value="">
				</form>
			</div> <!-- /modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" onclick="document.getElementById('saveType').value='draft'; document.getElementById('saveLetter').submit()">Save draft</button>
				<button type="button" class="btn btn-primary" onclick="document.getElementById('saveType').value='send'; document.getElementById('saveLetter').submit()">Post now</button>
			</div>
		</div>
	</div>
</div>

