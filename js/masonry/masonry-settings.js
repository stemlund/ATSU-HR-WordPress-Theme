$( window ).on( 'load', function() {
	var columns = 2,
		setColumns = function() {
			columns = $( window ).width() > 800 ? 2 : $( window ).width() > 320 ? 1 : 1;
		};

	setColumns();
	$( window ).resize( setColumns );

	$( '.masonry-wrapper' ).masonry(
		{
			itemSelector: '.card',
			columnWidth: function( containerWidth ) {
				return containerWidth / columns;
			},
		} );

	$( '.masonry-wrapper' ).masonry(
		{
			itemSelector: '.card',
			columnWidth: function( containerWidth ) {
				return containerWidth / columns;
			},
		} );
} );
