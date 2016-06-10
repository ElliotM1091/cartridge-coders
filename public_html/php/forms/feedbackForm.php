<!DOCTYPE html> <!--this is the doctype declaration-->
<html lang="en"><!--this is to set this page to english-->
	<head>  <!--this is the head tag to start the doc out-->

		<!--this is hte 8 bit setting used universally. this is a self closing tag-->
		<meta charset="utf-8">
		<!--this helps out IE-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<!--going to be used for view port -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!--customer CSS-->
		<link rel="stylesheet" href="../../epic/style.css" type="text/css">
		<!-- favicon -->
		<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon"/>

		<!-- jQuery (needed for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>


	<body>
		<form class="form-horizontal well" action="email.php">
			<div class="form-group">
				<label for="SenderId">SenderId</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<input type="number" class="form-control" id="senderid" title="senderId" placeholder="Numbers only">
				</div>
			</div>
			<div class="form-group">
				<label for="recipientId">Recipient Id:</label>
<!--				<p class="fee"></p>-->
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
					<input type="number" class="form-control" id="recipientId" name="recipientId" placeholder="Numbers only">
				</div>
			</div>
			<div class="form-group">
				<label for="product">Product</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="product" name="product" placeholder="Product Id">
				</div>
			</div>
			<div class="form-group">
				<label for="rating">Rating</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-file-image-o" aria-hidden="true"></i>
					</div>
					<div class="rating">
						<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="content">Feedback</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<textarea class="form-control" rows="5" id="content" name="content" placeholder="Feedback(255 characters total"></textarea>
				</div>
			</div>
			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</form>
	</body>
</html>