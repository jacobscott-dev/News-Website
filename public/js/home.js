
var art = document.getElementById('articles');

fetch("https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/TrendingNewsAPI?pageNumber=1&pageSize=10&withThumbnails=false&location=us", {
	method: "GET",
	headers: {
		"x-rapidapi-key": "d551a50efbmsh842e8bdf709d4fbp100594jsn8f8a108864d1",
		"x-rapidapi-host": "contextualwebsearch-websearch-v1.p.rapidapi.com"
	}
})
  .then(response => {
  	var data = response.json();
  	return data;
  })
  .then(function(data) {
  	var articles = data['value'];
  	articles.forEach(function(article) {
  		let el = document.createElement('div');
			let image = document.createElement('img');
  		let title = document.createElement('h3');
  		image.src = article['image']['url'];
			title.textContent = article['title'];
			el.appendChild(image);
			el.appendChild(title);
  		art.appendChild(el);
  	})
  })
	