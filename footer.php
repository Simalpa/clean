<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleaning
 */

?>
<?php

$footer_type = get_field('footer_type');

if  (is_404()){
    $footer_type = 'modify';
    //echo('123');
}

if ($footer_type == 'usually') {
    $left_block_footer = get_field('left_block_footer');
    $right_block_footer = get_field('right_block_footer');
    if ($left_block_footer && $right_block_footer) {
?>
        <footer class="container-fluid footer_mini" id="footer">
            <div class="row justify-content-end">
                <div class="col-lg-5 d-lg-block d-none content" style="background-image: url('<?php echo esc_url($left_block_footer['phone_image']['url']); ?>');">
                    <a href="https://www.apple.com/app-store/">
                        <div class="appstore_button clearfix">
                            <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="24" height="30">
                                <use href="#appstore_logo"></use>
                            </svg>
                            <div class="text float-left">
                                <p>Загрузить в</p>
                                <p>App Store</p>
                            </div>
                        </div>
                    </a>
                    <a href="http://googleplay.com">
                        <div class="googleplay_button clearfix">
                            <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="27" height="30">
                                <use href="#playmarket_logo"></use>
                            </svg>
                            <div class="text float-left">

                                <p>Загрузить в</p>
                                <p>Google Play</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-7 col-12">
                    <p class="col-12 text-center text-lg-left"><?php echo $right_block_footer['header_title'] ?></p>

                    <?php
                    $counter = 0;
                    foreach ($right_block_footer['buttons_footer'] as $button) {
                        $counter++;
                        if ($counter == 1) {
                    ?>
                            <div class="row">
                                <button class="btn btn-primary col-12 col-lg-6 col-md-6 messenger" style="background-color: <?php echo $button['button_color'] ?>">
                                    <svg class="float-left" width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#<?php echo $button['name_svg_button'] ?>"></use>
                                    </svg>
                                    <?php echo $button['button_text'] ?></button>
                                <?}else if($counter == 2) {?>
                                <button class="btn btn-primary col-12 col-lg-6 col-md-6 messenger" style="background-color: <?php echo $button['button_color'] ?>">
                                    <svg class="float-left" width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#<?php echo $button['name_svg_button'] ?>"></use>
                                    </svg>
                                    <?php echo $button['button_text'] ?></button>
                            </div>
                            <? $counter = 0;}?>
                            <?if($button == end($right_block_footer['buttons_footer']) && $counter == 1){?>
                </div>
            <?php } ?>
        <?php } ?>

        <div class="row information">
            <p> <a href="tel:<? echo get_option('theme_phone_number'); ?>">
                    <? echo get_option('theme_phone_number'); ?>
                </a>
                <span>|</span>
                <a href="mailto:<? echo get_option('theme_email'); ?>">
                    <? echo get_option('theme_email'); ?>
                </a>
                <br> © 2020, Qlean
                <br> Нажимая кнопку «Оформить заказ» я соглашаюсь<br> c
                <a href="#">условиями обработки данных</a> и ознакомлен<br> с
                <a href="#">пользовательским соглашением</a>
            </p>
        </div>

            </div>
            </div>
            </div>
        </footer>

    <?php }
} else if ($footer_type == 'modify') { ?>
    <footer class="container-fluid big_footer" id="footer">
        <div class="row footer_services_top">
            <div class="col-6 footer_services">
                <div class="footer_services_header">
                    <div class="col-12">
                        <h5 class="footer_services_heading">Услуги</h5>
                    </div>
                </div>
                <div class="footer_sevices_menu">
                    <ul class="nav flex-column col-6 float-left left_menu_services">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Поддерживающая уборка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Генеральная уборка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мытьё окон</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">После ремонта</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Загородные дома</a>
                        </li>
                    </ul>
                    <ul class="nav flex-column col-6 float-left right_menu_services">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Поддерживающая уборка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Генеральная уборка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мытьё окон</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">После ремонта</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Загородные дома</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-3 footer_about_service">
                <div class="footer_about_service_header">
                    <div class="col-12">
                        <h5 class="footer_about_service_heading">О сервисе</h5>
                    </div>
                </div>
                <div class="footer_about_service_menu">
                    <ul class="nav flex-column col-6">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Вопросы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Цены</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Вакансии</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-3 footer_for_cleaners">
                <div class="footer_for_cleaners_header">
                    <div class="col-12">
                        <h5 class="footer_for_cleaners_heading">Клинерам</h5>
                    </div>
                </div>
                <div class="footer_for_cleaners_menu">
                    <ul class="nav flex-column col-12">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Стать клинером</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row footer_sub_menu">
            <div class="col-12">
                <div class="underline clearfix">
                    <div class="col-4 footer_we_work_in_menu">
                        <span class="we_work_in_content">Мы работаем в:
                            <a href="#">Москве,</a>
                            <a href="#">Санкт-Петербурге</a>
                        </span>
                    </div>
                    <div class="col-4 footer_type_flat_menu">
                        <span class="we_type_flat_content">Типы квартир:
                            <a href="#">Однокомнатная,</a>
                            <a href="#">Двухкомнатная,</a>
                            <a href="#">Трехкомнатная,</a>
                            <a href="#">Четырехкомнатная</a>
                        </span>
                    </div>
                    <div class="col-4 footer_use_conditions_menu">
                        <div class="footer_use_conditions_menu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Условие использования Сервиса</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Карта сайта</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer_feedback">
            <div class="row footer_feedback_top">
                <span class="col-2 footer_e-mail">© 2020, Qlean
                    feedback@qlean.ru</span>
                <span class="col-2 footer_phone">8 (800) 500-56-38</span>
                <div class="col-2 footer_sk_participant"><img src="<?php echo (get_stylesheet_directory_uri() . '/img/sk_participant_logo.png'); ?>"></div>
                <div class="col-2 footer_social_network_mini">
                    <div class="footer_social_ico">
                        <svg class="facebook" width="24" height="24">
                            <use href="#facebook"></use>
                        </svg>
                    </div>
                    <div class="footer_social_ico">
                        <svg class="vk" width="24" height="24">
                            <use href="#vk"></use>
                        </svg>
                    </div>
                    <div class="footer_social_ico">
                        <svg class="instagram" width="24" height="24">
                            <use href="#instagram"></use>
                        </svg>
                    </div>
                </div>
                <div class="col-4 footer_app">
                    <a href="http://googleplay.com">
                        <div class="googleplay_button clearfix">
                            <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="27" height="30">
                                <use href="#playmarket_logo"></use>
                            </svg>
                            <div class="text float-left">

                                <p>Доступно в</p>
                                <p>Google Play</p>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.apple.com/app-store/">
                        <div class="appstore_button clearfix">
                            <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="24" height="30">
                                <use href="#appstore_logo"></use>
                            </svg>
                            <div class="text float-left">
                                <p>Загрузите в</p>
                                <p>App Store</p>
                            </div>
                        </div>
                    </a>



                </div>

            </div>
            <div class="row footer_feedback_bottom">
                <div class="col-12 footer_header_feedback_bottom">
                    <h3 class="feedback_bottom_title">Ответим на ваши вопросы</h3>

                    <div class="footer_social_network clearfix">
                        <div class="col-3 footer_telegram">
                            <a class="footer_social_network_ico" href="#">
                                <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="24" height="30">
                                    <use href="#telegram"></use>
                                </svg>
                                Telegram
                            </a>
                        </div>
                        <div class="col-3 footer_messenger">
                            <a class="footer_social_network_ico" href="#">
                                <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                                    <use href="#messenger"></use>
                                </svg>
                                Messenger
                            </a>
                        </div>
                        <div class="col-3 footer_vk">
                            <a class="footer_social_network_ico" href="#">
                                <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="24" height="30">
                                    <use href="#vk"></use>
                                </svg>
                                Вконтакте
                            </a>
                        </div>
                        <div class="col-3 footer_viber">
                            <a class="footer_social_network_ico" href="#">
                                <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="24" height="30">
                                    <use href="#viber"></use>
                                </svg>
                                Viber
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="row footer_bottom_text">
            <span class="col-12">
                Начиная использовать Сервис (его отдельные функциональности), вы принимаете <a href="#">Пользовательское соглашение</a> и подтверждаете, что ознакомлены с <a href="#">Политикой конфиденциальности</a>.
            </span>
        </div>

    </footer>

<?php }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
<script src="<? echo get_template_directory_uri()?>/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js " type="text/javascript "></script>
<script src="<?echo get_template_directory_uri()?>/js/qlean_scripts.js"></script>

