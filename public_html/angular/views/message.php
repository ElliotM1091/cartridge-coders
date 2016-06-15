<div class="container">
	<div class="row row-flex">

		<div ng-repeat="message in messages"
		">
		<div class="container">
			<div class="well">
				<ul>
					<li>{{ message.messageSubject }}</li>
					<li>{{ message.messageContent }}</li>
				</ul>
			</div>
		</div>
	</div>
</div>

</div>