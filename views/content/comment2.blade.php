<div class="comment border p-3">
	<div class="comment-text">
		Лучше, чтобы увеличенная картинка при наведении уходила вверх, а не вниз. Потому что если TV image самый нижний — увеличенная картинка уходит за нижний край монитора, а при дальнейшей прокрутке вниз вся страница начинает дергаться.<br>
		<br>
		Поменял стили в стр.3 на top:-128px, но вместе с картинкой уехала вверх и кнопка Вставить и перестала работать. <br>
		А может и не работала изначально при таком раскладе, когда этот ТВ самый нижний — не успел протестить, а сейчас это все где-то прописалось в кэш и пока не получается вычистить до первичного состояния. <br>
		Если кнопку Вставить вернуть назад стилями — все-равно не работает. <br>
		<br>
		Когда TV image где-то вверху, то все нормально.
	</div>
	<div class="comment-author">
		<div class="row align-items-center spaced-row meta-row">
			<div class="col col-auto">
				<div class="row align-items-center">
					<div class="col-auto pe-0 d-none d-md-block"><a href="/user.php"><img src="/theme/data/32x32.png" alt="" class="rounded-circle article-item_userpic"></a></div>
					<div class="col"><a href="/user.php" class="article-item_userlink text-dark hover-primary">liberpro</a></div>
				</div>
			</div>
			<div class="col col-auto">
				<time class="article-item_date" datetime="05-31-1984 15:22" >31.05.1984<span class="d-none d-md-inline">, 15:22</span></time>
			</div>
			<div class="col col-auto color-gray2">
				<a href="javascript:;" class="text-muted"><i class="fas fa-star export-entry_icon"></i></a> 7</span>
			</div>
			<div class="col col-auto">
				<a class="ajax-link" data-bs-toggle="collapse" href="#reply2{{ $i }}" role="button" aria-expanded="false" title="Написать развернутый и внятный комментарий, направленный на решение вопроса">Ответить</a>
			</div>
			<div class="col col-auto ms-auto">
				<button class="badge bg-danger" title="Уменьшить">&minus;</button>
				<div class="badge bg-light text-dark" title="Оценка" itemprop="ratingValue">0</div>
				{{-- and other values 
				<div class="badge bg-success" title="Оценка" itemprop="ratingValue">1</div>
				<div class="badge bg-danger" title="Оценка" itemprop="ratingValue">&minus;1</div>
				--}}
				<button class="badge bg-success" title="Увеличить">&plus;</button>
			</div>
		</div>
	</div>
	<div class="comment-reply pt-3 collapse hide" id="reply2{{ $i }}">
		<form action="">
			<textarea name="" id="" rows="5" class="form-control comment-reply_field mb-2" name="reply"></textarea>
			<button type="submit" class="btn btn-primary btn-sm">Отправить</button>
		</form>
	</div>
	<div class="comment-answers" id="comment-answers2{{ $i }}">
		@include('content.comment3')
	</div>
</div>