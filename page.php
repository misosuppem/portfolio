<?php get_header(); ?>
<main>

  <section id="contactform" class="contactform wrapper">
    <form class="contact_container" action="#" method="post">
      <div class="contact_wrapper">
        <h2 class="section_title">CONTACT</h2>
        <div class="form_label">
          <label for="name">名前</label>
          <input type="text" id="name" name="name">
        </div>
        <div class="form_label">
          <label for="name">ひらがな</label>
          <input type="text" id="hiragana" name="hiragana">
        </div>
        <div class="form_label">
          <label for="email">メールアドレス</label>
          <input type="mail" id="email" name="email">
        </div>
        <div class="form_label">
          <label for="message">内容</label>
          <textarea id="message" name="message"></textarea>
        </div>
        <div class="button_wrapper">
          <input class="submit_button" type="submit" value="送信">
        </div>
      </div>
    </form>
  </section>

</main>
<?php get_footer(); ?>
