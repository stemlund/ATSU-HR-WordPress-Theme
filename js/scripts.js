var ItemWithSubMenu = document.querySelectorAll( '.menu-item-has-children > a' );

ItemWithSubMenu.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'beforeend', '<i class="material-icons">expand_more</i>' );
} );

//sidebar

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
} );

