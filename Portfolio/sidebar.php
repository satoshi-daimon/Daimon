<!-- サイドメニュー -->
    <!-- 検索バー -->
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text">検索:</span>
        <input type="search" class="search-field" placeholder="検索..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit">検索</button>
</form>

<!-- 広告表示 -->
<aside class="sideadvert">
    <ul>
        <li>
        <a><?php echo show_advertisement_sidebar_00() ?></a>                
        </li>
        <li>
        <a><?php echo show_advertisement_sidebar_01() ?></a>
        </li>  
        <li>
        <a><?php echo show_advertisement_sidebar_01() ?></a>
        </li>
    </ul>  
</aside>

<aside class="sidemenu">
    <ul>
        <li>
        <a><?php echo show_advertisement_sidebar_02() ?></a>
        </li>
    </ul>  
</aside>