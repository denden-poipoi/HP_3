<?php get_header(); ?>
<main>
  <section>
    <h2 class="photos_title">Photos</h2>
  </section>
  <section class="spring_ttl seasons">
    <h4>Spring</h4>
  </section>
  <section class="spring">
    <div class="seasons_all">

      <ul class="seasons_list slider-3">
            <li class="seasons_item">
              <a href="photos.html">
                <div class="seasons_img">
                  <?php the_post_thumbnail(); ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/spring/Cherry blossoms2.jpg" alt="ニュース画像">
                </div>
                <div class="seasons_txt">
                  <p class="seasons_ttl"><?php the_title(); ?></p>
                  <p class="seasons_date"><?php the_time('Y.m.d'); ?></p>
                </div>
              </a>
            </li>
                 <li class="seasons_item">
            <a href="season.html">
              <div class="seasons_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/spring/Cherry blossoms3.jpg" alt="ニュース画像">
              </div>
              <div class="seasons_txt">
                <p class="seasons_ttl">桜の写真</p>
                <p class="seasons_date">春の画像を撮影</p>
              </div>
            </a>
          </li>
          <li class="seasons_item">
            <a href="season.html">
              <div class="seasons_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/spring/Cherry blossoms4.jpg" alt="ニュース画像">
              </div>
              <div class="seasons_txt">
                <p class="seasons_ttl">桜の写真</p>
                <p class="seasons_date">春の画像を撮影</p>
              </div>
            </a>
          </li>
          <li class="seasons_item">
            <a href="season.html">
              <div class="seasons_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/spring/Cherry blossoms3.jpg" alt="ニュース画像">
              </div>
              <div class="seasons_txt">
                <p class="seasons_ttl">桜の写真</p>
                <p class="seasons_date">春の画像を撮影</p>
              </div>
            </a>
          </li>
          <li class="seasons_item">
            <a href="season.html">
              <div class="seasons_img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/spring/Cherry blossoms4.jpg" alt="ニュース画像">
              </div>
              <div class="seasons_txt">
                <p class="seasons_ttl">桜の写真</p>
                <p class="seasons_date">春の画像を撮影</p>
              </div>
            </a>
          </li>

      </ul>
    </div>


  </section>
  <section class="summer_ttl seasons">
    <h4>Summer</h4>
  </section>
  <section class="summer">
    <div class="seasons_all">
      <ul class="seasons_list slider-3">
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/summer/summer1.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">夏の写真</p>
              <p class="seasons_date">夏の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/summer/summer2.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">夏の写真</p>
              <p class="seasons_date">夏の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/summer/summer3.jpg">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">夏の写真</p>
              <p class="seasons_date">夏の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/summer/summer4.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">夏の写真</p>
              <p class="seasons_date">夏の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/summer/summer5.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">夏の写真</p>
              <p class="seasons_date">夏の画像を撮影</p>
            </div>
          </a>
        </li>
      </ul>
    </div>


  </section>
  <section class="autumn_ttl seasons">
    <h4>Auttumn</h4>
  </section>
  <section class="autumn">
    <div class="seasons_all">
      <ul class="seasons_list slider-3">
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/autumn/autumn1.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">秋の写真</p>
              <p class="seasons_date">秋の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/autumn/autumn2.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">秋の写真</p>
              <p class="seasons_date">秋の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/autumn/autumn3.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">秋の写真</p>
              <p class="seasons_date">秋の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/autumn/autumn4.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">秋の写真</p>
              <p class="seasons_date">秋の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/autumn/autumn5.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">秋の写真</p>
              <p class="seasons_date">秋の画像を撮影</p>
            </div>
          </a>
        </li>
      </ul>
    </div>


  </section>
  <section class="winter_ttl seasons">
    <h4>Winter</h4>
  </section>
  <section class="winter">
    <div class="seasons_all">
      <ul class="seasons_list slider-3">
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/winter/winter5.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">冬の写真</p>
              <p class="seasons_date">冬の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/winter/winter4.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">冬の写真</p>
              <p class="seasons_date">冬の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/winter/winter2.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">冬の写真</p>
              <p class="seasons_date">冬の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/winter/winter3.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">冬の写真</p>
              <p class="seasons_date">冬の画像を撮影</p>
            </div>
          </a>
        </li>
        <li class="seasons_item">
          <a href="season.html">
            <div class="seasons_img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/winter/winter4.jpg" alt="ニュース画像">
            </div>
            <div class="seasons_txt">
              <p class="seasons_ttl">桜の写真</p>
              <p class="seasons_date">春の画像を撮影</p>
            </div>
          </a>
        </li>
      </ul>
    </div>


  </section>
</main>
<?php get_footer(); ?>