<?php get_header(); ?> 

  <main class="blog_main">
    <section>
      <h2 class="blog_site_title">Blog</h2>
    </section>
    
    <?php if (have_posts()) :
        while (have_posts()) :
          the_post(); ?>
    <section class="right">
    <?php the_post_thumbnail(); ?>
      <!--<img src="<?php echo get_template_directory_uri();?>/images/other/flower1.jpg"> -->
      <div class="blog_title">
        <a href="">
          <h2><?php the_time('Y.m.d'); ?></h2>
          <h4><?php the_title(); ?></h4>
        </a>
      </div>
        </section>
   <?php endwhile; ?>
<?php endif; ?>
  

<?php
$args = array(
'post_type' => 'Post', // 投稿タイプスラッグ:以下パラメータ
);
$the_query = new WP_Query($args); if($the_query->have_posts()):
?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <section class="left">
          <?php the_post_thumbnail(); ?>
      <img src="<?php echo get_template_directory_uri();?>/images/other/flower1.jpg">
      <div class="blog_title">
        <a href="">
        <h2><?php the_time('Y.m.d'); ?></h2>
        <h4><?php the_title(); ?></h4>
      </a>
    </div>
  </section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

  </main>
   <?php get_footer(); ?>