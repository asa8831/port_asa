<?php get_header(); ?>
<main>
  <div class="portDetail__fv">
    <div class="portDetail__fv--inner">
      <img src="<?php echo get_template_directory_uri(); ?>/img/gallery_fv.jpg" alt="">
      <p class="portDetail__fv--txt">
        製作物 <span class="subttl">
          <?php
          $post_terms = get_the_terms($post->ID, 'gallery_cat');
          foreach ($post_terms as $post_term) :
            echo $post_term->slug;
          endforeach;
          ?>
        </span>
      </p>
    </div>
  </div>


  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="portDetail">
        <section class="portDetail__inner">
          <h2 class="portDetail__ttl"><?php the_title(); ?></h2>

          <?php
          //
          $design_img_loop =  CFS()->get('design_img_loop');
          foreach ($design_img_loop as $design_img) : ?>
            <div class="portDetail__img"><img src="<?php echo $design_img['design_img'] ?>" alt=""></div>
          <?php endforeach; ?>

          <table class="portDetail__table">
            <tbody>
              <?php
              $cording_url = CFS()->get('cording_url');
              if ($cording_url) :
              ?>
                <tr>
                  <th>製作物URL</th>
                  <td><?php echo $cfs->get('cording_url'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              //入力がなければ欄を表示しない
              $about = CFS()->get('about');
              if ($about) : ?>
                <tr>
                  <th>製作物概要</th>
                  <td><?php echo $cfs->get('about'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $reason = CFS()->get('reason');
              if ($reason) :
              ?>
                <tr>
                  <th>作成にいたった経緯</th>
                  <td><?php echo $cfs->get('reason'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $period = CFS()->get('period');
              if ($period) :
              ?>
                <tr>
                  <th>製作期間</th>
                  <td><?php echo $cfs->get('period'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $cording_languages = CFS()->get('cording_languages');
              if ($cording_languages) :
              ?>
                <tr>
                  <th>使用言語・CMS・開発環境</th>
                  <td>
                    <?php
                    echo implode('、', $cording_languages);
                    ?>
                  </td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $design_tool = CFS()->get('design_tool');
              if ($design_tool) :
              ?>
                <tr>
                  <th>使用ツール</th>
                  <td>
                    <?php
                    echo implode('、', $design_tool);
                    ?>
                  </td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $design_size = CFS()->get('design_size');
              if ($design_size) :
              ?>
                <tr>
                  <th>画像サイズ</th>
                  <td><?php echo $cfs->get('design_size'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $design_display = CFS()->get('design_display');
              if ($design_display) :
              ?>
                <tr>
                  <th>表示確認済サービス</th>
                  <td><?php echo $cfs->get('design_display'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>


              <?php
              $cording_browser = CFS()->get('cording_browser');
              if ($cording_browser) :
              ?>
                <tr>
                  <th>実機確認済みブラウザ</th>
                  <td>
                    <?php
                    echo implode('、', $cording_browser);
                    ?>
                  </td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $cording_responsive = CFS()->get('cording_responsive');
              if ($cording_responsive) :
              ?>
                <tr>
                  <th>レスポンシブ対応</th>
                  <td>
                    <?php
                    echo implode('、', $cording_responsive);
                    ?>
                  </td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $cording_githuburl = CFS()->get('cording_githuburl');
              if ($cording_githuburl) :
              ?>
                <tr>
                  <th>GitHubURL</th>
                  <td><?php echo $cfs->get('cording_githuburl'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $thinking = CFS()->get('thinking');
              if ($thinking) :
              ?>
                <tr>
                  <th>取り組むにあたって臨んだ姿勢</th>
                  <td><?php echo $cfs->get('thinking'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $after = CFS()->get('after');
              if ($after) :
              ?>
                <tr>
                  <th>やってみて感じたこと・苦労した部分</th>
                  <td><?php echo $cfs->get('after'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $point = CFS()->get('point');
              if ($point) :
              ?>
                <tr>
                  <th>こだわった部分</th>
                  <td><?php echo $cfs->get('point'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

              <?php
              $issue = CFS()->get('issue');
              if ($issue) :
              ?>
                <tr>
                  <th>今後の課題としての取組みや意識</th>
                  <td><?php echo $cfs->get('issue'); ?></td>
                </tr>
              <?php else : ?>
              <?php endif; ?>

            </tbody>
          </table>

          <?php
          $fields =  CFS()->get('cording_img_loop');
          foreach ($fields as $field) : ?>
            <div class="portDetail__img"><img src="<?php echo $field['cording_img'] ?>" alt=""></div>
          <?php endforeach; ?>

        </section>
        </artic>

      <?php endwhile; ?>
    <?php endif; ?>



</main>
<?php get_footer(); ?>