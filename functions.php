<?php
// Load Styles & Scripts
function enqueue_greystone_styles()
{
  // Bootstrap
  wp_enqueue_style(
    'bootstrap',
    '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
  );
  // Font Awesome
  wp_enqueue_style(
    'fontawesome',
    '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'
  );
  // Google Fonts
  wp_enqueue_style(
    'googlefont',
    '//fonts.googleapis.com/css?family=Noto+Serif|Oswald:500&display=swap'
  );
  // CSS
  wp_enqueue_style('seaways-style', get_stylesheet_uri());

  // Font Awesome
  wp_enqueue_script('fontawesome', '//kit.fontawesome.com/224419b69f.js');
  // JQuery
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
  // Popper
  wp_enqueue_script(
    'popper',
    '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
  );
  // Bootstrap JS
  wp_enqueue_script(
    'bootstrap-js',
    '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    array('jquery')
  );
  // Custom JS
  wp_enqueue_script(
    'script',
    get_template_directory_uri() . '/js/script.js',
    array('jquery')
  );
}
add_action('wp_enqueue_scripts', 'enqueue_greystone_styles');

//Add Featured Image
function greystone_featured_image_setup()
{
  $args = array(
    'default-image' => get_template_directory_uri() . 'img/default-img.jpg',
    'header-text' => true,
    'default-text-color' => '000',
    'width' => 1000,
    'height' => 250,
    'flex-width' => true,
    'flex-height' => true
  );

  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'greystone_featured_image_setup');

//Homepage Carousel
function add_homepage_carousel($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'homepage-carousel',
    'title' => esc_html__('Homepage Carousel', 'homepage-carousel'),
    'post_types' => array('page'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'homepage-carousel',
        'type' => 'image_advanced',
        'name' => esc_html__('Homepage Carousel', 'homepage-carousel'),
        'max_file_uploads' => '6'
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_homepage_carousel');

//Homepage About Text
function add_homepage_about_text($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'homepage-about-text',
    'title' => esc_html__('Homepage About Text', 'homepage-about-text'),
    'post_types' => array('page'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'homepage-about-text',
        'type' => 'textarea',
        'name' => esc_html__('Homepage About Text', 'homepage-about-text'),
        'rows' => 10
      ),
      array(
        'id' => 'homepage-about-author',
        'type' => 'text',
        'name' => esc_html__('About Text Author', 'homepage-about-text')
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_homepage_about_text');

//Homepage Showcase Images
function add_homepage_showcase($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'homepage-showcase',
    'title' => esc_html__('Homepage showcase', 'homepage-showcase'),
    'post_types' => array('page'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'showcase-app',
        'type' => 'image_advanced',
        'name' => esc_html__('App Picture', 'homepage-showcase-app'),
        'max_file_uploads' => '1'
      ),
      array(
        'id' => 'showcase-app',
        'type' => 'image_advanced',
        'name' => esc_html__('Pizza Picture', 'homepage-showcase-pizza'),
        'max_file_uploads' => '1'
      ),
      array(
        'id' => 'showcase-burger',
        'type' => 'image_advanced',
        'name' => esc_html__('Burger Picture', 'homepage-showcase-burger'),
        'max_file_uploads' => '1'
      ),
      array(
        'id' => 'showcase-drinks',
        'type' => 'image_advanced',
        'name' => esc_html__('Drinks Picture', 'homepage-showcase-drinks'),
        'max_file_uploads' => '1'
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_homepage_showcase');

//Add Event Date and Time
function add_event_date_time($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'event_date_time',
    'title' => esc_html__('Event Date and Time', 'event-date-time'),
    'post_types' => array('post'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'event-month',
        'type' => 'text',
        'name' => esc_html__('Event Month', 'event-date-time'),
        'desc' => esc_html__(
          'Month of the event (Use shorthand for best results ex. August = Aug)',
          'event-date-time'
        )
      ),
      array(
        'id' => 'event-day',
        'type' => 'number',
        'name' => esc_html__('Event Day', 'event-date-time'),
        'desc' => esc_html__('Day of the event', 'event-date-time'),
        'min' => '1',
        'max' => '31',
        'step' => '1'
      ),
      array(
        'id' => 'event-time',
        'name' => esc_html__('Event Time', 'event-date-time'),
        'type' => 'time',
        'desc' => esc_html__('Time of the event (optional)', 'event-date-time')
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_event_date_time');
?>
