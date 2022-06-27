$('.cleaning_faq_accordion_button').click(function(e) {
    $arrow = $(this).children('span');

    if ($arrow.hasClass('cleaning_faq_accordion_arrow_show') || $arrow.hasClass('cleaning_faq_accordion_arrow_default_open')) {
        $arrow.removeClass('cleaning_faq_accordion_arrow_show');
        $arrow.addClass('cleaning_faq_accordion_arrow_close');
        $arrow.removeClass('cleaning_faq_accordion_arrow_default_open')
    } else {
        $arrow.addClass('cleaning_faq_accordion_arrow_show');
        $arrow.removeClass('cleaning_faq_accordion_arrow_close');
    }
});