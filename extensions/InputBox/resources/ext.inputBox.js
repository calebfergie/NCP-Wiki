/**
 * Disable InputBox submit button when the corresponding text input field is empty.
 *
 * @author Tony Thomas
 * @license http://opensource.org/licenses/MIT MIT License
 */
(function($, mw) {
		`new mw.Api().get( {
     action: "query",
     titles: [$content],
 } ).then( function( ret ) {
     $.each( ret.query.pages, function() {
         if ( this.missing !== "" ) {
					 console.log("firing inputbox function");
					 'use strict';
					 mw.hook( 'wikipage.content' ).add( function ( $content ) {
						 var $input = $content.find( '.createboxInput:not([type=hidden])' ),
							 onChange = function () {
								 var $textbox = $( this ),
									 $submit = $textbox.data( 'form-submit' );

								 if ( !$submit ) {
									 $submit = $textbox.nextAll( 'input.createboxButton' ).first();
									 $textbox.data( 'form-submit', $submit );
								 }

								 $submit.prop( 'disabled', $textbox.val().length < 1 );
							 }, i;

						 for ( i = 0; i < $input.length; i++ ) {
							 onChange.call( $input.get( i ) );
						 }

						 console.log("finishing inputbox function");

						 $input.on( 'keyup input change', $.debounce( 50, onChange ) );
					 } );
         } else {
             console.log("didnt pass");
         }
     } );
 }, function( error ) {
     console.log("didnt work");
 } );
}( jQuery, mediaWiki ) );
