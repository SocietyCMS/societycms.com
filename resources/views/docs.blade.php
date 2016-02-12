@extends('layout.main')

@section('mobile-menu')
	<div class="docs-nav item">
		<h3>Documentation</h3>
		{!! $index !!}
	</div>
@endsection

@section('content')

	<div class="ui container">

		<div class="ui docs grid">
			<div class="row">
				<div class="four wide tablet computer only column">

					<div class="docs-nav ui segment">
						{!! $index !!}
					</div>
				</div>
				<div class="sixteen wide mobile twelve wide tablet twelve wide computer column ">
					<article>
						{!! $content !!}
					</article>
				</div>
			</div>
		</div>


	</div>

@endsection
