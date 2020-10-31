<?php
/**
 * The font-page for Greystone
 *
 * @package Greystone
 * @since Greystone  1.0.0
 */
?>

<?php get_header(); ?>

    <!-- Content -->
    <div class="wrapper">
      <main>
        <!-- Header -->
        <section id="home" class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div
                id="carousel"
                class="carousel slide carousel-fade"
                data-ride="carousel"
              >
                <div class="carousel-inner">

                  <?php
                  $images = rwmb_meta('homepage-carousel', [
                    'size' => 'auto',
                  ]);
                  $i = 0;
                  foreach ($images as $image) {
                    if ($i == 0) {
                      echo '
                      <div class="carousel-item active">
                        <img src="',
                        $image['url'],
                        '" class="d-block" />
                      </div>
                      ';
                    } else {
                      echo '
                      <div class="carousel-item">
                        <img src="',
                        $image['url'],
                        '" class="d-block" />
                      </div>
                      ';
                    }
                    $i++;
                  }
                  ?>

                </div>
              </div>
            </div>
          </div>
          <div class="hero-text">
            <div class="text-center">
              <h6>Welcome to</h6>
              <h1>Greystone</h1>
            </div>
          </div>
        </section>
        <section id="about">
          <div class="container text-center">
            <h2>Our Story</h2>
            <div class="row">
              <div class="col-md-6">
                <p>
                  <?php echo get_post_meta(
                    get_the_ID(),
                    'homepage-about-text',
                    true
                  ); ?>
                  <br /><br />
                  <span><?php echo get_post_meta(
                    get_the_ID(),
                    'homepage-about-author',
                    true
                  ); ?></span>
                </p>
              </div>
              <div class="col-md-6 abt-pic">
                <img src="https://greystone.chrisvasquez.dev/wp-content/uploads/2020/10/owner-picture.png" alt="" />
              </div>
            </div>
          </div>
        </section>
        <section id="hours">
          <div class="container text-center">
            <div class="row justify-content-center">
              <h2>Visit</h2>
            </div>
            <div class="row">
              <div class="col-md-4">
                <h4>Hours</h4>
                <h6>Monday-Thursday</h6>
                <p>
                  Hours: 3:00pm - 10:00pm <br />
                  Dinner: 5:00pm - 9:00pm
                </p>
                <h6>Friday</h6>
                <p>
                  Hours: 3:00pm - 2:00am <br />
                  Dinner: 5:00pm - 10:30pm
                </p>
                <h6>Saturday</h6>
                <p>
                  Hours: 11:00am - 2:00am <br />
                  Lunch: 11:00am - 3:00pm <br />
                  Dinner: 5:00pm - 10:30pm
                </p>
                <h6>Sunday</h6>
                <p>
                  Hours: 11:00am - 9:00pm <br />
                  Brunch: 11:00am - 2:00pm <br />
                  Dinner: 5:00pm - 9:00pm
                </p>
              </div>
              <div class="col-md-4">
                <h4>Specials</h4>
                <h6>Monday</h6>
                <p>Special One</p>
                <h6>Tuesday</h6>
                <p>Special Two</p>
                <h6>Wednesday</h6>
                <p>Special Three</p>
                <h6>Thursday</h6>
                <p>Special Four</p>
                <h6>Friday</h6>
                <p>Special Five</p>
                <h6>Saturday</h6>
                <p>Special Six</p>
                <h6>Sunday</h6>
                <p>Special Seven</p>
              </div>
              <div class="col-md-4">
                <h4>Contact</h4>
                <p>
                  555 Fake Road <br />
                  Fakeville <br />
                  Fake State 55555
                </p>
                <p>555-555-5555</p>
                <p>email@domain.com</p>
              </div>
            </div>
          </div>
        </section>
        <section id="happy-hour">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center happy-hour">
                <h2>Join Us for Happy Hour</h2>
                <p>
                  Daily &middot; 3 PM - 6 PM &amp; 9 PM - Close &middot; $1 off Pints
                  / $2 off pitchers <br />
                  Wednesday &middot; 5 PM - Close &middot; $2 off specialty drinks /
                  $1 off pints
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="showcase">
          <div class="container-fluid">
            <div class="row">

              <!-- APPS -->
              <div class="col-6 col-md-3 order-1 p-0">
                <a href="<?php echo get_permalink(56); ?>#apps">
                  <div
                    class="showcase-box h-100 d-flex justify-content-center flex-column"
                  >
                    <span>APPS</span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-3 order-2 p-0">
                <a href="<?php echo get_permalink(56); ?>#apps">
                  <div class="showcase-img">
                    <?php
                    $apps = rwmb_meta('showcase-app', [
                      'limit' => 1,
                      'size' => 'auto',
                    ]);
                    $app = reset($apps);

                    echo '
                      <img src="',
                      $app['url'],
                      '" class="img-fluid" /> 
                      ';
                    ?>
                  </div>
                </a>
              </div>

              <!-- PIZZAS -->
              <div class="col-6 col-md-3 order-5 order-md-3 p-0">
                <a href="<?php echo get_permalink(56); ?>#pizzas">
                  <div
                    class="showcase-box h-100 d-flex justify-content-center flex-column"
                  >
                    <span>Specialty Pizzas</span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-3 order-6 order-md-4 p-0">
                <a href="<?php echo get_permalink(56); ?>#pizzas">
                  <div class="showcase-img">
                    <?php
                    $pizzas = rwmb_meta('showcase-pizza', [
                      'limit' => 1,
                      'size' => 'auto',
                    ]);
                    $pizza = reset($pizzas);

                    echo '
                      <img src="',
                      $pizza['url'],
                      '" class="img-fluid" /> 
                      ';
                    ?>
                  </div>
                </a>
              </div>
            </div>
            <div class="row">

              <!-- BURGERS -->
              <div class="col-6 col-md-3 order-3 order-md-5 p-0">
                <a href="<?php echo get_permalink(51); ?>#burgers">
                  <div class="showcase-img">
                    <?php
                    $burgers = rwmb_meta('showcase-burger', [
                      'limit' => 1,
                      'size' => 'auto',
                    ]);
                    $burger = reset($burgers);

                    echo '
                      <img src="',
                      $burger['url'],
                      '" class="img-fluid" /> 
                      ';
                    ?>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-3 order-4 order-md-6 p-0">
                <a href="<?php echo get_permalink(51); ?>#burgers">
                  <div
                    class="showcase-box h-100 d-flex justify-content-center flex-column"
                  >
                    <span>Burgers</span>
                  </div>
                </div>

                <!-- DRINKS -->
                <div class="col-6 col-md-3 order-7 p-0">
                  <div class="showcase-img">
                  <?php
                  $drinks = rwmb_meta('showcase-drinks', [
                    'limit' => 1,
                    'size' => 'auto',
                  ]);
                  $drink = reset($drinks);

                  echo '
                    <img src="',
                    $drink['url'],
                    '" class="img-fluid" /> 
                    ';
                  ?>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-3 order-8 p-0">
                <a href="<?php echo get_permalink(51); ?>#drinks">
                  <div
                    class="showcase-box h-100 d-flex justify-content-center flex-column"
                  >
                    <span>DRINKS</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section id="events">
          <div class="container">
            <h2 class="text-center">Upcoming Events</h2>
            <div class="row">
              
              <?php
              $args = [
                'post_type' => 'post',
                'posts_per_page' => '3',
                'orderby' => 'meta_value_min',
                'meta_key' => 'event-date',
                'order' => 'ASC',
              ];
              $the_query = new WP_Query($args);
              while ($the_query->have_posts()):
                $the_query->the_post(); ?>
              
              <div class="col-md-6 col-lg-4">
                <div class="card mx-auto" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                  <div class="ml-auto card-date text-center m-3">
                    <h5 class="card-title card-month">
                      <?php rwmb_the_value('event-date', [
                        'format' => 'M',
                      ]); ?>
                    </h5>
                    <h5 class="card-title card-date">
                      <?php rwmb_the_value('event-date', [
                        'format' => 'j',
                      ]); ?>
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
            </div>
            <div class="row">
              <a 
                href="<?php echo get_permalink(40); ?>" 
                class="mx-auto">See more upcoming events
              </a>
            </div>
          </div>
        </section>
      </main>

<?php get_footer();
?>
