'use strict';

//forEach polyfill for IE
if ( window.NodeList && ! NodeList.prototype.forEach ) {
	NodeList.prototype.forEach = function( callback, thisArg ) {
		thisArg = thisArg || window;
		for ( var i = 0; i < this.length; i++ ) {
			callback.call( thisArg, this[i], i, this );
		}
	};
}

var ItemWithSubMenu = document.querySelectorAll( '.menu-item-has-children > a' );

ItemWithSubMenu.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'beforeend', '<i class="material-icons">expand_more</i>' );
} );

//Setup function for making links open in new tab
function openNewTab( link ) {
	if ( link.getAttribute( 'target' ) === '_blank' ) {
		//do nothing
	} else {
		link.setAttribute( 'target', '_blank' );
	}
}

// Make PDFs open in new tab
var pdfLink = document.querySelectorAll( 'a[href$=".pdf"]' );
pdfLink.forEach( openNewTab, this );

// Make external links open in new tab
var externalLink = document.querySelectorAll( 'a[href^=\'https:\']:not([href*=\'' + window.location.host + '\']' );
externalLink.forEach( openNewTab, this );

//Sidebar Accordions
//Target all but first navigation menu so that first menu in sidebar is not collapsed
var widgetAccordionHeader = document.querySelectorAll( '.widget_nav_menu + .widget_nav_menu > .widget-title' );

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

var contentAccordionHeader = document.querySelectorAll( '#accordion > .accordion-head' );

contentAccordionHeader.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'beforeend', '<i class="material-icons md-content-arrow">expand_more</i>' );
} );

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

$( document ).ready( function() {
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
	//commented this out because it broke top nav expanding menus if current URL included a hash URL (/benefits/#stillhealthy)
	//if I needed this, I could change a[href*="#"] to target just those links within the main content or within accordion sections
	window.onhashchange = gotohash;

	$( '.main-and-widgets-wrapper a[href*="#"]' ).click( function() {
		gotohash();
	} );

	//allows for linking to accordion panels from external webpages
	if ( location.hash ) {
		gotohash();
	}
} );

//FitVids.js
$( '#primary' ).fitVids();

// //Add icons to links dynamically
// var pdfLink = document.querySelectorAll( '.main-and-widgets-wrapper a[href$=".pdf"]' );

// pdfLink.forEach( function( arrow ) {
// 	arrow.insertAdjacentHTML( 'afterbegin', '<i class="material-icons md-pdf-icon">picture_as_pdf</i>' );
// } );

//mobile menu accordions

var topNavHeader = document.querySelectorAll( '#primary-menu > li > a' );

function mobileSlideToggle( event ) {
	event.preventDefault();
	$( this ).next().slideToggle( 'swing', function() {
		$( this ).prev().attr( 'aria-expanded', $( this ).prev().attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		$( this ).attr( 'aria-hidden', $( this ).attr( 'aria-hidden' ) === 'true' ? 'false' : 'true' );
	} );
	$( topNavHeader ).not( this ).next().slideUp();
}

var isMobile = window.matchMedia( '(max-width: 930px)' );

// Define a callback function for the event listener.
function handleMediaQueryChange( e ) {
	if ( e.matches ) {
		//hide submenus by default
		$( topNavHeader ).next().hide();
		$( topNavHeader ).attr( 'aria-expanded', 'false' );
		$( topNavHeader ).next().attr( 'aria-hidden', 'true' );

		//.off('click') prevents multiple click triggers after resizing browser more than once
		$( topNavHeader ).off( 'click' ).on( 'click', mobileSlideToggle );
	} else {
		//reset submenu styles so they are 'shown', albeit offscreen via CSS until hovered on desktop
		$( topNavHeader ).next().show();
		$( topNavHeader ).off( 'click', mobileSlideToggle );

		var topNavWrapper = document.querySelector( '.main-navigation' );

		//allow nav styles to snap back to desktop styles if a menu is expanded
		if ( topNavWrapper.classList.contains( 'toggled' ) ) {
			topNavWrapper.classList.remove( 'toggled' );
		}
		//reset mobile menu icon to menu icon from X
		var menuIcon = document.querySelector( '.menu-toggle .md-menu' );
		if ( menuIcon.textContent = 'close' ) {
			menuIcon.textContent = 'menu';
		}
	}
}

// Run the isMobile change handler once.
handleMediaQueryChange( isMobile );

// Add the callback function as a listener to the query list.
isMobile.addEventListener( 'change', handleMediaQueryChange );
