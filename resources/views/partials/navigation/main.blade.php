<!-- Top Menu -->
<div class="ui large main hidden menu">
    <div class="ui container">

        <a class="toc item">
            <i class="sidebar icon"></i>
        </a>

        <a href="/" class="item brand">
            <img src="/images/SocietyCMS-slant.svg" height="50" alt="SocietyCMS logo">
            <div class="title">SocietyCMS</div>
        </a>


        <div class="right menu">

            @include('partials.navigation.menu-items')

            <div class="item">
                @if (Request::is('docs*') && isset($currentVersion))
                    @include('partials.navigation.switcher')
                @endif
            </div>
        </div>

    </div>
</div>
