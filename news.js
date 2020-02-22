$(document).ready(function(){

	var key = 'AIzaSyAryuikNOKHQPu9TREDQYWki8jEPBY8xTk';
	var playlistId = 'PLEWjTdU3WuExWuXmW2wEkwts-KJQ-m1_X';
	var URL = 'https://www.googleapis.com/youtube/v3/playlistItems';

	var options = {
	part: 'snippet',
	key: key,
	maxResults: 20,
	playlistId: playlistId

	}

	
	function loadVids() {
		$.getJSON(URL, options, function(data){
			console.log(data)
			var id = data.items[0].snippet.resourceId.videoId;
			mainVid(id);
			resultsLoop(data);
		})
	}

loadVids();


function mainVid(id) {
	$('.iframe-control').html(`
<iframe width="560" height="315" src="https://www.youtube.com/embed/${id}" 
frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
	`);
}

function resultsLoop(data){

	$.each(data.items, function(i, items){

		var thumb = items.snippet.thumbnails.default.url;
		var title = items.snippet.title;
		var desc  = items.snippet.description.substring(0, 100); 
		var vid = items.snippet.resourceId.videoId;

		$('.main').append(`
 <article class="item" data-key="${vid}">

		<img src="${thumb}" alt="" class="thumb">

		<div class="sub-details"> 
			<h4>${title}</h4>
			<p>${desc}</p>
		</div>

	</article> 
		`);

		

		
	});

	

	
}

$('.main').on('click', 'article', function() {
			var id = $(this).attr('data-key');
			mainVid(id);

		});


});