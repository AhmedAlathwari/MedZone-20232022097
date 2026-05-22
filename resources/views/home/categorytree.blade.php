<ul class="category-sub-menu">

    @foreach($children as $child)

    <li>

        <a href="{{ route(
        'categoryproducts',
        [
        'id'=>$child->id,
        'slug'=>$child->title
        ]
        ) }}">

            {{ $child->title }}

        </a>

        @if($child->children->count() > 0)

        @include(
            'home.categorytree',
            [
                'children' => $child->children
            ]
        )

        @endif

    </li>

    @endforeach

</ul>