<script>
    var header = document.getElementById('header');

    function header_fixed() {
        if ($(window).scrollTop() > header.clientHeight / 2) {
            if (header.style.position != 'fixed') {
                header.style.position = 'fixed';
                document.body.style.paddingTop = header.clientHeight + 'px';
                header.style.marginTop = -header.clientHeight * 1.5 + 'px';
            }
        } else {
            header.style.position = 'relative';
            document.body.style.paddingTop = '0px';
            header.style.marginTop = '0px';
        }

    }

    var price = document.getElementById('priceAccordion');
    var form = document.getElementById('bottom_form');
    var footer = document.getElementById('footer');

    if (form != null && price != null && footer != null) {
        var coord_form = form.getBoundingClientRect().bottom + window.pageYOffset - window.innerHeight;
        var coord_price = price.getBoundingClientRect().top + window.pageYOffset - window.innerHeight;
        var coord_footer = footer.getBoundingClientRect().top + window.pageYOffset - window.innerHeight;
    }

    function bottom_form_fixed() {


        if (($('#footer').offset().top < $(window).scrollTop() + $(window).innerHeight()) ||
            ($('#priceAccordion').offset().top > $(window).scrollTop() + $(window).innerHeight())) {
            $('#bottom_form').css('position', 'static');
        } else {
            if ($(window).scrollTop() + $(window).innerHeight() - $('#priceAccordion').offset().top <= $('#bottom_form').height()) {
                $('#bottom_form').css('bottom',  - $('#bottom_form').height() + $(window).scrollTop() + $(window).innerHeight() - $('#priceAccordion').offset().top);
            } else {
                $('#bottom_form').css('bottom', 0);
            }

            $('#bottom_form').css('position', 'sticky');
        }

    }




    if (header != null) {
        document.addEventListener('scroll', header_fixed);
        document.addEventListener('DOMContentLoaded', header_fixed);
        document.addEventListener('touchmove', header_fixed);
        document.addEventListener('resize', header_fixed);
    }

    if (form != null && price != null && footer != null) {
        document.addEventListener('DOMContentLoaded', bottom_form_fixed);
        window.addEventListener('resize', bottom_form_fixed);
        $('body').bind('touchmove', bottom_form_fixed);
        document.addEventListener('scroll', bottom_form_fixed);
    } else {
        console.log("warning load events");
    }


    $(".mask-phone ").mask("(999) 999 99 99 ");
    var elements = document.getElementsByClassName(".price_accordion_card");
    for (var i = 0; i < elements.length; i++) {
        var amount = elements[i].children[2].children[1].children[1].children[2];
        elements[i].onclick = function() {
            alert(amount);
            alert(elements[i].children(".card_header_amount"));
            amount.html("30");
        };
    }

    let priceAllInt = 0;

    $('.card_body_button_plus').click(function() {
        var card_body_price_span_attr = $(this).parent('.card_body_collapse').find('.card_body_price').find('span').attr('value');
        var card_body_price_span = $(this).parent('.card_body_collapse').find('.card_body_price').find('span');
        var card_header_amount = card_body_price_span.closest('.price_accordion_card').find(".card_header_amount");
        var card_body_count = $(this).parent('.card_body_collapse').find('.card_body_count');
        var bottom_form_button = $('body').find('.bottom_form_dry_cleaning').find('.btn');

        var value = card_body_price_span_attr;
        var count = card_body_count.html();
        var countAll = card_header_amount.html();

        var valueInt = Number.parseInt(value);
        var countInt = Number.parseInt(count);
        var countAllInt = Number.parseInt(countAll);

        countAllInt++;
        countInt++;
        priceAllInt += valueInt;

        card_header_amount.html(countAllInt);
        card_body_count.html(countInt);
        card_body_price_span.html(valueInt * countInt);
        bottom_form_button.html('Оформить за ' + priceAllInt + 'p.');
    });

    $('.card_body_button_minus').click(function() {
        var card_body_price_span_attr = $(this).parent('.card_body_collapse').find('.card_body_price').find('span').attr('value');
        var card_body_price_span = $(this).parent('.card_body_collapse').find('.card_body_price').find('span');
        var card_header_amount = card_body_price_span.closest('.price_accordion_card').find(".card_header_amount");
        var card_body_count = $(this).parent('.card_body_collapse').find('.card_body_count');
        var bottom_form_button = $('body').find('.bottom_form_dry_cleaning').find('.btn');

        var value = card_body_price_span_attr;
        var count = card_body_count.html();
        var countAll = card_header_amount.html();

        var valueInt = Number.parseInt(value);
        var countInt = Number.parseInt(count);
        var countAllInt = Number.parseInt(countAll);

        countAllInt--;
        countInt--;
        priceAllInt -= valueInt;

        card_header_amount.html(countAllInt);
        card_body_count.html(countInt);
        card_body_price_span.html(valueInt * countInt);

        if (priceAllInt > 0)
            bottom_form_button.html('Оформить за ' + priceAllInt + 'p.');
        else
            bottom_form_button.html('Оформить заказ');

    });

    $('.FAQ .card .card-header .btn').click(function() {
        
        if ($(this).hasClass('close') || !$(this).hasClass('open')) {
            $('.FAQ .card .card-header .btn').removeClass('open');
            $(this).removeClass('close');
            $(this).addClass('open');
        } else {
            $(this).removeClass('open');
            $(this).addClass('close');
        }

    })
    
    
</script>

<?php wp_footer(); ?>

</body>

</html>