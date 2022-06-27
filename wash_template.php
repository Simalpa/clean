<?php
/*
Template Name: washing
 */


get_header();
?>
<?php
$top_form = get_field('top_form');
if ($top_form) {
?>
    <div class="top_form container-fluid" style="background-image: url('<?php echo esc_url($top_form['background_img_top']['url']); ?>');">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center text-lg-left">
                            <?
                            
                            echo $top_form["header_form_title"];?>
                        </h1>
                        <div class="container-fluid">
                            <div class="row price no-gutters">
                                <?php
                                $price_services_top_form = $top_form['price_services_top_form'];
                                if(is_array($price_services_top_form))
                                foreach ($price_services_top_form as $price_services) {
                                ?>

                                    <div class="col-10">
                                        <p class="card-text">
                                            <? echo $price_services['information_about_price']['name_price'];?>
                                        </p>
                                    </div>
                                    <div class="col-2 text-right">
                                        <p class="card-text">
                                            <? echo $price_services['information_about_price']['price'];?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row delivery_price no-gutters">
                                <?php $price_delivery_top_form = $top_form['price_delivery_top_form'];
                                foreach ($price_delivery_top_form as $price_services) {
                                ?>
                                    <div class="col-12">
                                        <p class="card-text">
                                            <? echo $price_services['information_about_price']['name_price']." ".$price_services['information_about_price']['price'];?>
                                        </p>
                                    </div>
                                <?php }
                                ?>
                            </div>
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text text-center">+7</div>
                                            </div>
                                            <input type="tel" class="form-control mask-phone" placeholder="(900) 000 00 00">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2"><?php echo $top_form["text_button_send_phone"]; ?></button>
                                </div>
                            </form>
                            <div class="col-12 information">
                                <p class="card-text">Мы заботимся о вашем здоровье, поэтому ввели дополнительные меры безопасности.
                                    <a href="#"> Подробнее</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?}?>
<div class="container-fluid garanties">
    <div class="row">
        <?php if (have_rows("garanties")) {
            while (have_rows("garanties")) {
                the_row();
        ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body row">
                            <svg class="col-4" width="55" height="58" viewBox="0 0 55 58" xmlns="http://www.w3.org/2000/svg">
                                <use href="#<?php echo get_sub_field("img_garanties"); ?>"></use>
                            </svg>
                            <div class="col-8 content-card">
                                <h1 class="card-title">
                                    <?php echo get_sub_field("header_garanties_title"); ?>
                                </h1>
                                <p class="card-text">
                                    <?php echo get_sub_field("information_garanties"); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        }?>
    </div>
</div>


<?php
$phone_app = get_field('phone_app');
if ($phone_app) {
    $phone_app_id = $phone_app->ID;
    ?>
    <div class="container-fluid phone_app clearfix">
    <div class="row">
        <div class="col-lg-7 col-12 information">
                    <h2 class="main_header text-lg-left text-center"><?php echo $phone_app->post_title; ?></h2>
                    <div class="app_functies">
                        <?php if (have_rows('opportunities',  $phone_app_id)) {
                            while (have_rows('opportunities',  $phone_app_id)) {
                                the_row(); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22">
                                    <use href="#checkmark"></use>
                                </svg>

                                <p><?php echo get_sub_field('description_opportunity'); ?></p><br>
                        <?php }
                        } ?>
                    </div>

            <div class="app_markets mx-auto mx-lg-0">
                <a href="https://www.apple.com/app-store/">
                    <div class="appstore_ico">
                        <svg width="24" height="30">
                            <use href="#appstore_logo"></use>
                        </svg>
                    </div>
                </a>
                <div class="line"></div>
                <a href="http://www.googleplay.com">
                    <div class="playmarket_ico">
                        <svg width="27" height="30">
                            <use href="#playmarket_logo"></use>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-5 phone_image">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="360" height="480">
                <use href="#phone"></use>
            </svg></div>
    </div>
</div>
<?php }?>


<?php
$subscription_field = get_field('subscription_washing');
if ($subscription_field) {
?>
    <div class="container-fluid subscribtion">
        <div class="row">
            <div class="col-12">
                <h2 class="main_header"><?php echo $subscription_field['header_subscription_title']; ?></h2>
                <h3 class="main_header_min"><?php echo $subscription_field['header_subscription_subtitle']; ?>
                </h3>
            </div>
        </div>

        <div class="row justify-content-center">
        <?php $card_subscription = $subscription_field['cards_subscription'];
         if(is_array($card_subscription))
        foreach ($card_subscription as $card) {
        ?>
            <div class="card col-12 card_select">
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title text-center">
                        <?php echo $card['header_card_title'];?>
                    </h2>
                    <div class="properties row">
                   <?php 
                   $card_paragraph = $card['card_paragraph'];
                   if(is_array($card_paragraph))
                   foreach ($card_paragraph as $paragraph) {
                       ?>
                        <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="22">
                                <use href="#<?php echo $paragraph['card_name_svg'];?>"></use>
                            </svg></div>
                        <div class="col-10">
                            <p class="card-text"><?php echo $paragraph['text_paragraph'];?></p>
                        </div>
                   <?php }?>
                    </div>
                    <a href="#" class="btn btn-primary mt-auto"><?php echo $card['card_text_button'];?></a>
                </div>

            </div>
                   <?php }?>
        </div>
        <div class="row justify-content-center"><button class="btn btn-outline-success">Химчистка для подписок
                дешевле</button></div>
    </div>
<?php } ?>

<?php
$subscription_field = get_field('special_offer_washing');
if ($subscription_field) {
?>
<div class="container-fluid special_offer">
    <div class="row justify-content-center">
        <div class="col-12">
        <h2 class="main_header"><?php echo $subscription_field['header_subscription_title']; ?></h2>
        <h3 class="main_header_min"><?php echo $subscription_field['header_subscription_subtitle']; ?></h3>
        </div>
    </div>
    <div class="row justify-content-center">
    <?php $card_subscription = $subscription_field['cards_subscription'];
    if(is_array($card_subscription))
        foreach ($card_subscription as $card) {
        ?>
        <div class="card card_select">
            <div class="card-body d-flex flex-column">
                <h2 class="card-title text-center">
                <?php echo $card['header_card_title'];?>
                </h2>
                <div class="properties row">
                <?php 
                   $card_paragraph = $card['card_paragraph'];
                   if(is_array($card_paragraph))
                   foreach ($card_paragraph as $paragraph) {
                       ?>
                    <div class="col-2"><svg viewBox="0 0 22 30" xmlns="http://www.w3.org/2000/svg" width="22" height="30">
                            <use href="#<?php echo $paragraph['card_name_svg'];?>"></use>
                        </svg></div>
                    <div class="col-10">
                        <p class="card-text"><?php echo $paragraph['text_paragraph'];?></p>
                    </div>
                   <?php }?>
                </div>
                <a href="#" class="btn btn-primary mt-auto"><?php echo $card['card_text_button'];?></a>
            </div>
        </div>

        <? }?>
    </div>
</div>
</div>

<?php }?>

<? $what_we_can_do = get_field('what_we_can_do');
/*echo '<pre>';
var_dump($what_we_can_do);
echo '</pre>';*/
?>

<!-- <div class="container-fluid skills">
	<div class="row d-flex justify-content-center">
		<div class="col-12">
			<h2 class="main_header">
				<? echo $what_we_can_do['header_title_for_slider']; ?>
			</h2>
		</div>
		<ul class="nav nav-pills w-100" id="pill-tabs" role="tablist">
			<? for($i=0;$i< count($what_we_can_do['slides']);$i++){?>
				<li class="nav-item col-4">
					<a class="nav-link active" id="pills-shirt-tab" data-toggle="pill" href="#pills-<? echo $i?>" role="tab" aria-controls="pills-shirt" aria-selected="true">
						<? //echo $el['title']; ?></a>
					</li>
					<?}?>
				</ul>
					<?php $what_we_can_do = get_field('what_we_can_do');
					?>			
					<div class="col-12 tab-pane fade show active shirt_panel" id="pills-shirt" role="tabpanel" aria-labelledby="pills-shirt-tab"
					style="background-image: url('<?php echo esc_url($what_we_can_do[0]['слайд']['url']);?>');">
					<div class="tab_description float-left">
						<div class="tab_point"></div>
						<div class="tab_description_content float-left">
							<h5 class="tab_description_title">Отглажеваем воротнички и манжеты</h5>
							<span class="tab_description_text">
								Профессиональное оборудование из Германии, Италии и Франции гладит под управлением компьютера.
							</span>
						</div>
					</div>
				</div>
					<div class="tab_description float-left">
						<div class="tab_point"></div>
						<div class="tab_description_content float-left">
							<h5 class="tab_description_title">Сохраняем цвет</h5>
							<span class="tab_description_text">
								Используем итальянские и французские профессиональные чистящие средства, которые берегут красители.
							</span>
						</div>
					</div>
					<div class="tab_description">
						<div class="tab_description_content">
							<h5 class="tab_description_title">Выводим сложные пятна</h5>
							<span class="tab_description_text">
								Химию подбирает технолог, который регулярно стажируется у производителей.
							</span>
						</div>
						<div class="tab_point"></div>
					</div>
				<div class="col-12 tab-pane fade things_panel" id="pills-things" role="tabpanel" aria-labelledby="pills-things-tab"
				style="background-image: url('<?php echo esc_url($what_we_can_do[1]['слайд']['url']);?>');">
				<div class="tab_description float-left">
					<div class="tab_point"></div>
					<div class="tab_description_content float-left">
						<h5 class="tab_description_title">Сохраняем цвет</h5>
						<span class="tab_description_text">
							Используем итальянские и французские профессиональные чистящие средства, которые берегут красители
						</span>
					</div>
				</div>
				<div class="tab_description float-left">
					<div class="tab_point"></div>
					<div class="tab_description_content float-left">
						<h5 class="tab_description_title">Выводим сложные пятна</h5>
						<span class="tab_description_text">
							Химию подбирает технолог, который регулярно стажируется у производителей
						</span>
					</div>
				</div>
				<div class="tab_description">
					<div class="tab_description_content">
						<h5 class="tab_description_title">Гладим безопасно для ткани</h5>
						<span class="tab_description_text">
							Оборудование из Германии, Италии и Франции гладит под управлением компьютера.
						</span>
					</div>
					<div class="tab_point"></div>
				</div>
			</div>
			<div class="col-12 tab-pane fade drycleaning_panel" id="pills-drycleaning" role="tabpanel" aria-labelledby="pills-drycleaning-tab"
			style="background-image: url('<?php echo esc_url($what_we_can_do[2]['слайд']['url']);?>');">
			<div class="drycleaning_note">
				<h4 class="drycleaning_note_title">Когда нужна химчистка?</h4>
				<div class="drycleaning_note_text">
					<p>Ее используют для деликатных тканей, кожи, меха и другого, что не любит воду, и еще для выведения сложных пятен.</p>
					<p>Химчистка не использует воду. Вместо водных растворов моющих средств — органические растворители.</p>
				</div>
			</div>
			<div class="tab_label_drycleaning">
				<div class="tab_description float-left">
					<div class="tab_point"></div>
					<div class="tab_description_content float-left">
						<h5 class="tab_description_title">Сложные случаи</h5>
						<span class="tab_description_text">
							Если химчистка может повредить вещь, технолог свяжется с вами, чтобы уточнить — рисковать или нет
						</span>
					</div>
				</div>
				<div class="tab_description float-left">
					<div class="tab_point"></div>
					<div class="tab_description_content float-left">
						<h5 class="tab_description_title">Деликатные ткани</h5>
						<span class="tab_description_text">
							Например, шерсть, шелк, вискоза, органза, кружева, ворсистые ткани, некоторая синтетика
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
</div> -->



<div class="container-fluid skills">
	<div class="row d-flex justify-content-center">
		<div class="col-12">
			<h2 class="main_header">
				<? echo $what_we_can_do['header_title_for_slider']; ?>
			</h2>
		</div>


		<ul class="nav nav-pills w-100" id="pill-tabs" role="tablist">
			<? for($i=0;$i< count($what_we_can_do['slides']);$i++){?>
				<li class="nav-item col-4 ">
							<a class="nav-link <?if($i == 0) echo 'active';?>" id="pills-<? echo $i?>-tab" data-toggle="pill" href="#pills-<? echo $i?>" role="tab" aria-controls="pills-<? echo $i?>" aria-selected="true">
						<? echo $what_we_can_do['slides'][$i]['title']; ?></a>
				</li>
				<?}?>

		</ul>

        <div class="col-12 tab-content" id="pills-tabContent">
        <? for($i=0;$i< count($what_we_can_do['slides']);$i++){?>
        <div class="col-12 tab-pane fade show <?if($i == 0) echo 'active';?> slide_panel" id="pills-<? echo $i;?>" role="tabpanel" aria-labelledby="pills-<? echo $i?>-tab"
					style="background-image: url('<?php echo esc_url($what_we_can_do['slides'][$i]['slide_img']['url']);?>');">
                    <? $points = $what_we_can_do['slides'][$i]['point'];
                   // echo '<pre>';
                   // var_dump($what_we_can_do['slides'][$i]['point']);
                   // echo '</pre>';
                    ?>

                    <? for($j=0; $j < count($points); $j++){?>
                    <div class="tab_description float-left">
                    
						<div class="tab_point" style="left:<? echo $points[$j]['position']['distance_from_center_for_point']; ?>px;
                        top:<? echo $points[$j]['position']['distance_from_top_for_point']; ?>px;"></div>
						<div class="tab_description_content float-left" style="left:<? echo $points[$j]['position']['distance_from_center_for_text']; ?>px;
                        top:<? echo $points[$j]['position']['distance_from_top_for_text']; ?>px;">
							<h5 class="tab_description_title"><? echo $points[$j]['header_title'];?></h5>
							<span class="tab_description_text">
                            <? echo $points[$j]['text'];?>
							</span>
						</div>
					</div>
                    <?}?>
        </div>
        <? }?>
        </div>


		</div>
</div>
<div class="skills_card container-fluid ">

        <div class="row justify-content-center text-center cards">
            <div class="card col-4">
                <div class="card-body">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="85" height="93" viewBox="0 0 85 93">
                        <path fill="#20A052"
                            d="M72 43.8c5.9 8.8 8 13.6 8 22.9 0 10.2-3 16-13.6 26l-.3.3H31.4l-.3-.3c-7.9-7.5-11.5-12.6-12.9-19C11.1 71 6 64.1 6 56c0-10.5 8.5-19 19-19 1.6 0 3.2.2 4.8.6 2.7-4.7 4-8.8 4.2-14.6h-3c-2.2 0-4-1.8-4-4v-5c0-2.2 1.8-4 4-4h5V5.3C36 2.4 38.4 0 41.3 0h14.4C58.6 0 61 2.4 61 5.3V10h5c2.2 0 4 1.8 4 4v5c0 2.2-1.8 4-4 4h-2c.3 8.1 2.7 12.9 8 20.8zM9.4 62c2.1 5.5 7 9.5 13.2 10.6.1.1.2.1.3.1.3 0 .6.1.9.1h1.3c.4 0 .8-.1 1.2-.1h.2c.4 0 .7 0 1.1-.1.1-.1.3-.1.4-.1.3 0 .7-.1 1-.2.1 0 .3-.1.4-.1.4-.1.7-.2 1.1-.3.1 0 .1-.1.2-.1 6.4-2.3 11-8.5 11-15.7v-1.4c0-.3-.1-.6-.1-.9 0-.2-.1-.4-.1-.6-.1-.3-.1-.6-.2-.9 0-.1-.1-.3-.1-.4-1.9-7.2-8.4-12.5-16.2-12.5-9.2 0-16.7 7.5-16.7 16.7v1.4c0 .3.1.5.1.8 0 .2.1.4.1.6.2 1 .5 2 .8 2.9 0 0 .1.1.1.2zM39 56c0 7.7-6.3 14-14 14s-14-6.3-14-14 6.3-14 14-14 14 6.3 14 14zm-25.7 0c0 6.5 5.2 11.7 11.7 11.7 6.5 0 11.7-5.2 11.7-11.7 0-6.5-5.2-11.7-11.7-11.7-6.5 0-11.7 5.2-11.7 11.7zm12.9 6.3c0 .7-.5 1.2-1.2 1.2s-1.2-.6-1.2-1.2v-5.2h-5.2c-.7 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2h5.2v-5.2c0-.7.5-1.2 1.2-1.2s1.2.6 1.2 1.2v5.2h5.2c.7 0 1.2.5 1.2 1.2s-.6 1.2-1.2 1.2h-5.2v5.2zm12.1-57v4.4h20.4V5.3c0-1.6-1.3-3-3-3H41.3c-1.6 0-3 1.3-3 3zM31 20.7h35c.9 0 1.7-.8 1.7-1.7v-5c0-.9-.8-1.7-1.7-1.7H31c-.9 0-1.7.8-1.7 1.7v5c0 .9.8 1.7 1.7 1.7zm5.3 2.6c-.3 5.9-1.7 10.3-4.3 15C39 41.1 44 48 44 56c0 .9-.1 1.7-.2 2.5 2.4.9 4.6 2.1 6.7 3.3 7.1 4 13.8 7.7 27.1 1.3-.6-6.5-2.7-10.9-7.5-18-5.4-8-7.9-13.2-8.3-21.8H36.3zm28.9 67.4c9.7-9.2 12.5-14.7 12.6-24v-1.1c-13.8 6.3-21.2 2.2-28.3-1.8-2-1.1-3.9-2.2-6-3C41.3 68.9 33.9 75 25.1 75c-1.4 0-2.8-.2-4.2-.5 1.4 5.3 4.8 9.8 11.5 16.2h32.8z" />
                    </svg>
                    <h2 class="card-title">
                        Химчистку можно добавить<br> к любому заказу
                    </h2>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="85" height="93" viewBox="0 0 85 93">
                        <path fill="#20A052"
                            d="M72 43.8c5.9 8.8 8 13.6 8 22.9 0 10.2-3 16-13.6 26l-.3.3H31.4l-.3-.3c-7.9-7.5-11.5-12.6-12.9-19C11.1 71 6 64.1 6 56c0-10.5 8.5-19 19-19 1.6 0 3.2.2 4.8.6 2.7-4.7 4-8.8 4.2-14.6h-3c-2.2 0-4-1.8-4-4v-5c0-2.2 1.8-4 4-4h5V5.3C36 2.4 38.4 0 41.3 0h14.4C58.6 0 61 2.4 61 5.3V10h5c2.2 0 4 1.8 4 4v5c0 2.2-1.8 4-4 4h-2c.3 8.1 2.7 12.9 8 20.8zM9.4 62c2.1 5.5 7 9.5 13.2 10.6.1.1.2.1.3.1.3 0 .6.1.9.1h1.3c.4 0 .8-.1 1.2-.1h.2c.4 0 .7 0 1.1-.1.1-.1.3-.1.4-.1.3 0 .7-.1 1-.2.1 0 .3-.1.4-.1.4-.1.7-.2 1.1-.3.1 0 .1-.1.2-.1 6.4-2.3 11-8.5 11-15.7v-1.4c0-.3-.1-.6-.1-.9 0-.2-.1-.4-.1-.6-.1-.3-.1-.6-.2-.9 0-.1-.1-.3-.1-.4-1.9-7.2-8.4-12.5-16.2-12.5-9.2 0-16.7 7.5-16.7 16.7v1.4c0 .3.1.5.1.8 0 .2.1.4.1.6.2 1 .5 2 .8 2.9 0 0 .1.1.1.2zM39 56c0 7.7-6.3 14-14 14s-14-6.3-14-14 6.3-14 14-14 14 6.3 14 14zm-25.7 0c0 6.5 5.2 11.7 11.7 11.7 6.5 0 11.7-5.2 11.7-11.7 0-6.5-5.2-11.7-11.7-11.7-6.5 0-11.7 5.2-11.7 11.7zm12.9 6.3c0 .7-.5 1.2-1.2 1.2s-1.2-.6-1.2-1.2v-5.2h-5.2c-.7 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2h5.2v-5.2c0-.7.5-1.2 1.2-1.2s1.2.6 1.2 1.2v5.2h5.2c.7 0 1.2.5 1.2 1.2s-.6 1.2-1.2 1.2h-5.2v5.2zm12.1-57v4.4h20.4V5.3c0-1.6-1.3-3-3-3H41.3c-1.6 0-3 1.3-3 3zM31 20.7h35c.9 0 1.7-.8 1.7-1.7v-5c0-.9-.8-1.7-1.7-1.7H31c-.9 0-1.7.8-1.7 1.7v5c0 .9.8 1.7 1.7 1.7zm5.3 2.6c-.3 5.9-1.7 10.3-4.3 15C39 41.1 44 48 44 56c0 .9-.1 1.7-.2 2.5 2.4.9 4.6 2.1 6.7 3.3 7.1 4 13.8 7.7 27.1 1.3-.6-6.5-2.7-10.9-7.5-18-5.4-8-7.9-13.2-8.3-21.8H36.3zm28.9 67.4c9.7-9.2 12.5-14.7 12.6-24v-1.1c-13.8 6.3-21.2 2.2-28.3-1.8-2-1.1-3.9-2.2-6-3C41.3 68.9 33.9 75 25.1 75c-1.4 0-2.8-.2-4.2-.5 1.4 5.3 4.8 9.8 11.5 16.2h32.8z" />
                    </svg>
                    <h2 class="card-title">
                        Химчистку можно добавить<br> к любому заказу
                    </h2>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="85" height="93" viewBox="0 0 85 93">
                        <path fill="#20A052"
                            d="M72 43.8c5.9 8.8 8 13.6 8 22.9 0 10.2-3 16-13.6 26l-.3.3H31.4l-.3-.3c-7.9-7.5-11.5-12.6-12.9-19C11.1 71 6 64.1 6 56c0-10.5 8.5-19 19-19 1.6 0 3.2.2 4.8.6 2.7-4.7 4-8.8 4.2-14.6h-3c-2.2 0-4-1.8-4-4v-5c0-2.2 1.8-4 4-4h5V5.3C36 2.4 38.4 0 41.3 0h14.4C58.6 0 61 2.4 61 5.3V10h5c2.2 0 4 1.8 4 4v5c0 2.2-1.8 4-4 4h-2c.3 8.1 2.7 12.9 8 20.8zM9.4 62c2.1 5.5 7 9.5 13.2 10.6.1.1.2.1.3.1.3 0 .6.1.9.1h1.3c.4 0 .8-.1 1.2-.1h.2c.4 0 .7 0 1.1-.1.1-.1.3-.1.4-.1.3 0 .7-.1 1-.2.1 0 .3-.1.4-.1.4-.1.7-.2 1.1-.3.1 0 .1-.1.2-.1 6.4-2.3 11-8.5 11-15.7v-1.4c0-.3-.1-.6-.1-.9 0-.2-.1-.4-.1-.6-.1-.3-.1-.6-.2-.9 0-.1-.1-.3-.1-.4-1.9-7.2-8.4-12.5-16.2-12.5-9.2 0-16.7 7.5-16.7 16.7v1.4c0 .3.1.5.1.8 0 .2.1.4.1.6.2 1 .5 2 .8 2.9 0 0 .1.1.1.2zM39 56c0 7.7-6.3 14-14 14s-14-6.3-14-14 6.3-14 14-14 14 6.3 14 14zm-25.7 0c0 6.5 5.2 11.7 11.7 11.7 6.5 0 11.7-5.2 11.7-11.7 0-6.5-5.2-11.7-11.7-11.7-6.5 0-11.7 5.2-11.7 11.7zm12.9 6.3c0 .7-.5 1.2-1.2 1.2s-1.2-.6-1.2-1.2v-5.2h-5.2c-.7 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2h5.2v-5.2c0-.7.5-1.2 1.2-1.2s1.2.6 1.2 1.2v5.2h5.2c.7 0 1.2.5 1.2 1.2s-.6 1.2-1.2 1.2h-5.2v5.2zm12.1-57v4.4h20.4V5.3c0-1.6-1.3-3-3-3H41.3c-1.6 0-3 1.3-3 3zM31 20.7h35c.9 0 1.7-.8 1.7-1.7v-5c0-.9-.8-1.7-1.7-1.7H31c-.9 0-1.7.8-1.7 1.7v5c0 .9.8 1.7 1.7 1.7zm5.3 2.6c-.3 5.9-1.7 10.3-4.3 15C39 41.1 44 48 44 56c0 .9-.1 1.7-.2 2.5 2.4.9 4.6 2.1 6.7 3.3 7.1 4 13.8 7.7 27.1 1.3-.6-6.5-2.7-10.9-7.5-18-5.4-8-7.9-13.2-8.3-21.8H36.3zm28.9 67.4c9.7-9.2 12.5-14.7 12.6-24v-1.1c-13.8 6.3-21.2 2.2-28.3-1.8-2-1.1-3.9-2.2-6-3C41.3 68.9 33.9 75 25.1 75c-1.4 0-2.8-.2-4.2-.5 1.4 5.3 4.8 9.8 11.5 16.2h32.8z" />
                    </svg>
                    <h2 class="card-title">
                        Химчистку можно добавить<br> к любому заказу
                    </h2>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="85" height="93" viewBox="0 0 85 93">
                        <path fill="#20A052"
                            d="M72 43.8c5.9 8.8 8 13.6 8 22.9 0 10.2-3 16-13.6 26l-.3.3H31.4l-.3-.3c-7.9-7.5-11.5-12.6-12.9-19C11.1 71 6 64.1 6 56c0-10.5 8.5-19 19-19 1.6 0 3.2.2 4.8.6 2.7-4.7 4-8.8 4.2-14.6h-3c-2.2 0-4-1.8-4-4v-5c0-2.2 1.8-4 4-4h5V5.3C36 2.4 38.4 0 41.3 0h14.4C58.6 0 61 2.4 61 5.3V10h5c2.2 0 4 1.8 4 4v5c0 2.2-1.8 4-4 4h-2c.3 8.1 2.7 12.9 8 20.8zM9.4 62c2.1 5.5 7 9.5 13.2 10.6.1.1.2.1.3.1.3 0 .6.1.9.1h1.3c.4 0 .8-.1 1.2-.1h.2c.4 0 .7 0 1.1-.1.1-.1.3-.1.4-.1.3 0 .7-.1 1-.2.1 0 .3-.1.4-.1.4-.1.7-.2 1.1-.3.1 0 .1-.1.2-.1 6.4-2.3 11-8.5 11-15.7v-1.4c0-.3-.1-.6-.1-.9 0-.2-.1-.4-.1-.6-.1-.3-.1-.6-.2-.9 0-.1-.1-.3-.1-.4-1.9-7.2-8.4-12.5-16.2-12.5-9.2 0-16.7 7.5-16.7 16.7v1.4c0 .3.1.5.1.8 0 .2.1.4.1.6.2 1 .5 2 .8 2.9 0 0 .1.1.1.2zM39 56c0 7.7-6.3 14-14 14s-14-6.3-14-14 6.3-14 14-14 14 6.3 14 14zm-25.7 0c0 6.5 5.2 11.7 11.7 11.7 6.5 0 11.7-5.2 11.7-11.7 0-6.5-5.2-11.7-11.7-11.7-6.5 0-11.7 5.2-11.7 11.7zm12.9 6.3c0 .7-.5 1.2-1.2 1.2s-1.2-.6-1.2-1.2v-5.2h-5.2c-.7 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2h5.2v-5.2c0-.7.5-1.2 1.2-1.2s1.2.6 1.2 1.2v5.2h5.2c.7 0 1.2.5 1.2 1.2s-.6 1.2-1.2 1.2h-5.2v5.2zm12.1-57v4.4h20.4V5.3c0-1.6-1.3-3-3-3H41.3c-1.6 0-3 1.3-3 3zM31 20.7h35c.9 0 1.7-.8 1.7-1.7v-5c0-.9-.8-1.7-1.7-1.7H31c-.9 0-1.7.8-1.7 1.7v5c0 .9.8 1.7 1.7 1.7zm5.3 2.6c-.3 5.9-1.7 10.3-4.3 15C39 41.1 44 48 44 56c0 .9-.1 1.7-.2 2.5 2.4.9 4.6 2.1 6.7 3.3 7.1 4 13.8 7.7 27.1 1.3-.6-6.5-2.7-10.9-7.5-18-5.4-8-7.9-13.2-8.3-21.8H36.3zm28.9 67.4c9.7-9.2 12.5-14.7 12.6-24v-1.1c-13.8 6.3-21.2 2.2-28.3-1.8-2-1.1-3.9-2.2-6-3C41.3 68.9 33.9 75 25.1 75c-1.4 0-2.8-.2-4.2-.5 1.4 5.3 4.8 9.8 11.5 16.2h32.8z" />
                    </svg>
                    <h2 class="card-title">
                        Химчистку можно добавить<br> к любому заказу
                    </h2>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="85" height="93" viewBox="0 0 85 93">
                        <path fill="#20A052"
                            d="M72 43.8c5.9 8.8 8 13.6 8 22.9 0 10.2-3 16-13.6 26l-.3.3H31.4l-.3-.3c-7.9-7.5-11.5-12.6-12.9-19C11.1 71 6 64.1 6 56c0-10.5 8.5-19 19-19 1.6 0 3.2.2 4.8.6 2.7-4.7 4-8.8 4.2-14.6h-3c-2.2 0-4-1.8-4-4v-5c0-2.2 1.8-4 4-4h5V5.3C36 2.4 38.4 0 41.3 0h14.4C58.6 0 61 2.4 61 5.3V10h5c2.2 0 4 1.8 4 4v5c0 2.2-1.8 4-4 4h-2c.3 8.1 2.7 12.9 8 20.8zM9.4 62c2.1 5.5 7 9.5 13.2 10.6.1.1.2.1.3.1.3 0 .6.1.9.1h1.3c.4 0 .8-.1 1.2-.1h.2c.4 0 .7 0 1.1-.1.1-.1.3-.1.4-.1.3 0 .7-.1 1-.2.1 0 .3-.1.4-.1.4-.1.7-.2 1.1-.3.1 0 .1-.1.2-.1 6.4-2.3 11-8.5 11-15.7v-1.4c0-.3-.1-.6-.1-.9 0-.2-.1-.4-.1-.6-.1-.3-.1-.6-.2-.9 0-.1-.1-.3-.1-.4-1.9-7.2-8.4-12.5-16.2-12.5-9.2 0-16.7 7.5-16.7 16.7v1.4c0 .3.1.5.1.8 0 .2.1.4.1.6.2 1 .5 2 .8 2.9 0 0 .1.1.1.2zM39 56c0 7.7-6.3 14-14 14s-14-6.3-14-14 6.3-14 14-14 14 6.3 14 14zm-25.7 0c0 6.5 5.2 11.7 11.7 11.7 6.5 0 11.7-5.2 11.7-11.7 0-6.5-5.2-11.7-11.7-11.7-6.5 0-11.7 5.2-11.7 11.7zm12.9 6.3c0 .7-.5 1.2-1.2 1.2s-1.2-.6-1.2-1.2v-5.2h-5.2c-.7 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2h5.2v-5.2c0-.7.5-1.2 1.2-1.2s1.2.6 1.2 1.2v5.2h5.2c.7 0 1.2.5 1.2 1.2s-.6 1.2-1.2 1.2h-5.2v5.2zm12.1-57v4.4h20.4V5.3c0-1.6-1.3-3-3-3H41.3c-1.6 0-3 1.3-3 3zM31 20.7h35c.9 0 1.7-.8 1.7-1.7v-5c0-.9-.8-1.7-1.7-1.7H31c-.9 0-1.7.8-1.7 1.7v5c0 .9.8 1.7 1.7 1.7zm5.3 2.6c-.3 5.9-1.7 10.3-4.3 15C39 41.1 44 48 44 56c0 .9-.1 1.7-.2 2.5 2.4.9 4.6 2.1 6.7 3.3 7.1 4 13.8 7.7 27.1 1.3-.6-6.5-2.7-10.9-7.5-18-5.4-8-7.9-13.2-8.3-21.8H36.3zm28.9 67.4c9.7-9.2 12.5-14.7 12.6-24v-1.1c-13.8 6.3-21.2 2.2-28.3-1.8-2-1.1-3.9-2.2-6-3C41.3 68.9 33.9 75 25.1 75c-1.4 0-2.8-.2-4.2-.5 1.4 5.3 4.8 9.8 11.5 16.2h32.8z" />
                    </svg>
                    <h2 class="card-title">
                        Химчистку можно добавить<br> к любому заказу
                    </h2>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="85" height="93" viewBox="0 0 85 93">
                        <path fill="#20A052"
                            d="M72 43.8c5.9 8.8 8 13.6 8 22.9 0 10.2-3 16-13.6 26l-.3.3H31.4l-.3-.3c-7.9-7.5-11.5-12.6-12.9-19C11.1 71 6 64.1 6 56c0-10.5 8.5-19 19-19 1.6 0 3.2.2 4.8.6 2.7-4.7 4-8.8 4.2-14.6h-3c-2.2 0-4-1.8-4-4v-5c0-2.2 1.8-4 4-4h5V5.3C36 2.4 38.4 0 41.3 0h14.4C58.6 0 61 2.4 61 5.3V10h5c2.2 0 4 1.8 4 4v5c0 2.2-1.8 4-4 4h-2c.3 8.1 2.7 12.9 8 20.8zM9.4 62c2.1 5.5 7 9.5 13.2 10.6.1.1.2.1.3.1.3 0 .6.1.9.1h1.3c.4 0 .8-.1 1.2-.1h.2c.4 0 .7 0 1.1-.1.1-.1.3-.1.4-.1.3 0 .7-.1 1-.2.1 0 .3-.1.4-.1.4-.1.7-.2 1.1-.3.1 0 .1-.1.2-.1 6.4-2.3 11-8.5 11-15.7v-1.4c0-.3-.1-.6-.1-.9 0-.2-.1-.4-.1-.6-.1-.3-.1-.6-.2-.9 0-.1-.1-.3-.1-.4-1.9-7.2-8.4-12.5-16.2-12.5-9.2 0-16.7 7.5-16.7 16.7v1.4c0 .3.1.5.1.8 0 .2.1.4.1.6.2 1 .5 2 .8 2.9 0 0 .1.1.1.2zM39 56c0 7.7-6.3 14-14 14s-14-6.3-14-14 6.3-14 14-14 14 6.3 14 14zm-25.7 0c0 6.5 5.2 11.7 11.7 11.7 6.5 0 11.7-5.2 11.7-11.7 0-6.5-5.2-11.7-11.7-11.7-6.5 0-11.7 5.2-11.7 11.7zm12.9 6.3c0 .7-.5 1.2-1.2 1.2s-1.2-.6-1.2-1.2v-5.2h-5.2c-.7 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2h5.2v-5.2c0-.7.5-1.2 1.2-1.2s1.2.6 1.2 1.2v5.2h5.2c.7 0 1.2.5 1.2 1.2s-.6 1.2-1.2 1.2h-5.2v5.2zm12.1-57v4.4h20.4V5.3c0-1.6-1.3-3-3-3H41.3c-1.6 0-3 1.3-3 3zM31 20.7h35c.9 0 1.7-.8 1.7-1.7v-5c0-.9-.8-1.7-1.7-1.7H31c-.9 0-1.7.8-1.7 1.7v5c0 .9.8 1.7 1.7 1.7zm5.3 2.6c-.3 5.9-1.7 10.3-4.3 15C39 41.1 44 48 44 56c0 .9-.1 1.7-.2 2.5 2.4.9 4.6 2.1 6.7 3.3 7.1 4 13.8 7.7 27.1 1.3-.6-6.5-2.7-10.9-7.5-18-5.4-8-7.9-13.2-8.3-21.8H36.3zm28.9 67.4c9.7-9.2 12.5-14.7 12.6-24v-1.1c-13.8 6.3-21.2 2.2-28.3-1.8-2-1.1-3.9-2.2-6-3C41.3 68.9 33.9 75 25.1 75c-1.4 0-2.8-.2-4.2-.5 1.4 5.3 4.8 9.8 11.5 16.2h32.8z" />
                    </svg>
                    <h2 class="card-title">
                        Химчистку можно добавить<br> к любому заказу
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <?php
$FAQ_post = get_field('FAQ_post');
$FAQ_post_id = $FAQ_post->ID;?>

<div class="container-fluid FAQ">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="main_header">
                <?php echo get_field("faq_title", $FAQ_post_id);?>
            </h2>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <ul class="nav nav-pills w-100" id="pills-FAQ" role="tablist">

        <?php 
                $i=0;
                if(have_rows('FAQ_sections', $FAQ_post_id))
            while (have_rows('FAQ_sections', $FAQ_post_id)) {
                the_row();

                ?>
        <li class="nav-item col-4">
                <a class="nav-link" id="pills-<?php echo $i;?>-tab" data-toggle="pill" href="#pills-<?php echo $i;?>" role="tab" aria-controls="pills-<?php echo $i;?>" aria-selected="true">
                    <div class="card">
                        <div class="card-body">
                            <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 70">
                                <use href="#<?php echo get_sub_field('svg_image');?>"></use>
                            </svg>
                            <h2 class="card-title text-center">
                            <?php echo get_sub_field('header_title');?>
                            </h2>
                        </div>
                    </div>
                </a>
            </li>
            <? $i++; } ?>
        </ul>
        <div class="tab-content" id="pills-FAQContent">
   <?php if(have_rows('FAQ_sections', $FAQ_post_id))
   $i=0;
   while (have_rows('FAQ_sections', $FAQ_post_id)) {
    the_row();
            $questions_and_answers = get_sub_field('questions_and_answers');
           /* echo '<pre>';
            var_dump(the_row());
            echo '</pre>';*/ 
            ?>
            <div class="tab-pane fade show shirt_panel <?php if($i == 0) echo 'active';?>" 
            id="pills-<?php echo $i;?>" role="tabpanel" aria-labelledby="pills-<?php echo $i;?>-tab">
                <div id="accordion">
                    <?php
                    if(!empty($questions_and_answers))
                 for($j=0; $j < count($questions_and_answers); $j++){
                    ?>
                    <div class="card">
                        <div class="bottom-line">
                            <div class="card-header text-left" id="heading<?php echo $j;?>">
                                <button class="btn w-100" data-toggle="collapse" data-target="#collapse<?php echo $j;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>">
                                    <h5 class="text-left">
                                    <?php echo $questions_and_answers[$j]['question'];?>
                                    </h5>
                                </button>
                            </div>
                            <div id="collapse<?php echo $j;?>" class="collapse" aria-labelledby="heading<?php echo $j;?>" data-parent="#accordion">
                                <div class="card-body text-left">
                                <?
                                foreach($questions_and_answers[$j]['answer'] as $answer_paragraph){?>
                                <p><?php echo $answer_paragraph['answer_paragraph'];?></p>
                                <? } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? } ?>
                </div>
            </div>
            <? $i++; }?>
        </div>
    </div>
</div>

<?php 
wp_reset_query();
wp_reset_postdata();
?>


<?php $bottom_form_washing = get_field('bottom_form_washing');
if($bottom_form_washing){
    if($bottom_form_washing['show_bottom_form']){
?>
<div class="container-fluid bottom_form">
    <div class="row">
        <h2 class="main_header"><?php echo $bottom_form_washing['bottom_form_header_title']?></h2>
        <form>
            <div class="form-group">
                <div class="input-group col-12 col-md-6 float-left">
                    <div class="input-group-prepend">
                        <div class="input-group-text text-center">+<?php echo $bottom_form_washing['bottom_form_first_symbol_phone']?></div>
                    </div>
                    <input type="tel" class="form-control mask-phone" placeholder="(900) 000 00 00">
                </div>
                <button type="submit" class="btn btn-primary col-md-6 col-12"><?php echo $bottom_form_washing['bottom_form_button_text']?></button>
            </div>
        </form>
    </div>
</div>

<?php }
}
  wp_reset_query();
  wp_reset_postdata();
?>


<?php
  $app_fot_install = new WP_Query(array('post_type' => 'app_for_install'));
  $app_for_install_array_ID = Array();

  $posts = $app_fot_install->posts;

  foreach($posts as $post)
  {
     array_push($app_for_install_array_ID, $post->ID);
  }
  unset($app_for_install_array_ID[array_search($phone_app_id, $app_for_install_array_ID)]);

  $rand_array_ID = array_rand($app_for_install_array_ID);

  $rand_post = $app_fot_install->posts[$rand_array_ID];
  $rand_post_ID =  $rand_post->ID;

?>
<div class="container-fluid phone_app clearfix">
    <div class="row">
        <div class="col-lg-7 col-12 information">
                    <h2 class="main_header text-lg-left text-center"><?php echo $rand_post->post_title; ?></h2>
                    <div class="app_functies">
                    <?php if (have_rows('opportunities',  $rand_post_ID)) {
                            while (have_rows('opportunities',  $rand_post_ID)) {
                                the_row(); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22">
                                    <use href="#checkmark"></use>
                                </svg>

                                <p><?php echo get_sub_field('description_opportunity'); ?></p><br>
                        <?php }
                        } ?>
                    </div>

            <div class="app_markets mx-auto mx-lg-0">
                <a href="https://www.apple.com/app-store/">
                    <div class="appstore_ico">
                        <svg width="24" height="30">
                            <use href="#appstore_logo"></use>
                        </svg>
                    </div>
                </a>
                <div class="line"></div>
                <a href="http://www.googleplay.com">
                    <div class="playmarket_ico">
                        <svg width="27" height="30">
                            <use href="#playmarket_logo"></use>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-5 phone_image">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="360" height="480">
                <use href="#phone"></use>
            </svg></div>
    </div>
</div>

<?php
  wp_reset_query();
  wp_reset_postdata();
?>

<?php
get_footer();
?>