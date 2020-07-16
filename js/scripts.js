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

var contentAccordionHeader = document.querySelectorAll( '.entry-content > button.accordion-head' );

contentAccordionHeader.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'beforeend', '<i class="material-icons md-content-arrow">expand_more</i>' );
} );

$( contentAccordionHeader ).next().hide();
$( contentAccordionHeader ).attr( 'aria-expanded', 'false' );
$( contentAccordionHeader ).next().attr( 'aria-hidden', 'true' );

$( contentAccordionHeader ).click( function() {
	$( this ).next().slideToggle( 'swing', function() {
		$( this ).prev().attr( 'aria-expanded', $( this ).prev().attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		$( this ).attr( 'aria-hidden', $( this ).attr( 'aria-hidden' ) === 'true' ? 'false' : 'true' );
	} );
	$( contentAccordionHeader ).not( this ).next().slideUp();
} );

//FitVids.js
$( '#primary' ).fitVids();
