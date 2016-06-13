<?php
// inserting the head
require_once("php/partials/head-utils.php"); ?>

<!-- header now-->
<?php require_once("php/partials/header.php") ?>


<body class="sfooter" ng-controller="FeedbackController">
	<div class="sfooter">


		<form name="giveFeedback" id="createFeedback" class="form-horizontal well" ng-controller="feedbackController" ng-submit="submit(formData,  giveFeedback.$valid);" novalidate>
			<div class="form-group" ng-class="{ 'has-error': createFeedback.senderId.$touched && createFeedback.senderId.$invalid">
				<label for="SenderId">SenderId</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<input type="number" class="form-control" id="feedbackSenderid" name="feedbackSenderId" nu-model="createFeedback.feedbackSenderId" ng-maxlength="10" ng-requeired="true" placeholder="Numbers only">
				</div>
				<div class="alert alert-danger" role="alert" ng-messasges="createFeedback.feedbackSenderId.$error" ng-if="createFeedback.feedbackSenderId.$touched" ng-hide="createFeedback.feedbackSenderId.$valid">
					<p ng-message="maxlength"> sorry senderId too long</p> <!-- delete this? -->
					<p ng-message="required"> your forgot senderId go back and try again </p>  <!-- prob gonna delete this too?-->
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