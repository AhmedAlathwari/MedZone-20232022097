<div class="slider-area">

    <div
        style="
        display:flex;
        gap:30px;
        flex-wrap:wrap;
        justify-content:center;
        margin-top:20px;
        ">

        @foreach($sliderdata as $rs)

        <div
            style="
            width:350px;
            text-align:center;
            border:1px solid #ddd;
            padding:15px;
            border-radius:12px;
            ">

            @if($rs->images->first())

            <img
                src="{{ Storage::url($rs->images->first()->image) }}"
                style="
                width:100%;
                height:220px;
                object-fit:cover;
                border-radius:10px;
                "
                alt="{{ $rs->title }}">

            @else

            <div
                style="
                width:100%;
                height:220px;
                background:#f5f5f5;
                border-radius:10px;

                display:flex;
                align-items:center;
                justify-content:center;

                font-size:22px;
                font-weight:bold;
                color:#777;
                ">

                No Image

            </div>

            @endif

            <h2>

                {{ $rs->title }}

            </h2>

            <a
    href="{{ route('product',['id'=>$rs->id]) }}"
    class="btn btn-primary">

    Shop Now

</a>

        </div>

        @endforeach

    </div>

</div>