<div class="card-stack">
	@section('aside-stack')
		<div class="card panel-container">
			<div class="card-header">
				<div class="row align-items-center">
					<div class="col">
						<h5 class="mb-0 l1">Последние</h5>
					</div>
					<div class="col-auto">
						<div class="d-flex flex-row flex-nowrap align-items-center h-100 last-toggle">
							<a data-bs-toggle="collapse" aria-expanded="true" href="#lastEntries" title="Записи"><i class="fas fa-file-alt"></i></a>
							<span>|</span>
							<a data-bs-toggle="collapse" href="#lastComments" title="Комментарии"><i class="fas fa-comments"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div id="lastParent">
					<div id="lastEntries" class="collapse show" data-bs-parent="#lastParent">
						<h6>Последние записи</h6>
						<ul class="list-unstyled list-export mb-0" itemscope itemtype="http://schema.org/ItemList">
							@for($i=0;$i<8;$i++)
								@include('content.sidebar-article')
							@endfor
						</ul>
					</div>
					<div id="lastComments" class="collapse hide" data-bs-parent="#lastParent">
						<h6>Последние комментарии</h6>
						<ul class="list-unstyled list-export mb-0">
							@for($i=0;$i<8;$i++)
								@include('content.sidebar-comment')
							@endfor
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="card panel-container">
			<div class="card-header">
				<h5 class="mb-0 l1">Разделы</h5>
			</div>
			<div class="card-body">
				<ul class="mb-0 list-unstyled">
					<li><a href="">Tips & Tricks</a></li>
					<li><a href="">Готовые дополнения</a></li>
					<li><a href="">Объявления о работе</a></li>
					<li><a href="">Быстрые решения</a></li>
				</ul>
			</div>
		</div>
		
		<div class="card panel-container">
			<div class="card-header">
				<h5 class="mb-0 l1">Скачать</h5>
			</div>
			<div class="card-body">
				<ul class="mb-0 list-unstyled">
					<li><i class="fab fa-github"></i> <a href="">Evolution CE 1.4.x</a></li>
					<li><i class="fab fa-github"></i> <a href="">Evolution CE 3.1.x</a></li>
				</ul>
			</div>
		</div>

		<div class="card panel-container">
			<div class="card-header">
				<h5 class="mb-0 l1">Тэги</h5>
			</div>
			<div class="card-body">
				<ul class="mb-0 list-unstyled list-tags text-center">
					<li><a href="">Evolution CE 1.4.x</a></li>
					<li><a href="">Evolution CE 3.1.x</a></li>
					<li><a href="">сломалось</a></li>
					<li><a href="">не торт</a></li>
					<li><a href="">починилось</a></li>
					<li><a href="">забанен в гугле</a></li>
				</ul>
			</div>
		</div>

		<div class="card panel-container">
			<div class="card-header">
				<h5 class="mb-0 l1"><i class="fab fa-telegram-plane icon-grayed me-2"></i>Чат в Telegram</h5>
			</div>
			<div class="card-body">
				<a href="https://t.me/evo_cms">https://t.me/evo_cms</a>
			</div>
		</div>
	@show
</div>