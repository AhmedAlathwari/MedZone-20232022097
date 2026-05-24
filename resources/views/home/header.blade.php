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
