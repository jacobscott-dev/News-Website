var art = document.getElementById('articles');

fetch("https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/NewsSearchAPI?q=" + cat + "health&pageNumber=1&pageSize=10&autoCorrect=true&fromPublishedDate=null&toPublishedDate=null", {
	method: "GET",
	headers: {
		"x-rapidapi-key": "d551a50efbmsh842e8bdf709d4fbp100594jsn8f8a108864d1",
		"x-rapidapi-host": "contextualwebsearch-websearch-v1.p.rapidapi.com",
		"q": "taylor swift",
		"pageNumber": "1",
		"pageSize": "10",
		"autoCorrect": "True"
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
			let title = document.createElement('h2');
  		let snippet = document.createElement('p');

  		title.textContent = article['title'];
			snippet.textContent = article['snippet'];
			el.appendChild(title);
			el.appendChild(snippet);
  		art.appendChild(el);
  	})
  })
	