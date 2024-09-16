<?php get_header(); ?>
        <div class="boxA">
            <!-- 記事 -->
            <div class="box3"> 
                <article class="kiji">
                        <?php 
                            if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                        ?>
                            <div class="category">
                                    <ul>
                                    <li><?php echo get_post_categories_list(); ?></li>
                                    </ul>
                            </div>

                        <a href="<?php echo get_permalink(); ?>">
                            <!-- 記事のパーマリンク(URL)を出力する関数。whileループ内で使用します。 -->
                            <h1><?php the_title(); ?></h1>
                            <!-- 記事タイトルを出力する関数。whileループ内で使用します。 -->
                        </a>
                        
                            <section>
                                <p>作成日時：<?php the_time('Y-n-j'); ?></p>
                                <!-- 日付を出力する関数。whileループ内で使用します。 -->
                                <?php the_content(); ?>
                               <!-- 記事の本文を出力する関数 -->
                            </section>
                        <?php 
                            endwhile;
                            endif;
                        ?>
                </article>
            </div>


                <div id="posts">
                        <h1>記事一覧</h1>
                    <hr>
                        <?php 

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5 // 5件の投稿を取得
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post();


                            $post_id = get_the_ID(); // 表示したい投稿のIDを指定
                            
                            $post_image = get_the_post_thumbnail_url( $post_id, 'thumbnail' ); // サムネイル画像のURLを取得
                        ?>
                        <ul>
                            <li>
                                <a href="<?php echo get_permalink(); ?>">                                
                                    <img src="<?php echo esc_url( $post_image ); ?>" width="120" height="100">
                                    <span class="title"><?php the_title(); ?></span>
                                </a>
                            </li>    
                        </ul>
                    <hr>
                        <?php 
                        endwhile;
                        endif;
                        wp_reset_postdata(); // メインのクエリをリセット
                        ?>		
                </div>

            <div class="box4">
                <?php get_sidebar(); ?>    
            </div>
        </div>
        
        <?php
            comments_template();// コメント機能呼び出し
        ?>

<?php get_footer(); ?>