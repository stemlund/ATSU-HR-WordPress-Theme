var elem = document.querySelector( '.masonry-wrapper' );
var msnry = new Masonry( elem, {
	// options
	itemSelector: '.card',
	columnWidth: 46,
	percentPosition: true,
	// gutter: 2,
} );
