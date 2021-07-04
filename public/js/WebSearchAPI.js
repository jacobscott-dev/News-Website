
var art = document.querySelector('#articles');
fetch("https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/TrendingNewsAPI?pageNumber=1&pageSize=10&withThumbnails=false&location=us", {
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "d551a50efbmsh842e8bdf709d4fbp100594jsn8f8a108864d1",
		"x-rapidapi-host": "contextualwebsearch-websearch-v1.p.rapidapi.com"
	}
})
.then(response => {
	return response.json();

}).then(function(json) {
	let articles = json.value;
	console.log(articles);
	articles.forEach(function() {
		art.appendChild(articles['title']);
	})
	
}).catch(err => {
	console.error(err);

});