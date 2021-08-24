<?php get_header(); ?> 
  <main>
    <section class="top area">
      <div class="top_wrap">
        <h2>Four seasons</h2>
        <p>四季</p>
      </div>
      <ul class="slide">
        <li class="item">
          <img src="<?php echo get_template_directory_uri();?>/images/spring/sakura.jpg" />
        </li>
        <li class="item">
          <img src="<?php echo get_template_directory_uri();?>/images/summer/summer.jpg" />
        </li>
        <li class="item">
          <img src="<?php echo get_template_directory_uri();?>/images/autumn/fall.jpg" />
        </li>
        <li class="item">
          <img src="<?php echo get_template_directory_uri();?>/images/winter/fuyu.jpg" />
        </li>
      </ul>
    </section>
    <section id="siki" class="siki area">
      <div class="siki_wrap">
        <div class="siki_inner fadeUpTrigger">
          <p class="siki_inner_title"><small>Four seasons</small><br>四季</p>
          <p class="siki_inner_subtitle">世界の四季</p>
          <p>日本の四季
            <br>日本の四季は特殊です
            <br>日本が特徴的なのは「春」
            <br>と
            <br>「秋」が明確に季節となっ
            <br>ていることです。
          </p>
        </div>
      </div>
    </section>
    <section class="spring area">
      <div class="spring_wrap">
        <div class="index_title">
          <h2>Spring</h2>
          <a href="<?php echo get_permalink(get_page_by_path('photos')->ID); ?>" class="view_photos">View Photos</a>
        </div>
      </div>
    </section>
    <section class="summer area">
      <div class="summer_wrap">
        <div class="index_title">
          <h2>Summer</h2>
          <a href="<?php echo get_permalink(get_page_by_path('photos')->ID); ?>" class="view_photos">View Photos</a>
        </div>
      </div>
    </section>
    <section class="autumn area">
      <div class="autumn_wrap">
        <div class="index_title">
          <h2>Autumn</h2>
          <a href="<?php echo get_permalink(get_page_by_path('photos')->ID); ?>" class="view_photos">View Photos</a>
        </div>
      </div>
    </section>
    <section class="winter area">
      <div class="winter_wrap">
        <div class="index_title">
          <h2>Winter</h2>
          <a href="<?php echo get_permalink(get_page_by_path('photos')->ID); ?>" class="view_photos">View Photos</a>
        </div>
      </div>
    </section>
  </main>
 <?php get_footer(); ?>