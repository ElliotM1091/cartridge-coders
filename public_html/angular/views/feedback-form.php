<div class="row" ng-class="{ 'spacer': collapseAddForm }">
	<button type="button" class="btn btn-lg btn-ingo" ng-click="collapseAddForm = !collapseAddForm"></button>
		<form name="giveFeedback" id="createFeedback" class="form-horizontal well" ng-controller="feedbackController" ng-submit="submit(formData,  giveFeedback.$valid);" novalidate>
			<div class="form-group" ng-class="{ 'has-error': createFeedback.senderId.$touched && createFeedback.senderId.$invalid }">
				<label for="SenderId">SenderId</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<input type="number" class="form-control" id="feedbackSenderid" name="feedbackSenderId" ng-model="createFeedback.feedbackSenderId" ng-maxlength="10" ng-required="true" placeholder="Numbers only">
				</div>
				<div class="alert alert-danger" role="alert" ng-messasges="createFeedback.feedbackSenderId.$error" ng-if="createFeedback.feedbackSenderId.$touched" ng-hide="createFeedback.feedbackSenderId.$valid">
					<p ng-message="maxlength"> sorry senderId too long</p> <!-- delete this? -->
					<p ng-message="required"> your forgot senderId go back and try again </p>  <!-- prob gonna delete this too?-->
			</div>
				</div>
			<div name=class="form-group" ng-class="{ 'has-erorr': createFeedback.recipientId.$touched && createFeedback.recipientId.$invalid }">
				<label for="recipientId">Recipient Id:</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
					<input type="number" class="form-control" id="feedbackRecipientId" name="feedbackRecipientId" ng-model="createFeedback.feedbackRecipientId" ng-maxlength="10" ng-required="true" placeholder="Numbers only">
				</div>
				<div class="alert alert-danger" role="alert" ng-messasges="createFeedback.feedbackSenderId.$error" ng-if="createFeedback.feedbackRecipientId.$touched" ng-hide="createFeedback.feedbackRecipientId.$valid">
					<p ng-message="maxlength"> sorry recipientId too long</p> <!-- delete this? -->
					<p ng-message="required"> your forgot recipientId go back and try again </p>  <!-- prob gonna delete this too?-->
			</div>
			<div class="form-group" ng-class="{ 'has-error': createFeedback.feedbaclProductId.$touched && createFeedback.feedbackProductId.$invalid }">
				<label for="feedbackProductId">Product</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="feedbackProductId" name="feedbackProductId" ng-model="createFeedback.feedbackProductId" ng-maxlength="10" ng-required="true" placeholder="Product Id">
				</div>
				<div class="alert alert-danger" role="alert" ng-messasges="createFeedback.feedbackSenderId.$error" ng-if="createFeedback.feedbackRecipientId.$touched" ng-hide="createFeedback.feedbackRecipientId.$valid">
					<p ng-message="maxlength"> sorry senderId too long</p>
					<p ng-message="required"> your forgot senderId go back and try again </p>
			</div>
				</div>
			<!--<div class="form-group" ng-class="{ 'has-error': createFeedback.rating.$touched && crateFeedback.feedbackRating.$invalid">
				<label for="rating">Rating</label>
				<div class="input-group">
					<div class="input-group-addon">
					</div>
					<div class="rating">
						<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
					</div>
				</div>
			</div> -->
			<div class="form-group" ng-class="{ 'has-error': createFeedback.product.$touched && createFeedback.feedbackContent.$invalid  }">
				<label for="content">Feedback</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<textarea class="form-control" rows="5" id="feedbackContent" name="feedbackContent" ng-model="createFeedback.feedbaclContent" ng-maxlength="255" ng-required="true" placeholder="Tell us how you really feel(255 characters total"></textarea>
				</div>
				<div class="alert alert-danger" role="alert" ng-messasges="createFeedback.feedbackSenderId.$error" ng-if="createFeedback.feedbackRecipientId.$touched" ng-hide="createFeedback.feedbackRecipientId.$valid">
					<p ng-message="maxlength"> sorry try and shorten the content a little </p>
					<p ng-message="required"> give some feedback it's free!</p>
			</div>
			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</div>
		</form>
</div>