<section class="hero is-primary is-bold column is-3 is-fullheight">
	<div class="column">
  	<div class="hero-body">
  	<div class="container">
    	<a href="{{ route('home.index') }}"><h1 class="title">Snippets</h1></a>
    	<h2 class="subtitle">Quick Copy and Pasta</h2>

    	<aside class="menu">
	        <ul class="menu-list">
	            @if (Auth::guest())
				    <li><a href="{{ route('login') }}" class="nav-item">Login</a></li>
				    <li><a href="{{ route('register') }}" class="nav-item">Register</a></li>
				@else
				    <li><a href="{{ route('home.index') }}" class="nav-item is-hidden-tablet">Home</a></li>
				    <li><a href="{{ route('snippets.create') }}" class="nav-item">New Snippet</a></li>
				    <li><a href="{{ route('output.index') }}" class="nav-item">Latest</a></li>
				    <li><a href="{{ route('profile.index') }}" class="nav-item">Profile</a></li>
				    <li><a href="{{ route('logout') }}" class="nav-item">Logout</a></li>
				@endif
	        </ul>
	    </aside>

    </div>
  </div>
  </div>
</section>