@extends('main')
@section('content')
	<div class="card panel-container p-3 p-lg-4">
		<article class="article-item" itemscope itemtype="http://schema.org/Article">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#" class="text-dark hover-primary">Посты</a></li>
					<li class="breadcrumb-item"><a href="#" class="text-dark hover-primary">Быстрые решения</a></li>
				</ol>
			</nav>
			<h1 class="article-item_title"><a href="/article.php" itemprop="url"><span itemprop="name">Почему неоднозначен фактор коммуникации?</span></a></h3>
			<div class="article-item_body" itemprop="articleBody">
				<p>Рейтинг довольно неоднозначен. PR многопланово нейтрализует формат события. Стоит отметить, что повышение жизненных стандартов нейтрализует продуктовый ассортимент.</p>
				<p>Потребительская культура синхронизирует медиамикс. Наряду с этим, медиапланирование экономит диктат потребителя. Формирование имиджа подсознательно отталкивает социометрический product placement.</p>
				<pre><code>
					const num1 = 5;
					const num2 = 3;

					// add two numbers
					const sum = num1 + num2;

					// display the sum
					console.log('The sum of ' + num1 + ' and ' + num2 + ' is: ' + sum);
				</code></pre>
			</div>
			<div class="article-item_tags">
				<i class="fa fa-tags icon-grayed"></i> <a href="" class="text-muted hover-primary">сломалось</a> <a href="" class="text-muted hover-primary">не торт</a> <a href="" class="text-muted hover-primary">починилось</a> <a href="" class="text-muted hover-primary">ненадолго</a>
			</div>
			<div class="article-item_meta">
				<div class="row align-items-center spaced-row meta-row">
					<div class="col col-auto">
						<div class="row align-items-center">
							<div class="col-auto pe-0 d-none d-md-block"><a href="/user.php"><img src="/theme/data/32x32.png" alt="" class="rounded-circle article-item_userpic"></a></div>
							<div class="col"><a href="/user.php" class="article-item_userlink text-dark hover-primary"><span itemprop="author">liberpro</span></a></div>
						</div>
					</div>
					<div class="col col-auto">
						<time class="article-item_date" datetime="05-31-1984 15:22" itemprop="datePublished" content="2009-05-08">31.05.1984<span class="d-none d-md-inline">, 15:22</span></time>
					</div>
					<div class="col col-auto">
						<span class="export-entry_comments"><i class="fas fa-comment-alt export-entry_icon"></i> <a href="/article.php#comments">2</a></span>
					</div>
					<div class="col col-auto color-gray2">
						<a href="javascript:;" class="text-muted"><i class="fas fa-star export-entry_icon"></i></a> 7</span>
					</div>
					<div class="col col-auto article-item_views d-none d-md-block">
						<i class="fas fa-eye export-entry_icon"></i> 2000
					</div>
					<div class="col col-auto ms-auto" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
						<button class="badge bg-danger fz1" title="Уменьшить">&minus;</button>
						<div class="badge bg-light fz1 text-dark" title="Оценка" itemprop="ratingValue">0</div>
						{{-- and other values 
						<div class="badge bg-success fz1" title="Оценка" itemprop="ratingValue">1</div>
						<div class="badge bg-danger fz1" title="Оценка" itemprop="ratingValue">&minus;1</div>
						--}}
						<button class="badge bg-success fz1" title="Увеличить">&plus;</button>
					</div>
				</div>
			</div>
		</article>
		<div id="comments" class="mt-4 mt-lg-5">
			<h4 class="mb-3 mb-md-4">Комментарии (782)</h4>
			<div class="comments-list">
				@for($i=0;$i<10;$i++)
					@include('content.comment',['i'=>$i])
				@endfor
			</div>
		</div>
		<div class="mt-3">
			<a data-bs-toggle="collapse" href="#reply" role="button" aria-expanded="false" title="Написать развернутый и внятный комментарий, направленный на решение вопроса" class="fs-5 ajax-link">Оставить комментарий</a>
			<div class="comment-reply pt-3 collapse hide" id="reply">
				<form action="">
					<textarea name="" id="" rows="5" class="form-control comment-reply_field mb-2" name="reply"></textarea>
					<button type="submit" class="btn btn-primary btn-sm">Отправить</button>
				</form>
			</div>
		</div>
	</div>
@endsection