window.jQuery = window.$ = jQuery;

jQuery(document).ready(function($) {
	"use strict";

	jQuery('#site-navigation .menu-toggle').on('click', function () {
		clearnoteHandleMenuAccessibility();
	});

});
	

/**
 * Active focus on menu popup items
 */
function clearnoteHandleMenuAccessibility() {
	$( document ).on( 'keydown', function( e ) {
		if ( $( '#site-navigation' ).hasClass( 'toggled' ) ) {
			var activeElement = document.activeElement;
			var menuItems = $( '#site-navigation a' );
			var firstEl = $( '.menu-toggle' );
			var lastEl = menuItems[ menuItems.length - 1 ];
			var tabKey = event.keyCode === 9;
			var shiftKey = event.shiftKey;
			
			if ( ! shiftKey && tabKey && lastEl === activeElement ) {
				event.preventDefault();
				firstEl.focus();
			}

			if ( shiftKey && tabKey && firstEl.is(':focus') ) {
				event.preventDefault();
				lastEl.focus();
			}
		}
	} );
}