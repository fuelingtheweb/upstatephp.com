<ul class="nav nav-sidebar">
    @foreach($sidebarMenu as $item)
    <li class="{{ $item['active'] ? 'active' : '' }}">
        <a href="{{ $item['link'] }}">{{ $item['text'] }}</a>
    </li>
    @endforeach
</ul>