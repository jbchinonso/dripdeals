jQuery(function($){ 
	$('.read-more').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': jb_dripdeals_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : jb_dripdeals_loadmore_params.current_page
		};
 
		$.ajax({ // you can also use $.post here
			url : jb_dripdeals_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); 
			},
            success: function (data) {
                console.log(data);
				if( data ) { 
                    button.text('See More');
                    $(".product").last().after(data); 
					jb_dripdeals_loadmore_params.current_page++;
 
					if ( jb_dripdeals_loadmore_params.current_page == jb_dripdeals_loadmore_params.max_page ) 
						button.remove(); 
					
					 //$( document.body ).trigger( 'post-load' );
                } else {
                    console.log('we balance here')
					button.remove(); // if no data, remove the button as well
				}
            }
		});
	});
});