@foreach($categories_for_menu as $category_for_menu)
    <a class="dropdown-item" href="{{route('categories.single', ['slug'=>$category_for_menu->slug])}}">{{$category_for_menu->title}}</a>
@endforeach
