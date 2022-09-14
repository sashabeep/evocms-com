<article class="article-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/Article">
	<p class="article-item_category mb-2"><i class="fas fa-book text-primary"></i> <a href="" class="text-dark hover-primary">Быстрые решения</a></p>
	<h3 class="article-item_title"><a href="/article.php" itemprop="url"><span itemprop="name">Почему неоднозначен фактор коммуникации?</span></a></h3>
	<div class="article-item_summary" itemprop="description">
		<p>Рейтинг довольно неоднозначен. PR многопланово нейтрализует формат события. Стоит отметить, что повышение жизненных стандартов нейтрализует продуктовый ассортимент.</p>
		<p>Потребительская культура синхронизирует медиамикс. Наряду с этим, медиапланирование экономит диктат потребителя. Формирование имиджа подсознательно отталкивает социометрический product placement.</p>
	</div>
	<div class="article-item_tags">
		<i class="fa fa-tags icon-grayed"></i> <a href="" class="text-muted hover-primary">сломалось</a> <a href="" class="text-muted hover-primary">не торт</a> <a href="" class="text-muted hover-primary">починилось</a> <a href="" class="text-muted hover-primary">ненадолго</a>
	</div>
	<div class="article-item_meta">
		<div class="row align-items-center spaced-row meta-row">
			@if(!isset($hideuser))
				<div class="col col-auto">
					<div class="row align-items-center">
						<div class="col-auto pe-0 d-none d-md-block"><a href=""><img src="/theme/data/32x32.png" alt="" class="rounded-circle article-item_userpic"></a></div>
						<div class="col"><a href="/user.php" class="article-item_userlink text-dark hover-primary"><span itemprop="author">liberpro</span></a></div>
					</div>
				</div>
			@endif
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
				@if($i==0)
					<div class="badge bg-light fz1 text-dark" title="Оценка" itemprop="ratingValue">{{ $i }}</div>
				@else
					@if($i%2==0)
						<div class="badge bg-success fz1" title="Оценка" itemprop="ratingValue">{{ $i }}</div>
					@else
						<div class="badge bg-danger fz1" title="Оценка" itemprop="ratingValue">&minus;{{ $i }}</div>
					@endif
				@endif
			</div>
		</div>
	</div>
</article>