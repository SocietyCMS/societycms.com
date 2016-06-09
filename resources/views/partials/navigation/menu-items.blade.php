<a class="item @if(Request::route()->getName() == 'home') active @endif" href="{{route('home')}}">Home</a>
<a class="item @if(Request::route()->getName() == 'demo') active @endif" href="{{route('demo')}}">Demo</a>
<a class="item @if(Request::is('docs*')) active @endif" href="{{route('docs')}}">Documentation</a>
<a class="item @if(Request::route()->getName() == 'modules') active @endif" href="{{route('modules')}}">Modules</a>


