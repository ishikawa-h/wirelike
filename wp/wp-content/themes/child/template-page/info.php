<?php

/**
 * Template Name: info
 */

get_header();
?>

<div class="contents">
  <div class="container">
    <article id="main" class="panel main">
      <header>
        <h1><?php echo get_the_title(); ?></h1>
      </header>

      <?
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = array(
          'post_type' => 'info',
          'posts_per_page' => 10,
          'paged' => $paged
        );

        $the_query = new WP_Query($args);

        if($the_query->have_posts()):
        while ($the_query->have_posts()): $the_query->the_post();
      ?>


      <div id="article-list">
        <dl>
          <dt><?php the_time('Y.m.d') ?></dt>
          <dd><a href="<? the_permalink() ?>"><? the_title() ?></a></dd>
        </dl>
      </div>

      <? endwhile; ?>

      <?
        if (function_exists("pagination")) {
          pagination($the_query->max_num_pages);
        }
      ?>

      <? endif; ?>
      <? wp_reset_postdata(); ?>

    </article><!--

 --><aside id="sub" class="sub panel">
      <?php get_template_part('subcontent') ?>
    </aside>
  </div>
</div>

<div id="footer" class="footer">
  <div class="container">
    <?php get_template_part('footer'); ?>
  </div>
</div>

</body>
</html>
