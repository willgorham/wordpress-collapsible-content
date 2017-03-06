;(function($, window, document, undefined){
  'use strict';

  var $visibleContents, $hiddenContents, $icons;

  /**
   * Initialize plugin script
   *
   * @return {void}
   */
  var init = function() {
    $visibleContents = $('.collapsible-content--visible');
    $hiddenContents = $visibleContents.next();
    $icons = $visibleContents.find('.collapsible-content--icon');
    $visibleContents.on('click', clickHandler);
  }

  /**
   * Click event handler
   *
   * @return {void}
   */
  var clickHandler = function() {
    var index = $visibleContents.index( this ),
        $hiddenContent = $hiddenContents.eq( index ),
        isContentOpen = $hiddenContent.is(':visible');

    $hiddenContent.slideToggle( 300 ).then( );

    changeIcon( index, isContentOpen );
  }


  /*********************
   * Helper functions
   ********************/

  function changeIcon( index, isContentOpen ) {
    var $icon = $icons.eq( index ),
        closedIcon = $icon.data( 'closedIcon' ),
        openedIcon = $icon.data( 'openedIcon' );

    if ( isContentOpen ) {
      $icon.removeClass( openedIcon ).addClass( closedIcon );
    } else {
      $icon.removeClass( closedIcon ).addClass( openedIcon );
    }

  }


  $(document).ready( init );

})(jQuery, window, document)
