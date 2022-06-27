<?/*
Template Name: cleaning

*/

get_header();

?>

<div class="container-fluid submenu_container">
    <div class="row">
        <? wp_nav_menu([
            'menu' => 'submenu_cleaning',
            'menu_class' => 'nav cleaning_sub_menu'
        ]) ?>
    </div>
</div>

<div class="container-fluid top_form_cleaning">
    <div class="row">
        <? $top_form_cleaning = get_field('top_form_cleaning');
        if (!empty($top_form_cleaning)) { ?>
            <? if (!empty($top_form_cleaning['top_form_cleaning_title'])) ?>
            <h1 class="col-12 top_form_cleaning_title cleaning_title"><? echo $top_form_cleaning['top_form_cleaning_title']; ?></h1>
            <? if (!empty($top_form_cleaning['top_form_cleaning_subtitle'])) ?>
            <h2 class="col-12 top_form_cleaning_subtitle cleaning_subtitle"><? echo $top_form_cleaning['top_form_cleaning_subtitle']; ?></h2>

            <? if (!empty($top_form_cleaning['top_form_cleaning_form'])) {
                $top_form_cleaning_form = $top_form_cleaning['top_form_cleaning_form']; ?>
                <form class="top_form_cleaning_form col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="row number_switch d-flex justify-content-between">
                                <input type="button" class="top_form_cleaning_minus_button" value="-">
                                <? if (!empty($top_form_cleaning_form['top_form_cleaning_max_rooms'])) ?>
                                <div class="top_form_cleaning_count_rooms align-self-center"><? echo $top_form_cleaning_form['top_form_cleaning_max_rooms'] ?></div>
                                <input type="button" class="top_form_cleaning_plus_button" value="+">
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="row number_switch d-flex justify-content-between">
                                <input type="button" class="top_form_cleaning_minus_button" value="-">
                                <? if (!empty($top_form_cleaning_form['top_form_cleaning_max_bathrooms'])) ?>
                                <div class="top_form_cleaning_count_bathrooms align-self-center"><? echo $top_form_cleaning_form['top_form_cleaning_max_bathrooms'] ?></div>
                                <input type="button" class="top_form_cleaning_plus_button" value="+">
                            </div>
                        </div>

                        <div class="col-3 d-flex">
                            <input type="tel" class="mask-phone align-items-stretch w-100" placeholder="+7 (900) 000 00 00">
                        </div>

                        <div class="col-3">
                            <div class="row d-flex h-100">
                                <button class="col-12 align-items-stretch">
                                    <? if (!empty($top_form_cleaning_form['top_form_cleaning_button_text']))
                                        echo $top_form_cleaning_form['top_form_cleaning_button_text']; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <? if (!empty($top_form_cleaning['top_form_cleaning_personal_data_text'])) ?>
                <h2 class="col-12 top_form_cleaning_personal_data_text"><? echo $top_form_cleaning['top_form_cleaning_personal_data_text']; ?></h2>
            <? } ?>
        <? } ?>
    </div>
</div>

<? $cleaning_cards_merits = get_field('cleaning_cards_merits');
if (!empty($cleaning_cards_merits)) { ?>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 cards_merits">
                <?
                $max_num_col = 4; // max num col in one row
                $counter_start = $max_num_col;
                $counter_end = 0;
                foreach ($cleaning_cards_merits as $card_merits) {
                    if ($counter_start == $max_num_col) {
                        echo '<div class="row">';
                        $counter_start = 0;
                    }
                ?>
                    <div class="card col-3 card_merits">
                        <div class="card-body justify-content-start">
                            <svg width="25" height="25" class="card_svg card-img-top">
                                <use href="#<? echo $card_merits['id_svg'] ?>"></use>
                            </svg>
                            <h5 class="card-title"><? echo $card_merits['cleaning_card_merits_title'] ?></h5>
                            <p class="card-text"><? echo $card_merits['cleaning_card_merits_text'] ?></p>
                        </div>
                    </div>
                <?
                    $counter_start++;
                    $counter_end++;
                    if ($counter_end == $max_num_col) {
                        echo '</div>';
                        $counter_end = 0;
                    } // end row  
                } ?>
            </div>
        </div>
    </div>

<? } ?>

