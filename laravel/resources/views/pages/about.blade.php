@extends ('app')

@section('content')

	<h1>About Tiago</h1>

	@if (count($foods))
	
		<h3>Favorite Food</h3>
		
		<ul>

			@foreach ($foods as $food)

				<li>{{ $food }}</li>
			
			@endforeach
		
		</ul>

	@endif

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus unde iure velit vitae vel? Vel ullam, nemo sed nulla! Hic incidunt consectetur sapiente ipsam recusandae quia saepe repellat doloremque alias!</p>

@stop