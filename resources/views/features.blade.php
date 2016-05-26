@extends('layout.main')

@section('body-class', 'features')

@section('content')

    <div class="ui vertical stripe relaxed center aligned secondary statement segment">

        <h1 class="ui header">
            It doesn't have to be complicated!
            <div class="sub header">We believe everyone should be able to update a website.</div>
        </h1>
        <div class="browser-window">
            <div class="top-bar">
                <div class="circles">
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
            </div>
            <div class="window-content">
                <img class="ui fluid image" src="/images/screenshots/blog.jpg">
            </div>
        </div>

    </div>

    <div class="ui vertical stripe segment">

        <div class="ui grid">
            <div class="row">
                <div class="six wide column">
                </div>
                <div class="four wide column middle aligned right aligned">
                    <div class="ui container">
                        <h1 class="ui header">
                            Dashboard
                            <div class="sub header">A personalised Dashboard welcomes you with the newest activities right after the login.</div>
                        </h1>
                    </div>
                </div>
                <div class="six wide column">
                    <img class="ui medium circular raised bordered image" src="/images/screenshots/activity.jpg">
                </div>
            </div>
            <div class="row">
                <div class="six wide column">
                    <img class="ui medium circular raised bordered image right floated" src="/images/screenshots/activity.jpg">
                </div>
                <div class="four wide column middle aligned ">
                    <div class="ui container">
                        <h1 class="ui header">
                            Flexible User Management
                            <div class="sub header">SocietyCMS comes with a flexible and easy to use User Management System out of the Box. You can assign Users a Role and give different permissions to each role.</div>
                        </h1>
                    </div>
                </div>
                <div class="six wide column">
                </div>
            </div>
        </div>

    </div>


    <div class="ui vertical stripe center aligned segment">

        <div class="ui three column doubling stackable grid container">
            <div class="center aligned column feature">
                <a href="/images/features/usermanagement.png" data-lightbox="usermanagement" data-title="Flexible User Management">
                    <img class="ui big rounded centered bordered image" src="/images/features/usermanagement-thumb.png">
                </a>
                <h3 class="ui header">Flexible User Management</h3>
                <p class="content">SocietyCMS comes with a flexible and easy to use User Management System out of the Box. You can assign Users a Role and give different permissions to each role.</p>
            </div>
            <div class="center aligned column feature">
                <a href="/images/features/modules.png" data-lightbox="modules" data-title="Easy Module Management">
                    <img class="ui big rounded centered bordered image" src="/images/features/modules-thumb.png">
                </a>
                <h3 class="ui header">Easy Module Management</h3>
                <p class="content">Modules can easily be turned on and off with a simple switch. You can also see all the information about a module like version, author and even the changelog.</p>
            </div>
            <div class="center aligned column feature">
                <a href="/images/features/menu.png" data-lightbox="menu" data-title="Customizable Menus">
                    <img class="ui big rounded centered bordered image" src="/images/features/menu-thumb.png">
                </a>
                <h3 class="ui header">Customizable Menus</h3>
                <p class="content">Manage multiple menus, re-order items by drag & drop, and display them anywhere. But you don't have to, menu entries get added automatically for each page or module.</p>
            </div>
        </div>
    </div>

        <div class="ui vertical emphasis inverted stripe center aligned segment">
            <h1>Developer Features</h1>


            <div class="ui two column doubling stackable relaxed grid container">
                <div class="center aligned column feature">
                    <h2 class="ui feature header">
                        <i class="block layout icon"></i>
                        Modular
                    </h2>
                    <p class="content">SocietyCMS is built completely modular and consists of multiple loosely coupled modules.
                        There is a defined set of core-modules you can depend and build upon.</p>

                </div>
                <div class="center aligned column feature">
                    <h2 class="ui feature header">
                        <i class="paint brush icon"></i>
                        Themes
                    </h2>
                    <p class="content">The Theming System is powered by the Stylist package
                        which provides an easy way to create a custom theme.
                        Create a new theme or just change one or two things by extending
                        an existing theme using inheritance.</p>

                </div>
                <div class="center aligned column feature">
                    <h2 class="ui feature header">
                        <i class="custom-icons laravel icon"></i>
                        Laravel Framework
                    </h2>
                    <p class="content">SocietyCMS is built on top of the awesome <a href="https://laravel.com/" target="_blank">Laravel Framework</a>
                        and leverages Composer to pull in dozens of great community packages,
                        all of which you can also use in your module.</p>

                </div>
                <div class="center aligned column feature">
                    <h2 class="ui feature header">
                        <i class="github icon"></i>
                        Open Source
                    </h2>
                    <p class="content">SocietyCMS is completely open sourced and all code is available on <a href="https://github.com/societycms" target="_blank">GitHub</a>.
                        Feel free to contribute!</br>
                        SocietyCMS is licensed under the <a href="https://opensource.org/licenses/MIT" target="_blank">MIT license</a>.</p>

                </div>
            </div>

        </div>

        <div class="ui vertical stripe center aligned segment">

            <h1>Want to know all the hidden features? Have a look at the Docs..</h1>

            <a class="ui massive primary gutter button" href="{{route('docs')}}"><i class="book icon"></i> Documentation</a>

        </div>


@endsection
