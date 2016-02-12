<div class="ui compact switcher menu">
	<div class="ui simple dropdown item">
		{{ ucfirst($currentVersion) }}
		<i class="dropdown icon"></i>
		<div class="menu">
			@foreach ($versions as $key => $display)
				<a class="item" href="{{ url('docs/'.$key.$currentSection) }}">{{ $display }}</a>
			@endforeach
		</div>
	</div>
</div>
