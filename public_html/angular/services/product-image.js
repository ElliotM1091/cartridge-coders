app.constant("PRODUCT_IMAGE_ENDPOINT", "php/apis/product-image/");
app.service("ProductImageService", function($http, PRODUCT_IMAGE_ENDPOINT) {
	function getUrl() {
		return(PRODUCT_IMAGE_ENDPOINT);
	}

	this.all = function() {
		return($http.get(getUrl()));
	};

});