jQuery(document).ready(function($){
	
	//-----------------------------------------------------------------
	// NectarLove
	//-----------------------------------------------------------------
	
	$('.nectar-love').on('click', function() {
		
			var $loveLink = $(this);
			var $id = $(this).attr('id');
			
			if($loveLink.hasClass('loved')) return false;
	
			var $dataToPass = {
				action: 'nectar-love', 
				loves_id: $id 
			}
			
			$.post(nectarLove.ajaxurl, $dataToPass, function(data){
				$loveLink.html(data).addClass('loved').attr('title','You already love this!');
				$loveLink.find('span').css('opacity',1);
			});
		
			return false;
	});
	
	
});