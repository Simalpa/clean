<?php
/*
Template Name: dry_cleaning
 */

get_header();

?>
<div class="container-fluid dry_cleaning_sub_menu">
	<div class="row">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link <?if(get_the_ID() == 465) echo 'active';?>" id="link_dry_cleaning_of_clothing_and_shoes">Химчистка одежды и обуви</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?if(get_the_ID() == 526) echo 'active';?>" id="link_dry_cleaning_of_curtains">Химчистка штор</a>
			</li>
		</ul>
	</div>
</div>

<?php
$top_form = get_field('top_form');
//echo '<pre>'.var_dump($top_form).'</pre>';
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="drycleaning_top_form col-12">
			<div class="drycleaning_top_form_background" style="background-image: url('<? echo $top_form['top_form_background']['url']; ?>');">
				<div class="drycleaning_top_form_left col-lg-6 col-12">
					<h1 class="drycleaning_top_form_title text-left" id="drycleaning_top_form_title">
						<? echo $top_form['top_form_title']; ?>
					</h1>
					<div class="col-12 drycleaning_top_form_note">
						<? $subtitle = $top_form['top_form_subtitle'];
						foreach($subtitle as &$p){
							echo '<p>'.$p['top_form_subtitle_p'].'</p>';
						}?>
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
							<button type="submit" class="w-100 btn btn-primary mb-2"><?echo $top_form['top_form_button_text'];?></button>
						</div>
					</form>
					<div class="col-12 information">
						<p class="card-text">Мы заботимся о вашем здоровье, поэтому ввели<br> дополнительные меры безопасности.
							<a href="#"> Подробнее</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
$first_order = get_field('first_order');
//echo var_dump($top_form);
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="first_order_gift col-12">
				<div class="row">
					<div class="first_order_gift_left col-12 col-md-6">
						<h3 class="first_order_gift_title text-center text-md-left">
							<? echo $first_order['first_order_title'];?>
						</h3>
						<p class="first_order_gift_note text-center text-md-left">
							<? echo $first_order['first_order_subtitle'];?>
						</p>
						<div class="row">
							<button type="button" class="btn first_order_gift_button align-items-end col-12 col-md-7"><? echo $first_order['first_order_button_text'];?></button>
						</div>
					</div>
					<div class="first_order_gift_right col-md-6 col-0 d-md-block d-none">
						<div class="first_order_gift_img" style="background-image: url('<? echo get_template_directory_uri()?>/img/iron.png');">
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
</div>

<?php
$accordion_price = get_field('accordion_price');
//echo var_dump($accordion_price);
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
		<div class="accordion price_accordion col-12" id="priceAccordion">
			<? 
			for($i=0; $i<count($accordion_price);$i++)
			{
				$section_products = $accordion_price[$i];
				$accordion_price_header = $section_products['accordion_price_header'];
				$accordion_price_products = $section_products['accordion_price_products'];

			 ?>
			<div class="card price_accordion_card">
				<div class="card-header" id="heading<?echo $i?>">
					<button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?echo $i?>" aria-expanded="false" aria-controls="collapse<?echo $i?>">
						<div class="col-12">
							<svg class="price_accordion_svg" width="45" height="45">
								<use href='#<? echo $accordion_price_header['accordion_price_name_svg']; ?>'></use>
							</svg>
							<h2 class="card_header_title"><? echo $accordion_price_header['accordion_price_header_title']; ?></h2>
							<div class="card_header_amount">3</div>
							<h2 class="card_header_price">от <span>190</span> р.</h2>
						</div>
					</button>
				</div>
				<?foreach($accordion_price_products as $product) {?>
				<div id="collapse<?echo $i?>" class="collapse show" aria-labelledby="heading<?echo $i?>" data-parent="#priceAccordion">
					<div class="card-body card_body_header">
						<div class="card card_collapse">
							<div class="card-body card_body_collapse">
								<h2 class="card_body_title"><? echo $product['accordion_price_product_name'];?></h2>
								<button class="card_body_button_plus">
									<svg width="25" height="25">
										<use href="#button_plus"></use>
									</svg>
								</button>
								<h2 class="card_body_count">0</h2>
								<button class="card_body_button_minus">
									<svg width="25" height="25">
										<use href="#button_minus"></use>
									</svg>
								</button>
								<? $price = $product['accordion_price_product_price'];?>
								<h2 class="card_body_price">от <span <?echo 'value=\''.$price.'\'';?>><?echo $price; ?></span> р.</h2>
							</div>
						</div>
					</div>
				</div>
				<?}?>
			</div>
		<? }?>
		</div>
	</div>
	</div>
