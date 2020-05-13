@foreach ($menus as $menu)
  @if ( $menu->children->count() )
    <li>
      <a href="{{ $menu->url }}">{{ $menu->name }}</a>
    <ul class="sub-menu">
      @include('components.top_menu', ['menus' => $menu->children])
    </ul>
  @else 
      <li><a href="{{ $menu->url }}">{{ $menu->name }}</a></li>
  @endif  
    </li>
@endforeach