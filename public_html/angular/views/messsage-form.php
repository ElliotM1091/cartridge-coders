<div class="container">
	<form name="giveMessage" id="createMessage" class="form-horizontal well" ng-controller="messageController"
			ng-submit="submit(formData,  giveMessage.$valid);" novalidate>
		<div class="form-group"
			  ng-class="{ 'has-error': createMessage.messageSubject.$touched && createMessage.messageSubject.$invalid }">
			<label for="messageSubject">Subject:</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<input type="text" id="messageSubject" name="messageSubject" class="form-control"
						 ng-model="createMessage.messageSubject" ng-minlegth="5" ng-maxlength="128" ng-required="true"/>
			</div>
			</div>
		</div>

		<div class="form-group"
			  ng-class="{ 'has-error': createMessage.messageContent.$touched && createMessage.messageContent.$invalid  }">
			<label for="content">Message</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
						<textarea class="form-control" rows="5" id="messageContent" name="messageContent"
									 ng-model="createMessage.feedbaclContent" ng-maxlength="255" ng-required="true"
									 placeholder="Tell us how you really feel(255 characters total"></textarea>
			</div>
			<div class="alert alert-danger" role="alert" ng-messasges="createMessage.messageSenderId.$error"
				  ng-if="createMessage.messageRecipientId.$touched" ng-hide="createMessage.messageContent.$valid">
				<p ng-message="maxlength"> sorry try and shorten the message a little </p>
				<p ng-message="required"> your forgot to writ something!</p>
			</div>
			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</div>
	</form>