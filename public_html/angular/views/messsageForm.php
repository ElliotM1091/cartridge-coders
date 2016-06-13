
<form name="giveMessage" id="createMessage" class="form-horizontal well" ng-controller="messageController" ng-submit="submit(formData,  giveMessage.$valid);" novalidate>
	<div class="form-group" ng-class="{ 'has-error': createMessage.senderId.$touched && createMessage.senderId.$invalid }">
		<label for="SenderId">SenderId</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<input type="number" class="form-control" id="messageSenderid" name="messageSenderId" ng-model="createMessage.messageSenderId" ng-maxlength="10" ng-required="true" placeholder="Numbers only">
		</div>
		<div class="alert alert-danger" role="alert" ng-messasges="createMessage.messageSenderId.$error" ng-if="createMessage.messageSenderId.$touched" ng-hide="createMessage.messageSenderId.$valid">
		</div>
		<div name=class="form-group" ng-class="{ 'has-erorr': createMessage.recipientId.$touched && createMessage.recipientId.$invalid }">
			<label for="RecipientId">Recipient Id:</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-usd" aria-hidden="true"></i>
				</div>
				<input type="number" class="form-control" id="messageRecipientId" name="messageRecipientId" ng-model="createMessage.messageRecipientId" ng-maxlength="10" ng-required="true" placeholder="Numbers only">
			</div>
			<div class="alert alert-danger" role="alert" ng-messasges="createMessage.message.$error" ng-if="createMessage.messageRecipientId.$touched" ng-hide="createMessage.messageRecipientId.$valid">
			</div>
			<div class="form-group" ng-class="{ 'has-error': createMessage.messageProductId.$touched && createMessage.messageProductId.$invalid }">
				<label for="product">Product</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="messageProductId" name="messageProductId" ng-model="createMessage.messageProductId" ng-maxlength="10" ng-required="true" placeholder="Product Id">
				</div>
				<div class="alert alert-danger" role="alert" ng-messasges="createMessage.messageProductId.$error" ng-if="createMessage.messageRecipientId.$touched" ng-hide="createMessage.messageProductId.$valid">
				</div>
				<div class="form-group" ng-class="{ 'has-error': createMessage.subject.$touched && createMessage."
				<div class="form-group" ng-class="{ 'has-error': createMessage.product.$touched && createMessage.messageContent.$invalid  }">
					<label for="content">Message</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="messageContent" name="messageContent" ng-model="createMessage.feedbaclContent" ng-maxlength="255" ng-required="true" placeholder="Tell us how you really feel(255 characters total"></textarea>
					</div>
					<div class="alert alert-danger" role="alert" ng-messasges="createMessage.messageSenderId.$error" ng-if="createMessage.messageRecipientId.$touched" ng-hide="createMessage.messageContent.$valid">
						<p ng-message="maxlength"> sorry try and shorten the message a little </p>
						<p ng-message="required"> your forgot to writ something!</p>
					</div>
					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
</form>