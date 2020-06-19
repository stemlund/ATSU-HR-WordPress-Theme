var ItemWithSubMenu = document.querySelectorAll( '.menu-item-has-children > a' );

ItemWithSubMenu.forEach( function( arrow ) {
	arrow.insertAdjacentHTML( 'beforeend', '<i class="material-icons">expand_more</i>' );
} );
