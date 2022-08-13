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
          <p>
            私がコーディングをする上で一番意識をしていることは、「わかりやすさ」です。
            <br>仕事で製作したものは、一度作って終わりということは滅多になく、その後クライアント様の事業の成長などに合わせて、必ず内容を増やしたり減らしたりという作業が入ってきました。<br>自分が書いたコードであっても、時間が経ってからの修正であれば読み解くのに時間がかかりますし、他人が作成したコードであればなお時間がかかります。<br>早く正確な仕事をするためにも、読み解きやすいコードを書くように心がけることは、とても大切なことだと思っております。<br>今回は、jsに関係するcssであれば,
            クラス名の頭に「js」とつけたり、セクションタグにつけたクラス名を起点として他のクラス名を命名し、なるべく統一性をもってコーディングをするよう心がけました。
          </p>
        </div>
      </div>
    </div>

  </section>

</main>



<?php get_footer(); ?>