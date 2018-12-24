/**
 * @param  {Object} $     - jQuery reference
 * @return {Object} .init - Method to start the closure
 */
var Mfn_Checkbox_Pseudo = (function($) {

  /**
   * Attach events to buttons. Runs whole script.
   */

  function init() {
    check();
  }

  /**
   * Checkbox click.
   */

  function check() {

    $('body').on('change', '.mfnf-checkbox.pseudo input[type="checkbox"]', function() {

      var el = $(this).closest('.mfnf-checkbox.pseudo'),
        value = '';

      $('input:checked', el).each(function() {
        value = value + ' ' + $(this).val();
      });

      $('input.value', el).val(value);

    });

  }

  /**
   * Return
   * Method to start the closure
   */

  return {
    init: init
  };

})(jQuery);

jQuery(document).ready(function() {
  var mfn_checkbox_pseudo = Mfn_Checkbox_Pseudo.init();
});
