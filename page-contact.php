<?php get_header(); ?> 
  <main class='contact_main'>
    <div class='pink_bg'>
    <div class="contact_bg">

      <section>     
        <h2 class="contact_title">Contact</h2>
      </section>
      <section class="contact" id="contact">
        <form class="contact_form" method="post">
          <div class='contact_input'>
            <label for="name">Name</label>
            <input type="text" id="name" name="user_name">
          </div>
          <div class='contact_input'>
            <label for="mail">E-mail</label>
            <input type="email" id="mail" name="user_mail">
          </div>
          <div class='contact_input'>
            <label for="tel">Tel</label>
            <input type="tel" id="tel" name="user_tel">
          </div>
          <div class='contact_input'>
            <label for="msg">Massage</label>
            <textarea id="msg" name="user_message"></textarea>
          </div>
          <div class="button">
            <button class="button_submit" type="submit">Send</button>
          </div>
        </form>
      </section>
    </div>
</div>
  </main>
  <?php get_footer(); ?>