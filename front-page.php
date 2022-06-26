<?php get_header(); ?>
<main>
  <section class="fv">
    <div class="fv__inner">
      <ul class="js_slick">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/fv2.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/fv4.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/fv5.jpg" alt=""></li>
      </ul>
      <div class="fv__scroll"><span>Scroll</span></div>
    </div>
  </section>

  <section id="worksitem" class="works">
    <div class="works__inner inner">

      <h2 class="section__ttl">製作物</h2>
      <?php
      $post_type = 'gallery';
      $taxonomy_name = 'gallery_cat';
      $taxonomys = get_terms($taxonomy_name);

      foreach ($taxonomys as $taxonomy) :
        //タームごとの記事すべてを取得
        $tax_posts = get_posts(array(
          'post_type' => $post_type,

          'tax_query' => array(
            array(
              'taxonomy' => $taxonomy_name,
              'terms' => array($taxonomy->slug),
              'field' => 'slug',
              'include_children' => true, //子タクソノミーを含める
            )
          )
        ));
      ?>
        <article class="works__term">
          <h3 class="section__subttl"><?php echo esc_html($taxonomy->name); ?></h3>
          <?php if ($tax_posts) : ?>
            <ul class="works__list">
              <?php foreach ($tax_posts as $tax_post) : ?>
                <li>
                  <a href="<?php echo get_permalink($tax_post->ID); ?>">
                    <?php
                    // アイキャッチ画像を取得
                    $thumbnail_id = get_post_thumbnail_id($tax_post->ID);
                    $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                    if (get_post_thumbnail_id($tax_post->ID)) {
                      echo '<img src="' . $thumb_url[0] . '" alt="アイキャッチ">';
                    } else {
                      // アイキャッチ画像が登録されていなかったときの画像
                      echo '<img src="' . get_template_directory_uri() . '/img/noimage350.png" alt="アイキャッチ">';
                    }
                    ?>
                  </a>
                </li>
              <?php endforeach;
              wp_reset_postdata(); ?>
            </ul>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>

    </div>
  </section>

  <section id="mind" class="think">
    <div class="think__inner inner">
      <figure class="think__img"></figure>
      <div class="think__txt">
        <div class="think__txt--inner">
          <h4 class="section__ttl">コーディングをする上での考え方</h4>
          <!-- <figure class="think__img sp"></figure> -->
          <p>
            私がコーディングをする上で一番意識をしていることは、「わかりやすさ」です。
            <br>会社の一員としてコーディングをしてきて、コンテンツを一度作って終わりということは滅多になく、その後、クライアント様の事業の成長などに合わせて、必ずコンテンツを増やしたり減らしたりという作業が入ってきました。<br>それが自分が作成したコードではないものであればどうしても読み解くのに時間がかかりますし、社員ごとのレベルも違うため、組織として常に早く正確に成果を挙げるというのはとても難しいことです。<br>そのため、なるべる一定の成果を組織として挙げる上で私ができることは、読み解きやすいコードを書くように心がけることではないかと思っております。<br>そのような考えから、ポートフォリオに掲載している成果物は、セクションタグにつけたクラス名を起点としてクラス名を命名していっております(例：think__txt→thinkの中のテキストが入る部分)
          </p>
        </div>
      </div>
    </div>

  </section>

</main>



<?php get_footer(); ?>