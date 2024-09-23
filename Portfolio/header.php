<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅ブログ</title>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

    <body bgcolor="#696969">
    <header>
        <div class="box1">
            <div class="site">
                <h1><a href="<?php echo home_url();?>" style="text-decoration:none;">旅ブログ</a></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_0432.JPG" alt="" width="1000" height="500">
            </div>
        </div>
        <!-- ナビゲーション -->
        <div class="box2">
            <div class="box2-inner">
                <nav class="menu">
                    <ul>
                        <li><a href="">よ う こ そ</a></li>
                        <li><a href="">メール</a></li>   
                        <li>
                            <a href="https://x.com/">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="X" width="40" height="30" alt="Xロゴ">
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>               
        </div>
    </header>
