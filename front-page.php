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
                  $images = rwmb_meta('homepage-carousel', array(
                    'size' => 'auto'
                  ));
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
                <img src="https://placekitten.com/g/300/300" alt="" />
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
                  Daily &dot; 3 PM - 6 PM &amp; 9 PM - Close &dot; $1 off Pints
                  / $2 off pitchers <br />
                  Wednesday &dot; 5 PM - Close &dot; $2 off specialty drinks /
                  $1 off pints
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="showcase">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 col-md-3 p-0">
                <div
                  class="showcase-box h-100 d-flex justify-content-center flex-column"
                >
                  <span>APPS</span>
                </div>
              </div>
              <div class="col-6 col-md-3 p-0">
                <div class="showcase-img">
                  <?php
                  $images = rwmb_meta('showcase-app', array(
                    'size' => 'auto'
                  ));

                  echo '
                    <img src="',
                    $image['url'],
                    '" class="img-fluid" /> 
                    ';
                  ?>
                </div>
              </div>
              <div class="col-6 col-md-3 p-0">
                <div
                  class="showcase-box h-100 d-flex justify-content-center flex-column"
                >
                  <span>Specialty Pizzas</span>
                </div>
              </div>
              <div class="col-6 col-md-3 p-0">
                <div class="showcase-img">
                  <img src="./img/showcase/pizza.jpg" class="img-fluid" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-3 p-0">
                <div class="showcase-img">
                  <img src="./img/showcase/burger.jpg" class="img-fluid" />
                </div>
              </div>
              <div class="col-6 col-md-3 p-0">
                <div
                  class="showcase-box h-100 d-flex justify-content-center flex-column"
                >
                  <span>Burgers</span>
                </div>
              </div>
              <div class="col-6 col-md-3 p-0">
                <div class="showcase-img">
                  <img src="./img/showcase/cocktail.jpg" class="img-fluid" />
                </div>
              </div>
              <div class="col-6 col-md-3 p-0">
                <div
                  class="showcase-box h-100 d-flex justify-content-center flex-column"
                >
                  <span>DRINKS</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="events">
          <div class="container">
            <h2 class="text-center">Upcoming Events</h2>
            <div class="row">

              <?php $the_query = new WP_Query('posts_per_page=3'); ?>
              
              <?php
              while ($the_query->have_posts()):
                $the_query->the_post(); ?>
              
              <div class="col-md-6 col-lg-4">
                <div class="card mx-auto" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                  <div class="ml-auto card-date text-center m-3">
                    <h5 class="card-title card-month">
                      <?php echo get_post_meta(
                        get_the_ID(),
                        'event-month',
                        true
                      ); ?>
                    </h5>
                    <h5 class="card-title card-date">
                      <?php echo get_post_meta(
                        get_the_ID(),
                        'event-day',
                        true
                      ); ?>
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
            <a href="#" class="justify-content-center">See more upcoming events</a>
          </div>
        </section>
      </main>

<?php get_footer(); ?>
