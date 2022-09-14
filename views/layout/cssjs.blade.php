
<link rel="stylesheet" href="/theme/css/bootstrap.css">
<link rel="stylesheet" href="/theme/css/app.css">
<link rel="stylesheet" href="/theme/css/responsive.css">
<link rel="stylesheet" href="/theme/css/hljs.css">

{{-- external --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

<style>
	html{
		opacity: 1;
		transition: opacity 0.3s
	}
</style>
<script src="/theme/js/popper.min.js"></script>
<script src="/theme/js/bootstrap.min.js"></script>
<script src="/theme/js/highlight.min.js"></script>
<script>
	document.addEventListener('DOMContentLoaded', (event) => {
		document.querySelectorAll('pre code').forEach((el) => {
			hljs.highlightElement(el);
		});
	});
</script>
