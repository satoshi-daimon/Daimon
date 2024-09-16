<div class="box4-5">

<h1>人気記事</h1> 
    <ul>
        <?php
            $loopcounter = 0;
            $args = array(
                'post_type' => 'post',
                'meta_key'=> 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => 12
            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()):// 投稿が存在するかどうかをチェック
            while($the_query->have_posts()): $the_query->the_post();// 投稿を表示
            $post_id = get_the_ID(); // 表示したい投稿のIDを指定
            $post_image = get_the_post_thumbnail_url( $post_id, 'thumbnail' ); // サムネイル画像のURLを取得

            $loopcounter++;
        ?>
        <li>
            <a href="<?php the_permalink(); ?>">

                <span><?php echo $loopcounter; ?></span>
                <div class="title"style="overflow: hidden; white-space: nowrap;">
                    <span><?php the_title(); ?></span>
                </div>
                <img src="<?php echo esc_url( $post_image ); ?>">
            </a>
        </li>

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </ul>
</div>
<div class="box5">
<h1>旅ブログカテゴリ</h1> 
<!-- ナビゲーション -->
<nav>
    <ul>
        <li>
            <a href="<?php
            $category_id0 = get_cat_ID('ASIA');
            echo get_category_link($category_id0); ?>">
                <?php
                $category_name = 'ASIA';
                $category = get_term_by('name', $category_name, 'category');
                    $category_id = $category->term_id;
                    $category_count = $category->count;
                    echo "{$category_name} 記事数 {$category_count}";
                ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/000028.png" alt="">
            </a>
        </li>
        <li>
            <a href="<?php 
                $category_id1 = get_cat_ID('LATINAMERICA');
                echo get_category_link($category_id1); ?>">
                    <?php
                    $category_name = 'LATINAMERICA';
                    $category = get_term_by('name', $category_name, 'category');
                        $category_id = $category->term_id;
                        $category_count = $category->count;
                        echo "{$category_name} 記事数 {$category_count}";
                    ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/000063.png" alt="">
            </a>
        </li>
        <li>
            <a href="<?php 
                $category_id2 = get_cat_ID('NORTHAMERICA');
                echo get_category_link($category_id2); ?>">
                    <?php
                    $category_name = 'NORTHAMERICA';
                    $category = get_term_by('name', $category_name, 'category');
                        $category_id = $category->term_id;
                        $category_count = $category->count;
                        echo "{$category_name} 記事数 {$category_count}";
                    ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/000044.png" alt="">
            </a>
        </li>
        <li>
            <a href="<?php 
                $category_id3 = get_cat_ID('AFRICA');
                echo get_category_link($category_id3); ?>">
                    <?php
                    $category_name = 'AFRICA';
                    $category = get_term_by('name', $category_name, 'category');
                        $category_id = $category->term_id;
                        $category_count = $category->count;
                        echo "{$category_name} 記事数 {$category_count}";
                    ?>                          
                <img src="<?php echo get_template_directory_uri(); ?>/images/000070.png" alt="">
            </a>
        </li>
        <li>
            <a href="<?php 
                $category_id3 = get_cat_ID('EUROPE');
                echo get_category_link($category_id3); ?>">
                    <?php
                    $category_name = 'EUROPE';
                    $category = get_term_by('name', $category_name, 'category');
                        $category_id = $category->term_id;
                        $category_count = $category->count;
                        echo "{$category_name} 記事数 {$category_count}";
                    ?>                          
                <img src="<?php echo get_template_directory_uri(); ?>/images/000074.png" alt="">
            </a>
        </li>
    </ul>
</nav>
</div>

        
        <footer>
            <!-- コピーライト -->
            <div class="box6">
                <div class="copyright-inner">
                    <div class="copyright"> 
                    <p>copyright @ 旅ブログ </p>
                    </div>
                </div> 
            </div>
        </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>