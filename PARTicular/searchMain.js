function handleAPILoaded() {
	console.log("enabling search");
	$('#search-button').attr('disabled', false);
}

function search() {
	console.log("searching");
    var comboVal = $('#caseCombo:selected').text();
	var q = comboVal + "case review";
    console.log(comboVal);
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
    
	//$('#ytVideo').append("<ul>");
	//for(var i=0; i<5; i++){
		var vidid = videos[i].id.videoId;
		//$('#ytVideo').append("<li>"+vidid+"</li>");
        var url = "https://www.youtube.com/embed/" + vidid;
 		$('#yttVideo').attr('src', url);
	//}
	//$('#ytVideo').append("</ul>");
	});
}


	