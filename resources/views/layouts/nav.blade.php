<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="{{ route('home.index') }}" class="nav-item is-hidden-mobile">Home</a>
        </div>

		<span class="nav-toggle" :class="{ 'is-active': nav }" @click="toggleNavigation">
			<span></span>
			<span></span>
			<span></span>
		</span>

        <div class="nav-right nav-menu" :class="{ 'is-active': nav }">
            @if (Auth::guest())
                <a href="{{ route('login') }}" class="nav-item">Login</a>
                <a href="{{ route('register') }}" class="nav-item">Register</a>
            @else
                <a href="{{ route('home.index') }}" class="nav-item is-hidden-tablet">Home</a>
                <a href="{{ route('snippets.create') }}" class="nav-item">New Snippet</a>
                <a href="{{ route('output.index') }}" class="nav-item">Latest</a>
                <a href="{{ route('logout') }}" class="nav-item">Logout</a>
            @endif
        </div>
    </div>
</nav>
