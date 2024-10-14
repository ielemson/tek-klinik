<div class="breadcumb-wrapper " data-bg-src="{{ asset("assets/img/breadcumb/breadcumb-bg.jpg") }}">
	<div class="container z-index-common">
		<div class="breadcumb-content">
			<h1 class="breadcumb-title">{{ $title ?? "" }}</h1>
			<div class="breadcumb-menu-wrap">
				<ul class="breadcumb-menu">
					<li><a href="{{ url("/") }}">Home</a></li>
					<li>{{ $title ?? "" }}</li>
				</ul>
			</div>
		</div>
	</div>
</div>