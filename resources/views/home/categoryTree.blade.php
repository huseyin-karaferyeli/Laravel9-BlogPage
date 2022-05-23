@foreach($children as $category)

        @if(count($category -> children))
            <li>
                <a href="{{route('category', ['id' => $category -> id, 'slug' => $category -> title])}}">
                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($category, $category -> title)}}
                </a>
            </li>

            @include('home.categoryTree', ['children' => $category -> children])

        @else
             <li>
                 <a href="{{route('category', ['id' => $category -> id, 'slug' => $category -> title])}}">
                     {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($category, $category -> title)}}
                 </a>
             </li>
        @endif

@endforeach
