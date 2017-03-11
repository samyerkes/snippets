<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="{{ route('home.index') }}" class="nav-item is-hidden-mobile">Home</a>
        </div>

		<span class="nav-toggle">
			<span></span>
			<span></span>
			<span></span>
		</span>

        <div class="nav-right nav-menu">
            <a href="{{ route('snippets.create') }}" class="nav-item">New Snippet</a>
            <a href="{{ route('output.index') }}" class="nav-item">Latest</a>
        </div>
    </div>
</nav>
