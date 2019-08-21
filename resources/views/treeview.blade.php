<ol>
	@foreach ($animes as $anime)
			<li>
				{{ $anime->name }}
				@if (count($anime->descendants))
						@include('treeview', ['animes' => $anime->descendants])
				@endif
			</li>
	@endforeach
</ol>