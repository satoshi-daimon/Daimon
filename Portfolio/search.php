<?php get_header(); ?>
        <div class="boxA">
            <!-- 記事 -->
            <div class="box3">
                <article class="kiji">
                    <?php 
                     
                    if(have_posts()):
                        while (have_posts()): the_post();
                        $post_id = get_the_ID(); // 表示したい投稿のIDを指定
                        // 投稿の情報を取得
                        $post_image = get_the_post_thumbnail_url( $post_id, 'thumbnail' ); // サムネイル画像のURLを取得

                        ?>
                        <div class="category">
                            <ul>
                            <li><?php echo get_post_categories_list(); ?></li>
                            </ul>
                        </div>
                        <h1>
                            <a href="<?php echo get_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        
                    <div class="kijisam">
                    <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>">
                    </div>


                    <?php 
                    endwhile; endif; 
                    ?>
                </article>
                <div class="pagination">
                     <?php
                        echo paginate_links( array(
                            'prev_text' => '&laquo; 前へ',
                            'next_text' => '次へ &raquo;',
                            'type' => 'list'
                        ) );
                        ?>
                </div>

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

<?php get_footer(); ?>