<? $steps_order_cleaning = get_field('steps_order_cleaning');
if (!empty($steps_order_cleaning)) { ?>

    <div class="container-fluid">
        <div class="row">
            <h2 class="col-12 cleaning_title">
                <? echo $steps_order_cleaning['steps_order_cleaning_title']; ?>
            </h2>
        </div>
        <div class="row">
            <? $steps_order_cleaning_cards = $steps_order_cleaning['steps_order_cleaning_cards'];
            foreach ($steps_order_cleaning_cards as $card_step) { ?>
                <div class="card col-4 steps_order_cleaning_card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <? echo $card_step['steps_order_cleaning_card_title']; ?>
                        </h5>
                        <p class="card-text">
                            <? echo $card_step['steps_order_cleaning_card_text']; ?>
                        </p>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>

<? } ?>



<? $cleaning_what_included = get_field('cleaning_what_included');
if (!empty($cleaning_what_included)) { ?>
    <div class="container-fluid">
        <div class="row">
            <h2 class="cleaning_title col-12"><? echo $cleaning_what_included['cleaning_what_included_title']; ?></h2>
            <h3 class="cleaning_subtitle  cleaning_what_included_subtitle col-12"><? echo $cleaning_what_included['cleaning_what_included_subtitle']; ?></h2>
        </div>
        <?
        $cleaning_what_included_sections = $cleaning_what_included['cleaning_what_included_sections'];
        foreach ($cleaning_what_included_sections as $section) { ?>
            <div class="row cleaning_what_included_section">
                <div class="col-4 cleaning_what_included_section_title">
                    <div class="row">
                        <h3 class="col-12"><? echo $section['cleaning_what_included_section_title']; ?></h3>
                    </div>
                    <div class="row">
                        <img src="<? echo $section['cleaning_what_included_section_img']; ?>" alt="" class="cleaning_what_included_section_img">
                    </div>
                </div>
                <?
                $cleaning_what_included_section_enabled = $section['cleaning_what_included_section_enabled'];
                $cleaning_what_included_section_can_add = $section['cleaning_what_included_section_can_add']; ?>

                <div class="col-4">
                    <h5 class="col-12 cleaning_what_included_section_list_enabled_title">Входит в стоимость</h5>
                    <ul class="col-12 cleaning_what_included_section_list_enabled">
                        <?
                        foreach ($cleaning_what_included_section_enabled as $enabled) {
                        ?>
                            <li class="d-flex justify-content-start"><? echo $enabled['cleaning_what_included_section_enabled_text']; ?>
                                <svg width='25' height="25" class="ml-auto">
                                    <use href="#question"></use>
                                </svg>
                            </li>
                        <? } ?>
                    </ul>
                </div>

                <div class="col-4">
                    <h5 class="col-12 cleaning_what_included_section_list_add_title">Можно добавить</h5>
                    <ul class="col-12 cleaning_what_included_section_list_add">
                        <? foreach ($cleaning_what_included_section_can_add as $can_add) {
                        ?>
                            <li class="d-flex justify-content-start"><? echo $can_add['cleaning_what_included_section_can_add_text']; ?>
                                <svg width="25" height="25" class="ml-auto">
                                    <use href="#question"></use>
                                </svg>
                            </li>
                        <? } ?>
                    </ul>
                </div>
            </div>

        <? } ?>
    </div>

<? } ?>


<? $cleaning_not_included = get_field('cleaning_not_included');
if (!empty($cleaning_not_included)) { ?>
    <div class="container-fluid">
        <div class="row">
            <h2 class="cleaning_title col-12"><? echo $cleaning_not_included['cleaning_not_included_title']; ?></h2>
            <h3 class="cleaning_subtitle col-12 cleaning_not_included_subtitle"><? echo $cleaning_not_included['cleaning_not_included_subtitle']; ?></h2>
        </div>
    </div>


    <div class="cleaning_not_included_services">
        <?
        $cleaning_not_included_services = $cleaning_not_included['cleaning_not_included_services'];
        $max_col = 3;
        $counter_row_start = $max_col;
        $counter_row_end = 0;

        foreach ($cleaning_not_included_services as $service) {
            if ($counter_row_start == $max_col) {
                echo "<div class='row cleaning_not_included_service_row'>";
                $counter_row_start = 0;
            }
        ?>
            <div class="col-4 cleaning_not_included_service">
                <div class="row">
                    <div class="col-12">
                        <p><? echo $service['cleaning_not_included_service_text']; ?></p>
                    </div>
                </div>
            </div>

            <? $counter_row_start++;
            $counter_row_end++;
            if ($counter_row_end == $max_col) {
                echo "</div>"; // end row
                $counter_row_end = 0;
            }
            ?>

        <? } ?>

    </div>
    <div class="row d-flex justify-content-center">
        <button class="btn cleaning_not_included_services_button">
            <? echo $cleaning_not_included['cleaning_not_included_services_button_text']; ?>
        </button>
    </div>


<? } ?>


<? $cleaning_cost = get_field('cleaning_cost');
if (!empty($cleaning_cost)) { ?>

    <div class="container-fluid">
        <div class="row">
            <h2 class="col-12 cleaning_title"><? echo $cleaning_cost['cleaning_cost_title']; ?></h2>
            <h3 class="col-12 cleaning_subtitle cleaning_cost_subtitle"><? echo $cleaning_cost['cleaning_cost_subtitle']; ?></h3>
        </div>
        <div class="row">
            <? $cleaning_cost_prices = $cleaning_cost['cleaning_cost_prices'];
            foreach ($cleaning_cost_prices as $prices) { ?>
                <div class="card cleaning_cost_price_card col-4">
                    <div class="card-body">
                        <div class="card-title"><? echo $prices['cleaning_cost_price_text']; ?></div>
                        <div class="card-text"><? echo $prices['cleaning_cost_price']; ?></div>
                    </div>
                </div>
            <? } ?>
        </div>
        <div class="row">
            <p class="col-12 text-center cleaning_cost_tip"><? echo $cleaning_cost['cleaning_cost_tip']; ?></p>
        </div>
    </div>


<? } ?>



<? $cleaning_disinfection = get_field('cleaning_disinfection');
if (!empty($cleaning_disinfection)) { ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <h2 class="cleaning_title cleaning_disinfection_title col-12">
                        <? echo $cleaning_disinfection['cleaning_disinfection_title']; ?>
                    </h2>
                </div>
                <div class="row">
                    <button class="btn btn-primary cleaning_disinfection_button"><? echo $cleaning_disinfection['cleaning_disinfection_button_text']; ?></button>
                </div>
            </div>

            <div class="col-8">
                <?
                $cleaning_disinfection_informations = $cleaning_disinfection['cleaning_disinfection_informations'];
                foreach ($cleaning_disinfection_informations as $information) {
                ?>
                    <div class="row">
                        <h5 class="col-12 cleaning_disinfection_informations_paragraph_title"><? echo $information['cleaning_disinfection_informations_paragraph_title']; ?></h5>
                        <p class="col-12 cleaning_disinfection_informations_paragraph_text"><? echo $information['cleaning_disinfection_informations_paragraph_text']; ?></p>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>

<? } ?>


<? $cleaning_security_measures = get_field('cleaning_security_measures');
if (!empty($cleaning_security_measures)) { ?>

    <div class="container-fluid">
        <div class="row">
            <h2 class="col-12 cleaning_title"><? echo $cleaning_security_measures['cleaning_security_measures_title']; ?></h2>
            <h3 class="col-12 cleaning_subtitle cleaning_security_measures_subtitle"><? echo $cleaning_security_measures['cleaning_security_measures_subtitle']; ?></h3>
        </div>
        <div class="row">
            <? $cleaning_security_measures_cards = $cleaning_security_measures['cleaning_security_measures_cards'];
            foreach ($cleaning_security_measures_cards as $measure) { ?>
                <div class="card cleaning_security_measures_card col-4">
                    <div class="card-body">
                        <div class="card-title"><? echo $measure['cleaning_security_measures_card_title']; ?></div>
                        <div class="card-text"><? echo $measure['cleaning_security_measures_card_text']; ?></div>
                    </div>
                </div>
            <? } ?>
        </div>
        <div class="row d-flex justify-content-center">
            <a href="#"><button class="btn btn-primary cleaning_security_measures_button"><? echo $cleaning_security_measures['cleaning_security_measures_button_text']; ?></button></a>
        </div>
    </div>


<? } ?>


<? $cleaning_proven_cleaners = get_field('cleaning_proven_cleaners');
if (!empty($cleaning_proven_cleaners)) { ?>

    <div class="container-fluid">
        <div class="row">
            <h2 class="col-12 cleaning_title"><? echo $cleaning_proven_cleaners['cleaning_proven_cleaners_title']; ?></h2>
            <h3 class="col-12 cleaning_subtitle cleaning_proven_cleaners_subtitle"><? echo $cleaning_proven_cleaners['cleaning_proven_cleaners_subtitle']; ?></h3>
        </div>
        <div class="row">
            <? $cleaning_proven_cleaners_cards = $cleaning_proven_cleaners['cleaning_proven_cleaners_cards'];
            foreach ($cleaning_proven_cleaners_cards as $cleaner) { ?>
                <div class="card cleaning_proven_cleaners_card col-3">
                    <img src="<? echo $cleaner['cleaning_proven_cleaners_card_img']; ?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><? echo $cleaner['cleaning_proven_cleaners_card_name']; ?></h5>
                        <div class="card-text d-flex justify-content-start">
                            <svg width="20" height="21">
                                <use href="#star"></use>
                            </svg>
                            <? echo $cleaner['cleaning_proven_cleaners_card_rating']; ?>
                            <? echo $cleaner['cleaning_proven_cleaners_card_quantity']; ?>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>


<? } ?>


<? $cleaning_ratings_and_reviews = get_field('cleaning_ratings_and_reviews');
if (!empty($cleaning_ratings_and_reviews)) { ?>

    <div class="container-fluid">
        <div class="row">
            <h2 class="col-12 cleaning_title"><? echo $cleaning_ratings_and_reviews['cleaning_ratings_and_reviews_title']; ?></h2>
            <h3 class="col-12 cleaning_subtitle cleaning_ratings_and_reviews_subtitle"><? echo $cleaning_ratings_and_reviews['cleaning_ratings_and_reviews_subtitle']; ?></h3>
        </div>
        <div class="row">
            <? $cleaning_ratings_and_reviews_cards = $cleaning_ratings_and_reviews['cleaning_ratings_and_reviews_cards'];
            foreach ($cleaning_ratings_and_reviews_cards as $col) { ?>
                <div class="cleaning_ratings_and_reviews_col col-4">
                    <?
                    $cleaning_ratings_and_reviews_col = $col['cleaning_ratings_and_reviews_cards_col'];
                    foreach ($cleaning_ratings_and_reviews_col as $cleaner) { ?>
                        <div class="card cleaning_ratings_and_reviews_card col-12">
                            <div class="card-body">
                                <h5 class="card-title card-text d-flex justify-content-start">
                                    <svg width="20" height="21" class="align-self-center">
                                        <use href="#star_green"></use>
                                    </svg>
                                    <span class="cleaning_ratings_and_reviews_card_rating align-self-center">
                                        <? echo $cleaner['cleaning_ratings_and_reviews_card_rating']; ?>
                                    </span>
                                    <span class="cleaning_ratings_and_reviews_card_name align-self-center">
                                        <? echo $cleaner['cleaning_ratings_and_reviews_card_name']; ?>
                                    </span>
                                </h5>
                                <div class="card-text cleaning_ratings_and_reviews_card_review">
                                    <? echo $cleaner['cleaning_ratings_and_reviews_card_review']; ?>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            <? } ?>
        </div>
    </div>


<? } ?>


<? $post = get_post(get_field('cleaning_type_of_faq')); // FAQ cleaning
if (!empty($post)) { ?>
    <div class="row d-flex justify-content-center">
        <? setup_postdata($post);
        $faq_title = get_field("faq_title");
        if (!empty($faq_title)) { ?>
            <h2 class="col-12 cleaning_title cleaning_faq_title"><? echo $faq_title ?></h2>
        <? } ?>

        <? $FAQ_sections = get_field("FAQ_sections");
        if (!empty($FAQ_sections)) {
            $questions_and_answers = $FAQ_sections[0]['questions_and_answers'];
            $counter = 0; ?>
            <div class="cleaning_faq_accordion accordion " id="accordionCleaning">
                <? foreach ($questions_and_answers as $question) {
                ?>
                    <div class="card">
                        <div class="card-header" id="heading<? echo $counter; ?>">
                            <h5 class="mb-0">
                                <button class="btn btn-link col-12 d-flex justify-content-left cleaning_faq_accordion_button"  type="button" data-toggle="collapse" data-target="#collapse<? echo $counter; ?>" aria-expanded="<?if($counter == 0) echo 'true'; else echo 'false';?>" aria-controls="collapse<? echo $counter; ?>">
                                    <? echo $question['question']; ?>
                                    <span class="ml-auto align-self-center cleaning_faq_accordion_arrow <?if($counter == 0) echo 'cleaning_faq_accordion_arrow_default_open';?>"></span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapse<? echo $counter; ?>" class="collapse <?if($counter == 0) echo 'show';?>" aria-labelledby="heading<? echo $counter; ?>" data-parent="#accordionCleaning">
                            <div class="card-body">
                                <?
                                $answer = $question['answer'];
                                foreach ($answer as $p) { ?>
                                    <p><? echo $p['answer_paragraph'];?></p>
                                <?
                                }
                                ?>
                            </div>
                        </div>
                    </div>


                    <? $counter++; ?>
                <? } ?>
            </div>
        <? } ?>

    </div>

    <?wp_reset_postdata();?>
<? } ?>


<? get_footer(); ?>