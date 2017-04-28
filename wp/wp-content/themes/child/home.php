<?php

/**
 * Template Name: home
 */

get_header();
?>

<div class="contents">
  <div class="container">
    <section class="kv">
      <h2 class="img">キービジュアル</p>
    </section>

    <article id="main" class="panel main">
      <section class="items">
        <h3>当社の商品</h3>

        <ul>
          <li class="panel">
            <a href="">
              <p class="img">画像</p>
              <h4>タイトルが入ります。</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </a>
          </li><!--
       --><li class="panel">
            <a href="">
              <p class="img">画像</p>
              <h4>タイトルが入ります。</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </a>
          </li><!--
       --><li class="panel">
            <a href="">
              <p class="img">画像</p>
              <h4>タイトルが入ります。</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </a>
          </li><!--
       --><li class="panel">
            <a href="">
              <p class="img">画像</p>
              <h4>タイトルが入ります。</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </a>
          </li><!--
       --><li class="panel">
            <a href="">
              <p class="img">画像</p>
              <h4>タイトルが入ります。</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </a>
          </li><!--
       --><li class="panel">
            <a href="">
              <p class="img">画像</p>
              <h4>タイトルが入ります。</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </a>
          </li>
        </ul>
      </section>

      <section class="info">
        <h3>お知らせ</h3>

        <?
          $args = array(
            'post_type' => 'info',
            'posts_per_page' => 5
          );

          $the_query = new WP_Query($args);

          if($the_query->have_posts()):
          while ($the_query->have_posts()): $the_query->the_post();
        ?>

        <dl>
          <dt class="panel"><?php the_time('Y.m.d') ?></dt><!--
       --><dd class="panel"><a href="<? the_permalink() ?>"><? the_title() ?></a></dd>
        </dl>

        <? endwhile; ?>
        <? endif; ?>
        <? wp_reset_postdata(); ?>

        <a class="to_index" href="/archives/info/">一覧へ</a>
      </section>
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
