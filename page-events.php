<?php
/**
* Template Name: Event Page
* Template Post Type: page
*
* The events page template for Greystone
*
* @package Greystone
* @since Greystone 1.0
**/
?>

<?php get_header(); ?>

    <section id="events">
      <div class="container">
        <h2 class="text-center">Upcoming Events</h2>
        <div class="row">
        <?php if (have_posts()): ?>
          <?php
          $args = array(
            'post_type' => 'post',
            'orderby' => 'meta_value_min',
            'meta_key' => 'event-date',
            'order' => 'ASC'
          );
          $the_query = new WP_Query($args);
          while ($the_query->have_posts()):
            $the_query->the_post(); ?>
              
              <div class="col-md-6 col-lg-4">
                <div class="card mx-auto" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                  <div class="ml-auto card-date text-center m-3">
                    <h5 class="card-title card-month">
                      <?php rwmb_the_value('event-date', array(
                        'format' => 'M'
                      )); ?>
                    </h5>
                    <h5 class="card-title card-date">
                      <?php rwmb_the_value('event-date', array(
                        'format' => 'j'
                      )); ?>
                    </h5>
                  </div>
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title mt-auto"><?php the_title(); ?></h5>
                      <?php echo '<p class="card-text">' .
                        get_the_excerpt() .
                        '</p>'; ?>
                  </div>
                </div>
              </div>              
              <?php
          endwhile;
          wp_reset_postdata();
          ?>
        <?php else: ?>
          <p>
            <?php esc_html_e('Sorry, there\'s nothing here at the moment.'); ?>
          </p>
        <?php endif; ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
