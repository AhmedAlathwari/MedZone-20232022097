@php

$mainCategories =
\App\Http\Controllers\HomeController
::mainCategoryList();

@endphp

<div>

<p>

Categories

</p>

<div class="category-menu-list">

<ul>

@foreach($mainCategories as $rs)

<li>

<a href="{{ route(
'categoryproducts',
[
'id'=>$rs->id,
'slug'=>$rs->title
]
) }}">

{{ $rs->title }}

</a>

@if($rs->children->count() > 0)

@include(
'home.categorytree',
[
'children' => $rs->children
]
)

@endif

</li>

@endforeach

</ul>

</div>

</div>

<hr>