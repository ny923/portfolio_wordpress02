<?php
/*
Template Name:thanks
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">

      <!-- パンくず -->
      <div class="breadcrumbs">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url(); ?>/">
              <span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <span itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>

    </div>
</section>

<section class="section section-contact" id="section-contact">

  <div class="section-content row w700" data-aos="fade-up" anchor="#section-contact" data-aos-once="true" data-aos-duration="1000">

    <div class="contact">

      <p class="contact__text">FAXの場合<span class="num">03-5848-3127</span></p>

      <div class="contact-texts">
        <p class="contact__text">お問い合わせ誠にありがとうございます。</p>
        <p class="contact__text">3営業日以内に返信いたしますので、今しばらくお待ち下さい。</p>
      </div>

      <!-- <div class="contact-form">
        <p class="contact__text">お問い合わせ誠にありがとうございます。</p>
        <p class="contact__text">3営業日以内に返信いたしますので、今しばらくお待ち下さい。</p>
      </div> -->

    </div>

  </div>
</section>

<?php get_footer(); ?>