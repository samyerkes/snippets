@if ($breadcrumbs)
	<nav class="breadcrumb is-small is-right" aria-label="breadcrumbs">
	  <ul>
	  	@foreach ($breadcrumbs as $breadcrumb)
	  		@if (!$breadcrumb->last)
	    		<li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
	    	@else
	    		<li class="is-active"><a href="#" aria-current="page">{{ $breadcrumb->title }}</a></li>
	    	@endif
	    @endforeach
	  </ul>
	</nav>
@endif