<?php
/*
  Template Name: not found 404
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">



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
            <span itemprop="name">ページが見つかりませんでした</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title">ページが見つかりませんでした</h1>

    </div>
</section>

<section class="section section-static" id="section-static">
  <div class="section-content row w700">

    <div class="static">

      <h2 class="static__title">あなたがアクセスしようとしたページは削除されたか<br class="pc">URLが変更されています。</h2>


      <p class="static__text">いつも当サイトをご覧頂きありがとうございます。<br>
        大変申し訳ないのですが、あなたがアクセスしようとしたページは削除されたかURLが変更されています。<br>
        お手数をおかけしますが、以下の方法からもう一度目的のページをお探し下さい。</p>

      <ol class="static-list">
        <li class="static-item">
          <a class="simple-btn" href="<?= site_url(); ?>">トップページへ戻る</a>
        </li>
        <li class="static-item">
          <h3 class="static__title">検索して見つける</h3>
          <p class="static__text">検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
          <div class="static-search">
            <?php get_search_form(); ?>
          </div>
        </li>

      </ol>


    </div>
  </div>
</section>

<?php get_footer(); ?>