<?php

/**
 * Template Name: Blank
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>

  <div id="content" class="site-content">
    <div id="primary" class="content-area">
      <button class="btn btn-primary" onclick="window.history.back();"><i class="fas fa-arrow-left"></i> <?php _e('Back', 'bootscore'); ?></button>

      <main id="main" class="site-main">

        <div class="entry-content">
          <?php the_post(); ?>
          <?php the_content(); ?>
        </div>

      </main>

    </div>
  </div>

<?php
get_footer();