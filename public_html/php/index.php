<?php require_once("partials/head-utils.php") ?>

<div class="container">

	<div class="row">
		<form name="addFeedbackForm" id="addFeedbackForm" class="form-horizontal well" ng-submit="createFeedback(newFeedback, addFeedbackForm.$valid);" uib-collapse="collapseAddForm" novalidate>
			<h2>Submit Feedback</h2>
			<hr />
			<div class="form-group" ng-class="{ 'has-error': addFeedbackForm.addContent.$touched && addFeedbackForm.addContent.$invalid }">
				<label for="addContent">Content</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
					</div>
					<input type="text" name="addContent" id="addContent" class="form-control" maxlength="64" ng-model="newFeedback.feedbackContent" ng-minlength="1" ng-maxlength="64" ng-required="true" />
				</div>
				<div class="alert alert-danger" role="alert" ng-messages="addFeedbackForm.addContent.$error" ng-if="addFeedbackForm.addContent.$touched" ng-hide="addFeedbackForm.addContent.$valid">
					<p ng-message="required">Content is required.</p>
					<p ng-message="minlength">Content cannot be empty.</p>
					<p ng-message="maxlength">Content is too long.</p>
				</div>
			</div>

			<button type="submit" class="btn btn-info btn-lg" ng-disabled="addFeedbackForm.$invalid"><i class="fa fa-share"></i> Feedback</button>
			<button type="reset" class="btn btn-warning btn-lg"><i class="fa fa-ban"></i> Cancel</button>
		</form>
		<uib-alert ng-repeat="alert in alerts" type="{{ alert.type }}" close="alerts.length = 0;">{{ alert.msg }}</uib-alert>
	</div>

</div>