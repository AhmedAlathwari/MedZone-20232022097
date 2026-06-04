@php
$mainCategories = \App\Http\Controllers\HomeController::mainCategoryList();
@endphp

<div class="category-bar">

    <div class="container">

        <span class="category-title">
            Categories:
        </span>

        <div class="category-links">

            @foreach($mainCategories as $rs)

            <a href="{{ route('categoryproducts', ['id' => $rs->id, 'slug' => $rs->title]) }}">
                {{ $rs->title }}
            </a>

            @foreach($rs->children as $child)

            <a href="{{ route('categoryproducts', ['id' => $child->id, 'slug' => $child->title]) }}">
                {{ $child->title }}
            </a>

            @endforeach

            @endforeach

        </div>

    </div>

</div>