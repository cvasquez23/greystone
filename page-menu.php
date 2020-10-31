<?php
/**
* Template Name: Menu Page
* Template Post Type: page
*
* The menu page template for Greystone
*
* @package Greystone
* @since Greystone 1.0
**/
?>

<?php get_header(); ?>

    <div class="wrapper">
      <section class="menu-header">
        <div class="justify-content-center">
          <h2 class="text-center">Menu</h2>
          <hr />
        </div>
      </section>

      <section class="menu-body">
        <div class="container">
          <div class="row justify-content-between">

          <!-- SHORT CODE FOR DEV SERVER -->
          <?php echo do_shortcode(
            '
              <div id="apps">[mprm_items view="grid" categ="6" tags_list="" item_ids="" col="3" categ_name="only_text" show_attributes="1" feat_img="1" excerpt="1" price="1" tags="1" ingredients="1" desc_length=""]</div>
              <div id="burgers">[mprm_items view="grid" categ="12" tags_list="" item_ids="" col="3" categ_name="only_text" show_attributes="1" feat_img="1" excerpt="1" price="1" tags="1" ingredients="1" desc_length=""]</div>
              <div id="pizzas">[mprm_items view="grid" categ="17" tags_list="" item_ids="" col="3" categ_name="only_text" show_attributes="1" feat_img="1" excerpt="1" price="1" tags="1" ingredients="1" desc_length=""]</div>
              <div id="cocktails">[mprm_items view="grid" categ="18" tags_list="" item_ids="" col="3" categ_name="only_text" show_attributes="1" feat_img="1" excerpt="1" price="1" tags="1" ingredients="1" desc_length=""]</div>
            '
          ); ?>
          </div>
        </div>
      </section>


<?php get_footer();
?>
