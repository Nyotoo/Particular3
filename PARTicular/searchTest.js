function handleAPILoaded() {
	console.log("enabling search");
	$('#search-button').attr('disabled', false);
}

function search() {
	console.log("searching");
	var q = $('#query').val();
  	var request = gapi.client.youtube.search.list({
    	q: q,
    	part: 'snippet'
	});
	
	/*request.execute(function(response) {
		var str = JSON.stringify(response.result);
		$('#search-container').html('<pre>' + str + '</pre>');
	});
}*/


	request.execute(function(response){
	
	var htmlstring = "";
	var videos = response.result.items;
	$('#search-container').append("<ul>");
	for(var i=0; i<5; i++){
		var title = videos[i].snippet.title;
		$('#search-container').append("<li>"+title+"</li>");
	}
	$('#search-container').append("</ul>");
	});
}


	