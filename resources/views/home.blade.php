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
                    <a href="/images/mockups/large-3d5a9534ad4d4797aa3eeba6b5f8083c_2_3000.jpg" data-lightbox="gallery-1">
                        <img class="ui rounded fluid image"
                             src="/images/mockups/small-3d5a9534ad4d4797aa3eeba6b5f8083c_2_3000.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="ui vertical stripe relaxed segment">

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

    <div class="ui vertical stripe relaxed segment">
        <div class="ui text container">
            <h3 class="ui header">Great for Developers</h3>
            <p>
                SocietyCMS is built on Laravel, the best existing PHP framework.
                The framework includes all of the tools and classes that are necessary for building quality websites and applications.
            </p>
            <div class="ui divider">
            </div>
            <h3 class="ui header">Easy for Webdesigners</h3>
            <p>
                The frontend es completely customizable. You can design your website how ever you want.
            </p>
        </div>
    </div>



@endsection
