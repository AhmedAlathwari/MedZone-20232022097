<header class="site-header">

    <div class="container header-content">

        <a href="/home" class="site-logo">
            <span class="logo-icon">+</span>
            <span>MedZone</span>
        </a>

        <div class="header-search">
            <input type="text" placeholder="Search for medicines...">
        </div>

        <nav class="site-nav">

            <a href="/home">Home</a>

            <a href="/home#products">Products</a>

            @auth

            <a href="/userpanel">My Panel</a>

            <a class="cart-link" href="{{ route('userpanel.shopcart') }}">
                🛒 Cart
                <span>
                    {{ \App\Models\ShopCart::where('user_id', Auth::id())->count() }}
                </span>
            </a>

            <a href="/logoutuser">Logout</a>

            @else

            <a href="{{ route('login') }}">Login/Register</a>

            <a class="cart-link" href="{{ route('userpanel.shopcart') }}">
                🛒 Cart
                <span>0</span>
            </a>

            @endauth

        </nav>

    </div>

</header>