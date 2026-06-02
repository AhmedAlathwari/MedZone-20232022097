<header>

    <h2>MedZone Pharmacy Header</h2>

    @auth

    <p>

        Welcome

        {{ Auth::user()->name }}

        |

        <a href="/logoutuser">

            Logout

        </a>

        |

        <a href="{{ route('userpanel.shopcart') }}">

            Cart

            (

            {{ \App\Models\ShopCart::where('user_id', Auth::id())->count() }}

            )

        </a>

    </p>

    @else

    <p>

        <a href="{{ route('login') }}">

            Login

        </a>

        |

        <a href="{{ route('register') }}">

            Join

        </a>

    </p>

    @endauth

    <hr>

</header>