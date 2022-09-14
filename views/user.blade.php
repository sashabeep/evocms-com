@extends('app')
@section('main')
<div class="page-container py-4 py-lg-5 flex-grow-1">
	<div class="container">
		<div class="row cell-row">
			<main class="col-12 col-lg-9 order-2">
				<div class="card-stack">
					<div class="card panel-container p-3 p-lg-4">
						<div class="row align-items-center mb-3">
							<div class="col-auto">
								<img src="/theme/data/64x64.png" alt="liberpro87" class="rounded-circle">
							</div>
							<div class="col px-0"><h1 class="h2 mb-0">liberpro87</h1></div>
							<div class="col-auto h4">
								<div class="badge bg-success">146</div>
							</div>
						</div>
						@section('usernav')
							<nav>
								<a href="/user.php" class="btn @if(!$_GET['comments']) btn-primary @else btn-link @endif btn-sm">Записи (10)</a>
								<a href="/user.php?comments=1" class="btn @if($_GET['comments']) btn-primary @else btn-link @endif btn-sm">Комментарии (365)</a>
							</nav>
						@show
					</div>
					<div class="card panel-container p-3 p-lg-4">
						@section('usercontent')
							@isset($_GET['comments'])
								<div class="user-comments">
									@for($i=0;$i<8;$i++)
										@include('content.usercomment-item',['i'=>$i])
									@endfor
								</div>
							@else
								<div class="user-articles">
									<div class="article-list" itemscope itemtype="http://schema.org/ItemList">
										@for($i=0;$i<4;$i++)
											@include('content.article-item',['i'=>$i,'hideuser'=>'1'])
										@endfor
									</div>
								</div>
							@endisset
							@include('content.pagination',['classes'=>'pagination-sm mt-4 mt-lg-5'])
						@show
					</div>
				</div>
			</main>
			<aside class="col-12 col-lg-3 order-1">
				<div class="card panel-container">
					<div class="card-body">
						<h4>Алексей Либер</h4>
						<p><img src="/theme/data/400x400.png" alt="liberpro87" class="w-100"></p>
						<h5>О Себе</h5>
						<div class="user-aboutself">Алкоголик, раздолбай, рок-н-рольщик. Предпочитаю evolutionCMS, но троху знаю и Revo.</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>
@endsection

