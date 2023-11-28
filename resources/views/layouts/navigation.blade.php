@if (auth()->user()->role === 'ahliGizi' || auth()->user()->role === 'admin')
@include('components.header')
@elseif (auth()->user()->role === 'irt')
@include('components.headerirt')
@endif