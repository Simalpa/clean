<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleaning
 */


get_header();
?>
    <div class="container-fluid subscribtion">
        <div class="row">
            <div class="col-12">
                <h2 class="main_header"><?php the_title();?></h2>
                <?php
                $page_subtitle = get_field('page_subtitle');
                if($page_subtitle !== ''){
                echo '<h3 class="main_header_min">'.$page_subtitle.'</h3>';
                }
                ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php the_content();?>
       </div>
    </div>
<?php
get_footer();