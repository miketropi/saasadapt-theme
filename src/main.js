;((w, $) => {
  'use strict';

  const ready = () => {

    filterProductByKeyword();

    $('#filterProduct').click( function (e) {
        e.preventDefault();
        $('.sah-product-listing-page__sidebar').addClass('active-mb');
    })

    $('.sah-product-listing-page__sidebar .close-btn').click( function(e) {
        e.preventDefault();
        $('.sah-product-listing-page__sidebar').removeClass('active-mb');
    })

    $(document).mouseup(function(e) {
        var sidebar = $('.sah-product-listing-page__sidebar');
        // if the target of the click isn't the container nor a descendant of the container
        if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0){
            $('.sah-product-listing-page__sidebar').removeClass('active-mb');
        }
    });
  }

  $(ready);

  var filterProductByKeyword = function() {
    // Search Header Ajax
    $('#searchProductName').keyup( function() {

    if ( $(this).val().length == 0 ) {
    return;
    }

    setTimeout(() => {
        
        $.ajax({
            url: SAT_PHP_DATA.ajax_url,
            type: 'post',
            data: {
            //   'action': 'load_product_ajax',
            's': $(this).val(),
            },
            beforeSend: function() {

            },
            success: function(data) {

            }
        });
        
    }, 1000 );

    });

  }

})(window, jQuery);  