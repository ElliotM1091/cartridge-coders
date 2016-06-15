app.constant("IMAGEUPLOAD_ENDPOINT", "php/apis/upload/");
app.service("ImageUploadService", function($http, IMAGEUPLOAD_ENDPOINT) {
	function getUrl() {
		return(IMAGEUPLOAD_ENDPOINT);
	}

	function getUrlForId(imageId) {
		return(getUrl() + imageId);
	}

	this.create = function() {
		return($http.post(getUrl()));
	};

});