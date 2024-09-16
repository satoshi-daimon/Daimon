<?php if( comments_open() ){ ?>
	<div id="comments">
		<p>コメント</p>
		<?php if( have_comments() ){ ?>
		<ol id="comments-list">
			<?php wp_list_comments(); ?>
		</ol>
		<?php } ?>
		<?php comment_form(); ?>
	</div>
<?php } ?>

<!-- comments_open()はその記事のコメント機能の有効･無効を判断するための関数 -->

<!-- wp_list_comments()
コメント一つずつをliタグで囲んで出力するが、
olやulは出力してくれない欠陥関数なので自分でolで囲んでやる必要があり -->

<!-- comment_form()はコメント入力のためのフォームを表示する関数 -->

<!-- have_comments()はその記事にすでにコメントが投稿されているか確認するための関数 -->