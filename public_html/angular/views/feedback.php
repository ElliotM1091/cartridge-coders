<div class="container">
	<div class="row row-flex">

		<div ng-repeat="feedback in feedbacks"
		">
		<div class="container">
			<div class="well">
				<ul>
					<li>{{ feedback.feedbackContent }}</li>
					<li>{{ feedback.feedbackRating }} / 5</li>
				</ul>
			</div>
		</div>
	</div>
</div>

</div>

