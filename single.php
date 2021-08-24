<?php get_header(); ?>
  <main>
  

    <section class="thumbnail ImgBox">
          <?php the_post_thumbnail(array(1000, 600));  ?>
          
   <!--   <img src='<?php echo get_template_directory_uri(); ?>images/other/flower2.jpg '> -->
    
    </section>
    <section class="single_detail">
      <div class="single_dete">
        <h4><?php the_time('Y.m.d'); ?></h4>
      </div>
      <div class="single_title">
        <h4><?php the_title(); ?></h4>
      </div>
    </section>
    <section class="single_content">
      <p>
          <?php the_content(); ?>
        <!--仮の文章です。仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章です。仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章
        仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
     -->
      </p>
    </section>

    <section class="single_next_link">
      <ul>
        <li>
          <a href="<?php echo get_template_directory_uri();?>/single.html">preview</a>
          </li>
        <li>></li>
        <li class="single_center">
          <a href="<?php echo get_template_directory_uri();?>/blog.html">BROG</a>
        </li>
        <li>></li>
        <li>
          <a href="<?php echo get_template_directory_uri();?>/single.html">next</a>
         </li>
      </ul>
    </section>
  </main>






  <?php get_footer(); ?>