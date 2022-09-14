<div class="user-comment">
	<div class="user-comment_header mb-1">
		<h6 class="mb-0"><a href="/" class="text-dark hover-primary">Вопросы</a> &rarr; <a href="/article.php">phpthumb под Битрикс неправильно генерирует путь картинки</a></h6>
	</div>
	<div class="user-comment_content">
		Не совсем понял при чем тут Битрикс))) А в целом: не проще ли через css делать черно-белую картинку, а при наведении давать цветность?<br>
		<pre><code>
		img {
			-webkit-filter: grayscale(100%);
			-moz-filter: grayscale(100%);
			-ms-filter: grayscale(100%);
			-o-filter: grayscale(100%);
			filter: grayscale(100%);
			filter: gray; /* IE 6-9 */
			transition:.3s all;
		}
		img:hover {
			-webkit-filter: grayscale(0%);
			-moz-filter: grayscale(0%);
			-ms-filter: grayscale(0%);
			-o-filter: grayscale(0%);
			filter: grayscale(0%);
			filter: none; /* IE 6-9 */
		}
		</code></pre>
	</div>
	<div class="user-comment_meta">
		<div class="row align-items-center spaced-row meta-row">
			<div class="col col-auto">
				<time class="article-item_date" datetime="05-31-1984 15:22" >31.05.1984<span class="d-none d-md-inline">, 15:22</span></time>
			</div>
			<div class="col col-auto color-gray2">
				<a href="javascript:;" class="text-muted"><i class="fas fa-star export-entry_icon"></i></a> 7</span>
			</div>
			<div class="col col-auto ms-auto">
				<div class="badge bg-success">8</div>
			</div>
		</div>
	</div>
</div>