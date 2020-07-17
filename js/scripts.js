var ItemWithSubMenu = document.querySelectorAll( '.menu-item-has-children > a' );

ItemWithSubMenu.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'beforeend', '<i class="material-icons">expand_more</i>' );
} );

//Sidebar Accordions

var widgetAccordionHeader = document.querySelectorAll( '.widget_nav_menu > .widget-title' );

widgetAccordionHeader.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'afterbegin', '<i class="material-icons md-widget-arrow">expand_more</i>' );
} );

$( widgetAccordionHeader ).next().hide();
$( widgetAccordionHeader ).attr( 'aria-expanded', 'false' );
$( widgetAccordionHeader ).next().attr( 'aria-hidden', 'true' );

$( widgetAccordionHeader ).click( function() {
	$( this ).next().slideToggle( 'swing', function() {
		$( this ).prev().attr( 'aria-expanded', $( this ).prev().attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		$( this ).attr( 'aria-hidden', $( this ).attr( 'aria-hidden' ) === 'true' ? 'false' : 'true' );
	} );
	$( widgetAccordionHeader ).not( this ).next().slideUp();
} );

//Content Accordions

var contentAccordionHeader = document.querySelectorAll( '.entry-content > .accordion-head' );

contentAccordionHeader.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'beforeend', '<i class="material-icons md-content-arrow">expand_more</i>' );
} );

// $( contentAccordionHeader ).next().hide();
// $( contentAccordionHeader ).attr( 'aria-expanded', 'false' );
// $( contentAccordionHeader ).next().attr( 'aria-hidden', 'true' );

// $( contentAccordionHeader ).click( function() {
// 	$( this ).next().slideToggle( 'swing', function() {
// 		$( this ).prev().attr( 'aria-expanded', $( this ).prev().attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
// 		$( this ).attr( 'aria-hidden', $( this ).attr( 'aria-hidden' ) === 'true' ? 'false' : 'true' );
// 	} );
// 	$( contentAccordionHeader ).not( this ).next().slideUp();
// } );

//the function that goes to the section of the page based on the #______ in the URL

function gotohash() {
	// the selector
	var currentTarget = $( '.accordion-head[id$="' + location.hash + '"]' ),
		offset = { top: 0, left: 0 };
		// in case we have a hit...
	if ( currentTarget.length ) {
		// trigger the click
		currentTarget.trigger( 'click' );
		// get current offset (relative to document)
		// since the element is the question (not the answer with the id)
		// this will show the question right on top
		offset = currentTarget.offset();
		// just in case you'll want to add some extra space do it like this:
		offset.top -= 80;

		// and let the page scroll to this position
		$( 'html, body' ).animate( {
			scrollTop: offset.top,
			scrollLeft: offset.left,
		} );
	}
}

//allows for linking between accordion panels on the same page
window.onhashchange = gotohash;

$( 'a[href*="#"]' ).click( function() {
	gotohash();
} );

//allows for linking to accordion panels from external webpages
if ( location.hash ) {
	gotohash();
}

$( function() {
	$( '#accordion' ).accordion( {
		heightStyle: 'content',
		collapsible: true,
		navigation: true,
		active: false,
		icons: false,
		//the following forces the accordion panel to scroll you to the top of that section, so you don't land in the middle of the content or worse, it being off screen
		activate: function( event, ui ) {
			if ( ! $.isEmptyObject( ui.newHeader.offset() ) ) {
				$( 'html:not(:animated), body:not(:animated)' ).animate( { scrollTop: ui.newHeader.offset().top }, 'slow' );
			}
		},
	} );
} );

//FitVids.js
$( '#primary' ).fitVids();

