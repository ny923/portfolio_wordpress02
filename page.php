<?php
/*
  Template Name: page
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

<section class="section section-static" id="section-static">

  <div class="section-content row w700">
    <div class="static edit">

      <div class="static__thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>

      <div class="static-contents">
        <?php the_content(); ?>
      </div>

  <?php endwhile;
      endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>