<div class="hero-section">

    <div class="container hero-content">

        <div class="hero-title">

            <span class="hero-badge">
                Trusted Healthcare Partner
            </span>

            <h1>
                Your Health,
                <span>Our Priority</span>
            </h1>

            <p>
                Order genuine medicines online with fast,
                secure and reliable delivery.
            </p>

            <div class="hero-buttons">

                <a
                    class="hero-btn hero-btn-primary"
                    href="#products">

                    Shop Medicines

                </a>

                <a
                    class="hero-btn hero-btn-secondary"
                    href="{{ route('categoryproducts',
                    [
                    'id'=>1,
                    'slug'=>'medicine'
                    ]) }}">

                    Browse Categories

                </a>

            </div>

        </div>

        <div class="hero-image">

            <img
                src="{{ asset('assets/img/hero.png') }}"
                alt="Doctor">

        </div>

    </div>

</div>