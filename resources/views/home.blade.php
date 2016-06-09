@extends('layout.main')

@section('body-class', 'home')

@section('content')

    <div class="ui inverted vertical masthead center aligned segment" id="banner">

        <div class="background-image"></div>

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>

                <a href="/" class="item brand">
                    <img src="/images/SocietyCMS-slant.svg" height="50" alt="SocietyCMS logo">
                    SocietyCMS
                </a>

                <div class="right menu">
                    @include('partials.navigation.menu-items')
                </div>
            </div>
        </div>

        <div class="ui text container">
            <h1 class="ui inverted header">
                SocietyCMS
            </h1>
            <h2>The only CMS designed for you and your community.</h2>

            <a class="ui huge blue basic gutter button" href="{{route('demo')}}">Demo</a>
            <a class="ui huge primary gutter button" href="{{route('docs')}}"><i class="book icon"></i>
                Documentation</a>

        </div>

        <div class="ui container" id="screenshot">
        </div>

    </div>

    <div class="ui vertical stripe relaxed segment">

        <div class="ui three column stackable grid container">
            <div class="center aligned column">
                <h2 class="ui icon header">
                    <i class="cubes icon"></i>
                    <div class="content">
                        Modular Architecture
                        <div class="sub header">
                            Install and enable only what you need. </br>
                            Every aspect ist customizable.
                        </div>
                    </div>
                </h2>
            </div>
            <div class="center aligned column">
                <h2 class="ui icon header">
                    <i class="smile icon"></i>
                    <div class="content">
                        User Friendly UI
                        <div class="sub header">
                            A clean and easy to use User Interface </br>
                            that everyone understands.
                        </div>
                    </div>
                </h2>
            </div>
            <div class="center aligned column">
                <h2 class="ui icon header">
                    <i class="lightning icon"></i>
                    <div class="content">
                        Modern and Fast
                        <div class="sub header">
                            Built on top of the awesome Laravel Framework, </br>
                            SocietyCMS can use all of the latest and grates Technologies  </br>
                            in modern PHP development.
                        </div>
                    </div>
                </h2>
            </div>
        </div>
    </div>


    <div class="ui vertical stripe relaxed segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Many CMS often work a certain way:</h3>
                    <p>Most content management systems have a complex admin interface with lots of options and
                        possibilities to create and manage all of the content on the website. But for a
                        community-website you need so much more..
                    </p>
                    <h3 class="ui header">This is where SocietyCMS has its strength</h3>
                    <p>Not only do you have everything to manage your website, but it also provides various modules to
                        manage your community, share documents with them or create mailinglists.</p>
                </div>
                <div class="six wide right floated tablet computer only column">
                    <a href="/images/mockups/large-3d5a9534ad4d4797aa3eeba6b5f8083c_2_3000.jpg"
                       data-lightbox="gallery-1">
                        <img class="ui rounded fluid image"
                             src="/images/mockups/small-3d5a9534ad4d4797aa3eeba6b5f8083c_2_3000.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="ui vertical stripe relaxed secondary segment">

        <div class="ui three column stackable grid container">
            <div class="column">
                <a href="/images/mockups/large-ef023ca4e58646b5896655ea759e0b64_6_1920.jpg" data-lightbox="gallery-2">
                    <img class="ui rounded fluid image"
                         src="/images/mockups/small-ef023ca4e58646b5896655ea759e0b64_6_1920.jpg">
                </a>
            </div>
            <div class="column">
                <a href="/images/mockups/large-bb25cf873f2e44ad8498f0270e2bbba1_28_3000.jpg" data-lightbox="gallery-2">
                    <img class="ui rounded fluid image"
                         src="/images/mockups/small-bb25cf873f2e44ad8498f0270e2bbba1_28_3000.jpg">
                </a>
            </div>
            <div class="column">
                <a href="/images/mockups/large-dcb89ed1a3344d989305da342c590274_13_1920.jpg" data-lightbox="gallery-2">
                    <img class="ui rounded fluid image"
                         src="/images/mockups/small-dcb89ed1a3344d989305da342c590274_13_1920.jpg">
                </a>
            </div>
        </div>
    </div>

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


    <div class="ui vertical stripe center aligned segment">

        <div class="ui three column doubling stackable grid container">
            <div class="center aligned column feature">
                <a href="/images/features/usermanagement.png" data-lightbox="usermanagement"
                   data-title="Flexible User Management">
                    <img class="ui big rounded centered bordered image" src="/images/features/usermanagement-thumb.png">
                </a>
                <h3 class="ui header">Flexible User Management</h3>
                <p class="content">SocietyCMS comes with a flexible and easy to use User Management System out of the
                    Box. You can assign Users a Role and give different permissions to each role.</p>
            </div>
            <div class="center aligned column feature">
                <a href="/images/features/modules.png" data-lightbox="modules" data-title="Easy Module Management">
                    <img class="ui big rounded centered bordered image" src="/images/features/modules-thumb.png">
                </a>
                <h3 class="ui header">Easy Module Management</h3>
                <p class="content">Modules can easily be turned on and off with a simple switch. You can also see all
                    the information about a module like version, author and even the changelog.</p>
            </div>
            <div class="center aligned column feature">
                <a href="/images/features/menu.png" data-lightbox="menu" data-title="Customizable Menus">
                    <img class="ui big rounded centered bordered image" src="/images/features/menu-thumb.png">
                </a>
                <h3 class="ui header">Customizable Menus</h3>
                <p class="content">Manage multiple menus, re-order items by drag & drop, and display them anywhere. But
                    you don't have to, menu entries get added automatically for each page or module.</p>
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
                <p class="content">SocietyCMS is built completely modular and consists of multiple loosely coupled
                    modules.
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
                <p class="content">SocietyCMS is built on top of the awesome <a href="https://laravel.com/"
                                                                                target="_blank">Laravel Framework</a>
                    and leverages Composer to pull in dozens of great community packages,
                    all of which you can also use in your module.</p>

            </div>
            <div class="center aligned column feature">
                <h2 class="ui feature header">
                    <i class="github icon"></i>
                    Open Source
                </h2>
                <p class="content">SocietyCMS is completely open sourced and all code is available on
                    <a href="https://github.com/societycms" target="_blank">GitHub</a>.
                    Feel free to contribute!</br>
                    SocietyCMS is licensed under the
                    <a href="https://opensource.org/licenses/MIT" target="_blank">MIT license</a>.
                </p>

            </div>
        </div>
    </div>

    <div class="ui vertical stripe center aligned segment">

        <p><a href="{{route('docsShow', ['version' => 'master', 'page' => 'installation'])}}">Download for free</a> and check out our <a href="{{route('docs')}}">documentation</a> to get started.</p>

        <a class="ui huge primary gutter button" href="{{route('docsShow', ['version' => 'master', 'page' => 'installation'])}}"><i class="download icon"></i> Free Download</a>

    </div>


@endsection
