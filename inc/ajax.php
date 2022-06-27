<?
function my_custom_ajax()
{?>
<script type="text/javascript">
jQuery('#link_dry_cleaning_of_clothing_and_shoes').bind('click',function($)
{
	var data = {
		action: 'dry_cleaning_of_clothing_and_shoes',
		text: 'my ajax text',
		_ajax_nonce: '<?php echo wp_create_nonce( 'my_ajax_nonce' ); ?>'
	}

	 var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	 jQuery.post(ajaxurl, data, function(response) {
		    var res = jQuery.parseJSON(response)
			//console.log(res);
            //alert('Ответ сервера: ' + res.message.top_form.top_form_title);
			jQuery('#link_dry_cleaning_of_clothing_and_shoes').addClass('active');
			jQuery('#link_dry_cleaning_of_curtains').removeClass('active');
			jQuery('#drycleaning_top_form_title').html(res.top_form.top_form_title);
			jQuery('.drycleaning_top_form_note').html('');
			jQuery.each(res.top_form.top_form_subtitle, function(index, value){
				jQuery('.drycleaning_top_form_note').append('<p>'+value.top_form_subtitle_p+'</p>');
			})
			jQuery('.drycleaning_top_form_background').css('background-image', 'url('+res.bg+')');
			jQuery('.first_order_gift_title').html(res.first_order.first_order_title);

			
			console.log(res.accordion_price);
			for(i=0;i<res.accordion_price.length;i++)
			{
			console.log(res.accordion_price[i]);
			}

			<?php $home_url = get_home_url();
			$page_url = get_permalink(465);
			?> var url='<? echo str_replace($home_url, '',$page_url);?>';
			history.pushState({},'Чистка штор', url);
			
        });
});

jQuery('#link_dry_cleaning_of_curtains').bind('click',function($)
{
	var data = {
		action: 'dry_cleaning_of_curtains',
		text: 'my ajax text',
		_ajax_nonce: '<?php echo wp_create_nonce( 'my_ajax_nonce' ); ?>'
	}

	 var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	 jQuery.post(ajaxurl, data, function(response) {
		    var res = jQuery.parseJSON(response)
			//console.log(res);
            //alert('Ответ сервера: ' + res.message.top_form.top_form_title);
			jQuery('#link_dry_cleaning_of_curtains').addClass('active');
			jQuery('#link_dry_cleaning_of_clothing_and_shoes').removeClass('active');
			jQuery('#drycleaning_top_form_title').html(res.top_form.top_form_title);
			jQuery('.drycleaning_top_form_note').html('');
			jQuery.each(res.top_form.top_form_subtitle, function(index, value){
				jQuery('.drycleaning_top_form_note').append('<p>'+value.top_form_subtitle_p+'</p>');
			})
			jQuery('.drycleaning_top_form_background').css('background-image', 'url('+res.bg+')');
			jQuery('.first_order_gift_title').html(res.first_order.first_order_title);
			
			<?php $home_url = get_home_url();
			$page_url = get_permalink(526);
			?> var url='<? echo str_replace($home_url, '',$page_url);?>';
			history.pushState({},'Чистка штор', url);
			

			
        });
});
</script>

<?}

add_action('wp_footer', 'my_custom_ajax');

add_action('wp_ajax_dry_cleaning_of_clothing_and_shoes', 'AJAX_dry_cleaning_of_clothing_and_shoes');

add_action('wp_ajax_nopriv_dry_cleaning_of_clothing_and_shoes', 'AJAX_dry_cleaning_of_clothing_and_shoes');

function AJAX_dry_cleaning_of_clothing_and_shoes(){
	check_ajax_referer('my_ajax_nonce');
	$id_page = 465;
	echo json_encode(['success' => 1, 'top_form' => get_field('top_form', $id_page),
	'first_order' => get_field('first_order', $id_page),
	'bg' => get_template_directory_uri().'/img/clothes.png' ,
	'accordion_price' => get_field('accordion_price', $id_page)]);
	wp_die();
  }

add_action('wp_ajax_dry_cleaning_of_curtains', 'AJAX_dry_cleaning_of_curtains');

add_action('wp_ajax_nopriv_dry_cleaning_of_curtains', 'AJAX_dry_cleaning_of_curtains');

function AJAX_dry_cleaning_of_curtains(){
	check_ajax_referer('my_ajax_nonce');
	$id_page = 526;
	echo json_encode(['success' => 1, 'top_form' => get_field('top_form', $id_page),
	'first_order' => get_field('first_order', $id_page),
	'bg' => get_template_directory_uri().'/img/curtains.png',
	'accordion_price' => get_field('accordion_price', $id_page)]);
	wp_die();
  }

?>