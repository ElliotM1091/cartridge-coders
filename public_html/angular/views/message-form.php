<!--	<form name="createMessageForm" id="createMessageForm" class="form-horizontal well" ng-controller="messageController"-->
<!--			ng-submit="submit(formData,  giveMessage.$valid);" novalidate>-->
<!--		<div class="form-group"-->
<!--			  ng-class="{ 'has-error': createMessage.messageSubject.$touched && createMessage.messageSubject.$invalid }">-->
<!--			<label for="messageSubject">Subject:</label>-->
<!--			<div class="input-group">-->
<!--				<div class="input-group-addon">-->
<!--					<i class="fa fa-pencil" aria-hidden="true"></i>-->
<!--				</div>-->
<!--				<input type="text" id="messageSubject" name="messageSubject" class="form-control"-->
<!--						 ng-model="newMessage.messageSubject" ng-minlegth="5" ng-maxlength="128" ng-required="true"/>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!---->
<!--		<div class="form-group"-->
<!--			  ng-class="{ 'has-error': createMessage.messageContent.$touched && createMessage.messageContent.$invalid  }">-->
<!--			<label for="content">Message</label>-->
<!--			<div class="input-group">-->
<!--				<div class="input-group-addon">-->
<!--					<i class="fa fa-pencil" aria-hidden="true"></i>-->
<!--				</div>-->
<!--						<textarea class="form-control" rows="5" id="messageContent" name="messageContent"-->
<!--									 ng-model="createMessage.feedbaclContent" ng-maxlength="255" ng-required="true"-->
<!--									 placeholder="Tell us how you really feel(255 characters total"></textarea>-->
<!--			</div>-->
<!--			<div class="alert alert-danger" role="alert" ng-messasges="createMessage.messageSenderId.$error"-->
<!--				  ng-if="createMessage.messageRecipientId.$touched" ng-hide="createMessage.messageContent.$valid">-->
<!--				<p ng-message="maxlength"> Try and shorten the message a little </p>-->
<!--				<p ng-message="required"> Please write a message</p>-->
<!--			</div>-->
<!--			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>-->
<!--			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>-->
<!--		</div>-->
<!--	</form>-->



	<div class="row">
		<form name="addMessageForm" id="addMessageForm" class="form-horizontal well" ng-submit="createMessage(newMessage, addMessageForm.$valid);" uib-collapse="collapseAddForm" novalidate>
			<h2>Send A Message</h2>
			<hr />
			<div class="form-group" ng-class="{ 'has-error': addMessageForm.addSubject.$touched && addMessageForm.addSubject.$invalid }">
				<label for="addSubject">Subject</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-comment" aria-hidden="true"></i>
					</div>
					<input type="text" name="addSubject" id="addSubject" class="form-control" maxlength="255" ng-model="newMessage.messageSubject" ng-minlength="1" ng-maxlength="255" ng-required="true" />
				</div>
				<div class="alert alert-danger" role="alert" ng-messages="addMessageForm.addSubject.$error" ng-if="addMessageForm.addSubject.$touched" ng-hide="addMessageForm.addSubject.$valid">
					<p ng-message="required">Subject is required.</p>
					<p ng-message="minlength">Subject cannot be empty.</p>
					<p ng-message="maxlength">Subject is too long.</p>
				</div>
			</div>
			<div class="form-group" ng-class="{ 'has-error': addMessageForm.addContent.$touched && addMessageForm.addContent.$invalid }">
				<label for="addContent">Content</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
					</div>
					<input type="text" name="addContent" id="addContent" class="form-control" maxlength="64" ng-model="newMessage.messageContent" ng-minlength="1" ng-maxlength="64" ng-required="true" />
				</div>
				<div class="alert alert-danger" role="alert" ng-messages="addMessageForm.addContent.$error" ng-if="addMessageForm.addContent.$touched" ng-hide="addMessageForm.addContent.$valid">
					<p ng-message="required">Content is required.</p>
					<p ng-message="minlength">Content cannot be empty.</p>
					<p ng-message="maxlength">Content is too long.</p>
				</div>
			</div>

			<button type="submit" class="btn btn-info btn-lg" ng-disabled="addMessageForm.$invalid"><i class="fa fa-share"></i> Message</button>
			<button type="reset" class="btn btn-warning btn-lg"><i class="fa fa-ban"></i> Cancel</button>
		</form>
		<uib-alert ng-repeat="alert in alerts" type="{{ alert.type }}" close="alerts.length = 0;">{{ alert.msg }}</uib-alert>
	</div>
