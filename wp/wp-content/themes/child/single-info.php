<?php get_header(); ?>

<div class="contents">
  <div class="container">
    <article id="main" class="panel main">

      <? while ( have_posts() ) : the_post(); ?>
      <header>
        <span><? the_time('Y.m.d') ?></span>
        <h1><? the_title() ?></h1>
      </header>

      <div>
        <? the_content(); ?>
      </div>
      <? endwhile; ?>

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
