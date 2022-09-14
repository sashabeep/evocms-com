@extends('app')
@section('main')
<div class="page-container py-4 py-lg-5 flex-grow-1">
	<div class="container">
		<div class="row cell-row">
			<main class="col-12 col-lg-9 order-lg-2">
				@section('content')
				<div class="card-stack">
					<div class="card panel-container p-3 p-lg-4">
						<h1>Записи сообщества Evolution CMS (CE)</h1>
						<nav>
							<a href="" class="btn btn-primary btn-sm">Свежие</a>
							<a href="" class="btn btn-link btn-sm">Oбсуждаемые</a>
							<a href="" class="btn btn-link btn-sm">TOP</a>
						</nav>
					</div>
					<div class="card panel-container p-3 p-lg-4">
						<div class="article-list" itemscope itemtype="http://schema.org/ItemList">
							@for($i=0;$i<8;$i++)
								@include('content.article-item',['i'=>$i])
							@endfor
						</div>
					</div>
					<div class="card panel-container p-3 p-lg-4">
						@include('content.pagination')
					</div>
					{{-- <div class="card panel-container p-3 p-lg-4">
						<h2>What makes Evolution CMS so unique?</h2>
						<p>The manager is very fast, faster than many other CMS. After you have logged in to the
							manager, you can edit a page from the resource tree (pages) with just <b>1 click</b>.
							Because the resource tree is always visible on the left of the manager you can edit your
							pages on the fly. The use of the manager is easy and understandable for everyone. With
							many CMS you have different locations to edit content, on Evolution CMS its all located
							on one page. This is quite unique and also very useful.</p>
						<p>It is up to you to determine which customizable content fields will appear on the page.
							You can easily add, move and organize fields in tabs.</p>
						<pre><code>
							const num1 = 5;
							const num2 = 3;

							// add two numbers
							const sum = num1 + num2;

							// display the sum
							console.log('The sum of ' + num1 + ' and ' + num2 + ' is: ' + sum);
						</code></pre>
					</div> --}}
				</div>
				@show
			</main>
			<aside class="col-12 col-lg-3 order-lg-1">
				@section('aside')
					@include('layout.aside-main')
				@show
			</aside>
		</div>
	</div>
</div>
@endsection