</div>

<div class="container-fluid" id="dont_find">
	<div class="row">
		<div class="col-12">
		<div class="dont_find_call_us col-12">
			<h2 class="dont_find_call_us_title text-center">Не нашли что искали?</h2>
			<p class="dont_find_call_us_text text-center">Позвоните <a class="dont_find_call_us_phone">
				<? echo get_option('theme_phone_number'); ?>
			</a> или напишите в мессенджеры</p>
			<div class="row d-flex justify-content-center">
				<div class="social_networks col-12">
					<div class="row">
						<div class="col-md-4 col-12 social_network_messenger_button">
							<a href="#" class="d-flex justify-content-center">
								<svg width="25" height="25">
									<use href="#messenger"></use>
								</svg>
								Messenger
							</a>
						</div>
						<div class="col-md-4 col-12 social_network_telegram_button">
							<a href="#" class="d-flex justify-content-center">
								<svg width="25" height="25">
									<use href="#telegram"></use>
								</svg>
								Telegram
							</a>
						</div>
						<div class="col-md-4 col-12 social_network_viber_button">
							<a href="#" class="d-flex justify-content-center">
								<svg width="25" height="25">
									<use href="#viber"></use>
								</svg>
								Viber
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>
</div>


<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="dry_cleaning_information_card col-12">
			<div class="row">
				<div class="col-4">
					<div class="card">
						<svg>
							<use href="#car_delivery"></use>
						</svg>
						<div class="card-body">
							<p class="card-text text-center">Доставка вещей<br> от 48 часов</p>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<svg>
							<use href="#big_like"></use>
						</svg>
						<div class="card-body">
							<p class="card-text text-center">Профессиональное оборудование</p>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<svg>
							<use href="#mobile_app"></use>
						</svg>
						<div class="card-body">
							<p class="card-text text-center">Удобное мобильное<br> приложение</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
$FAQ_post = get_field('FAQ_post');
$FAQ_post_id = $FAQ_post->ID;?>



<div class="container-fluid FAQ" style="max-width: 100%;">
	<div class="row justify-content-center">
		<div class="col-12">
			<h2 class="main_header">
				<?php echo get_field("faq_title", $FAQ_post_id);?>
			</h2>
		</div>
	</div>
	<div class="row justify-content-center text-center">
		<div class="col-12">
		<!--<ul class="nav nav-pills w-100" id="pills-FAQ" role="tablist">
			<?php if(have_rows('FAQ_sections', $FAQ_post_id))
			$i=0;
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
			</ul>-->
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
            							<button class="btn w-100 d-flex align-items-center collapsed" data-toggle="collapse" data-target="#collapse<?php echo $j;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>">
											<h5 class="text-left col-11">
            									<?php echo $questions_and_answers[$j]['question'];?>
            								</h5>
											<div class="ml-auto align-self-center square">
											</div>
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
    </div>
</div>
   <div class="container-fluid bottom_form_dry_cleaning clearfix" id="bottom_form">
    	<div class="fluid-block">
    		<div class="row">
    			<div class="col-12">
					<div class="row d-flex justify-align-center">
    				<div class="processing_time col-12 col-md-4">
    					<h4 class="processing_time_title d-none d-md-block">Срок обработки</h4>
    					<p class="processing_time_text d-none d-md-block">Пока ничего не выбрано</p>
    				</div>
    				<div class="delivery_price col-12 col-md-4 mb-2">
    					<h4 class="delivery_price_title">Доставка 490 р</h4>
    					<p class="delivery_price_text">До бесплатной ещё 2490 р.</p>
    				</div>
    				<button class="btn btn-primary col-12 col-md-4">Оформить заказ</button>
				</div>
    			</div>			
    		</div>
    	</div>
    </div>

    </div>


    <?php 
    wp_reset_query();
    wp_reset_postdata();
    ?>
    <?php
    get_footer();
